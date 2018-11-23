@foreach($items as $work)
<tr class="wow fadeInRight" data-item="works" data-wow-delay="{{$loop->index*0.1}}s" data-wow-duration="1s">
	<th scope="row">
		{{$work->title}}
	</th>
	
	<td><span><a href="knowledge.php?Cell+biology">{{$work->branch->name}}</a></span></td>
	<td class="mob_off description_work">
		<p>{{str_limit($work->text,200)}}</p>
	</td>
	
	<td class="vote_list"><a href="{{$work->link}}" class="" target="blank">
		<span>view project</span> <i class="fa fa-external-link"></i>
	</a></td>
</tr>
@endforeach