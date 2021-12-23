@extends('seller.seller_master')

@section('seller')
    @include('common.message')
    <section class="content">
			<div class="row">
				@include('seller.body.top_totals')
				@include('seller.body.earning_summary')

				<div class="col-xl-6 col-12">
					@include('seller.body.best_employee')

					<div class="row">
						@include('seller.body.total_users')						
						@include('seller.body.average_reach')						
					</div>
				</div>
				
				@include('seller.body.last_posts')
				@include('seller.body.recent_stats')
				@include('seller.body.new_arrivals')
			</div>
	</section>

@endsection