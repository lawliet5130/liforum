@foreach($items as $sup)
	<li class="item wow fadeInRight" data-wow-delay="{{$loop->index*0.1}}s" data-wow-duration="1s">
		<div class="ratingposition_home_startup">
			<p>{{$loop->iteration+$current}}</p>
			<a href="{{$sup->cb_link}}" target="blank">
				<svg viewBox="0 0 24 24">
					<path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
				</svg>
			</a>
		</div>
		<div class="name_home_startup_center">
			<p class="name_home_startup">{{$sup->title}}
				<a href="{{route('getStartup',['stup'=>$sup->id])}}" class="view_startup_button" target="blank">
					View startup<i class="fa fa-external-link"></i>
				</a>
			</p>
			<p class="domeniu_home_startup"><a href="knowledge.php?AI">{{$sup->branch->name}}</a></p>
		</div>
		<div class="rating_home_startup">
			<i class="fa fa-star"></i>
			<p class="name_date">Rating</p>
			<p class="number_date">{{$sup->scientists->count()}}</p>
		</div>
		<div class="clearfix"></div>
	</li>
@endforeach