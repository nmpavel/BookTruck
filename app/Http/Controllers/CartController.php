<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;
class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	$qty=$request->qty;
    	$product_id=$request->product_id;
    	$product_info=DB::table('tbl_products')
    				->where('product_id',$product_id)
    				->first();

    	$data['qty']=$qty;
    	$data['id']=$product_info->product_id;
    	$data['name']=$product_info->product_name;
    	$data['price']=$product_info->product_price;
    	$data['options']['image']=$product_info->product_image;

    	Cart::add($data);
    	return Redirect::to('/show-cart');    	
    }
    public function show_cart()
    {
    	$all_published_category=DB:: table('tbl_category')
    							->where('publication_status',1)
    							->get();

    	$manage_published_category=view('pages.add_to_cart')
    		->with('all_published_category',$all_published_category);
    	return view('layout')
    		->with('pages.add_to_cart',$manage_published_category);
    }
    public function delete_to_cart($rowId)
    {
    	Cart::update($rowId,0);
    	return Redirect::to('/show-cart');
    }

    public function add_product_details_page(Request $request)
    {
        $all_published_category=DB:: table('tbl_category')
                        ->where('publication_status',1)
                        ->get();
        $rowId=$request->rowId;
        $manage_published_category=view('pages.add_product_details_page')
            ->with('all_published_category',$all_published_category);
        return view('layout')
            ->with('pages.add_product_details_page',$manage_published_category, $rowId);
    }

    public function add_details_cart(Request $request)
    {
        $phone=$request->phone;
        $description=$request->description;
        Cart::update($phone,$description);
        return Redirect::to('/show-cart');
    }

    public function update_cart(Request $request)
    {
        $qty=$request->qty;
        $rowId=$request->rowId;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');

        // echo $qty;
        // echo"<br>";
        // echo $rowId;
    }
}
