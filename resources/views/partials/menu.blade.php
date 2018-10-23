<div class="menu_home">
	<div class="container">
		<div class="col-md-5 menu_desc_left">
			<nav>
				<div class="nav-xbootstrap">
					<ul>
						<li><a href="{{route('getHome')}}">Home</a></li>
						<li><a href="{{route('getScList')}}">Scientists</a></li>
						<li><a href="knowledge.php">Knowledge </a></li>
						<li><a href="{{route('getStartups')}}">Startups</a></li>
						<li><a href="about.php">About</a></li>
					</ul>
				</div>
				<div class="nav-bg-xbootstrap">
					<div class="navbar-xbootstrap"> <span></span> <span></span> <span></span> </div>
					<a href="{{route('getHome')}}" class="title-mobile">
						<img src="/img/logo.png" alt="">
					</a>
					<div class="mob_right_menu">
						<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#reg-modal"><i class="fa fa-graduation-cap"></i></a>
						<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i></a>
					</div>
				</div>
			</nav>
		</div>
		<div class="col-md-2 logo_container">
			<div class="img_logo">
				<img src="/img/logo.png" alt="">
			</div>
		</div>
		<div class="col-md-5 login_head_container">
            <span><a href="{{route('getNews')}}">News</a></span>
			<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#doc-modal">Documents</a>
			<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#reg-modal">Apply now</a>
            @if(\Auth::guard('profiles')->check())
                @php $profile_data=\Auth::guard('profiles')->user(); @endphp
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle img_header_avatar_a" data-toggle="dropdown">
                        <span class="alert_messages hidden">3</span>
                        <img src="/storage/{{$profile_data->image}}" alt="" class="img_header_avatar">
                    </a>
                    <ul class="dropdown-menu card_user">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <img src="/storage/{{$profile_data->image}}" alt="" class="img_header_avatar_card">
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>{{$profile_data->name}} {{$profile_data->surname}}</strong></p>
                                        <p class="text-left small">{{$profile_data->login}}</p>
                                        <form method="POST" action="{{route('logout')}}">
                                            {{csrf_field()}}
                                            <button class="btn btn-secondary" type="submit" class="">Log Out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                        <span class="col-md-5">
                                            <a href="{{route('logedProfile')}}" class=" btn btn-primary ">My Profile</a>
                                            </span>
                                            <span class="col-md-5 but_sett_card">
                                            <a href="{{route('editProfile')}}" class=" btn btn-secondary ">Edit Profile</a>
                                            </span>
                                            <span class="col-md-2 but_mes_card hidden">
                                            <a href="list_msg.php" class="envelope_card">
                                            <i class="fa fa-envelope-o "></i> <span class="inter_card_alert_msg">3</span>
                                            </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
            @endif
		</div>
	</div>
</div>


	

