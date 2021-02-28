@extends('layout')
@section('content')


<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="http://127.0.0.1:8000/books">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info" style="overflow-x:auto;">
				<?php
					$contents=Cart::content();


				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
                            <td>Action</td>
                            <td class="edit">Edit</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($contents as $v_contents) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_contents->options->image)}}" height="80px" width="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4 style="padding: 10px; margin-top: -10px;"><a href="">{{$v_contents->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p style="margin-top: 10px;">{{$v_contents->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{url('/update-cart')}}" method="post">
										{{ csrf_field()}}
										<input class="cart_quantity_input" type="number" name="qty" value="{{$v_contents->qty}}" autocomplete="on" size="1" style="width: 45px; text-align: center; margin-right: 5px;">
										<input type="hidden" name="rowId" value="{{$v_contents->rowId}}" >

	                              <input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contents->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
							</td>

                            <td class="cart_edit">
                            		<a class="cart_quantity_button" href="{{URL::to('/add-product-details-to-cart/'.$v_contents->rowId)}}">Add Details</a>
                            		<!-- <input type="hidden" name="rowId" value="{{$v_contents->rowId}}" > -->
							</td>
<!-- 							
							<td>	
								<li class="media my-4">
                                        <img class="col-md-6 mb-2" src="" alt="">
                                        <div class="media-body">
                                        	
                                            <a target="_blank" href=" {{URL::to('add-product-details/'.$v_contents->rowId)}}">
                                                <h5 class="mt-0 mb-1 font-weight-bold">
                                                 Enter Product Details 
                                                </h5>
                                            </a>
                                             
                                        </div>
                                    </li> 
							</td>

-->



						</tr>
						<?php }?>

						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{Cart::tax()}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::total()}}</span></li>
						</ul>
						 <?php
                                $customer_id=Session::get('customer_id');
                                $shipping_id=Session::get('shipping_id');
                          ?>
						@if($customer_id != NULL && $shipping_id==NULL)
                        <li><a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Check Out</a></li>
                        @elseif($customer_id != NULL && $shipping_id!=NULL)
                         <li><a class="btn btn-default check_out" href="{{URL::to('/payment')}}">Check Out</a></li>
                        @else
                        <li><a class="btn btn-default check_out" href="{{URL::to('/login-check')}}">Check Out</a></li>
                        @endif
							
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection