@extends('admin.admin_master')

@section('admin')
    @include('common.message')
    <section class="content">
			<div class="row">
				
				@include('admin.body.top_totals')
				@include('admin.body.earning_summary')
				
				<div class="col-xl-6 col-12">
					@include('admin.body.best_employee')

					<div class="row">						
						@include('admin.body.total_users')
						@include('admin.body.average_reach')
					</div>
				</div>
				@include('admin.body.last_posts')
				@include('admin.body.recent_stats')
				@include('admin.body.new_arrivals')
			</div>
	</section>

@endsection