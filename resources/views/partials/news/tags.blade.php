<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<br>
				<h5>Tags clud</h5>
				<div class="tagcloud04">
					<br>
					<ul>
						@foreach($tags as $tag=>$count)
							<li><a href="{{route('getNews',['tag'=>$tag])}}" title="{{$tag}}">{{$tag}}</a><span>{{$count}}</span></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>