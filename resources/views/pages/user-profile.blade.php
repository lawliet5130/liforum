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
					<h2>Voted <span>(10)</span></h2>
					<div class="line_title_left"></div>
					<ul class="list_startups_individual">
						<li class="wow fadeInRight" data-wow-duration="1s">
							<div class="ratingposition_home_startup">
								<p class="pe_cine_votat"><img src="img/scientists/6.png" alt="" class="avatar_big"></p>
								<p class="arrow_pecine">
									<i class="fa fa-thumbs-up"></i>
								</p>
								<a href="https://www.crunchbase.com/organization/retrotope" target="blank">
								<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
										</svg>
									</a>
								</div>
								<div class="name_home_startup_center">
									<p class="name_home_startup">Retrotope.com <a href="http://retrotope.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a></p>
									<p class="domeniu_home_startup"><a href="knowledge.php?Biotech">Biotech</a></p>
								</div>
								<div class="rating_home_startup">
									<i class="fa fa-star"></i>
									<p class="name_date">Rating</p>
									<p class="number_date">589</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li class="wow fadeInRight" data-wow-duration="1s">
								<div class="ratingposition_home_startup">
									<p class="pe_cine_votat"><img src="img/scientists/6.png" alt="" class="avatar_big"></p>
								<p class="arrow_pecine">
									<i class="fa fa-thumbs-up"></i>
								</p>
									<a href="https://www.crunchbase.com/organization/retrotope" target="blank">
									<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
								</svg>
							</div>
							<div class="name_home_startup_center">
								<p class="name_home_startup">Bioviva-Sciences.com <a href="http://bioviva-Sciences.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a></p>
								<p class="domeniu_home_startup"><a href="knowledge.php?Gene+therapy">Gene therapy</a></p>
							</div>
							<div class="rating_home_startup">
								<i class="fa fa-star"></i>
								<p class="name_date">Rating</p>
								<p class="number_date">577</p>
							</div>
							<div class="clearfix"></div>
						</li>
						<li class="wow fadeInRight" data-wow-duration="1s">
							<div class="ratingposition_home_startup">
								<p class="pe_cine_votat"><img src="img/scientists/6.png" alt="" class="avatar_big"></p>
								<p class="arrow_pecine">
									<i class="fa fa-thumbs-up"></i>
								</p>
							</div>
							<div class="name_home_startup_center">
								<p class="name_home_startup">Nebula.org
									<a href="http://nebula.org" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
								</p>
								<p class="domeniu_home_startup"><a href="knowledge.php?Gene+therapy">Gene therapy</a></p>
							</div>
							<div class="rating_home_startup">
								<i class="fa fa-star"></i>
								<p class="name_date">Rating</p>
								<p class="number_date">550</p>
							</div>
							<div class="clearfix"></div>
						</li>
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