<div class="col-md-6  title_page_left">
	<ul class="breadcrumb">
		<li>
			@if($segments->isEmpty())
				Home
			@else
				<a href="{{route('getHome')}}">Home</a>
			@endif
		</li>
		@foreach($segments as $key=>$url)
			<li>
				@if($loop->last)
					{{str_limit($__env->yieldContent('title'),50)}}
				@else
					<a href="{{url($url)}}">{{ucfirst(str_replace('-',' ',$key))}}</a>
				@endif
			</li>
		@endforeach
	</ul>
</div>