@if(isset($breadcrumb))
	@include('layouts.head.breadcrumb')
@else
	@include('layouts.head.non-breadcrumb')
@endif