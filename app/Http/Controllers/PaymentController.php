<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaymentController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        $payment = config('services.paypal');
        $this->_api_context = new ApiContext(
            new OAuthTokenCredential(
                $payment['client_id'],
                $payment['secret']));
                $this->_api_context->setConfig($payment['settings']);
    }
    public function payment()
    {
        return view('backend.admin.dashboard.layouts.payments.payment');
    }
    public function paywithPayment()
    {
        return view('backend.admin.dashboard.layouts.payments.payment');
    }
    public function postPaywithPayment()
    {
        return view('backend.admin.dashboard.layouts.payments.payment');
    }
    public function getPaywithStatus()
    {
        return view('backend.admin.dashboard.layouts.payments.payment');
    }



    public function checkout()
    {
        return view('checkout');
    }
    public function createCharge(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge= Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "cad",
                "source" => $request->stripeToken,
                "description" => "Get Sample Code - Stripe Test  Card Payment"
        ]);
        $payment=new Payment;
        $payment->charge_id=$charge->id;
        $payment->transaction_id=$charge->balance_transaction;
        $payment->amount=number_format(($charge->amount)/100,2);
        $payment->card_id=$charge->source->id;
        $payment->card_last_four=$charge->source->last4;
        $payment->card_exp_month=$charge->source->exp_month;
        $payment->card_exp_year=$charge->source->exp_year;
        $payment->postal_code=$charge->source->address_zip;

        $payment->save();

        return redirect('stripe')->with('success', 'Card Payment Successful!');
    }
    
}
