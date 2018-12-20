@extends('layout')
@section('title','Knowledge')
@section('style')
<style>
.nav-xbootstrap li:nth-child(3) a {
	background: #f8f8f8;
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
				<h1><span>Search by tiping name or technology</span></h1>
			</div>
		</div>
		<div class="col-md-3 partener_logo_head wow fadeInUp">
			<img src="img/part2.png" alt="" class="" >
		</div>
	</section>
<div class="container">
	@include('partials.breadcrumbs')
	<div class="col-md-6  search_page_right">


	</div>
	<div class="clearfix"></div>



	@if($type=='scientists')
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
							<th scope="col">Vote</th>
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

							<td class="voteCounter" data-vcount="{{$sc->users_count}}">@if($searched){{$sc->users->count()}}@else{{$sc->users_count}}@endif</td>
							<td class="mob_off">@if($searched){{$sc->startups->count()}}@else{{$sc->startups_count}}@endif</td>
							<td class="mob_off">{{$sc->country->code}}</td>
							<td class="mob_off">@if($searched){{$sc->works->count()}}@else{{$sc->works_count}}@endif</td>
							<td class="vote_list">
								@if(\Auth::guard('fb')->check())
									@if(\Auth::guard('fb')->user()->scientists->contains('id',$sc->id))
										<span>Voted</span>
									@else
										<span class="scientistVoted" style="display: none;">Voted</span>
										<a class="btn btn-secondary" data-scientist="{{$sc->id}}">
											<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
										</a>
									@endif
								@else
									<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
										<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
									</a>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@if($scCount>5)
					<div class="button_center_more_def"><a href="@if($searched){{route('getPartKnowledge',['item'=>'scientists','branch'=>request()->branch,'search'=>request()->search])}}@else {{route('getScList')}} @endif" class="btn btn-secondary">More Scientists</a></div>
				@endif
			@else
				<div class="no_results">No Scietists found.</div>
			@endif
		</div>
	</div>
	@endif

	@if($type=='works')
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
		@if($wrkCount>5)<div class="button_center_more_def"><a href="" class="btn btn-secondary">More Works</a></div>@endif
		@else
			<div class="no_results">No Works found.</div>
		@endif
	</div>
	@endif

	@if($type=='startups')
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
									<a href="{{route('getStartup',['stup'=>$sup->id])}}" class="view_startup_button" target="blank">
										View startup<i class="fa fa-external-link"></i>
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
				@if($supCount>5)<div class="button_center_more_def"><a href="" class="btn btn-secondary">More Startups</a></div>@endif
			@else
				<div class="no_results">No Startups found.</div>
			@endif
		</div>
	</div>
	@endif
	
	@if($type=='videos')
		<div class="video_list">
			<div class="">
				<h2>Video <span>({{$viCount}})</span></h2>
				<div class="line_title_left"></div>
				<div class="row">
					@foreach($videos as $video)
						<div class="col-md-3" data-item="videos">
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
				@if($viCount>4)<div class="button_center_more_def"><a href="" class="btn btn-secondary">More Videos</a></div>@endif
				@if(!$viCount)<div class="no_results">No Videos found.</div>@endif
			</div>
		</div>
	@endif
	</div>
</div>
		@endsection
		@section('add_scripts')
			<script>
				$('[data-scientist]').click(function(e){
					e.preventDefault();
					$this=$(this);
					parent=$this.parents('tr');
					$scientist=$this.data('scientist');
					$.post("{{route('voteScientist')}}",
					{
						_token:'{{csrf_token()}}',
						scientist:$scientist,
					},function(data,status){
						if(data=='success'){
							parent.find('.voteCounter').text(parent.find('.voteCounter').data('vcount')+1);
							$this.fadeOut();
							parent.find('.scientistVoted').delay(400).fadeIn();
						}else if(data[0]=="fraud"){
							window.location.href=data[1];
						}
					});
				});
			</script>
		@endsection

