@foreach($items as $work)
<tr data-item="works">
	<th scope="row">
		{{$work->title}}
	</th>
	
	<td><span><a href="knowledge.php?Cell+biology">{{$work->branch->name}}</a></span></td>
	<td class="mob_off description_work">
		<p>{{$work->text}}</p>
	</td>
	
	<td class="vote_list"><a href="{{$work->link}}" class="" target="blank">
		<span>view project</span> <i class="fa fa-external-link"></i>
	</a></td>
</tr>
@endforeach