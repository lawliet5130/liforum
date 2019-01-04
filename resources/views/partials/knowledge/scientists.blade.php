@foreach($items as $sc)
	<tr class="wow fadeInRight item" data-wow-delay="{{$loop->index*0.1}}s" data-wow-duration="1s">
		<th scope="row">
			<span>{{$loop->iteration+$current}}</span>
			<img src="{{Voyager::image($sc->thumbnail('square','image'))}}" alt="">
			<span>
				<div class="name_specialy_blok">
					<a href="{{route('scientistProfile',['scientist'=>$sc->id])}}">{{$sc->getFullName()}}</a> <br>
					<span><a href="knowledge.php?Genomics">{{$sc->branch->name}}</a></span>
				</div>
			</span>
		</th>
		<td>{{$sc->users->count()}}</td>
		<td class="mob_off">{{$sc->startups->count()}}</td>
		<td class="mob_off">{{$sc->country->code}}</td>
		<td class="mob_off">{{$sc->works->count()}}</td>
		</td>
	</tr>
@endforeach