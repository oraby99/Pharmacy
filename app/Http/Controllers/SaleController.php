<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index()
  {
      if(Auth::user()->email == 'admin@admin.com')
      {
        $sales = Sale::all();
      }
      else
      {
       $sales = Auth::user()->sale;
      }
      $products = Product::all();
      $clients  = Client::all();
      return view('sales/index',
      [
        'sales'=>$sales,
        'products' => $products,
        'clients' => $clients
      ]);
  }
  public function show( $product )
  {
      $sales = Sale::findOrFail($sale);
      return view('sales/show', 
      [
           'sales'=> $sales
      ]);
  }
  public function create()
  {
    $products = Product::select('id' ,'name')->get();
    $clients  = Client::select('id' ,'name')->get();
   
    return view('sales/create')->with([
        'products' => $products,
        'clients'  => $clients
    ]);
  }
  public function store(Request $request)
  {
    $data = $request->validate([
      'product_id'  => 'required | string',
      'client_id'   => 'required | string',
      'price' => 'required | numeric',
      'rest' => 'required | numeric',
      'count' => 'required | numeric',
      'provider'  => 'required | string',
      'insttype'   => 'required | string',
      'instperiod' => 'required | numeric',
      'instprice' => 'required | numeric',
      
    ]);
    $data['user_id'] = Auth::user()->id;
    Sale::create($data);
    $product = Product::find($data['product_id']);
    $product->count = $product->count - $data['count'];
    if($product->count < 0) return;
    $product->save();
    return redirect(url('/sales'));
  }
  public function edit($productid)
  {
    // $product = Sale::findOrFail($productid);
    // return view('products/edit', 
    // [
    //      'product'=> $product
    // ]);
  }
  public function update(Sale $product , Request $request)
  {
    // $data = $request->validate([
    //     'name'  => 'required | string',
    //     'cat'   => 'required | string',
    //     'price' => 'required | numeric',
    //     'count' => 'required | numeric',

    // ]);
    //  $product->update($data);
    // return redirect(url('/products'));
  }
  public function destroy(Sale $product)
  {
    //   Storage::delete($product->img);
    //   $product->delete();
    //   return redirect(url('/products'));
  }
  public function search(Request $request)
  {
  $keyword = $request->keyword;
  $sales = Sale::where('id', 'like' , "%$keyword%")->get(); 
  return view('sales/search',[
        'sales'=>$sales,
        'keyword'=>$keyword
        ]);
  }
}
