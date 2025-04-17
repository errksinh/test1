<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    //
    public function index()
    {
        $product=product::all();
        return view('products.index',['products'=>$product]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        //dd($request->name);
        $data=$request->validate([
                'name'=>'required',
                'qty'=>'required|numeric',
                'price'=>'required|decimal:0,2',
                'desc'=>'nullable'
        ]);
        $newproduct=product::create($data);
        return redirect(route('products.index'));
    }
    public function edit(product $product)
    {
        return view('products.edit',['product'=>$product]);
    }
    public function update(product $product,Request $request)
    {
        $data1=$request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'desc'=>'nullable'
    ]);
    $product->update($data1);
    return redirect(route('products.index'))->with('sucess','product updated') ;
    }
    public function destroy(product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('sucess','product deleted') ;
    }

}
