<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'sku' => 'A123123',
                'name' => 'Product A',
                'price' => 15000
            ],
            [
                'id' => 2,
                'sku' => 'A321312',
                'name' => 'Product B',
                'price' => 25000
            ]
            ];

            return view('products.index', ['products' => $products]);
    }
    
    public function create()
    {
        echo 'form create';
    }
    
    public function store(Request $request)
    {
        echo 'create product';
    }
    
    public function show($id)
    {
        echo 'show product';
    }
    
    public function edit($id)
    {
        echo 'form edit';
    }
    
    public function update(Request $request, $id)
    {
        echo 'update product';
    }
    
    public function destroy($id)
    {
        echo 'delete product';
    }
}
