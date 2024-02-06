<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
	@include('partials.auth.header')
</head>

<body>
	<!-- Content -->

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">
				<!-- Content -->
					@yield('content')
				<!-- /Content -->
			</div>
		</div>
	</div>

	<!-- / Content -->

	<!-- Core JS -->
	@include('partials.auth.footer')
</body>

</html>