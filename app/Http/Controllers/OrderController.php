<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class OrderController extends Controller
{
    public function manage_order()
    {
    	$all_order_info=DB::table('tbl_order')
    	->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
    	->select('tbl_order.*','tbl_customer.customer_name')
    	->get();
    	
    	$manage_order=view('admin.manage_order')
    		->with('all_order_info',$all_order_info);
    	return view('admin_layout')
    		->with('admin.manage_order',$manage_order);
    }
    public function view_order($order_id)
    {
    	// return view('admin.view_order');
    	$order_by_id=DB::table('tbl_order')
    	->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
    	->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
    	->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
    	->select('tbl_order.*','tbl_order_details.*','tbl_shipping.*','tbl_customer.*')
    	->get();
    	
    	$view_order=view('admin.view_order')
    		->with('order_by_id',$order_by_id);
    	return view('admin_layout')
    		->with('admin.view_order',$view_order);
    	// echo "<pre>";
    	// 	print_r($order_by_id);
    	// echo "</pre>";
    }
     public function delete_order($order_id)
    {
        DB::table('tbl_order')
            ->where("order_id",$order_id)
            ->delete();
        Session::put('message','Order deleted successfully!');
        return Redirect::to('/manage-order');
    }
}
