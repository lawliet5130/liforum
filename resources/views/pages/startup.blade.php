@extends("layout")
@section("style")
<style>
.nav-xbootstrap li:nth-child(2) a {
background: #f8f8f8;
color: #2ecaf7;
border-bottom: 3px solid #2ecaf7;
}
</style>
@endsection

@section("content")
<div class="page">
	<section class="title_page_default">
		<div class="container">
			
		</div>
	</section>
	<div class="container">
		@include('partials.breadcrumbs')
		<div class="clearfix"></div>
		
		<div class="startup_section">
			<div class="startup_section_head">
				<div class="col-md-4 startup_section_head_left">
					<div class="cb_startup">
								<svg viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.41,2.41,0,0,0,0,2.4V21.6A2.41,2.41,0,0,0,2.4,24H21.6A2.41,2.41,0,0,0,24,21.6V2.4A2.41,2.41,0,0,0,21.6,0Z"></path><path fill="white" d="M9.84,13.42a2.11,2.11,0,1,1,0-1.75H11.5a3.69,3.69,0,1,0,0,1.75Z"></path><path fill="white" d="M16,8.85h-.27a3.74,3.74,0,0,0-1.8.63V5.37h-1.5V15.94h1.51v-.38a3.68,3.68,0,0,0,3.39.38,3.55,3.55,0,0,0,1.06-.63A3.67,3.67,0,0,0,16,8.85Zm2.1,4a.17.17,0,0,1,0,.07,1.22,1.22,0,0,1-.06.26h0a2,2,0,0,1-.1.26l0,0a2.07,2.07,0,0,1-1,1,2,2,0,0,1-.41.15h0l-.2,0H16l-.28,0h-.07a2,2,0,0,1-.54-.17l0,0a1.86,1.86,0,0,1-.47-.32h0a2,2,0,0,1-.37-.45h0c0-.09-.1-.17-.14-.26h0a2.19,2.19,0,0,1-.17-.85,2.08,2.08,0,0,1,.2-.9h0a2.13,2.13,0,0,1,1.7-1.2l.21,0h0a2.12,2.12,0,0,1,2.12,2.12h0A2.46,2.46,0,0,1,18.1,12.8Z"></path>
							</svg>
							<a href="#" target="blank">www.crunchbase.com</a>
					</div>	
					<div class="site_startup">
							<i class="fa fa-globe"></i>	
							<a href="#" target="blank">www.site.com</a>
					</div>
				</div>
				<div class="col-md-4 startup_section_head_center">
					<img src="img/startups_logo/egwjrxuvnkufhzwakwbe.png" alt="">
					<h3>Retrotope.com </h3>
					<h4>Biootech</h4>
				</div>
				<div class="col-md-4 startup_section_head_right">test</div>
				<div class="cl"></div>
			</div>
		</div>
		<br>
		<br>
		<br>
		
	</div>
</div>
@endsection
@section("add_scripts")
@endsection