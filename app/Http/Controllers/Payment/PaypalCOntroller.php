<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Support\Facades\Redirect;

class PaypalController extends Controller
{
    public function payment(Request $request)
    {
        // $provider = new PayPalClient;
        // $provider->setApiCredentials(config('paypal'));
        // $paypalToken = $provider->getAccessToken();
        // $response = $provider->createOrder([
        //     "intent" => "CAPTURE",
        //     "application_context" => [
        //         "return_url" => route('success.payment'),
        //         "cancel_url" => route('cancel.payment'),
        //     ],
        //     "purchase_units" => [
        //         0 => [
        //             "amount" => [
        //                 "currency_code" => "USD",
        //                 "value" => "100.00"
        //             ]
        //         ]
        //     ]
        // ]);
        // if (isset($response['id']) && $response['id'] != null) {
        //     foreach ($response['links'] as $links) {
        //         if ($links['rel'] == 'approve') {
        //             return redirect()->away($links['href']);
        //         }
        //     }
        //     return redirect()
        //         ->route('cancel.payment')
        //         ->with('error', 'Something went wrong.');
        // } else {
        //     return redirect()
        //         ->route('create.payment')
        //         ->with('error', $response['message'] ?? 'Something went wrong.');
        // }
        $data = [];
        $data['items'] = [
            [
                'name' => 'ItSolutionStuff.com',
                'price' => 100,
                'desc'  => 'Description for ItSolutionStuff.com',
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 100;
  
        $provider = new ExpressCheckout;
  
        $response = $provider->setExpressCheckout($data);
  
        $response = $provider->setExpressCheckout($data, true);
  dd($response);
        return Redirect::to($response['paypal_link']);

  
        // return redirect($response['paypal_link']);
    }
   
    public function cancel()
    {
        dd('Your payment is canceled. You can create a cancel page here.');
    }
  
    public function success(Request $request)
    {
        $provider = new ExpressCheckout; // Instantiate the provider
  
        $response = $provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successful. You can create a success page here.');
        }
  
        dd('Something is wrong.');
    }
}
