@extends('layout')
@section('title','My profile')
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
					<div class="col-md-3">
						<!--div class="top_icon">
							<img src="img/top_icon.png" alt="">
						</div-->
						<img src="/storage/{{$user->avatar}}" alt="" class="avatar_big">
					</div>
					<div class="col-md-5 date_person_1">
						<p class="name_personal">{{$user->name}}</p>
						<p class="special_personal"><span>User</span></p>
						<div class="clearfix"></div>

						<div class="sharethis-inline-share-buttons "></div>

					</div>
					<div class="col-md-4 links_soc_prof">
						<div class="clearfix"></div>
						<div class="ranting_individual_user">
							<p>Rating</p>
							<div class="rating_container">	
								@for($i=1;$i<=5;$i++)
								<span class="fa fa-star @if($i<=$user->getStars()) checked @endif "></span>
								@endfor
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--div class="text_personal">
					<div class="text-container">
						
						<div class="truncate">
							<p>David A. Sinclair, Ph.D. is a Professor in the Department of Genetics at Harvard Medical School and co-Director of the Paul F. Glenn Center for the Biological Mechanisms of Aging. He is best known for his work on understanding why we age and how to slow its effects. He contributed to the understanding of how sirtuins are modulated by endogenous molecules and pharmacological agents such as resveratrol. Dr. Sinclair is co-founder of several biotechnology companies (Sirtris, Ovascience, Genocea, Cohbar, MetroBiotech, ArcBio, Liberty Biosecurity) and is on the boards of several others. He is also co-founder and co-chief editor of the journal Aging. His work is featured in five books, two documentary movies, 60 Minutes, Morgan Freeman’s “Through the Wormhole” and other media. He is an inventor on 35 patents and has received more than 25 awards and honors including the CSL Prize, The Australian Commonwealth Prize, Thompson Prize, Helen Hay Whitney Postdoctoral Award, Charles Hood Fellowship, Leukemia Society Fellowship, Ludwig Scholarship, Harvard-Armenise Fellowship, American Association for Aging Research Fellowship, Nathan Shock Award from the National Institutes of Health, Ellison Medical Foundation Junior and Senior Scholar Awards, Merck Prize, Genzyme Outstanding Achievement in Biomedical Science Award, Bio-Innovator Award, David Murdock-Dole Lectureship, Fisher Honorary Lectureship, Les Lazarus Lectureship, Australian Medical Research Medal, The Frontiers in Aging and Regeneration Award, Top 100 Australian Innovators, and TIME magazine’s list of the “100 most influential people in the world”.
						</div>
					</div>
				</div-->
				<div class="voted_personal" id="voted_personal">
					<h2>Voted <span>({{$user->scientists->count()}})</span></h2>
					<div class="line_title_left"></div>
					<ul class="list_startups_individual">
						@foreach($user->scientists->sortByDesc('created_at') as $sc)
							<li class="wow fadeInRight" data-wow-duration="1s">
								<div class="ratingposition_home_startup">
									<p class="pe_cine_votat"><img src="/storage/{{$user->avatar}}" alt="" class="avatar_big"></p>
									<p class="arrow_pecine">
										<i class="fa fa-thumbs-up"></i>
									</p>
									<p class="pe_cine_votat"><img src="{{Voyager::image($sc->thumbnail('square','image'))}}" alt="" class="avatar_big"></p>
								</div>
								<div class="name_home_startup_center">
									<a href="{{route('scientistProfile',['scientists'=>$sc->id])}}"><p class="name_home_startup">{{$sc->getFullName()}}</p></a>
									<p class="domeniu_home_startup"><a href="knowledge.php?Biotech">{{$sc->branch->name}}</a></p>
								</div>
								<div class="rating_home_startup">
									<i class="fa fa-star"></i>
									<p class="name_date">Rating</p>
									<p class="number_date">{{$sc->users_count}}</p>
								</div>
								<div class="clearfix"></div>
							</li>
						@endforeach
					</ul>
					<div class="button_center_more_def"><a href="" class="btn btn-secondary">More Voted</a></div>
				</div>				
				<div class="works_personal">
					<h2>Works <span>(2)</span></h2>
					<div class="line_title_left"></div>
					<table class="table table_work">
						<thead>
							<tr class="top_list_display">
								<th scope="col">Name Work</th>
								<th scope="col">Domain</th>
								<th scope="col" class="mob_off">Description work</th>
								<th scope="col">Source</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">
									When stem cells grow old: phenotypes and mechanisms of stem cell aging. 
								</th>
								
								<td><span><a href="knowledge.php?Cell+biology">Cell biology</a></span></td>
								<td class="mob_off description_work">
									<p>Recent advances in our understanding of why adult stem cells age and how this aging impacts diseases and lifespan. With this increased understanding, it is feasible to design and test interventions that delay stem cell aging and improve both health and lifespan </p>
								</td>
								
								<td class="vote_list"><a href="https://www.ncbi.nlm.nih.gov/pubmed/26732838" class="" target="blank">
									<span>view project</span> <i class="fa fa-external-link"></i>
								</a></td>
							</tr>
							<tr>
								<th scope="row">
									SIRT2 induces the checkpoint kinase BubR1 to increase lifespan.
								</th>
								
								<td><span><a href="knowledge.php?Genomics">Genomics</a></span></td>
								<td class="mob_off description_work">
									<p>Overexpression of SIRT2 or treatment of mice with the NAD(+) precursor nicotinamide mononucleotide (NMN) increases BubR1 abundance in vivo. Overexpression of SIRT2 in BubR1(H/H) animals increases median lifespan, with a greater effect in male mice. Together, these data indicate that further exploration of the potential of SIRT2 and NAD(+) to delay diseases of aging in mammals is warranted.</p>
								</td>
								
								<td class="vote_list"><a href="https://www.ncbi.nlm.nih.gov/pubmed/24825348" class="" target="blank">
									<span>view project</span> <i class="fa fa-external-link"></i>
								</a></td>
							</tr>
							
							
							
							
						</tbody>
					</table>
					<div class="button_center_more_def"><a href="" class="btn btn-secondary">More Works</a></div>
				</div>
</div>
</div>
@endsection