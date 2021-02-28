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
		</div>
	</section>

	<form action="{{url('/add-details-cart')}}" method="POST">
	    <div class="form-group">
	      <label for="phone">Phone no:</label>
	      <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
	    </div>
	    <div class="form-group">
	      <label for="email">Description:</label>
	      <textarea rows="10" class="form-control" id="description" placeholder="Enter details" name="description" style="text-align: left;">
	      </textarea>
	    </div>
	    <div class="form-group">
	      
	    </div>
	    <button type="submit"  class="btn btn-default">Submit</button>
	    <h1>  <?php $rowId ?> </h1>
  </form>


@endsection