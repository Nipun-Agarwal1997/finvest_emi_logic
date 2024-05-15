<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Finvest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{WEBSITE_CSS_URL}}login.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{WEBSITE_CSS_URL}}plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{WEBSITE_CSS_URL}}style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->    
	
	 <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{WEBSITE_JS_URL}}plugins.bundle.js"></script>
    <script src="{{WEBSITE_JS_URL}}sweetalert2.js"></script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	
	
	<script type="text/javascript">
		function show_message(message,message_type) {
			Swal.fire({
				position: "top-right",
				icon: message_type,
				title: message,
				showConfirmButton: false,
				timer: 8000
			});
		}
	</script>
	@if(Session::has('error'))
		<script type="text/javascript"> 
			$(document).ready(function(e){
				
				show_message("{{{ Session::get('error') }}}",'error');
			});
		</script>
	@endif
	
	@if(Session::has('success'))
		<script type="text/javascript"> 
			$(document).ready(function(e){
				show_message("{{{ Session::get('success') }}}",'success');
			});
		</script>
	@endif

	@if(Session::has('flash_notice'))
		<script type="text/javascript"> 
			$(document).ready(function(e){
				show_message("{{{ Session::get('flash_notice') }}}",'success');
			});
		</script>
	@endif
	@yield('content')

    
    <!--end::Global Config-->
</body>
<!--end::Body-->

</html>