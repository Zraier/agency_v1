<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Agency Panel</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('backend_agence/vendors/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('backend_agence/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('backend_agence/vendors/images/favicon-16x16.png')}}"
		/>
	
		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('backend_agence/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/vendors/styles/icon-font.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/src/plugins/bootstrap-select-country/css/bootstrap-select-country.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/src/plugins/jquery-steps/jquery.steps.css')}}"
		/>
	
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/src/plugins/fullcalendar/fullcalendar.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('backend_agence/vendors/styles/style.css')}}" />
		

		<!-- Global site tag (gtag.js) - Google Analytics -->
	
	
	
	</head>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="{{ asset('backend_agence/vendors/images/tripi_dark.png')}}" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>
		
		@php
		$username= Auth::user()->username;
		$profileData = App\Models\agencie::findByUsername($username);
		
  
		@endphp

		<!-- Header -->
		@include('agency.body.header')

		<!-- Sidebar perso -->
		@include('agency.body.Config_Sidebar')

		<!-- Sidebar -->
		@include('agency.body.sidebar')

		<div class="main-container">
			
			@yield('agency')
			
			
			{{-- @include('agency.body.footer') --}}
		</div>

		<!-- js -->
		<script src="{{ asset('backend_agence/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/layout-settings.js') }}"></script>
		
		<script src="{{ asset('backend_agence/src/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/calendar-setting.js') }}"></script>
		<script src="{{ asset('backend_agence/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/steps-setting.js')}}"></script>
		<script src="{{ asset('backend_agence/src/plugins/bootstrap-select-country/js/bootstrap-select-country.min.js')}}"></script>	
		
		@yield('script')
		
	</body>
</html>
