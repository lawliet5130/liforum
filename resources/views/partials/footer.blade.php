<footer class="ng-star-inserted">
	<div class="container">
		<div class="">
			
			<div class="hide-print cb-margin-large-vertical cb-overflow-y-only layout-row layout-align-center-stretch">
				<div class="footer-wrapper layout-row layout-wrap flex-gt-sm-noshrink">
					<div class="col-md-4">
						<img class="logo" src="/img/logo_footer.png" alt="">
						<h5>Stay Connected</h5>
						<ul class="cb-margin-medium-right">
							<li>
								<a rel="noopener" aria-label=" News" href="news.php">  News </a>
							</li>
							<li>
								<a  aria-label="Subscribe" href="" role="button" data-toggle="modal" data-target="#subscribe-modal"> Subscribe to the  Daily </a>
							</li>
							<li class="cb-margin-medium-top">
								<a href=""><i class="fa fa-facebook-official"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-instagram"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
								
								
							</li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="col-md-4">
							<h5>Who We Are</h5>
							<ul class="cb-margin-medium-right">
								<li>
									<a rel="noopener" target="" aria-label="Company" href="404.php"> 404 Page </a>
								</li>
								<li>
									<a rel="noopener" target="" aria-label="Careers" href="map_site.php"> Map site </a>
								</li>
								<li>
									<a rel="noopener" target="_blank" aria-label="Partners" href=""> Partners </a>
								</li>
								<li>
									<a rel="noopener" target="_blank" aria-label="Advertise" href="{{route('getHome',['#advr'])}}"> Advertise </a>
								</li>
								<li>
									<a rel="noopener" target="_blank" aria-label="Blog" href=""> Blog </a>
								</li>
								<li>
									<a rel="noopener" target="_blank" aria-label="Contact Us" href=""> Contact Us </a>
								</li>
							</ul>
						</div>
						
						<div class="col-md-4">
							<h5>Popular Links</h5>
							<ul class="cb-margin-medium-right">
								<li><a aria-label="Top Scientists" href="{{route('getScList')}}">Top Scientists</a></li>
								<li><a aria-label="Best longevity companies" href="{{route('getStartups')}}">Best longevity companies</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h5>Contacts</h5>
							<ul class="cb-margin-medium-right">
								
								
								<li>5А Neuhofstrasse, CH-6340 Baar, Switzerland</li>
								<li>Send abstract or inquiries at the</li>
								<li><a href="mailto:info@liforum.org">info@liforum.org</a></li>
								<li>Longevity Impact Forum Organizing Committee</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-md-12 footer_down">
		<div class="footer_1">
			<div class="container">
				<span class="browse-by cb-font-weight-bold"> Browse By: </span>
				<a class="cb-font-weight-bold" routerlink="" aria-label="Organizations" href=""> Organizations, </a>
				<a class="cb-font-weight-bold" routerlink="" aria-label="People" href=""> People, </a>
				<a class="cb-font-weight-bold" routerlink="" aria-label="Events" href=""> Events </a>
			</div>
		</div>
		
		<div class="footer_2">
			<div class="container">
				<a class="hide-print" target="_blank" aria-label="Terms of Service" href=""> Terms of Service </a>
				<span class="hide-print">|</span>
				<a class="hide-print" target="_blank" aria-label="Privacy Policy" href=""> Privacy Policy </a>
				<span class="hide-print">|</span> © 2018 LIForum. All Rights Reserved.
			</div>
		</div>
	</div>
</footer>
<a href="https://web.telegram.org/#/im?p=@days_group" target="_blank" class="telegram_link">
<img src="https://3mgj4y44nc15fnv8d303d8zb-wpengine.netdna-ssl.com/wp-content/uploads/2018/09/Telegram_logo.png">
<span class="telegram-join">Join our Telegram Channel!</span>
</a>
<a href="" class="scrollup" style="display: none;">Scroll</a>
<!--Modals-->
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<!-- Tabs Titles -->
		<!-- Icon -->
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<img src="/img/images.png" id="icon" alt="User Icon" />
		</div>

					<ul class="nav nav-tabs tabs_setting_profile login_tab">
						<li class="active"><a data-toggle="tab" href="#scintist_login">
							I am Scientist
						</a></li>
						<li><a data-toggle="tab" href="#user_login">I am User</a></li>
						
					</ul>
					<div class="tab-content">
						<div id="scintist_login" class="scintist_login tab-pane fade in active">
							<!-- Login Form -->
							<form method="POST" action="{{route('logIn')}}">
								{{csrf_field()}}
								<input type="text" id="login" class="" name="login" placeholder="login">
								<input type="password" id="password" class=" " name="password" placeholder="password">
								<!--input type="submit" class="fadeIn fourth" value="Log In" -->
								<br>
								<button class="login_button" type="submit">Log In</button>
							</form>
							
						</div>
						<div id="user_login" class="user_login tab-pane fade ">
							<!-- Login Form -->
							<form>
								<p class="youare">In order to vote 
			login in your account</p>
								<a href="#" data-dismiss="modal" class="btn btn-default facebook" data-toggle="modal" data-target="#register_user_step_2"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
							</form>
							
						</div>
					</div>
	
	</div>
</div>
<!-- BEGIN # MODAL REGISTER -->
<div class="modal fade" id="reg-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<!-- Tabs Titles -->
		<!-- Icon -->
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<img src="/img/images.png" id="icon" alt="User Icon" />
		</div>
		<!-- Login Form -->
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Are you life science expert?</p>
			<p class="youare2">Create your account to participate in the LIF Program.</p>
		</div>
		<form action="{{route('scientistApply')}}" method="POST">
			{{csrf_field()}}
			<input type="text" class="fadeIn second" name="name" placeholder="Name" required>
			<input type="text" class="fadeIn second" name="surname" placeholder="Surname" required>
			<input type="email" class="fadeIn second" name="email" placeholder="E-mail" required>
			<input type="text" class="fadeIn second" name="link" placeholder="Profile in specialized social media" required>
			<input type="submit" class="fadeIn fourth " value="Send">
			<p class="pre_reg fadeIn second">DAYS Methodology takes into account not only scientific articles but also your social impact.</p>
		</form>
	</div>
</div>
<!-- BEGIN # MODAL PARTICIP -->
<div class="modal fade" id="particip-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<!-- Tabs Titles -->
		<!-- Icon -->
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<img src="/img/images.png" id="icon" alt="User Icon" />
		</div>
		<!-- Login Form -->
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Are you life science expert?</p>
			<p class="youare2">Create your account to participate in the LIF Program.</p>
		</div>
		<form>
			
			<input type="submit" class="fadeIn fourth " value="Participate">
			<p class="pre_reg fadeIn second">DAYS Methodology takes into account not only scientific articles but also your social impact.</p>
		</form>
	</div>
</div>
<!-- BEGIN # MODAL Documents -->
<div class="modal fade" id="doc-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<img src="/img/images2.png" id="icon" alt="User Icon" />
		</div>
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Documents</p>
			
		</div>
		<div class="col-md-6 fadeIn second">
			<a class="external--link" href="/documents/lif_conference_announcement.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>LIF Announcement</p>
			</a>
		</div>
		<div class="col-md-6 fadeIn third">
			<a class="external--link" href="/documents/lif_call_for_papers.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>Call for Presentations</p>
			</a>
		</div>
		<div class="col-md-6 fadeIn fourth">
			<a class="external--link" href="/documents/lif_program.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>Program Themes</p>
			</a>
		</div>
		<div class="col-md-6 fadeIn fourth">
			<a class="external--link" href="/documents/concepts_longevity_ranking_codex.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>Ranking Codex</p>
			</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- BEGIN # MODAL register user -->
<div class="modal fade" id="log-u-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<img src="/img/images3.png" id="icon" alt="User Icon" />
		</div>
		<div class="paragraph_reg fadeIn first">
			<p class="youare">In order to vote <br>
			login in your account</p>
			
		</div>
		<div class="">
			<div class="modal-social-icons">
				<div class="col-md-12">
					<div class="col-md-12">
						<a href="#" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
					</div>
					<!--div class="col-md-6">
						<a href="#" class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Sign In with Twitter </a>
				</div>
				<div class="col-md-6">
						<a href="#" class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>
				</div>
				<div class="col-md-6">
						<a href="#" class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Sign In with Linkedin </a>
				</div-->
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<!-- BEGIN # MODAL Subscribe to news -->
<div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div id="formContent" class="formContent">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	<div class="fadeIn first">
		<img src="/img/images4.png" id="icon" alt="User Icon" />
	</div>
	
	<div class="paragraph_reg fadeIn first">
		<p class="youare">Subscribe to news on the health span.<br>
			<span class="smalltext">Give invitation to loved one (send him this invitation to our health news) and you both will get free webinars of top experts since 2019</span></p>
			<div class="container1">
				
				<div><input type="text" name="mytext[]" placeholder="E-mail"></div>
				
			</div>
			<button class="add_form_field">Add friends E-mail &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
			<button type="button" class="add_form_field"" data-dismiss="modal" aria-label="Close">
			<span>Subscribe</span>
			</button>
			
		</div>
		<div class="">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- BEGIN # MODAL add video -->
<div class="modal fade" id="add-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<i class="fa fa-youtube-play icon_big_popap"></i>
		</div>
		
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Add video</p>
			
			<div class="text_area_modal">
				<div><input type="text" name="mytext[]" placeholder="Link web Youtube"></div>
			</div>
						<div class=" text_area_modal">
			<textarea name="" id="" class="textarea_settings " placeholder="Description 25 words"></textarea>
			</div>
			
			<button type="button" class="btn add_form_field"" data-dismiss="modal" aria-label="Close">
			<span>Add video</span>
			</button>
			
		</div>
		<div class="">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- BEGIN # MODAL register step 2 user -->
<div class="modal fade" id="register_user_step_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<!--button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button-->
		<div class="fadeIn first">
			<div class="popap_user_img_hi">
				<img src="img/scientists/1.png" alt="">
			</div>
		</div>
		
		<div class="paragraph_reg fadeIn first">

			<p class="youare">Hi User Name</p>

			<div class="block_1_reg">
				<p>Choose from the list which is closest to you</p>
				   <div class="funkyradio">
			        <div class="funkyradio-info">
			            <input type="radio" name="radio" id="radio1" />
			            <label for="radio1">Nutrition</label>
			        </div>
			        <div class="funkyradio-info">
			            <input type="radio" name="radio" id="radio2" />
			            <label for="radio2">Fitness & Sport</label>
			        </div>
			        <div class="funkyradio-info">
			            <input type="radio" name="radio" id="radio3" />
			            <label for="radio3">Wellnes & SPA</label>
			        </div>
			        <div class="funkyradio-info">
			            <input type="radio" name="radio" id="radio4" />
			            <label for="radio4">Mental Health</label>
			        </div>
			        <div class="funkyradio-info">
			            <input type="radio" name="radio" id="radio5" />
			            <label for="radio5">Phisioterapy</label>
			        </div>
			    </div>
			</div>

			<div class="block_2_reg">
				<div class="checkbox">
		          <label>
		            <input type="checkbox" value="">
		            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
		            Option one is this and that — be sure to include why it

		          </label>
		        </div>
			</div>

			<button type="button" class="btn add_form_field"" data-dismiss="modal" aria-label="Close">
			<span>Finish register</span>
			</button>
			
		</div> 
		<div class="">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>

