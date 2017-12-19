@include('layout/header')
	<div class="container">
		@yield('content')
	</div>
	<div>
		@include('layout/sidebar')
	</div>
@include('layout/footer')