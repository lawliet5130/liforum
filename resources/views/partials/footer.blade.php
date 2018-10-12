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
									<a rel="noopener" target="_blank" aria-label="Advertise" href=""> Advertise </a>
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
								<li><a  aria-label="Featured Lists and Searches" href=""> Featured Lists and Searches </a></li>
								<li><a rel="noopener" target="_blank" aria-label="Difference" href="">Difference </a></li>
								<li><a rel="noopener" target="_blank" aria-label="Knowledge Center" href=""> Knowledge Center </a></li>
								<li><a rel="noopener" target="_blank" aria-label="Privacy" href=""> Privacy </a></li>
								<li><a routerlink="" aria-label="Create a Profile" href=""> Create a Profile </a></li>
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
								<input type="text" id="login" class="fadeIn first" name="login" placeholder="login">
								<input type="password" id="password" class="fadeIn first" name="password" placeholder="password">
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
								<a href="#" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
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
			<a class="external--link" href="http://liforum.org/pdf/LIF_Conference_Announcement.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>LIF Announcement</p>
			</a>
		</div>
		<div class="col-md-6 fadeIn third">
			<a class="external--link" href="http://liforum.org/pdf/LIF_Call_for_Presentations.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>Call for Presentations</p>
			</a>
		</div>
		<div class="col-md-6 fadeIn fourth">
			<a class="external--link" href="http://liforum.org/pdf/LIF_Program_Themes.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>Program Themes</p>
			</a>
		</div>
		<div class="col-md-6 fadeIn fourth">
			<a class="external--link" href="http://liforum.org/pdf/Longevity_Impact_Foundation_-_Statement.pdf" target="_blank">
				<i class="fa fa-file-pdf-o"></i>
				<p>Statement</p>
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
<!-- BEGIN # MODAL add work profile -->
<div class="modal fade" id="add-work-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div id="formContent" class="formContent">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<div class="fadeIn first">
			<i class="fa fa-plus-circle icon_big_popap"></i>
		</div>
		
		<div class="paragraph_reg fadeIn first">
			<p class="youare">Add work</p>
			<div class="text_area_modal">
				<div><input type="text" name="mytext[]" placeholder="Name Work"></div>
			</div>
			<div class="text_area_modal ">
				<select class="form-control form-control-lg select_profile" name="category"required>
					<option value="">Domain</option>
					<option value="Classroom Instruction and Assessment">Classroom Instruction and Assessment</option>
					<option value="Curriculum Development and Alignment">Curriculum Development and Alignment</option>
					<option value="District Committee">District Committee</option>
					<option value="Meeting">Meeting</option>
					<option value="Other Category">Other Category</option>
					<option value="Professional Conference">Professional Conference</option>
					<option value="Professional Workshop / Training">Professional Workshop / Training</option>
					<option value="Pupil Services">Pupil Services</option>
				</select>
			</div>
			<div class=" text_area_modal">
			<textarea name="" id="" class="textarea_settings " placeholder="Description">
			</textarea>
			</div>
			<div class="text_area_modal">
				<div><input type="text" name="mytext[]" placeholder="link web"></div>
			</div>
			
			<button type="button" class="add_form_field"" data-dismiss="modal" aria-label="Close">
			<span>Add</span>
			</button>
			
		</div>
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
			<p class="youare">Delete?</p>
			
			
			
			<button type="button" class="btn btn-danger add_form_field"" data-dismiss="modal" aria-label="Close">
			<span>Delete</span>
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
