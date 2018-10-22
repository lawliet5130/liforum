<div class="col-md-3 itemHimself">
	<div class="">
		<a href="" data-item="videos" data-itemid="{{$item->id}}" data-itemtitle="{{$item->title}}" data-itemtext="{{$item->text}}" data-itembranch="{{$item->branch_id}}" data-itemlink="{{$item->link}}" class="editOpen edit_video" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil-square-o"></i></a>
		<a href="" data-todelete="{{$item->id}}" data-item="videos" class="deleteOpen remove_video" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i></a>
		<a data-fancybox href="{{$item->link}}">
			<img class="card-img-top img-fluid" src="https://img.youtube.com/vi/{{str_limit(str_after($item->link,'watch?v='),11,'')}}/mqdefault.jpg"/>
		</a>
		<h4>{{$item->title}}</h4>
		<h5>{{$item->branch->name}}</h5>
		<p class="description_video_title">{{$item->text}}</p>
	</div>
</div>