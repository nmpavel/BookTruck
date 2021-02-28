@extends('layout')
@section('content')

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<p class="alert-success">
						<?php
						$message=Session::get('message');
						if($message)
						{
							echo $message;
							Session::put('message',null);
						}

						?>
											
					</p>
					<div class="login-form" style="padding: 25px; height: 350px; width: 450px; border-radius: 3px; border-style: inset; background-color: #e6c4c4; text-align: center; "><!--login form-->
						<h2 style="line-height: 35px;">Thanks for order.0170000000 rocket
						01700000000 bkash personal 
					please send 25% of total cost to confirm your order and send a sms with tnx id or call our help line number</h2>
						<h2 style="line-height: 35px;">We will contact as soon as possible</h2> 
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	


@endsection