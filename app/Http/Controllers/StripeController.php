<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout(Request $request)
    {
        $productId = $request->input('product_id');    
        $product = Product::find($productId);

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency'  => 'mxn',
                        'product_data' => [
                            'name' => $product->nombre, // Nombre del producto
                        ],
                        'unit_amount'  => $product->precio * 100, // Convertir a centavos si la moneda es pesos
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return redirect()->route('product.index')->with('success', '¡El pago se realizó con éxito!');
    }

    public function cancel()
    {
        return redirect()->route('product.index');
    }
}

