<tr>
	<th scope="row">{{$item->title}}</th>

	<td>{{$item->branch->name}}</td>
	<td class="mob_off description_work">
		<p>{{$item->text}}</p>
	</td>

	<td class="vote_list"><a href="#" class="" >
		<span>{{$item->link}}</span> <i class="fa fa-external-link"></i>
	</a></td>
	<td class="action_delete">
		<a href="" data-itemid="{{$item->id}}" data-itemtitle="{{$item->title}}" data-itemtext="{{$item->text}}" data-itembranch="{{$item->branch_id}}" data-itemlink="{{$item->link}}" class="editOpen action_buttons edit_button" data-toggle="modal" data-target="#edit-modal" >
			<i class="fa fa-pencil-square-o"></i> Edit
		</a>
		<a href="#" data-todelete="{{$item->id}}" data-item="works" class="deleteOpen action_buttons remove_button" data-toggle="modal" data-target="#delete-modal">
			<i class="fa fa-trash"></i> Remove
		</a>
	</td>
</tr>