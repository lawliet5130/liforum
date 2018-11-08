@extends('layout')
@section('stype')
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

			<section class="title_page">
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
												<a href="{{route('scientistProfile',$sc->id)}}">{{$sc->name}} {{$sc->surname}}</a> <br> 
												<span><a href="knowledge.php?Genomics">{{$sc->branch->name}}</a></span>
											</div>
										</span>
									</th>
									
									<td>789</td>
									<td class="mob_off">58</td>
									<td class="mob_off">{{$sc->country->code}}</td>
									<td class="mob_off">{{$sc->works->count()}}</td>
									<td class="vote_list"><a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
										<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
									</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
@endsection