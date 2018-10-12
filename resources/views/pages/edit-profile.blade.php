@extends('layout')
@section('style')
	<style>
	.nav-xbootstrap li:nth-child(2) a {
	background: #f8f8f8;
	color: #2ecaf7;
	border-bottom: 3px solid #2ecaf7;
	}
	</style>
@endsection
@section('content')
		<div class="page">
			<section class="title_page_default">
				<div class="container">
					
				</div>
			</section>
			<div class="container">
				@include('partials.breadcrumbs')
				<div class="clearfix"></div>
				<div class="page_personal">
					<ul class="nav nav-tabs tabs_setting_profile">
						<li class="active"><a data-toggle="tab" href="#home">General Date</a></li>
						<li><a data-toggle="tab" href="#menu1">My Works</a></li>
						<li><a data-toggle="tab" href="#menu2">My Video</a></li>
						<li><a data-toggle="tab" href="#menu3">Settings</a></li>
					</ul>
					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							
							<br>
							<div class="col-md-3">
								<img src="/storage/{{$user->image}}" alt="" class="avatar_big">
								<div class="upload-box">
									<div class="hold"><a href="#">Maximum file size 1 MB</a> <span class="btn-file"> Browse File
									<input type="file" name="image">
								</span> </div>
							</div>
						</div>
						<div class="col-md-9 top_settings_general">
							<div class="col-md-6 settings_date">
								<input type="text" placeholder="Name" value="{{$user->name}}" name="name">
								<input type="text" placeholder="Surname" value="{{$user->surname}}" name="surname">
								<select class="form-control form-control-lg select_profile" name="branch" required>
									@foreach($branches as $branch)
										<option value="{{$branch->id}}" @if($branch->id==$user->branch_id) selected @endif>{{$branch->name}}</option>
									@endforeach
								</select>
								<select class="form-control form-control-lg select_profile" name="country" required>
									@foreach($countries as $country)
										<option value="{{$country->id}}" @if($country->id==$user->country_code) selected @endif>{{$country->name}}</option>
									@endforeach
								</select>
								<select class="form-control form-control-lg select_profile" name="gender" required>
									<option value="0" @if($user->gender['code']==0) selected @endif>Not set</option>
									<option value="1" @if($user->gender['code']==1) selected @endif>Male</option>
									<option value="2" @if($user->gender['code']==2) selected @endif>Female</option>
								</select>
								<input type="text" placeholder="Also Known As" name="knowas" value="{{$user->knowas}}">
							</div>
							<div class="col-md-6">
								
								
									<div class="links_soc_prof_inner">
										<div class="soc_sing_prof">
											<div class="soc_sing_prof_edit_left">
												<i class="fa fa-globe"></i>
												<span>Web site</span>
											</div>
											<div class="soc_sing_prof_edit_right">
												<input type="text" placeholder="www.example.com" name="website" value="{{$user->website}}">
											</div>
										</div>
										<div class="soc_sing_prof">
											<div class="soc_sing_prof_edit_left">
												<i class="fa fa-facebook"></i>
												<span>Facebook</span>
											</div>
											<div class="soc_sing_prof_edit_right">
												<input type="text" placeholder="facebook" name="facebook" value="{{$user->facebook}}">
											</div>
										</div>
										<div class="soc_sing_prof">
											<div class="soc_sing_prof_edit_left">
												<i class="fa fa-linkedin"></i>
												<span>Linkedin</span>
											</div>
											<div class="soc_sing_prof_edit_right">
												<input type="text" placeholder="Linkedin" name="linkedin" value="{{$user->linkedin}}">
											</div>
										</div>
										<div class="soc_sing_prof">
											<div class="soc_sing_prof_edit_left">
												<i class="fa fa-phone"></i>
												<span>Phone</span>
											</div>
											<div class="soc_sing_prof_edit_right">
												<input type="text" placeholder="+373..." name="phone" value="{{$user->phone}}">
											</div>
										</div>
										
										
									</div>
									<div class="clearfix"></div>
									
								
								
							</div>
							<div class="clearfix"></div>
							<br>
							<div class="col-md-12 textarea_settings_container">
								<h6>Text about</h6>
								<textarea name="about" id="" class="textarea_settings">{{$user->about}}</textarea>
							</div>
						</div>
						<div class="clearfix"></div>
						
						
					</div>
					<div id="menu1" class="tab-pane fade">
						<div class="works_personal">
							<h2>My Works <span>(10)</span></h2>
							<div class="line_title_left"></div>
							<table class="table table_work">
								<thead>
									<tr class="top_list_display">
										<th scope="col">Name Work</th>
										<th scope="col">Domain</th>
										<th scope="col" class="mob_off">Description work</th>
										<th scope="col">Source</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">
											The Hurricane Hunter
										</th>
										
										<td>Biology</td>
										<td class="mob_off description_work">
											<p>Last week’s science news was dominated by robots, from the probe sent slamming into
												the lunar surface by Nasa to the crew setting out to map the world’s deepest oceans using
											underwater probes.</p>
										</td>
										
										<td class="vote_list"><a href="#" class="" >
											<span>www.site.com</span> <i class="fa fa-external-link"></i>
										</a></td>
										<td class="action_delete">
											<a href="" class="action_buttons edit_button" data-toggle="modal" data-target="#add-work-modal" >
												<i class="fa fa-pencil-square-o"></i> Edit
											</a>
											<a href="#" class="action_buttons remove_button" data-toggle="modal" data-target="#delete-modal">
												<i class="fa fa-trash"></i> Remove
											</a>
										</td>
									</tr>
									<tr>
										<th scope="row">
											The Hurricane Hunter
										</th>
										
										<td>Biology</td>
										<td class="mob_off description_work">
											<p>Last week’s science news was dominated by robots, from the probe sent slamming into
												the lunar surface by Nasa to the crew setting out to map the world’s deepest oceans using
											underwater probes.</p>
										</td>
										
										<td class="vote_list"><a href="#" class="" >
											<span>www.site.com</span> <i class="fa fa-external-link"></i>
										</a></td>
										<td class="action_delete">
											<a href="#" class="action_buttons edit_button" data-toggle="modal" data-target="#add-work-modal" >
												<i class="fa fa-pencil-square-o"></i> Edit
											</a>
											<a href="#" class="action_buttons remove_button" data-toggle="modal" data-target="#delete-modal">
												<i class="fa fa-trash"></i> Remove
											</a>
										</td>
									</tr>
									<tr>
										<th scope="row">
											The Hurricane Hunter
										</th>
										
										<td>Biology</td>
										<td class="mob_off description_work">
											<p>Last week’s science news was dominated by robots, from the probe sent slamming into
												the lunar surface by Nasa to the crew setting out to map the world’s deepest oceans using
											underwater probes.</p>
										</td>
										
										<td class="vote_list"><a href="#" class="" >
											<span>www.site.com</span> <i class="fa fa-external-link"></i>
										</a></td>
										<td class="action_delete">
											<a href="#" class="action_buttons edit_button" data-toggle="modal" data-target="#add-work-modal" >
												<i class="fa fa-pencil-square-o"></i> Edit
											</a>
											<a href="#" class="action_buttons remove_button" data-toggle="modal" data-target="#delete-modal">
												<i class="fa fa-trash"></i> Remove
											</a>
										</td>
									</tr>
									<tr>
										<th scope="row">
											The Hurricane Hunter
										</th>
										
										<td>Biology</td>
										<td class="mob_off description_work">
											<p>Last week’s science news was dominated by robots, from the probe sent slamming into
												the lunar surface by Nasa to the crew setting out to map the world’s deepest oceans using
											underwater probes.</p>
										</td>
										
										<td class="vote_list"><a href="#" class="" data-toggle="modal" data-target="#add-work-modal" >
											<span>www.site.com</span> <i class="fa fa-external-link"></i>
										</a></td>
										<td class="action_delete">
											<a href="#" class="action_buttons edit_button" data-toggle="modal" data-target="#add-work-modal">
												<i class="fa fa-pencil-square-o"></i> Edit
											</a>
											<a href="#" class="action_buttons remove_button" data-toggle="modal" data-target="#delete-modal">
												<i class="fa fa-trash"></i> Remove
											</a>
										</td>
									</tr>
									
									
									
								</tbody>
							</table>
							<div class="button_center_more_def"><a href="" class="btn btn-secondary" data-toggle="modal" data-target="#add-work-modal" >Add Work</a></div>
						</div>
					</div>
					<div id="menu2" class="tab-pane fade">
						<div class="video_personal">
							<h2>My Video <span>(10)</span></h2>
							<div class="line_title_left"></div>
							<div class="row">




								<div class="col-md-3">
									<div class="">
										<a href="" class="remove_video" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i></a>
										<iframe width="" height="180" src="https://www.youtube.com/embed/c_OmbkaM4qE?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="">
										<a href="" class="remove_video" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i></a>
										<iframe width="" height="180" src="https://www.youtube.com/embed/yROROK-AmBI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="">
										<a href="" class="remove_video" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i></a>
										<iframe width="" height="180" src="https://www.youtube.com/embed/c7PbBG1B_IE?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="">
										<a href="" class="remove_video" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i></a>
										<iframe width="" height="180" src="https://www.youtube.com/embed/j-Eb7k87gO0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="button_center_more_def"><a href="" class="btn btn-secondary" data-toggle="modal" data-target="#add-video-modal">Add Video</a></div> 
						</div>
					</div>
					<div id="menu3" class="tab-pane fade">
						<div class="sett_tab">
							<div class="sett_tab_container">
								<div class="col-md-6 sett_tab_container_left">
									Email:
								</div>
								<div class="col-md-6 sett_tab_container_right">
									email@gmail.com
									<span><a href="">Chose</a></span>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div class="sett_tab_container">
								<div class="col-md-6 sett_tab_container_left">
									Password:
								</div>
								<div class="col-md-6 sett_tab_container_right">
									<input type="Password" >
									new password
									<input type="Password" >
									new password 2
								</div>
								<div class="clearfix"></div>
							</div>
							
							
							<div class="sett_tab_container">
								<div class="col-md-6 sett_tab_container_left">
									Acount:
								</div>
								<div class="col-md-6 sett_tab_container_right">
									<a href="" class="btn btn-danger">Delete</a>
								</div>
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="save_settings"><a href="scientist_login.php" class="btn btn-primary">Save</a></div>
			<div class="clearfix"></div>
			<br>
			<br>
			<br>
		</div>
	</div>
@endsection