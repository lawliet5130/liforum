@extends('layout')
@section('content')
		<div class="page">
						<section class="title_page_default">
				<div class="container">
					
				</div>
			</section>
			<div class="container">
				
				<div class="block_404">
					     <div class="col-xs-12 col-sm-7 col-lg-7">
                <!-- Info -->
                <div class="info">
                    <h1>404</h1>
                    <h2>page not found <br>or <span style="color:#f35d34;">under development</span></h2>
                    <p>The page you are looking for was moved, removed,
                        renamed or might never existed.</p>
                    <a href="{{route('getHome')}}" class="btn btn-primary">Home</a>
                    <a href="{{route('getScList')}}" class="btn btn-secondary">Check Scientists</a>
                    <a href="knowledge.php" class="btn btn-secondary">look for Knowledge</a>
                    <a href="startups.php" class="btn btn-secondary">Check Startups</a>
                
                </div>
                <!-- end Info -->
            </div>

            <div class="col-xs-12 col-sm-5 col-lg-5 text-center">
                <!-- Monkey -->
                <div class="monkey">
                    <img src="img/404.gif" alt="Monkey">
                </div>
                <!-- end Monkey -->
            </div>

				</div>
				
				<br>
				<br>
				<br>
				
			</div>
		</div>
@endsection