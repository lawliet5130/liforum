@extends('layout')
@section('title','Edit works')
@section('style')
<style>
.nav-xbootstrap li:nth-child(2) a {
	background: #02243a;
	color: #00a0dd;
	border-bottom: 3px solid #00a0dd;
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
				<div id="menu1">
					<div class="works_personal">
						<h2>My Works <span id="worksCount">({{$user->works->count()}})</span></h2>
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
							<tbody class="worksParent itemParent">
								@foreach($user->works->sortByDesc('created_at') as $work)
									<tr class=" itemHimself">
										<th scope="row">{{$work->title}}</th>

										<td>{{$work->branch->name}}</td>
										<td class="mob_off description_work">
											<p>{{str_limit($work->text,200)}}</p>
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
						<div class="button_center_more_def"><a href="" class="btn btn-secondary addOpen" data-item="works" data-toggle="modal" data-target="#add-modal" >Add Work</a></div>
					</div>
				</div>
		<div class="clearfix"></div>
		<br>
		<br>
		<br>
	</div>
</div>
<!-- BEGIN # MODAL add work profile -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<i class="fa fa-plus-circle icon_big_popap"></i>
		</div>
		<form class="addForm">
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Add item</p>
			<div class="text_area_modal">
				<div><input type="text" name="title" placeholder="Item's Name" required></div>
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
			
			<button type="button" class="add_form_field" id="addBtn">
			<span>Add</span>
			</button>
		</div>
		</form>
		<div class="">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- BEGIN # MODAL edit profile -->
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
			<form class="deleteForm">
				<input type="hidden" name="id">
				<button type="button" class="btn btn-danger add_form_field" id="deleteBtn" data-dismiss="modal" aria-label="Close">
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

		$('#addBtn').click(function(e){
			e.preventDefault();
			form=$('.addForm');
			$.post("{{route('userAddWork')}}",{
				_token:'{{csrf_token()}}',
				data:form.serializeArray(),
			},function(data,status,request){
				if(data.errors){
					showErrors(form,data);
				}else{
					$(data).prependTo($('.itemParent'));
					$('#add-modal').modal('hide');
					setCount('works',1);
					form[0].reset();
					eventsBind(request);
				}
			});
		});
		$('#editBtn').click(function(e){
			e.preventDefault();
			form=$('.editForm');
			$.post("{{route('userEditWork')}}",{
				_token:'{{csrf_token()}}',
				data:form.serializeArray()
			},function(data,status,request){
				if(data.errors){
					showErrors(form,data);
				}else{
					parent=$('[data-itemid='+request.getResponseHeader('iid')+']').parents('.itemHimself');
					gParent=parent.parents('.itemParent');
					$prev=parent.prev('.itemHimself');
					$('[data-itemid='+request.getResponseHeader('iid')+']').parents('.itemHimself').remove();
					if($prev.length){
						$prev.after(data);
					}else{
						$(data).prependTo(gParent);
					}
					$('#edit-modal').modal('hide');
					form[0].reset();
					eventsBind(request);
				}
			});
		});

		$('#deleteBtn').click(function(e){
			e.preventDefault();
			form=$('.deleteForm');
			$.post("{{route('userDeleteWork')}}",{
				_token:"{{csrf_token()}}",
				id:form.find('[name=id]').val(),
			},function(data,status){
				if(data){
					setCount('works',-1);
					$('[data-todelete='+data.iid+']').parents('.itemHimself').remove();
				}
			});
		});

		$(document).ready(function(){
			$('.editOpen').on('click',editOpen);
			$('.deleteOpen').on('click',deleteOpen);
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

		function deleteOpen(){
			form=$('.deleteForm');
			$this=$(this);
			form.find('[name=id]').val($this.data('todelete'));
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

		function eventsBind(request){
			$('.editOpen[data-itemid='+request.getResponseHeader('iid')+'][data-item='+request.getResponseHeader('item')+']').on('click',editOpen);
			$('.deleteOpen[data-todelete='+request.getResponseHeader('iid')+'][data-item='+request.getResponseHeader('item')+']').on('click',deleteOpen);
		}
	</script>
@endsection