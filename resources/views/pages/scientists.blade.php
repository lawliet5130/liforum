@extends('layout')
@section('title','Scientists')
@section('style')
	<style>
	.nav-xbootstrap li:nth-child(2) a {
	background: #02243a;
	color: #2ecaf7;
	border-bottom: 3px solid #2ecaf7;
	}
	</style>
@endsection
@section('content')
		<div class="page">

			<section class="title_page title_page_scientist">
				<div class="container">
					<h1><span>Rating of scientists top 100 <br> Top longevity experts</span></h1>
				</div>
			</section>


			<div class="container">
			@include('partials.breadcrumbs')
				<div class="col-md-6  search_page_right">
					<form class="example" id="live-search" method="post" action="" style="margin:auto;max-width:300px; display: inline-flex;">
						<input type="text" placeholder="Search.." name="search2" id="filter">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>

					
				</div>
				<div class="clearfix"></div>
				
				
				
				<div class="list_page_scientists">
					<div class=" table_scientists">
						<table class="table">
							<thead>
								<tr class="top_list_display">
									<th scope="col">Name</th>
									
									<th scope="col">Ranking</th>
									<th scope="col" class="mob_off">Voted startups</th>
									<th scope="col" class="mob_off">Country</th>
									<th scope="col" class="mob_off">Works</th>
									<th scope="col">Vote</th>
								</tr>
							</thead>
							<tbody>
								@foreach($scs as $sc)
								<tr>
									<th scope="row">
										<span>{{$loop->iteration}}</span>
										<img src="{{Voyager::image($sc->thumbnail('square','image'))}}" alt="">
										<span>
											<div class="name_specialy_blok">
												<a href="{{route('scientistProfile',$sc->id)}}">{{$sc->getFullName()}}</a> <br> 
												<span><a href="knowledge.php?Genomics">{{$sc->branch->name}}</a></span>
											</div>
										</span>
									</th>
									<td class="voteCounter" data-vcount='{{$sc->users_count}}'>{{$sc->users_count}}</td>
									<td class="mob_off">{{$sc->startups_count}}</td>
									<td class="mob_off">{{$sc->country->code}}</td>
									<td class="mob_off">{{$sc->works->count()}}</td>
									<td class="vote_list">
										@if(\Auth::guard('fb')->check())
											@if(\Auth::guard('fb')->user()->scientists->contains('id',$sc->id))
												<span>Voted</span>
											@else
												<span class="scientistVoted" style="display: none;">Voted</span>
												<a data-scientist="{{$sc->id}}" class="btn btn-secondary">
													<i class="fa fa-thumbs-up"></i><span>VOTE</span>
												</a>
											@endif
										@else
											<a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
												<i class="fa fa-thumbs-up"></i><span>VOTE</span>
											</a>
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('add_scripts')
	<script>
		$('[data-scientist]').click(function(e){
			e.preventDefault();
			$this=$(this);
			parent=$this.parents('tr');
			$scientist=$this.data('scientist');
			$.post("{{route('voteScientist')}}",
			{
				_token:'{{csrf_token()}}',
				scientist:$scientist,
			},function(data,status){
				if(data=='success'){
					parent.find('.voteCounter').text(parent.find('.voteCounter').data('vcount')+1);
					$this.fadeOut();
					parent.find('.scientistVoted').delay(400).fadeIn();
				}else if(data[0]=="fraud"){
					window.location.href=data[1];
				}
			});
		});
	</script>
@endsection