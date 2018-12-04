@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" type="text/css" href="/frontend/styles/cart_styles.css">
	<link rel="stylesheet" type="text/css" href="/frontend/styles/cart_responsive.css">
@endpush

@section('header')
	@include('partials.page_header')
@endsection

@section('content')
	<!-- Cart -->
	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Whislist Page</div>
						<div class="cart_items">
						@if(Cart::instance('wishlist')->isEmpty())
							<h3>Cart is Empty</h3>
						@else
							<ul class="cart_list">
								@foreach($products as $product)
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{$product->getImage()}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{$product->name}}</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Actions</div>
											<div class="cart_item_text">
												<form action="{{route('wishlist.destroy', $product->id)}}" method="POST">
													{{ csrf_field() }}
                                					{{ method_field('DELETE') }}
													<button type="submit" class="cart_item_text">Remove</button>		
												</form>
											</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{$product->price}}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">$0</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						@endif
						</div>			
						<!-- Order Total -->
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection