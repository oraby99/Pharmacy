<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
  public function index()
  {
      $products = Product::select('id' ,'name' ,'img' ,'cat','price' ,'count')
      ->orderBy('id','DESC')
      ->paginate(4);
      return view('products/index',
      [
        'products'=>$products
      ]);
 
  }
  public function show( $product )
  {
      $product = Product::findOrFail($product);
      return view('products/show', 
      [
           'product'=> $product
      ]);
  }
  public function create()
  {
    return view('products/create');
  }
  public function store(Request $request)
  {
    $data = $request->validate([
      'name'  => 'required | string',
      'cat'   => 'required | string',
      'price' => 'required | numeric',
      'count' => 'required | numeric',
      'img'  => 'required | image '
    ]);
    $imgname = Storage::putFile("public/products",$data['img']);
    
    $file = $request->file('img');
    $extension = $file->getClientOriginalExtension(); // you can also use file name
    $fileName = time().'.'.$extension;
    $path = public_path().'/images/products/';
    $uplaod = $file->move($path,$fileName);


    $data['img'] = $fileName;
    Product::create($data);
    return redirect(url('/products'));
  }
  public function edit($productid)
  {
    $product = Product::findOrFail($productid);
    return view('products/edit', 
    [
         'product'=> $product
    ]);
  }
  public function update(Product $product, Request $request)
  {


    $data = $request->validate([
        'name'  => 'required | string',
        'cat'   => 'required | string',
        'price' => 'required | numeric',
        'count' => 'required | numeric',
        // 'id' => 'required'

    ]);
  
    // $product = Product::find($data['id']);
    $product->update($data);
    return redirect(url('/products'));
  }
  public function destroy(Product $product)
  {
     
          Sale::where('product_id' ,'=' ,$product->id )->delete();
          $product->delete();
          return redirect(url('/products'));
      
      
  }

  public function search(Request $request)
  {
  $keyword = $request->keyword;
  $products = Product::where('name', 'like' , "%$keyword%")->get(); 
  return view('products/search',[
        'products'=>$products,
        'keyword'=>$keyword
        ]);
  }




}
