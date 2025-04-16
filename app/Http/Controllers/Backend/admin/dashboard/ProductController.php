<?php

namespace App\Http\Controllers\Backend\admin\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function products()
    {
        $products = Product::orderBy('date', 'desc')->get();
    
        return view('backend.admin.dashboard.products.products', compact('products'));
    }

    public function create()
    {
        return view('backend.admin.dashboard.products.addproduct');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'date' => 'required|date',
            'status' => 'required|boolean',
        ]);
        

        $image = $request->file('image');
        $imagePath = $image->store('products', 'public');
        $product = new product([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
            'date' => $request->date,
            'status' => $request->status,
        ]);

        $product = new Product([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
            'date' => $request->date,
            'status' => $request->status,
            'Action' => 'Pending', 
        ]);
        
        
        $product->save();
        return redirect()->route('products')->with('success', 'Product added successfully.');
    }


    public function status(string $id)
    {

        $product = Product::findOrFail($id);
        $product->status = !$product->status;
        $product->save();
        return back();
    }

    public function destroy($id)
{
    $product = Product::findOrFail($id);
    
    if ($product->image && file_exists(public_path($product->image))) {
        unlink(public_path($product->image));
    }

    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully!');
}

public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('backend.admin.dashboard.products.editproduct', compact('product'));
}
public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->name = $request->name;
    $product->price = $request->price;
    $product->image = $request->image;
    $product->date = $request->date;
    $product->status = $request->status;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/products'), $filename);
        $product->image = 'uploads/products/' . $filename;
    }

    $product->save();

    return redirect()->route('products')->with('success', 'Product updated successfully!');
}



}
