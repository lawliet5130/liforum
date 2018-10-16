@foreach($items as $video)
<div class="col-md-3" data-item="videos">
	<iframe src="https://www.youtube.com/embed/c_OmbkaM4qE?rel=0&amp;showinfo=0" allow="autoplay; encrypted-media" allowfullscreen="" width="" height="180" frameborder="0"></iframe>
	<h4>{{$video->title}}</h4>
	<h5>{{$video->branch->name}}</h5>
	<p class="description_video_title">{{$video->description}}</p>
</div>
@endforeach