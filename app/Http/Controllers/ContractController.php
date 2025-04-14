<?php

namespace App\Http\Controllers;

use App\Models\contractModel;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contact = contractModel::all();
        return view('frontend.layouts.contact', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = new contractModel();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success', 'Form submitted successfully!');
    }
 
}
