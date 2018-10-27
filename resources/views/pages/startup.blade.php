@extends("layout")
@section("style")
<style>
.nav-xbootstrap li:nth-child(2) a {
background: #f8f8f8;
color: #2ecaf7;
border-bottom: 3px solid #2ecaf7;
}
</style>
@endsection
@section("content")
<div class="page">
	<section class="title_page_default">
		<div class="container">
			
		</div>
	</section>
	<div class="container">
		@include('partials.breadcrumbs')
		<div class="clearfix"></div>
		
		<div class="startup_section">
			<div class="startup_section_head">
				<div class="col-md-4 startup_section_head_left">
					<div class="cb_startup">
					<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
				</svg>
				<span>
					<a href="#" target="blank">www.crunchbase.com</a>
				</span>
			</div>
			<div class="site_startup">
				<i class="fa fa-globe"></i>
				<span>
					<a href="#" target="blank">www.site.com</a>
				</span>
			</div>
		</div>
		<div class="col-md-4 startup_section_head_center">
			<img src="img/startups_logo/egwjrxuvnkufhzwakwbe.png" alt="">
			<h3>Retrotope.com </h3>
			<h4><a href="#">Biootech</a></h4>
		</div>
		<div class="col-md-4 startup_section_head_right">
			<div class="rating_home_startup rating_home_startup_page">
				<i class="fa fa-star"></i>
				<p class="name_date">Rating</p>
				<p class="number_date">589</p>
				<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
					<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
				</a>
				<div class="cl"></div>
			</div>
		</div>
		<div class="cl"></div>
		<div class="col-md-12 descrip_startup">
			<p>Retrotope has created a new category of drug platform to preserve and restore mitochondrial health in degenerative diseases. The unique mechanism of Retrotope’s platform prevents cellular damage and recovers cellular function damaged by lipid peroxidation due to oxidative stress. Retrotope’s first product candidate, RT001, is being clinically tested in Friedreich’s ataxia (FA), an untreated fatal orphan disease. Other stabilized lipid drugs based on Retrotope’s transformational platform technology have the potential to treat a wide variety of other mitochondrial myopathies and neurodegenerative diseases.</p>
		</div>
		<div class="cl"></div>
	</div>
	<div class="comments_block col-md-12">
		
		
		<!-- Contenedor Principal -->
		<div class="comments-container">
			<h3>Comments</h3>
			<ul id="comments-list" class="comments-list">
				<li>
					<div class="comment-main-level">
						<!-- Avatar -->
						<div class="comment-avatar"><img src="/img/come1.jpg" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"><a href="/scientist/14">Agustin Ortiz</a></h6>
								<span>hace 20 minutos</span>
								<div class="button_comment">
									<i class="fa fa-reply"></i>
								</div>
								<div class="button_comment">
									<span>150</span>
									<i class="fa fa-heart"></i>
								</div>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, <a href="#">link</a>
								https://www.crunchbase.com/organization/retrotope
								consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</div>
					<!-- Respuestas de los comentarios -->
					<ul class="comments-list reply-list">
						<li>
							<!-- Avatar -->
							<div class="comment-avatar"><img src="/img/come2.png" alt=""></div>
							<!-- Contenedor del Comentario -->
							<div class="comment-box">
								<div class="comment-head">
									<h6 class="comment-name"><a href="/scientist/14">Lorena Rojero</a></h6>
									<span>hace 10 minutos</span>
									<div class="button_comment">
										<i class="fa fa-reply"></i>
									</div>
									<div class="button_comment">
										<span>150</span>
										<i class="fa fa-heart"></i>
									</div>
								</div>
								<div class="comment-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
								</div>
							</div>
						</li>
						<li>
							<!-- Avatar -->
							<div class="comment-avatar"><img src="/img/come1.jpg" alt=""></div>
							<!-- Contenedor del Comentario -->
							<div class="comment-box">
								<div class="comment-head">
									<h6 class="comment-name by-author"><a href="/scientist/14">Agustin Ortiz</a></h6>
									<span>hace 10 minutos</span>
									<div class="button_comment">
										<i class="fa fa-reply"></i>
									</div>
									<div class="button_comment">
										<span>150</span>
										<i class="fa fa-heart"></i>
									</div>
								</div>
								<div class="comment-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li>
					<div class="comment-main-level">
						<!-- Avatar -->
						<div class="comment-avatar"><img src="/img/come2.png" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name"><a href="/scientist/14">Lorena Rojero</a></h6>
								<span>hace 10 minutos</span>
								<div class="button_comment">
									<i class="fa fa-reply"></i>
								</div>
								<div class="button_comment">
									<span>150</span>
									<i class="fa fa-heart"></i>
								</div>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="widget-area no-padding blank">
			<div class="status-upload">
				<form>
					<textarea placeholder="What are you doing right now?" ></textarea>
					<ul>
						
						<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
						
					</ul>
					<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Comment</button>
				</form>
				</div><!-- Status Upload  -->
				</div><!-- Widget Area -->
				
				
			</div>
		</div>
		<br>
		<br>
		<br>
	</div>
</div>
@endsection
@section("add_scripts")
@endsection