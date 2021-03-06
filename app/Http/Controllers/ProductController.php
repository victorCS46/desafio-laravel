<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\User;

class ProductController extends Controller
{
    public function getInvoiceTotalPrice($id)
    {
        $product = Invoice::find($id)
            ->product()
            ->sum('price');

        return $product;
    }

    public function getInvoiceGreater()
    {
        $invoice = Invoice::whereHas('product', function($query){
            $query->where('quantity', '>', 100);
        })->get('id');

        return $invoice;
    }

    public function getNameUpTo()
    {
        $product = Product::where('price', '>', 1000000)
            ->get('name');

        return $product;
    }
}
