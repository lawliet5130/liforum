<div class="col-md-6  search_page_right">
	<form class="example" id="search" method="POST" action="{{route('newsSearch')}}" style="margin:auto;width:265px; display: inline-flex;">
		{{csrf_field()}}
		<input type="text" placeholder="Search.." name="toSearch" id="filter" value="{{request()->toSearch}}">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
</div>