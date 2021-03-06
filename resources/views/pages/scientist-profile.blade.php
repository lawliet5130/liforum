@extends('layout')
@section('title',(Auth::guard('scientist')->check() && Auth::guard('scientist')->id()==$user->id)?'My profile':$user->getFullName())
@section('style')
<style>
.nav-xbootstrap li:nth-child(2) a {
	background: #02243a;
	color: #2ecaf7;
	border-bottom: 3px solid #2ecaf7;
}
</style>
@endsection
@section('content')
<div class="page">
	<section class="title_page_default">
		<div class="container">

		</div>
	</section>
	<div class="container">
		@include('partials.breadcrumbs')
		<div class="clearfix"></div>
		<div class="page_personal">
			<div class="col-md-3">
				<img src="{{Voyager::image($user->thumbnail('square','image'))}}" alt="" class="avatar_big">
			</div>
			<div class="col-md-5 date_person_1">
				<p class="name_personal">{{$user->getFullName()}}</p>
				<p class="special_personal"><span><a href="knowledge.php?Genomics">{{$user->branch->name}}</a></span></p>
				<br>
				<div class="date_person_loc">
					<div class="col-md-4">Location</div>
					<div class="col-md-8">{{$user->country->name}}</div>
					<div class="col-md-4">Gender</div>
					<div class="col-md-8">{{$user->gender['name']}}</div>
					<div class="col-md-4">Also Known As</div>
					<div class="col-md-8">{{$user->knownas}}</div>
				</div>
				<div class="clearfix"></div>
				@if(Route::currentRouteName()=="logedProfile")
					<a href="{{route('editProfile')}}" class="btn btn-secondary"><i class="fa fa-edit"></i> Edit profile</a>
					<br>
					<br>
				@endif
				<div class="sharethis-inline-share-buttons"></div>

			</div>
			<div class="col-md-4 links_soc_prof">
				<div class="links_soc_prof_inner">
					@if($user->website)<div class="soc_sing_prof"><i class="fa fa-globe"></i><a href="{{$user->website}}" target="blank">{{$user->website}}<i class="fa fa-external-link"></i></a></div>@endif    
					@if($user->facebook)<div class="soc_sing_prof"><i class="fa fa-facebook"></i><a href="{{$user->facebook}}" target="blank">Facebook <i class="fa fa-external-link"></i></a></div>@endif    
					@if($user->linkedin)<div class="soc_sing_prof"><i class="fa fa-linkedin"></i><a href="{{$user->linkedin}}" target="blank">Linkedin <i class="fa fa-external-link"></i></a></div>@endif  
					<!-- <div class="soc_sing_prof"><i class="fa fa-twitter"></i><a href="https://twitter.com/davidasinclair" target="blank">Twitter<i class="fa fa-external-link"></i></a>
					</div> -->
				</div>
				<div class="clearfix"></div>
				<div class="ranting_individual">
					<div class="ranting_individual_left">
						<i class="fa fa-star"></i>
						<p class="name_date">Ranking</p>
						<p class="number_date voteCounter" data-vcount="{{$user->users_count}}">{{$user->users_count}}</p>
						@if(\Auth::guard('fb')->check())
							@if(\Auth::guard('fb')->user()->scientists->contains('id',$user->id))
								<span>Voted</span>
							@else
								<span class="scientistVoted" style="display: none;">Voted</span>
								<a data-scientist="{{$user->id}}" class="btn btn-secondary">
									<i class="fa fa-thumbs-up"></i><span>VOTE</span>
								</a>
							@endif
						@else
							<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
								<i class="fa fa-thumbs-up"></i><span>VOTE</span>
							</a>
						@endif
					</div>
					<div class="ranting_individual_right">
						<i class="fa fa-bar-chart"></i>
						<p class="name_date">Voted startups</p>
						<p class="number_date">{{$user->startups_count}}</p>
						<a  class="btn btn-secondary scrollto" href="#voted_personal">
							<span>View projects</span>
						</a>


					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="text_personal">
			<div class="text-container">

				<div class="truncate">
					<p>{{$user->about}}</p>
				</div>
			</div>
			<div class="voted_personal" id="voted_personal">
				<h2>Voted <span>({{$user->startups->count()}})</span></h2>
				<div class="line_title_left"></div>
				<ul class="list_startups_individual dParent">
					@foreach($user->startups->sortByDesc('created_at')->take(5) as $sup)
					<li class="wow fadeInRight" data-item="startups" data-wow-duration="1s">
						<div class="ratingposition_home_startup">
							<p class="pe_cine_votat"><img src="{{Voyager::image($user->thumbnail('square','image'))}}" alt="" class="avatar_big"></p>
							<p class="arrow_pecine">
								<i class="fa fa-thumbs-up"></i>
							</p>
							<a href="{{$sup->cb_link}}" target="blank">
								<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
								</svg>
							</a>
						</div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">
								<a href="{{$sup->link}}">{{$sup->title}}</a>
								<a href="{{$sup->link}}" class="view_startup_button">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Biotech">{{$sup->branch->name}}</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">{{$sup->scientists_count}}</p>
						</div>
						<div class="clearfix"></div>
					</li>
					@endforeach
				</ul>
					<div class="button_center_more_def"><a href="" data-tocount="startups" data-quantity="5" class="btn btn-secondary getMore">More Startups</a></div>
				</div>        
				<div class="works_personal">
					<h2>Works <span>({{$user->works->count()}})</span></h2>
					<div class="line_title_left"></div>
					@if($user->works->count())
					<table class="table table_work">
						<thead>
							<tr class="top_list_display">
								<th scope="col">Name Work</th>
								<th scope="col">Domain</th>
								<th scope="col" class="mob_off">Description work</th>
								<th scope="col">Source</th>
							</tr>
						</thead>
						<tbody class="dParent">
							@foreach($user->works->sortByDesc('created_at')->take(5) as $work)
							<tr data-item="works">
								<th scope="row">
									{{$work->title}}
								</th>
								
								<td><span><a href="knowledge.php?Cell+biology">{{$work->branch->name}}</a></span></td>
								<td class="mob_off description_work">
									<p>{{str_limit($work->text,200)}}</p>
								</td>
								
								<td class="vote_list"><a href="{{$work->link}}" class="" target="blank">
									<span>view project</span> <i class="fa fa-external-link"></i>
								</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@endif
					@if($user->works->count()>5)<div class="button_center_more_def"><a href="" data-tocount="works" data-quantity="5" class="btn btn-secondary getMore">More Works</a></div>@endif
				</div>
				<div class="video_personal">
					<h2>Video <span>({{$user->videos->count()}})</span></h2>
					<div class="line_title_left"></div>
					<div class="row dParent">
						@foreach($user->videos->sortByDesc('created_at')->take(4) as $video)
						<div class="col-md-3" data-item="videos">
							<div class="card">
								<a data-fancybox href="{{$video->link}}">
									<img class="card-img-top img-fluid" src="https://img.youtube.com/vi/{{str_limit(str_after($video->link,'watch?v='),11,'')}}/mqdefault.jpg"/>
								</a>
							</div>
							<h4>{{$video->title}}</h4>
							<h5>{{$video->branch->name}}</h5>
							<p class="description_video_title">{{$video->text}}</p>
						</div>
						@endforeach
					</div>
					<div class="clearfix"></div>
					@if($user->videos->count()>4)<div class="button_center_more_def"><a href="" data-tocount="videos" data-quantity="4" class="btn btn-secondary getMore">More Videos</a></div>@endif
				</div>        
				<div class="news_personal">
					<h2>News about {{$user->getFullName()}}<span>({{$user->news->count()}})</span></h2>
					<div class="line_title_left"></div>
					@foreach($user->news->sortByDesc('created_at')->take(3) as $article)
					<div class="single_new_block col-md-4 wow fadeInUp " data-wow-delay="0s">
						<div class="single_new_block_inter">
							<div class="img_new_block">
								<img src="/storage/{{$article->image}}">
								<div class="detail_new"><a href="{{route('getArticle',['post'=>$article->id])}}">DETAILS</a></div>
							</div>
							<div class="date_new">
								<p class="moon_new">{{$article->created_at->format('M')}}</p>
								<p class="number_new">{{$article->created_at->format('d')}}</p>
							</div>
							<h2><a href="{{route('getArticle',['post'=>$article->id])}}" title="{{$article->title}}">{{str_limit($article->title,40)}}</a></h2>
							<p>{{str_limit(strip_tags($article->text),120)}}</p>
							<div class="sub_new_block">
								<div class="user_name_new">
									<i class="fa fa-user"></i>
									<p><a href="#">Posted By Admin</a></p>
								</div>
								
							</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"></div> 
					<div class="more_mews_butt">
						<br>
						<a href="{{route('getNews')}}" class="btn btn-secondary center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" >All NEWS</a>
					</div>
					<div class="clearfix"></div>

				</div>

				<br>
				<br>
				<br>

			</div>
		</div>

		
		@if(isset($regCheck) && $regCheck)
		<!-- BEGIN # MODAL First register scientist -->
		<div class="modal fade" id="first_reg_scientist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div id="formContent" class="formContent">
				<form method="POST" action="{{route('register')}}">
				{{csrf_field()}}
				<input type="hidden" name="code" value="{{$code}}">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="reg_scientist_modal">
					<h1>Terms of use</h1>

					<h2>Welcome to Scientific Panel </h2>
					<h3>to vote for the first Rating of longevity technologies!</h3>
					<br>
						<div class="date_reg">
							<div class="col-md-6">
								<p class="login_is">Your login is </p>
							</div>
							<div class="col-md-6">
								<input type="hidden" name="login" value="{{$user->login}}">
								<p>{{$user->login}}</p>
							</div>
							<div class="clearfix"></div>
							<br>
							<div class="col-md-6">
								<p class="login_is">Enter your password</p>
							</div>
							<div class="col-md-6">
								<input type="password" name="password" required="" placeholder="new password"> 
								<input type="password" name="password_confirmation" required="" placeholder="new password again">
							</div>
						</div>
						<div class="clearfix"></div>

						<div class="accept_modal">
							<p class="accept_left">
								Accept Terms&Conditions See and accept <a href="/documents/concepts_longevity_ranking_codex.pdf" target="_blank">methodology</a> for the work in Scientific Panel
							</p>
							<p class="accept_right">
								<span>Accept</span>
								<input type="checkbox" required="" name="policy">
							</p>
							<div class="clearfix"></div>
						</div>

				</div>



				<div class="paragraph_reg fadeIn first">


					<button type="submit" class="btn add_form_field" aria-label="Close">
						<span>Register</span>
					</button>

				</div>
				<div class="">

				</div>
				<div class="clearfix"></div>
				</form>
			</div>
		</div>
		@endif
		@endsection
		@section('add_scripts')
		@if(isset($regCheck) && $regCheck)
		<script type="text/javascript">
			$(window).on('load',function(){
				$('#first_reg_scientist').modal('show');
			});
		</script>
		@endif
		<script type="text/javascript">
			$('.getMore').click(function(e){
				e.preventDefault();
				$this=$(this);
				toCount=$this.data('tocount');
				quantity=$this.data('quantity');
				parent=$('[data-item='+toCount+']').parents('.dParent');
				count=$('[data-item='+toCount+']').length;
				$.get("{{route('getScItems')}}",{
					_token:"{{csrf_token()}}",
					item:toCount,
					number:count,
					quantity:quantity,
					scientist:"{{$user->id}}",
				},function(data,status,request){
					if(parseInt(request.getResponseHeader('isLast'))){
						$this.hide();
					}
					$(data).appendTo(parent);
				});
			});
		</script>

		<script>
			$('[data-scientist]').click(function(e){
				e.preventDefault();
				$this=$(this);
				$scientist=$this.data('scientist');
				$.post("{{route('voteScientist')}}",
				{
					_token:'{{csrf_token()}}',
					scientist:$scientist,
				},function(data,status){
					if(data=='success'){
						$('.voteCounter').text($('.voteCounter').data('vcount')+1);
						$this.fadeOut();
						$('.scientistVoted').delay(400).fadeIn();
					}else if(data[0]=="fraud"){
						window.location.href=data[1];
					}
				});
			});
		</script>
		@endsection