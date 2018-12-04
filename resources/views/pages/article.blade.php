@extends('layout')
@section('title',$article->title)
@section('content')
		<div class="page">
			<section class="title_page_default">
				<div class="container">
					
				</div>
			</section>
			<div class="container">
				@include('partials.breadcrumbs')
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-9">
						<div class="row mb-2">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="news-title">
													<h2>{{$article->title}}</h2>
												</div>
												<div class="single_article_share">
												<div class="sharethis-inline-share-buttons "></div>
												</div>
												<div class="news-cats">
													<ul class="list-unstyled list-inline mb-1">
														<li class="list-inline-item">
															<i class="fa fa-clock-o text-danger"></i>
															<a><small>{{$article->created_at->toDayDateTimeString()}}</small></a>
														</li>
													</ul>
												</div>
												<hr>
												<div class="news-image">
													<img src="/storage/{{$article->image}}">
													<!-- <p class="text-muted ">Yourself required no at thoughts delicate landlord it be.</p> -->
												</div>
												<div class="news-content">
													{!!$article->text!!}
												</div>
												
												<hr>
												@if($thisTags)
													<div class="news-tags">
														<h5>Tags</h5>
														<br>
														@foreach($thisTags as $tag=>$count)
															<a href="{{route('getNews',['tag'=>$tag])}}" class="btn btn-sm btn-secondary-tags">
																{{$tag}} <span class="badge badge-light">{{$count}}</span>
															</a>
														@endforeach
													</div>
													<hr>
												@endif
												<!--div class="news-author">
												<div class="row">
													<div class="col-md-auto">
														<a href="#" title="Biswajit Saha"><img src="//www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&d=mm&r=x" alt="Author image" class="rounded-circle" style="width:100px"></a>
													</div>
													<div class="col">
														<div class="auth-title">
															<h4 class="author h4"><a href="/author/biswajit/">Biswajit Saha</a></h4>
															<div class="bio">
																Developer at GBJ solution. I love to travel, make new friends. I prefer tea over coffee.
															</div>
															<ul class="list-unstyled list-inline">
																<li class="list-inline-item"><a href="https://twitter.com/gbjsolution" target="_blank"><i class="fa fa-twitter"></i></a></li>
																<li class="list-inline-item"><a href="https://www.facebook.com/gbjsolution" target="_blank"><i class="fa fa-facebook"></i></a></li>
																<li class="list-inline-item"><a href="http://gbjsolution.com" target="_blank"><i class="fa fa-globe"></i></a></li>
																<li class="list-inline-item"><i class="fa fa-map-marker"></i> India</li>
															</ul>
														</div>
													</div>
												</div>
											</div-->
										</div>
									</div>
								</div>
							</div>
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
@endsection