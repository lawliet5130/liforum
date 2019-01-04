@foreach($items as $work)
	<tr class="wow fadeInRight item" data-wow-delay="{{$loop->index*0.1}}s" data-wow-duration="1s">
		<th scope="row">
			{{$work->title}}
			<span class="name_autor_work">
				<img src="{{Voyager::image($work->scientist->thumbnail('square','image'))}}" alt="" class="small_pic">
				@if($work->scientist->trashed())
					<span>{{$work->scientist->getFullName()}}</span>
				@else
					<a href="{{route('scientistProfile',['scientist'=>$work->scientist->id])}}">{{$work->scientist->getFullName()}}</a>
				@endif
			</span>
		</th>

		<td class="domain_works_list"><a href="knowledge.php?Cell+biology">{{$work->branch->name}}</a></td>
		<td class="mob_off description_work">
			<p>{{$work->text}}</p>
		</td>

		<td class="vote_list">
			<a href="{{$work->link}}" class="" target="blank">
				<span>view project</span> <i class="fa fa-external-link"></i>
			</a>
		</td>
	</tr>
@endforeach