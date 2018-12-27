@extends('layout')
@section('title','Knowledge')
@section('style')
<style>
.nav-xbootstrap li:nth-child(3) a {
	background: #02243a;
	color: #2ecaf7;
	border-bottom: 3px solid #2ecaf7;
}
</style>
@endsection
@section('content')
<div class="page">
	<section class="title_page search_title">
		<div class="container">
			<div class="col-md-3 partener_logo_head wow fadeInUp">
				<!-- <img src="img/part1.png" alt="" class=" " > -->
			</div>
			<div class="col-md-6">
				<div class="container_search_know">	
					<h1><span>Search by tiping name or technology</span></h1>

					

					


					<form method="GET" action="{{route('getKnowledge')}}"  style="margin:auto; display: inline-flex;">
						<div class="selectWrapper">	
						<select name="branch">
							<option value="0" @if(!request()->branch) selected @endif >All branches</option>
							@foreach($branches as $branch)
								<option @if(request()->branch==$branch->id) selected @endif value="{{$branch->id}}">{{$branch->name}}</option>
							@endforeach
						</select>
						</div>
						<input type="text" placeholder="Search.." name="search" @if(request()->search) value="{{request()->search}}" @endif >
						<button type="submit"><i class="fa fa-search"></i></button>
					</form> 
				</div>
			</div>
			<div class="col-md-3 partener_logo_head wow fadeInUp">
				<img src="img/part2.png" alt="" class="" >
			</div>
		</div>

	</section>
<div class="container">
	@include('partials.breadcrumbs')
	<div class="col-md-6  search_page_right">


	</div>
	<div class="clearfix"></div>

	<div class="works_personal">
		<h2>Works <span>({{$wrkCount}})</span></h2>
		<div class="line_title_left"></div>
		@if($wrkCount)
		<table class="table table_work">
			<thead>
				<tr class="top_list_display top_list_display_work">
					<th scope="col">Name Work</th>
					<th scope="col">Domain</th>
					<th scope="col" class="mob_off">Description work</th>
					<th scope="col">Source</th>
				</tr>
			</thead>
			<tbody class="results_search_work">
				@foreach($works as $work)
				<tr>
					<th scope="row">
						{{$work->title}}
						<span class="name_autor_work">
							<img src="{{Voyager::image($work->scientist->thumbnail('square','image'))}}" alt="" class="small_pic">
							@if($work->scientist->trashed())
								<span>{{$work->scientist->getFullName()}}</span>
							@else
								<a href="{{route('scientistProfile',['scientist'=>$work->scientist->id])}}">{{$work->scientist->getFullName()}}</a>
							@endif
						</span>
					</th>

					<td class="domain_works_list"><a href="knowledge.php?Cell+biology">{{$work->branch->name}}</a></td>
					<td class="mob_off description_work">
						<p>{{$work->text}}</p>
					</td>

					<td class="vote_list">
						<a href="{{$work->link}}" class="" target="blank">
							<span>view project</span> <i class="fa fa-external-link"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if($wrkCount>5)<div class="button_center_more_def"><a href="{{route('getPartKnowledge',['type'=>'works','branch'=>request()->branch,'search'=>request()->search])}}" class="btn btn-secondary">More Works</a></div>@endif
		@else
			<div class="no_results">No Works found.</div>
		@endif
	</div>

					<div class="video_list">
					<div class="video_list_100">
						<h2>Video <span>({{$viCount}})</span></h2>
						<div class="line_title_left"></div>
						<div class="row">
							@foreach($videos as $video)
							<div class="col-md-3">
								<div class="card">
									<a data-fancybox href="{{$video->link}}" class="video_thumb_block">
										<span class="mark_play_button">
											<i class="fa fa-play"></i>
										</span>
										<img class="card-img-top img-fluid" src="https://img.youtube.com/vi/{{str_limit(str_after($video->link,'watch?v='),11,'')}}/hqdefault.jpg"/>
									</a>
								</div>
								<h4>{{$video->title}}</h4>
								<h5><a href="#">{{$video->branch->name}}</a></h5>
								<p class="description_video_title">{{$video->text}}</p>
							</div>
							@endforeach
						</div>
						@if($viCount>4)<div class="button_center_more_def"><a href="{{route('getPartKnowledge',['type'=>'videos','branch'=>request()->branch,'search'=>request()->search])}}" class="btn btn-secondary">More Videos</a></div>@endif
						@if(!$viCount)<div class="no_results">No Videos found.</div>@endif
					</div>
				</div>

	<div class="list_page_scientists">
		<div class=" table_scientists">
			<h2>Scientists <span>({{$scCount}})</span></h2>
			<div class="line_title_left"></div>
			@if($scCount)
				<table class="table">
					<thead>
						<tr class="top_list_display top_list_display_scientist">
							<th scope="col">Name</th>

							<th scope="col">Rating</th>
							<th scope="col" class="mob_off">Voted startups</th>
							<th scope="col" class="mob_off">Country</th>
							<th scope="col" class="mob_off">Works</th>
						</tr>
					</thead>
					<tbody class="results_search_scientist">
						@foreach($scientists as $sc)
						<tr>
							<th scope="row">
								<span>{{$loop->iteration}}</span>
								<img src="{{Voyager::image($sc->thumbnail('square','image'))}}" alt="">
								<span>
									<div class="name_specialy_blok">
										<a href="{{route('scientistProfile',['scientist'=>$sc->id])}}">{{$sc->getFullName()}}</a> <br>
										<span><a href="knowledge.php?Genomics">{{$sc->branch->name}}</a></span>
									</div>
								</span>
							</th>

							<td>@if($searched){{$sc->users->count()}}@else{{$sc->users_count}}@endif</td>
							<td class="mob_off">@if($searched){{$sc->startups->count()}}@else{{$sc->startups_count}}@endif</td>
							<td class="mob_off">{{$sc->country->code}}</td>
							<td class="mob_off">@if($searched){{$sc->works->count()}}@else{{$sc->works_count}}@endif</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@if($scCount>5)
					<div class="button_center_more_def"><a href="{{route('getPartKnowledge',['type'=>'scientists','branch'=>request()->branch,'search'=>request()->search])}}" class="btn btn-secondary">More Scientists</a></div>
				@endif
			@else
				<div class="no_results">No Scietists found.</div>
			@endif
		</div>
	</div>
				<div class="list_page_startups">
					<div class=" table_scientists">
						<h2>Startups <span>({{$supCount}})</span></h2>
						<div class="line_title_left"></div>
						@if($supCount)
						<ul class="list_startups">
							@foreach($startups as $sup)
							<li class="" data-wow-duration="1s">
								<div class="ratingposition_home_startup">
									<p>{{$loop->iteration}}</p>
									<a href="{{$sup->cb_link}}" target="blank">
										<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
										</svg>
									</a>
								</div>
								<div class="name_home_startup_center">
									<p class="name_home_startup">{{$sup->title}}
										<a href="{{route('getStartup',['stup'=>$sup->id])}}" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i>
										</a>
									</p>
									<p class="domeniu_home_startup"><a href="knowledge.php?AI">{{$sup->branch->name}}</a></p>
								</div>
								<div class="rating_home_startup">
									<i class="fa fa-star"></i>
									<p class="name_date">Rating</p>
									<p class="number_date">@if($searched){{$sup->scientists->count()}}@else{{$sup->scientists_count}}@endif</p>
								</div>
								<div class="clearfix"></div>
							</li>
							@endforeach
						</ul>
						@if($supCount>5)<div class="button_center_more_def"><a href="{{route('getPartKnowledge',['type'=>'startups','branch'=>request()->branch,'search'=>request()->search])}}" class="btn btn-secondary">More Startups</a></div>@endif
						@else
							<div class="no_results">No Startups found.</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		@endsection
