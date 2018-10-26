@extends('layout')
@section('style')
<!--style for menu active-->
<style>
.nav-xbootstrap li:nth-child(1) a {
	background: #f8f8f8;
	color: #2ecaf7;
	border-bottom: 3px solid #2ecaf7;
}
</style>
@endsection
@section('content')
@php if($errors->count())dd($errors->all()); @endphp
<header>
	<div class="container">
		<div class="col-md-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
			<p class="left1">zurich, January 20</p>
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
				<p class="right1">22</p>
				<p class="right2">January </p>
				<p class="right3">2019</p>
			</div>
			<div class="location_head">
				<p><span class="davos">Davos</span><span class="world">world economic </span><span>forum </span></p>
			</div>
			
		</div>
	</div>
	<div class="monic wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
		
		<iframe width="640" height="360" src="https://www.youtube.com/embed/im4OVjv7AjM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<img src="img/part1.png" alt="" class="part_left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
		<img src="img/part2.png" alt="" class="part_right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s">
	</div>
	<img src="img/home_bg.png" alt="">
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
				<p class="">DAYS Foundation presents a methodology for creating a rating of scientists in the field of anti-aging, longevity and digital health.
				</p>
				<p>The purpose of this rating is to select the most promising companies / groups of scientists in the field of anti-aging, whose technologies are worth investing in.
					The companies supported by scientists for the Rating purposes will be discussed at Longevity Impact Forum and the results will be presented at World Economic
				Forum in January 2019.</p>
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
				<h2>Rating of scientists: top 5</h2>
				<div class="line_title_left"></div>
				<ul class="li_hom_scient">
					<li class="wow fadeInLeft" data-wow-duration="1s">
						<div class="col-md-4 avatar_home">
							<div class="rating_home">
								<p>1</p>
							</div>
							<img src="img/scientists/6.png" alt="">
						</div>
						<div class="col-md-8 scients_home_date row">
							<a href="scientist.php" class="view_profile_button">View profile</a>
							<p class="name_sc">David Sinclair</p>
							<p class="prof_sc"><a href="knowledge.php?Genomics">Genomics</a></p>
							<div class="date_sc_home ">
								<div class="table_date_sc rating_h">
									<i class="fa fa-star"></i>
									<p class="name_date">Ranking</p>
									<p class="number_date">689</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-bar-chart"></i>
									<p class="name_date">Voted startups</p>
									<p class="number_date">75</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-map-marker"></i>
									<p class="name_date">Country</p>
									<p class="number_date">USA</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInLeft" data-wow-duration="1s">
						<div class="col-md-4 avatar_home">
							<div class="rating_home">
								<p>2</p>
							</div>
							<img src="img/scientists/1.png" alt="">
						</div>
						<div class="col-md-8 scients_home_date row">
							<a href="scientist.php" class="view_profile_button">View profile</a>
							<p class="name_sc">Richard Dawkins</p>
							<p class="prof_sc"><a href="knowledge.php?Biology">Biology</a></p>
							<div class="date_sc_home ">
								<div class="table_date_sc rating_h">
									<i class="fa fa-star"></i>
									<p class="name_date">Ranking</p>
									<p class="number_date">589</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-bar-chart"></i>
									<p class="name_date">Voted startups</p>
									<p class="number_date">58</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-map-marker"></i>
									<p class="name_date">Country</p>
									<p class="number_date">UK</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInLeft" data-wow-duration="1s">
						<div class="col-md-4 avatar_home">
							<div class="rating_home">
								<p>3</p>
							</div>
							<img src="img/scientists/2.png" alt="">
						</div>
						<div class="col-md-8 scients_home_date row">
							<a href="scientist.php" class="view_profile_button">View profile</a>
							<p class="name_sc">J.Craig Venter</p>
							<p class="prof_sc"><a href="knowledge.php?Genomics">Genomics</a></p>
							<div class="date_sc_home ">
								<div class="table_date_sc rating_h">
									<i class="fa fa-star"></i>
									<p class="name_date">Ranking</p>
									<p class="number_date">589</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-bar-chart"></i>
									<p class="name_date">Voted startups</p>
									<p class="number_date">58</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-map-marker"></i>
									<p class="name_date">Country</p>
									<p class="number_date">USA</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</li>
					
					<li class="wow fadeInLeft" data-wow-duration="1s">
						<div class="col-md-4 avatar_home">
							<div class="rating_home">
								<p>4</p>
							</div>
							<img src="img/scientists/4.png" alt="">
						</div>
						<div class="col-md-8 scients_home_date row">
							<a href="scientist.php" class="view_profile_button">View profile</a>
							<p class="name_sc">William C. Campbell</p>
							<p class="prof_sc"><a href="knowledge.php?Biology">Biology</a></p>
							<div class="date_sc_home ">
								<div class="table_date_sc rating_h">
									<i class="fa fa-star"></i>
									<p class="name_date">Ranking</p>
									<p class="number_date">589</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-bar-chart"></i>
									<p class="name_date">Voted startups</p>
									<p class="number_date">58</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-map-marker"></i>
									<p class="name_date">Country</p>
									<p class="number_date">USA</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInLeft" data-wow-duration="1s">
						<div class="col-md-4 avatar_home">
							<div class="rating_home">
								<p>5</p>
							</div>
							<img src="img/scientists/5.png" alt="">
						</div>
						<div class="col-md-8 scients_home_date row">
							<a href="scientist.php" class="view_profile_button">View profile</a>
							<p class="name_sc">Yoshinori Ohsumi</p>
							<p class="prof_sc"><a href="knowledge.php?Biology">Biology</a></p>
							<div class="date_sc_home ">
								<div class="table_date_sc rating_h">
									<i class="fa fa-star"></i>
									<p class="name_date">Ranking</p>
									<p class="number_date">589</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-bar-chart"></i>
									<p class="name_date">Voted startups</p>
									<p class="number_date">58</p>
								</div>
								<div class="table_date_sc rating_h">
									<i class="fa fa-map-marker"></i>
									<p class="name_date">Country</p>
									<p class="number_date">JP</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
				<div class="butons_home_list">
					<a href="scientist_list.php" class="btn btn-secondary" >SEE MORE</a>
					<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#reg-modal">Registration for scientists</a>
				</div>
			</div>
			<div class="col-md-6">
				<h2>Rating of Startups: top 10</h2>
				<div class="line_title_left"></div>
				<ul class="list_startups">
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>1</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Retrotope.com <a href="http://retrotope.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a></p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Biotech">Biotech</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">589</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>2</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Bioviva-Sciences.com <a href="http://bioviva-Sciences.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a></p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Gene+therapy">Gene therapy</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">577</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>3</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Nebula.org
								<a href="http://nebula.org" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Gene+therapy">Gene therapy</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">550</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>4</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Insilico.com
								<a href="http://insilico.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Drug+discovery">Drug discovery</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">520</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>5</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Advancells.com
								<a href="http://advancells.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Stem+cell+therapy">Stem cell therapy</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">502</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>6</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Bioquark.com
								<a href="http://bioquark.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Combinatorial+biologics">Combinatorial biologics</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">456</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>7</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Doc.ai
								<a href="http://doc.ai" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?AI">AI</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">410</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>8</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Elysiumhealth.com
								<a href="http://elysiumhealth.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Biotechnology">Biotechnology</a></p>
						</div>
						<div class="rating_home_startup">
							<i class="fa fa-star"></i>
							<p class="name_date">Rating</p>
							<p class="number_date">369</p>
						</div>
						<div class="clearfix"></div>
					</li>
					<li class="wow fadeInRight" data-wow-duration="1s">
						<div class="ratingposition_home_startup"><p>9</p></div>
						<div class="name_home_startup_center">
							<p class="name_home_startup">Nuritas.com
								<a href="http://nuritas.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
							</p>
							<p class="domeniu_home_startup"><a href="knowledge.php?Drug+discovery">Drug discovery</a></p>
							</div>
							<div class="rating_home_startup">
								<i class="fa fa-star"></i>
								<p class="name_date">Rating</p>
								<p class="number_date">120</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<li class="wow fadeInRight" data-wow-duration="1s">
							<div class="ratingposition_home_startup"><p>10</p></div>
							<div class="name_home_startup_center">
								<p class="name_home_startup">Rejuvenatebiomed.com
									<a href="http://rejuvenatebiomed.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
								</p>
								<p class="domeniu_home_startup"><a href="knowledge.php?Drug+discovery">Drug discovery</a></p>
							</div>
							<div class="rating_home_startup">
								<i class="fa fa-star"></i>
								<p class="name_date">Rating</p>
								<p class="number_date">77</p>
							</div>
							<div class="clearfix"></div>
						</li> 
					</ul>
					<div class="butons_home_list">
						<a href="startups.php" class="btn btn-secondary" >SEE MORE</a>
						<form class="example" action="/action_page.php" style="margin:auto;max-width:300px; display: inline-flex;">
							<input type="text" placeholder="Search.." name="search2">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="parteners">
			<div class="container">
				<h1>OUR PARTNERS</h1>
				<div class="line_title"></div>
				<br>
				<div class="col-md-6">
					<a href="http://vandrevalafoundation.com/" target="blank"><img src="http://vandrevalafoundation.com/images/smj_ak.jpg" alt=""></a>
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
				<div class="single_new_block col-md-4 wow fadeInUp " data-wow-delay="0s">
					<div class="single_new_block_inter">
						<div class="img_new_block">
							<img src="img/news/new1.png">
							<div class="detail_new"><a href="single_article.php">DETALII</a></div>
						</div>
						<div class="date_new">
							<p class="moon_new">NOV</p>
							<p class="number_new">09</p>
						</div>
						<h2><a href="single_article.php">Special care on Pets by physician</a></h2>
						<p>The weather started getting rough the tiny ship
							was tossed if not for the courage of the fearless
							crew the Minnow would be lost the minnow lost.
						</p>
						<div class="sub_new_block">
							<div class="user_name_new">
								<i class="fa fa-user"></i>
								<p><a href="#">Posted By Admin</a></p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="single_new_block col-md-4 wow fadeInUp " data-wow-delay="0s">
					<div class="single_new_block_inter">
						<div class="img_new_block">
							<img src="img/news/new2.png">
							<div class="detail_new"><a href="single_article.php">DETALII</a></div>
						</div>
						<div class="date_new">
							<p class="moon_new">NOV</p>
							<p class="number_new">09</p>
						</div>
						<h2><a href="single_article.php">Special care on Pets by physician</a></h2>
						<p>The weather started getting rough the tiny ship
							was tossed if not for the courage of the fearless
							crew the Minnow would be lost the minnow lost.
						</p>
						<div class="sub_new_block">
							<div class="user_name_new">
								<i class="fa fa-user"></i>
								<p><a href="#">Posted By Admin</a></p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="single_new_block col-md-4 wow fadeInUp " data-wow-delay="0s">
					<div class="single_new_block_inter">
						<div class="img_new_block">
							<img src="img/news/new3.png">
							<div class="detail_new"><a href="single_article.php">DETALII</a></div>
						</div>
						<div class="date_new">
							<p class="moon_new">NOV</p>
							<p class="number_new">09</p>
						</div>
						<h2><a href="single_article.php">Special care on Pets by physician</a></h2>
						<p>The weather started getting rough the tiny ship
							was tossed if not for the courage of the fearless
							crew the Minnow would be lost the minnow lost.
						</p>
						<div class="sub_new_block">
							<div class="user_name_new">
								<i class="fa fa-user"></i>
								<p><a href="#">Posted By Admin</a></p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="more_mews_butt">
					
					<br>
					<a href="news.php" class="btn btn-secondary center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" >All NEWS</a>
				</div>
			</div>
			
		</section>
		@endsection