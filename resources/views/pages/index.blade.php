@extends('layout')
@section('title','Liforum')
@section('style')
<!--style for menu active-->
<style>
.nav-xbootstrap li:nth-child(1) a {
	background: #02243a;
	color: #2ecaf7;
	border-bottom: 3px solid #2ecaf7;
}
.logo_container .img_logo{
	box-shadow: 0 4px 10px -9px;
	width: 178px;
}
</style>
@endsection
@section('content')
@php if($errors->count())dd($errors->all()); @endphp
<header>
	<div class="container">
		<div class="col-md-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
			<p class="left1">zurich, September 11</p>
			<p class="left2">LIFORUM</p>
			<p class="left3">Longevity  Impact  Forum</p>
		</div>
		<div class="col-md-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
			<p class="center1">We create first scientific blockchain panel of
				global top experts voting for the
				rating of longevity and P4 medicine
			technologies</p>
			
		</div>
		<div class="col-md-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
			<div class="date_head">
				<p class="right1">25</p>
				<p class="right2">January </p>
				<p class="right3">2020</p>
			</div>
			<div class="location_head">
				<p><span class="davos">Davos</span><span class="world">world economic </span><span>forum </span></p>
			</div>
			
		</div>
	</div>
	<div class="monic wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
		
		<iframe width="640" height="360" src="https://www.youtube.com/embed/im4OVjv7AjM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<!-- <img src="img/part1.png" alt="" class="part_left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s"> -->
		<img src="img/part2.png" alt="" class="part_right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s">
	</div>
	<img class="home_bg_top"  src="img/home_bg.png" alt="">
</header>
<div class="arrow_head">
	<i class="fa fa-chevron-down bounce"></i>
</div>

<section class="about_home">
	<div class="container">
		<div class="col-md-9">
			<div class="">
				<h1>WHAT EXPERTS DO WE TRUST?</h1>
				<div class="line_title"></div>
				<p class="">DAYS Foundation presents a methodology for creating a Rating of scientists in the field of anti-aging, longevity and digital health.
				</p>
				<p>The purpose of this rating is to select the most promising companies / groups of scientists in the field of anti-aging, whose technologies are worth investing in.
					The companies voted by scientists for the Rating will be discussed at Longevity Impact Forum. The announce was presented at World Economic
				Forum in January 2019 and at <a href="https://www.youtube.com/watch?v=pPXgg8eHA48" target="_blank">DAYS Oxford Conference in 2018</a>.</p>
				<p>
				This way DAYS will consolidate global scientific and investment potential for longevity and digital health</p>
				<a href="img/documents/methotology.pdf" target="blank" class="btn btn-secondary center" >SEE MORE</a>
			</div>
			<div class="two_about_home">
				<div class="col-md-6 about_home_left">
					<h2>Election of the DAYS Blockchain Panel</h2>
					<div class="line_title_left"></div>
					
					<p>The election of the DAYS Blockchain Scientific Panel, including 100 leading
						global experts in the field of life extension and P4 Medicine, will be performed
					by the  DAYS contributors, by the formula: one contributor - one vote.</p>
					<p>
					The Rating methodology for now is as follows:</p>
					<a href="img/documents/methotology.pdf" target="blank" class="btn btn-secondary center" >rating methodology</a>
				</div>
				<div class="col-md-6 about_home_right">
					<h2>Principles of the DAYS Blockchain Panel</h2>
					<div class="line_title_left"></div>
					
					<p>For the expert voting, we’ll utilize Blockchain voting panel that is like an
					ordinary Internet voting but taking into account the rating of the voter.</p>
					<p>
						
						That is, the expert answers are weighted based on his rating weights.
						Utilizing the Blockchain principle for voting will ensure the transparency of
					expert voting since one will be able to check the initial weights of voters. </p>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="thre_about_home">
				<div class="col-md-6 about_home_left">
					<h2>liquid democracy in SCIENTIFIC RESEARCHES </h2>
					<div class="line_title_left"></div>
					
					<p>We stimulate a crowdsourcing mechanism of researches. Blockchain panel
						have rotatition according to the results of startups the Scientific Panel member
					voted for. </p>
					<p>To candidate for inclusion in LIFORUM list of scientists you have to make your
						List of longevity technologies. If your selection of technologies for life extension
					will be recognized scientifically significant.- you’ll get invitation to our Forum!  </p>
					<p class="50">
						Authors of the collections of technologies with the
						largest number of likes will get prizes: invitations
						to the Longevity Forum, and following
						Restart Cruise, where DAYS will present
						longevity technologies, selected to
					DAYS Catalogue.</p>
					
					
				</div>
				<div class="col-md-6 about_home_right">
					<h2>How to get invited to Longevity Impact Forum</h2>
					<div class="line_title_left"></div>
					
					<p>
						1. Gather your collection of longevity technologies from our Knowledge base, <br>
						2. click on the button "place on the DAYS Facebook page," <br>
						3. and invite your friends to like. <br>
					</p>
					
					<a href="#particip-modal" class="btn btn-secondary"  role="button" data-toggle="modal" data-target="#particip-modal">Participate</a>
					
				</div>
			</div>
			
		</div>
		<div class="col-md-3 twitt_container">
			<a class="twitter-timeline" data-height="960" href="https://twitter.com/DaysExchange?ref_src=twsrc%5Etfw">Tweets by DaysExchange</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
		</div>
	</div> 

</section>
<section class="rating">
	<div class="vot_head">
		<div class="vot_head_inner">
			<div class="container">
				<div class="col-md-6 left_vote">
					You vote for scientists
					<a href="scientist_list.php" class="btn btn-secondary btn-lg">VOTE NOW</a>
					<span>Rating of top-experts is based on liquid democracy principles: your vote matters</span>
				</div>
				<div class="col-md-6 right_vote">
					Scientists vote for startups
					
				</div>
			</div>
		</div>
	</div>
	<div class="arrow-down-vot center"></div>
	<div class="list_top_home">
		<div class="container">
			<div class="col-md-6 li_hom_scient_top">
				<h2>Top 5 scientists:</h2>
				<div class="line_title_left"></div>
				<ul class="li_hom_scient">
					@foreach($scientists as $sc)
					<li class="wow fadeInLeft" data-wow-duration="1s">
						<div class="col-md-4 avatar_home">
							<div class="rating_home">
								<p>{{$loop->iteration}}</p>
							</div>
							<img src="{{Voyager::image($sc->thumbnail('square','image'))}}" alt="">
						</div>
						<div class="col-md-8 scients_home_date row">
							<a href="{{route('scientistProfile',['scientist'=>$sc->id])}}" class="view_profile_button">View profile</a>
							<p class="name_sc">{{$sc->getFullName()}}</p>
							<p class="prof_sc"><a href="knowledge.php?Genomics">{{$sc->branch->name}}</a></p>
							<div class="date_sc_home ">
								<div class="table_date_sc rating_h">
									<i class="fa fa-star"></i>
									<p class="name_date">Ranking</p>
									<p class="number_date">{{$sc->users_count}}</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-bar-chart"></i>
									<p class="name_date">Voted startups</p>
									<p class="number_date">{{$sc->startups_count}}</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-map-marker"></i>
									<p class="name_date">Country</p>
									<p class="number_date">{{$sc->country->code}}</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</li>
					@endforeach
				</ul>
				<div class="butons_home_list">
					<a href="{{route('getScList')}}" class="btn btn-secondary">CHECK FULL LIST</a>
					<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#reg-modal">Registration for scientists</a>
				</div>
			</div>
			<div class="col-md-6">
				<h2>Top 10 Startups:</h2>
				<div class="line_title_left"></div>
				<ul class="list_startups">
					@foreach($startups as $stup)
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>{{$loop->iteration}}</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup"><a href="{{route('getStartup',['stup'=>$stup->id])}}">{{$stup->title}}</a><a href="{{$stup->cb_link}}" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a></p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Biotech">{{$stup->branch->name}}</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">{{$stup->scientists_count}}</p>
						</div>
						<div class="clearfix"></div>
					</li>
					@endforeach
				</ul>
				<div class="butons_home_list">
					<a href="{{route('getStartups')}}" class="btn btn-secondary">CHEKC FULL LIST</a>
<!-- 					<form class="example" action="/action_page.php" style="margin:auto;max-width:300px; display: inline-flex;">
						<input type="text" placeholder="Search.." name="search2">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form> -->
				</div>
			</div>
		</div>
	</section>
	<section class="parteners" id="advr">
		<div class="container">
			<h1>SLOTS FOR ADVERTISING</h1>
			<div class="line_title"></div>
			<br>
			<div class="col-md-6">
				<div class="banner-default">
					<p class="bann1">LIF Platinum Partner</p>
					<p class="bann2">580 x 322</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="banner-default">
					<p class="bann1">LIF Platinum Partner</p>
					<p class="bann2">580 x 322</p>
				</div>
			</div>
			<br>
			<div class="col-md-4">
				<div class="banner-default">
					<p class="bann1">Speaker sponsor</p>
					<p class="bann2">370 x 170</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner-default">
					<p class="bann1">Area sponsor</p>
					<p class="bann2">370 x 170</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner-default">
					<p class="bann1">Speaker sponsor</p>
					<p class="bann2">370 x 170</p>
				</div>
			</div>
			<br>
			<div class="col-md-2-5">
				<div class="banner-default">
					<p class="bann1">Presenting sponsor</p>
					<p class="bann2">200 x 170</p>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="banner-default">
					<p class="bann1">Presenting sponsor</p>
					<p class="bann2">200 x 170</p>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="banner-default">
					<p class="bann1">Presenting sponsor</p>
					<p class="bann2">200 x 170</p>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="banner-default">
					<p class="bann1">Presenting sponsor</p>
					<p class="bann2">200 x 170</p>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="banner-default">
					<p class="bann1">Presenting sponsor</p>
					<p class="bann2">200 x 170</p>
				</div>
			</div>

		</div>
	</section>

	<section class="news">
		<div class="container">
			<h1>OUR NEWS</h1>
			<div class="line_title"></div>
			@foreach($articles as $article)
			<div class="single_new_block col-md-4 wow fadeInUp " data-wow-delay="0s">
				<div class="single_new_block_inter">
					<div class="img_new_block">
						<img src="/storage/{{$article->image}}">
						<div class="detail_new"><a href="{{route('getArticle',['post'=>$article->id])}}">DETAILS	</a></div>
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
				<a href="{{route('getNews')}}" class="btn btn-secondary center">All NEWS</a>
			</div>
		</div>

	</section>
	@if($videos->count())
	<section class="video_home">
		<div class="container">
			<h1>OUR VIDEO</h1>
			<div class="line_title"></div>
			<div class="video_list">
				@foreach($videos as $video)
				<div class="col-md-4" data-item="videos">
					<div class="card">
						<a data-fancybox href="{{$video->link}}" class="video_thumb_block">
							<span class="mark_play_button">
								<i class="fa fa-play"></i>
							</span>
							<img class="card-img-top img-fluid" src="https://img.youtube.com/vi/{{str_limit(str_after($video->link,'watch?v='),11,'')}}/hqdefault.jpg"/>
						</a>
					</div>
					<h4 title="{{$video->title}}">{{str_limit($video->title,50)}}</h4>

					<p class="description_video_title">{{str_limit($video->text,310)}}</p>
				</div>
				@endforeach
				<div class="clearfix"></div>

			<div class="more_mews_butt">
				<br>
				<a href="{{route('getVideos')}}" class="btn btn-secondary center" >All Video</a>
			</div>

			</div>


		</div>
	</section>
	@endif
	@endsection
	@section('add_scripts')
	@if(session('mustLogin'))
	<script>
		$('#login-modal').modal('show');
	</script>
	@endif
	@endsection