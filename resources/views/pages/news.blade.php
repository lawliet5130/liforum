@extends('layout')
@section('title','News')
@section('content')
<div class="page">
	<section class="title_page title_page_news">
		<div class="container">
			<h1><span>Breaking science news and articles on longevity, the medicine of the future, anti-aging and biotech researches, breakthrough technologies from DAYS Rating of longevity and P4 medicine technologies</span></h1>
		</div>
	</section>
	<div class="container">
		@include('partials.breadcrumbs')
		@include('partials.news.search')
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-9">
				<div class="list_news row">
					@if(request()->tag)<h3 class="center" style="padding: 40px;">Articles with tag: "{{request()->tag}}"</h3>@endif
					@if(request()->toSearch)<h3 class="center" style="padding: 40px">Results for: "{{request()->toSearch}}"</h3>@endif

					@foreach($articles as $article)
					<div class="single_new_block col-md-12  padding-0" data-wow-delay="0s">
						<div class="single_new_block_inter">
							<div class="col-md-6">	
								<div class="img_new_block">
									<img src="/storage/{{$article->image}}" onerror="this.src = 'img/noimage.png';">
									@if($article->promoted)
									<div class="badge_promote badge badge-pill badge-warning">
										 <i class="fa fa-thumb-tack" ></i>
										 <span>Promoted</span>
									</div> @endif

									<div class="date_new">
										<p class="moon_new">{{$article->created_at->format('M')}}</p>
										<p class="number_new">{{$article->created_at->format('d')}}</p>
									</div>
								</div>
							</div>

							<div class="col-md-6">	
								<h2><a href="{{route('getArticle',['post'=>$article->id])}}">
								
								{{str_limit($article->title,40)}}</a></h2>
								<p>{{str_limit(strip_tags($article->text),120)}}
								</p>
								<div class="sub_new_block">
									<div class="user_name_new">
										<i class="fa fa-user"></i>
										<p><a href="#">Posted By Admin</a></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					@if($loop->iteration%2==0) <div class="clearfix"></div> @endif
					@endforeach
					<div class="clearfix"></div>
					<div aria-label="Page navigation example">
						@if(request()->tag)
							@if ($elements)
								@php
									$cPage=(request()->page)?request()->page:1;
								@endphp
								<ul class="pagination">
									@if ($cPage>1)
										<li><a href="{{route('getNews',['tag'=>request()->tag,'page'=>$cPage-1])}}" rel="prev">&laquo;</a></li>
									@else
										<li class="disabled"><span>&laquo;</span></li>
									@endif

									@foreach ($elements as $element)
										@if (is_string($element))
											<li class="disabled"><span>{{ $element }}</span></li>
										@endif

										@if (is_array($element))
											@foreach ($element as $page)
												@if ($page == $cPage)
													<li class="active"><span>{{ $page }}</span></li>
												@else
													<li><a href="{{route('getNews',['tag'=>request()->tag,'page'=>$page])}}">{{ $page }}</a></li>
												@endif
											@endforeach
										@endif
									@endforeach

									@if ($cPage < $lastPage)
										<li><a href="{{route('getNews',['tag'=>request()->tag,'page'=>$cPage+1])}}" rel="next">&raquo;</a></li>
									@else
										<li class="disabled"><span>&raquo;</span></li>
									@endif
								</ul>
							@endif
						@else
							{{$articles->appends(['toSearch'=>request()->toSearch])->links()}}
						@endif
					</div>
				</div>


			</div>
			<div class="col-md-3">
				@include('partials.news.news-side')
				@include('partials.news.tags')
			</div>
		</div>

	</div>


</div>
</div>
@endsection