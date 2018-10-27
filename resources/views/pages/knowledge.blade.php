@extends('layout')
@section('style')
	<style>
	.nav-xbootstrap li:nth-child(3) a {
	background: #f8f8f8;
	color: #2ecaf7;
	border-bottom: 3px solid #2ecaf7;
	}
	</style>
@endsection
@section('content')
		<div class="page">
			<section class="title_page search_title">
				<div class="container">
					<div class="col-md-3 partener_logo_head wow fadeInUp">
						<img src="img/part1.png" alt="" class=" " >
					</div>
					<div class="col-md-6">
					<h1><span>Search by tiping name or technology<br>
						<div class="wrap-select">
							<div id="dd" class="wrapper-dropdown-3">
								<span>Select Category</span>
								<ul class="dropdown">
									<li><a href="#">Scientists</a></li>
									<li><a href="#">Startups</a></li>
									<li><a href="#">Video</a></li>
								</ul>
							</div>
						</div>
						<form class="example head_search" id="live-search" method="post" action="" style="margin:auto; display: inline-flex;">
							<input type="text" placeholder="Search.." value="" name="search2" id="filter">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					
					</span>
					</h1>
					</div>
					<div class="col-md-3 partener_logo_head wow fadeInUp">
						<img src="img/part2.png" alt="" class="" >
					</div>
				</div>
			</section>
			<div class="container">
				<div class="col-md-6  title_page_left">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>Knowledge</li>
					</ul>
				</div>
				<div class="col-md-6  search_page_right">
					
					
				</div>
				<div class="clearfix"></div>
				
				
				
				<div class="list_page_scientists">
					<div class=" table_scientists">
						<h2>Scientists <span>(10)</span></h2>
						<div class="line_title_left"></div>
						<table class="table">
							<thead>
								<tr class="top_list_display top_list_display_scientist">
									<th scope="col">Name</th>
									
									<th scope="col">Rating</th>
									<th scope="col" class="mob_off">Voted startups</th>
									<th scope="col" class="mob_off">Country</th>
									<th scope="col" class="mob_off">Works</th>
									<th scope="col">Vote</th>
								</tr>
							</thead>
							<tbody class="results_search_scientist">
								<tr>
									<th scope="row">
										<span>1</span>
										<img src="img/scientists/6.png" alt="">
										<span>
											<div class="name_specialy_blok">
												<a href="scientist.php">David Sinclair</a> <br>
												<span><a href="knowledge.php?Genomics">Genomics</a></span>
											</div>
										</span>
									</th>
									
									<td>589</td>
									<td class="mob_off">58</td>
									<td class="mob_off">UK</td>
									<td class="mob_off">2</td>
									<td class="vote_list"><a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
										<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
									</a></td>
								</tr>	
								<tr>
									<th scope="row">
										<span>2</span>
										<img src="img/scientists/1.png" alt="">
										<span>
											<div class="name_specialy_blok">
												<a href="scientist.php">Richard Dawkins</a> <br>
												<span><a href="knowledge.php?Biology">Biology</a></span>
											</div>
										</span>
									</th>
									
									<td>589</td>
									<td class="mob_off">58</td>
									<td class="mob_off">UK</td>
									<td class="mob_off">10</td>
									<td class="vote_list"><a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
										<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
									</a></td>
								</tr>
								<tr>
									<th scope="row">
										<span>3</span>
										<img src="img/scientists/2.png" alt="">
										<span>
											<div class="name_specialy_blok">
												<a href="scientist.php">J.Craig Venter</a> <br>
												<span><a href="knowledge.php?Genomics">Genomics</a></span>
											</div>
										</span>
									</th>
									<td>589</td>
									<td class="mob_off">58</td>
									<td class="mob_off">USA</td>
									<td class="mob_off">10</td>
									<td class="vote_list"><a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
										<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
									</a></td>
								</tr>
							
								<tr>
									<th scope="row">
										<span>4</span>
										<img src="img/scientists/4.png" alt="">
										<span>
											<div class="name_specialy_blok">
												<a href="scientist.php">William C. Campbell</a> <br>
												<span><a href="knowledge.php?Biology">Biology</a></span>
											</div>
										</span>
									</th>
									
									<td>589</td>
									<td class="mob_off">58</td>
									<td class="mob_off">USA</td>
									<td class="mob_off">10</td>
									<td class="vote_list"><a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
										<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
									</a></td>
								</tr>
								<tr>
									<th scope="row">
										<span>5</span>
										<img src="img/scientists/5.png" alt="">
										<span>
											<div class="name_specialy_blok">
												<a href="scientist.php">Yoshinori Ohsumi</a> <br>
												<span><a href="knowledge.php?Biology">Biology</a></span>
											</div>
										</span>
									</th>
									
									<td>589</td>
									<td class="mob_off">58</td>
									<td class="mob_off">JP</td>
									<td class="mob_off">10</td>
									<td class="vote_list"><a href="#" class="btn btn-secondary" role="button" data-toggle="modal" data-target="#log-u-modal">
										<i class="fa fa-thumbs-up"> </i> <span>VOTE</span>
									</a></td>
								</tr>			
							
								
								
							</tbody>
						</table>
						<div class="btn btn-secondary more">More</div>

						<div class="no_results no_scientist">No results Scietists</div>

					</div>
				</div>
				<div class="works_personal">
					<h2>Works <span>(20)</span></h2>
					<div class="line_title_left"></div>
					<table class="table table_work">
						<thead>
							<tr class="top_list_display top_list_display_work">
								<th scope="col">Name Work</th>
								<th scope="col">Domain</th>
								<th scope="col" class="mob_off">Description work</th>
								<th scope="col">Source</th>
							</tr>
						</thead>
						<tbody class="results_search_work">
							<tr>
								<th scope="row">
									When stem cells grow old: phenotypes and mechanisms of stem cell aging. 
									<span class="name_autor_work">
										<img src="img/scientists/6.png" alt="" class="small_pic">
										<a href="scientist.php">Sinclair D.A.</a>
									</span>
								</th>
								
								<td class="domain_works_list"><a href="knowledge.php?Cell+biology">Cell biology</a></td>
								<td class="mob_off description_work">
									<p>Recent advances in our understanding of why adult stem cells age and how this aging impacts diseases and lifespan. With this increased understanding, it is feasible to design and test interventions that delay stem cell aging and improve both health and lifespan </p>
								</td>
								
								<td class="vote_list">
									<a href="https://www.ncbi.nlm.nih.gov/pubmed/26732838" class="" target="blank">
									<span>view project</span> <i class="fa fa-external-link"></i>
									</a>
								</td>
							</tr>
							<tr>
								<th scope="row">
									SIRT2 induces the checkpoint kinase BubR1 to increase lifespan.
									<span class="name_autor_work">
										<img src="img/scientists/6.png" alt="" class="small_pic">
										<a href="scientist.php">Sinclair D.A.</a>
									</span>
								</th>
								
								<td class="domain_works_list"><a href="knowledge.php?Genomics">Genomics</a></td>
								<td class="mob_off description_work">
									<p>Overexpression of SIRT2 or treatment of mice with the NAD(+) precursor nicotinamide mononucleotide (NMN) increases BubR1 abundance in vivo. Overexpression of SIRT2 in BubR1(H/H) animals increases median lifespan, with a greater effect in male mice. Together, these data indicate that further exploration of the potential of SIRT2 and NAD(+) to delay diseases of aging in mammals is warranted.</p>
								</td>
								
								<td class="vote_list"><a href="https://www.ncbi.nlm.nih.gov/pubmed/24825348" class="" target="blank">
									<span>view project</span> <i class="fa fa-external-link"></i>
								</a></td>
							</tr>	
							<tr>
								<th scope="row">
									History of avermectin and ivermectin, with notes on the history of other macrocyclic lactone antiparasitic agents.
									<span class="name_autor_work">
										<img src="img/scientists/4.png" alt="" class="small_pic">
										<a href="scientist.php">William C. Campbell</a>
									</span>
								</th>
								
								<td class="domain_works_list"><a href="knowledge.php?Pharmacology">Pharmacology</a></td>
								<td class="mob_off description_work">
									<p>History of avermectin and ivermectin, with notes on the history of other macrocyclic lactone antiparasitic agents.  Campbell’s group showed that Avermectin B1 had potency and safety superior to all known antihelminthic therapies at the time, capable of resolving a wide variety of animal nematode (roundworm) infections. The special applications in human medicine were developed, and were successfully implemented in partnership with World Health Organization.</p>
								</td>
								
								<td class="vote_list"><a href="https://www.ncbi.nlm.nih.gov/pubmed/22039784" class="" target="blank">
									<span>view project</span> <i class="fa fa-external-link"></i>
								</a></td>
							</tr>
							<tr>
								<th scope="row">
									The Sequence of the Human Genome.
									<span class="name_autor_work">
										<img src="img/scientists/2.png" alt="" class="small_pic">
										<a href="scientist.php">J. Craig Venter</a>
									</span>
								</th>
								
								<td class="domain_works_list"><a href="knowledge.php?Genomics">Genomics</a></td>
								<td class="mob_off description_work">
									<p>Our first human genome sequence article, featured here, represented a significant scientific milestone not just because it was the first human genome sequence. The method used to sequence the genome—the whole-genome shotgun (WGS) strategy—was at the time considered radical</p>
								</td>
								
								<td class="vote_list"><a href="http://clinchem.aaccjnls.org/content/61/9/1207.short" class="" target="blank">
									<span>view project</span> <i class="fa fa-external-link"></i>
								</a></td>
							</tr>


							
							
							
						</tbody>
					</table>
					<!--div class="button_center_more_def"><a href="" class="btn btn-secondary">More Works</a>
				</div-->
				<div class="no_results no_work">No results Works</div>
			</div>
			<div class="list_page_startups">
				<div class=" table_scientists">
					<h2>Startups <span>(5)</span></h2>
					<div class="line_title_left"></div>
					<ul class="list_startups">
						<li class="" data-wow-duration="1s">
							<div class="ratingposition_home_startup">
								<p>1</p>
								<a href="https://www.crunchbase.com/organization/retrotope" target="blank">
								<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
							</svg>
						</a>
					</div>
					<div class="name_home_startup_center">
						<p class="name_home_startup">Retrotope.com
							<a href="http://retrotope.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i>
							</a>
						</p>
						<p class="domeniu_home_startup"><a href="knowledge.php?AI">AI</a></p>
					</div>
					<div class="rating_home_startup">
						<i class="fa fa-star"></i>
						<p class="name_date">Rating</p>
						<p class="number_date">589</p>
					</div>
					<div class="clearfix"></div>
				</li>
				<li class="" data-wow-duration="1s">
					<div class="ratingposition_home_startup">
						<p>2</p>
						<a href="https://www.crunchbase.com/organization/retrotope" target="blank">
						<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
					</svg>
				</a>
			</div>
			<div class="name_home_startup_center">
				<p class="name_home_startup">Bioviva-Sciences.com
					<a href="http://bioviva-Sciences.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i>
					</a>
				</p>
				<p class="domeniu_home_startup"><a href="knowledge.php?Gene+therapy">Gene therapy</a></p>
			</div>
			<div class="rating_home_startup">
				<i class="fa fa-star"></i>
				<p class="name_date">Rating</p>
				<p class="number_date">577</p>
			</div>
			<div class="clearfix"></div>
		</li>
		<li class="" data-wow-duration="1s">
			<div class="ratingposition_home_startup"><p>3</p></div>
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
		<li class="" data-wow-duration="1s">
			<div class="ratingposition_home_startup"><p>4</p></div>
			<div class="name_home_startup_center">
				<p class="name_home_startup">Insilico.com
					<a href="http://insilico.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
				</p>
				<p class="domeniu_home_startup"><a href="knowledge.php?Drug+discovery">Drug discovery</a></p>
			</div>
			<div class="rating_home_startup">
				<i class="fa fa-star"></i>
				<p class="name_date">Rating</p>
				<p class="number_date">520</p>
			</div>
			<div class="clearfix"></div>
		</li>
		<li class="" data-wow-duration="1s">
			<div class="ratingposition_home_startup"><p>5</p></div>
			<div class="name_home_startup_center">
				<p class="name_home_startup">Advancells.com
					<a href="http://advancells.com" class="view_startup_button" target="blank">View startup<i class="fa fa-external-link"></i></a>
				</p>
				<p class="domeniu_home_startup"><a href="knowledge.php?Stem+cell+therapy">Stem cell therapy</a></p>
			</div>
			<div class="rating_home_startup">
				<i class="fa fa-star"></i>
				<p class="name_date">Rating</p>
				<p class="number_date">502</p>
			</div>
			<div class="clearfix"></div>
		</li>
		
	</ul>
	<div class="no_results no_startup">No results Startups</div>
</div>
</div>
<div class="video_list">
<div class=" table_scientists">
	<h2>Video <span>(5)</span></h2>
	<div class="line_title_left"></div>
					<div class="row">
						<div class="col-md-3">
							<iframe width="" height="180" src="https://www.youtube.com/embed/c_OmbkaM4qE?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<p class="description_video_title">
											Lorem AI ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
						</div><div class="col-md-3">
							<iframe width="" height="180" src="https://www.youtube.com/embed/yROROK-AmBI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					
						<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
					</div><div class="col-md-3">
					<iframe width="" height="180" src="https://www.youtube.com/embed/c7PbBG1B_IE?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
				</div><div class="col-md-3">
				<iframe width="" height="180" src="https://www.youtube.com/embed/j-Eb7k87gO0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<p class="description_video_title">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, deleniti quam pariatur officia iure sit impedit quos, debitis numquam consectetur neque recusandae eveniet dolorum vel!
										</p>
			</div>
		</div>
</div>
<div class="no_results no_video">No results Video</div>
</div>
</div>
</div>
@endsection
@section('add_scripts')

@endsection

