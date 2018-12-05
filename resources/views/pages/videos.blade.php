@extends('layout')
@section('title','Videos')
@section('content')
<div class="page">
			<section class="title_page">
				<div class="container">
					<h1><span>Breaking science news and articles on longevity, the medicine of the future, anti-aging and biotech researches, breakthrough technologies from DAYS Rating of longevity and P4 medicine technologies</span></h1>
				</div>
			</section>
			<div class="container">
				@include('partials.breadcrumbs')
				@include('partials.news.search')
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-9 container_video">
						<div class="list_news video_list row">
							@foreach($videos as $video)
							<div class="col-md-6" data-item="videos">
								<div class="card">
									<a data-fancybox href="{{$video->link}}" class="video_thumb_block">
										<span class="mark_play_button">
											<i class="fa fa-play"></i>
										</span>
										<img class="card-img-top img-fluid" src="https://img.youtube.com/vi/{{str_limit(str_after($video->link,'watch?v='),11,'')}}/hqdefault.jpg"/>
									</a>
								</div>
								<h4 title="{{$video->title}}">{{str_limit($video->title,60)}}</h4>
								
								<p class="description_video_title">{{str_limit($video->text,310)}}</p>
							</div>
							@endforeach

							<div class="clearfix"></div>
							<div aria-label="Page navigation example">
								{{$videos->links()}}
							</div>
						</div>
						
						
					</div>
					<div class="col-md-3">
						@include('partials.news.news-side')
					</div>
					
				</div>
				
				
			</div>
		</div>
@endsection