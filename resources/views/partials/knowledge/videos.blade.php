@foreach($items as $video)
	<div class="col-md-3 wow fadeInRight item" data-wow-delay="{{$loop->index*0.1}}s" data-wow-duration="1s">
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