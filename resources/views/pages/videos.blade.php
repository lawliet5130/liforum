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
						<div class="list_news video_list">
							<div class="single_new_block col-md-6 wow fadeInUp " data-wow-delay="0s">
								<iframe width="" height="250" src="https://www.youtube.com/embed/4ez4xA3uq6Q?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen id="video"></iframe>
								<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
							</div>
							<div class="single_new_block col-md-6 wow fadeInUp " data-wow-delay="0s">
								<iframe width="" height="250" src="https://www.youtube.com/embed/4ez4xA3uq6Q?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen id="video"></iframe>
								<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
							</div>	
							<div class="single_new_block col-md-6 wow fadeInUp " data-wow-delay="0s">
								<iframe width="" height="250" src="https://www.youtube.com/embed/4ez4xA3uq6Q?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
							</div>	
							<div class="single_new_block col-md-6 wow fadeInUp " data-wow-delay="0s">
								<iframe width="" height="250" src="https://www.youtube.com/embed/4ez4xA3uq6Q?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
							</div>	
							<div class="single_new_block col-md-6 wow fadeInUp " data-wow-delay="0s">
								<iframe width="" height="250" src="https://www.youtube.com/embed/4ez4xA3uq6Q?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
							</div>	
							<div class="single_new_block col-md-6 wow fadeInUp " data-wow-delay="0s">
								<iframe width="" height="250" src="https://www.youtube.com/embed/4ez4xA3uq6Q?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
							</div>
							
							
							
							
						
							
						
							<div class="clearfix"></div>
							<div aria-label="Page navigation example">
								<ul class="pagination justify-content-center center">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1">Previous</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
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