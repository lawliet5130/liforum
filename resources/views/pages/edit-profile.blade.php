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
		@php //dd($errors->getMessages());  @endphp
		<div class="clearfix"></div>
		<div class="page_personal">
			<ul class="nav nav-tabs tabs_setting_profile">
				<li class="active"><a data-toggle="tab" href="#home">General Data</a></li>
				<li><a data-toggle="tab" href="#menu1">My Works</a></li>
				<li><a data-toggle="tab" href="#menu2">My Video</a></li>
				<li><a data-toggle="tab" href="#menu3">Settings</a></li>
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<form action="{{route('genDataEdit')}}" method="POST" class="genDataEdit" enctype="multipart/form-data">
						{{csrf_field()}}

						<br>
						<div class="col-md-3">
							<img src="/storage/{{$user->image}}" alt="" class="avatar_big">
							<div class="upload-box">
								<div class="hold"><a href="#">Maximum file size 100 KB</a> <span class="btn-file"> Browse File
									<input type="file" name="image">
								</span> </div>
							</div>
						</div>
						<div class="col-md-9 top_settings_general">
							<div class="col-md-6 settings_date">
								<input type="text" placeholder="Name" value="{{$user->name}}" name="name">
								<input type="text" placeholder="Surname" value="{{$user->surname}}" name="surname">
								<select class="form-control form-control-lg select_profile" name="branch_id" required>
									@foreach($branches as $branch)
									<option value="{{$branch->id}}" @if($branch->id==$user->branch_id) selected @endif>{{$branch->name}}</option>
									@endforeach
								</select>
								<select class="form-control form-control-lg select_profile" name="country_code" required>
									@foreach($countries as $country)
									<option value="{{$country->id}}" @if($country->id==$user->country_code) selected @endif>{{$country->name}}</option>
									@endforeach
								</select>
								<select class="form-control form-control-lg select_profile" name="gender" required>
									<option value="0" @if($user->gender['code']==0) selected @endif>Not set</option>
									<option value="1" @if($user->gender['code']==1) selected @endif>Male</option>
									<option value="2" @if($user->gender['code']==2) selected @endif>Female</option>
								</select>
								<input type="text" placeholder="Also Known As" name="knownas" value="{{$user->knownas}}">
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
						
					</form>
				</div>
				<div id="menu1" class="tab-pane fade">
					<div class="works_personal">
						<h2>My Works <span id="workCount">({{$user->works->count()}})</span></h2>
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
								@foreach($user->works->sortByDesc('created_at') as $work)
									<tr>
										<th scope="row">{{$work->title}}</th>

										<td>{{$work->branch->name}}</td>
										<td class="mob_off description_work">
											<p>{{$work->text}}</p>
										</td>

										<td class="vote_list"><a href="#" class="" >
											<span>{{$work->link}}</span> <i class="fa fa-external-link"></i>
										</a></td>
										<td class="action_delete">
											<a href="" data-itemid="{{$work->id}}" data-itemtitle="{{$work->title}}" data-itemtext="{{$work->text}}" data-itembranch="{{$work->branch_id}}" data-itemlink="{{$work->link}}" class="editOpen action_buttons edit_button" data-toggle="modal" data-target="#edit-modal" >
												<i class="fa fa-pencil-square-o"></i> Edit
											</a>
											<a href="#" data-todelete="{{$work->id}}" data-item="works" class="deleteOpen action_buttons remove_button" data-toggle="modal" data-target="#delete-modal">
												<i class="fa fa-trash"></i> Remove
											</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<div class="button_center_more_def"><a href="" class="btn btn-secondary" data-toggle="modal" data-target="#add-work-modal" >Add Work</a></div>
					</div>
				</div>
				<div id="menu2" class="tab-pane fade">
					<div class="video_personal">
						<h2>My Video <span>({{$user->videos->count()}})</span></h2>
						<div class="line_title_left"></div>
						<div class="row">
							@foreach($user->videos->sortByDesc('created_at') as $video)
							<div class="col-md-3">
								<div class="">
									<a href="" class="edit_video" data-toggle="modal" data-target="#edit-modal"></a>
									<a href="" class="remove_video" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-remove"></i></a>
									<a data-fancybox href="{{$video->link}}">
										<img class="card-img-top img-fluid" src="https://img.youtube.com/vi/{{str_limit(str_after($video->link,'watch?v='),11,'')}}/mqdefault.jpg"/>
									</a>
									<h4>{{$video->title}}</h4>
									<h5>{{$video->branch->name}}</h5>
									<p class="description_video_title">{{$video->description}}</p>
								</div>
							</div>
							@endforeach
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
		<div class="save_settings"><a href="scientist_login.php" id="saveGenData" class="btn btn-primary">Save</a></div>
		<div class="clearfix"></div>
		<br>
		<br>
		<br>
	</div>
</div>
<!-- BEGIN # MODAL add work profile -->
<div class="modal fade" id="add-work-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<i class="fa fa-plus-circle icon_big_popap"></i>
		</div>
		<form class="addWorkForm">
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Add work</p>
			<div class="text_area_modal">
				<div><input type="text" name="title" placeholder="Work's Name" required></div>
			</div>
			<div class="text_area_modal ">
				<select class="form-control form-control-lg select_profile" name="branch_id">
					@foreach($branches as $branch)
						<option value="{{$branch->id}}" @if($branch->id==$user->branch_id) selected @endif>{{$branch->name}}</option>
					@endforeach
				</select>
			</div>
			<div class=" text_area_modal">
			<textarea name="text" class="textarea_settings" placeholder="Description" required></textarea>
			</div>
			<div class="text_area_modal">
				<div><input type="text" name="link" placeholder="web link" required></div>
			</div>
			
			<button type="button" class="add_form_field" id="addWorkBtn">
			<span>Add</span>
			</button>
		</div>
		</form>
		<div class="">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- BEGIN # MODAL edit work profile -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<i class="fa fa-pencil-square-o icon_big_popap"></i>
		</div>
		<form class="editForm">
			<input type="hidden" name="id">
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Edit item</p>
			<div class="text_area_modal">
				<div><input type="text" name="title" placeholder="Item's Name" required></div>
			</div>
			<div class="text_area_modal ">
				<select class="form-control form-control-lg select_profile" name="branch_id">
					@foreach($branches as $branch)
						<option value="{{$branch->id}}">{{$branch->name}}</option>
					@endforeach
				</select>
			</div>
			<div class=" text_area_modal">
			<textarea name="text" class="textarea_settings" placeholder="Description" required></textarea>
			</div>
			<div class="text_area_modal">
				<div><input type="text" name="link" placeholder="web link" required></div>
			</div>
			
			<button type="button" class="add_form_field" id="editBtn">
			<span>Edit</span>
			</button>
		</div>
		</form>
		<div class="">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- BEGIN # MODAL delete -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<i class="fa fa-trash icon_big_popap_remove"></i>
		</div>
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Are you sure?</p>
			<form class="deleteItemForm">
				<input type="hidden" name="id">
				<input type="hidden" name="item">
				<button type="button" class="btn btn-danger add_form_field" id="deleteItemBtn" data-dismiss="modal" aria-label="Close">
					<span>Delete</span>
				</button>
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endsection
@section('add_scripts')
	<script type="text/javascript">
		@if($errors->getMessages())
			errors={@foreach($errors->getMessages() as $key=>$value) {{$key}}:"{{$value[0]}}",  @endforeach};
			console.log(errors);
			$(document).ready(function(){
				$.each(errors,function(key,value){
					$('.genDataEdit').find('[name='+key+']').css('border-color','red').after('<p style="color:red;font-size:10px;">'+value+'</p>');
				});
			});
		@endif
	</script>
	<script type="text/javascript">
		$('#saveGenData').click(function(e){
			e.preventDefault();
			$('.genDataEdit').submit();
		});

		$('#addWorkBtn').click(function(e){
			e.preventDefault();
			form=$('.addWorkForm');
			$.post("{{route('addWork')}}",{
				_token:'{{csrf_token()}}',
				data:form.serializeArray(),
			},function(data,status,request){
				if(data.errors){
					showErrors(form,data);
				}else{
					$(data).prependTo($('.table_work tbody'));
					$('#add-work-modal').modal('hide');
					setCount('work',1);
					form[0].reset();
					worksEventBind(request);
				}
			});
		});
		$('#editBtn').click(function(e){
			e.preventDefault();
			form=$('.editForm');
			$.post("{{route('editItem')}}",{
				_token:'{{csrf_token()}}',
				data:form.serializeArray()
			},function(data,status,request){
				if(data.errors){
					showErrors(form,data);
				}else{
					parent=$('[data-itemid='+form.find('[name=id]').val()+']').parents('tr');
					$prev=parent.prev('tr');
					$('[data-itemid='+form.find('[name=id]').val()+']').parents('tr').remove();
					if($prev.length){
						$prev.after(data);
					}else{
						$(data).prependTo($('.table_work tbody'));
					}
					$('#edit-modal').modal('hide');
					form[0].reset();
					worksEventBind(request);
				}
			});
		});

		$('#deleteBtn').click(function(e){
			e.preventDefault();
			form=$('.deleteItemForm');
			$.post("{{route('deleteItem')}}",{
				_token:"{{csrf_token()}}",
				id:form.find('[name=id]').val(),
				item:form.find('[name=item]').val()
			},function(data,status){
				if(data==1){
					setCount('work',-1);
					$('[data-workid='+form.find('[name=id]').val()+']').parents('tr').remove();
				}
			});
		});

		$(document).ready(function(){
			$('.editWorkOpen').on('click',editWorkOpen);
			$('.deleteItemOpen').on('click',deleteItemOpen);
		});

		function editOpen(){
			form=$('.editForm');
			$this=$(this);
			form.find('[name=title]').val($this.data("itemtitle"));
			form.find('[name=text]').val($this.data("itemtext"));
			form.find('[name=link]').val($this.data("itemlink"));
			form.find('[name=id]').val($this.data("itemid"));
			
			form.find('option[value='+$this.data("itembranch")+']').prop('selected','selected');
		};

		function deleteItemOpen(){
			form=$('.deleteItemForm');
			$this=$(this);
			form.find('[name=id]').val($this.data('todelete'));
			form.find('[name=item]').val($this.data('item'));
		};




		function setCount(item,by){
			$count=parseInt($('#'+item+'Count').text().replace(/[()]/g,''))+by;
			$('#'+item+'Count').text('('+$count+')');
		}

		function showErrors(form,data){
			$.each(data.errors,function(key,value){
				form.find('[name='+key+']').addClass('inputError').after('<p style="color:red;font-size:10px;">'+value+'</p>');
			});

			$('.inputError').on('change',function(){
				$(this).removeClass('inputError').next('p').fadeOut();
			});
		}

		function worksEventBind(request){
			$('.editWorkOpen[data-workid='+request.getResponseHeader('wid')+']').on('click',editWorkOpen);
			$('.deleteItemOpen[data-todelete='+request.getResponseHeader('wid')+']').on('click',deleteItemOpen);
		}
	</script>
@endsection