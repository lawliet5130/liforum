@foreach($items as $video)
<div class="col-md-3 wow fadeInRight" data-item="videos" data-wow-delay="{{$loop->index*0.1}}s" data-wow-duration="1s">
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
