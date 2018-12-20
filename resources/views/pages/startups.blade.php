@extends('layout')
@section('title','Startups')
@section('style')
<style>
.nav-xbootstrap li:nth-child(4) a {
	background: #02243a;
	color: #00a0dd;
	border-bottom: 3px solid #00a0dd;
}
</style>
@endsection
@section('content')
<div class="page">
	<section class="title_page title_page_startups">
		<div class="container">
			<h1><span>DAYS Investment council have preselected the most promising longevity and digital health companies to be rated by Scientists.</span></h1>
		</div>
	</section>
	<div class="container">
		@include('partials.breadcrumbs')
		<div class="clearfix"></div>

		<div class="description_page">Longevity Impact Forum gathering top life science experts in disruptive biotech, longevity and digital health technologies. <br>Final goals of Longevity Impact Forum are to create the Rating of longevity technologies and to select the Scientific panel (top-100 life science experts).
		</div>

		<div class="col-md-12 list_page">
			<div class="col-md-6  title_page_left">
				<h2>Rating of Startups:</h2>
				<div class="line_title_left"></div>
			</div>
			<div class="col-md-6  search_page_right">
				<form class="example" action="/action_page.php" style="margin:auto;max-width:300px; display: inline-flex;">
					<input type="text" placeholder="Search.." name="search2">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<div class="clearfix"></div>

			<ul class="list_startups">
				@foreach($startups as $sup)
				<li class="">
					<div class="ratingposition_home_startup">
						<p>{{$loop->iteration}}</p>
						<a href="{{$sup->cb_link}}" target="blank">
							<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
							</svg>
						</a>
					</div>
					<div class="name_home_startup_center">
						<p class="name_home_startup">
							<a class="tit_list_startup" href="{{route('getStartup',['stup'=>$sup->id])}}">{{$sup->title}}</a>
							
							
						</p>
						<p class="domeniu_home_startup"><a href="knowledge.php?Biotech">{{$sup->branch->name}}</a></p>
						<a href="{{route('getStartup',['stup'=>$sup->id])}}" class="view_startup_button" target="blank">View startup</a>
					</div>
					<div class="rating_home_startup">
						<div class="rate_startuplist_top">	
						
						<p class="name_date ">Rating</p>
						<span>	<img src="img/cupa.png" alt=""></span>
						<span class="number_date voteCounter numb_date_bl_ratt" data-vcount="{{$sup->scientists_count}}">{{$sup->scientists_count}}</span>
						</div>
						<div class="rate_startuplist_bottom">	

						@if(\Auth::guard('scientist')->check())
							@if(\Auth::guard('scientist')->user()->startups->contains('id',$sup->id))
								<span class="supVoted voted_button_startap" >voted</span>
							@else
								<span class="supVoted voted_button_startap" style="display: none;">voted</span>
								<button class="vote_button_startap" data-tovote="{{$sup->id}}" data-toggle="modal" data-target="#checkVote">vote!</button>
							@endif
						@endif
						</div>
					</div>
					<div class="clearfix"></div>
				</li>
				@endforeach
				</ul>

			</div>

		</div>
	</div>

	<div class="modal fade" id="checkVote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>

		<div class="accept_confirm_vote">	

		<p>Accept <a href="/documents/concepts_longevity_ranking_codex.pdf" target="_blank">methodology</a> </p>
		<input type="checkbox" name="voteRulesCheck" required>
		</div>

			
			<button type="button" data-startup="0" class="btn add_form_field" data-dismiss="modal" aria-label="Close" disabled>
			<span>I am sure!</span>
			</button>
			
		</div>
		<div class="">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	@endsection
	@section('add_scripts')
		<script type="text/javascript">
			$('button[data-tovote]').click(function(){
				$('button[data-startup]').data('startup',$(this).data('tovote'));
			});

			$('input[name=voteRulesCheck]').click(function(){
				if($(this).is(':checked')){
					$('button[data-startup]').prop('disabled',false);
				}else{
					$('button[data-startup]').prop('disabled',true);
				}
			});

			$('button[data-startup]').click(function(){
				$this=$(this);
				$startup=$this.data('startup');
				$.post("{{route('voteStartup')}}",{
					_token:"{{csrf_token()}}",
					startup:$startup
				},function(data,status){
					if(data=="success"){
						parent=$('button[data-tovote='+$startup+']').parents('li');
						$('button[data-tovote='+$startup+']').fadeOut();
						parent.find('.supVoted').delay(400).fadeIn();
						parent.find('.voteCounter').text(parent.find('.voteCounter').data('vcount')+1);
					}else if(data[0]=="fraud"){
						window.location.href=data[1];
					}
				});
			});
		</script>
	@endsection