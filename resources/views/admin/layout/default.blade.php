<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
    <head>
        <base href="">
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{{Config::get("Site.title")}}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{WEBSITE_CSS_URL}}plugins.bundle.css" rel="stylesheet" type="text/css" />
        
        <link href="{{WEBSITE_CSS_URL}}style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{WEBSITE_CSS_URL}}style.css">
       
        <script src="{{WEBSITE_JS_URL}}plugins.bundle.js"></script>
        <script src="{{WEBSITE_JS_URL}}sweetalert2.js"></script>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <div class="loader-wrapper" id="loader_img" style="display:none;">
            <div class="loader">
                <img src="{{WEBSITE_IMG_URL}}ajax-loader.gif" alt="">
                <div class="material-spinner"></div>
            </div>
        </div>
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
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                    <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
                    
                        <!--begin::Aside Menu-->
                        <div class="aside-menu-wrapper flex-column-fluid"> <?php 
                            $segment2	=	Request::segment(1);
                            $segment3	=	Request::segment(2);  ?>
                            <!--begin::Menu Container-->
                            <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                                <!--begin::Menu Nav-->
                                <ul class="menu-nav ">
                                    <li class="menu-item  {{ ($segment3 == 'loans') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a href="{{ route('admin.loansDetails') }}" class="menu-link ">
                                            <span class="svg-icon menu-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                        <path
                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-text">Loans Details</span>
                                        </a>
                                    </li>

                                    <li class="menu-item menu-item-submenu {{ in_array($segment3 ,array('process-date')) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{ route('loans.process')}}" class="menu-link menu-toggle">
                                            <span class="svg-icon menu-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1"/>
                                                    <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-text">Process Loans</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                    </li>

                                </ul>
                                <!--end::Menu Nav-->
                            </div>
                            <!--end::Menu Container-->
                        </div>
                        <!--end::Aside Menu-->
                    </div>
                    <!--end::Aside-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                        <!--begin::Header-->
                        <div id="kt_header" class="header  header-fixed ">
                            <!--begin::Container-->
                            <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                                <!--begin::Topbar-->
                                <div class="topbar ml-auto">
                                    <!--begin::User-->
                                    <div class="dropdown ml-3">
                                        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="d-flex flex-column text-left">
                                                    <span class="text-muted font-weight-bold">Welcome</span>
                                                    <span class="text-primary font-weight-bold">{{{ Auth::user()->username}}}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <!--begin::Dropdown-->
                                        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                            <!--begin:Header-->
                                            <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{WEBSITE_IMG_URL}}bg-1.jpg)">
                                                <h4 class="text-white font-weight-bold mb-0"> Quick Actions </h4>
                                            </div>
                                            <!--end:Header-->
                                            <!--begin:Nav-->
                                            <div class="row row-paddingless">
                                                
                                                <!--begin:Item-->
                                                <div class="col-12">
                                                    <a href="{{ route('admin.logout') }}" class="d-block py-6 px-5 text-center bg-hover-light border-bottom">
                                                        <span class="svg-icon svg-icon-3x svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) " />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) " x="13" y="6" width="2" height="12" rx="1" />
                                                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) " />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span> 
                                                        <span class="d-block text-dark-75 font-weight-bold font-size-h10 mt-2 mb-1">Logout</span>
                                                    </a>
                                                </div>
                                                <!--end:Item-->
                                            </div>
                                            <!--end:Nav-->
                                        </div>
                                        <!--end::Dropdown-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Topbar-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Header-->
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
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::Main-->
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            
            $(".process_data").click(function (e) {
                e.stopImmediatePropagation();
                url = $(this).attr('href');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You Want to Start Process. It will Take Time to initiate?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, Start process",
                    cancelButtonText: "No, cancel",
                    reverseButtons: true
                }).then(function (result) {
                    if (result.value) {
                        window.location.replace(url);
                    }else if (result.dismiss === "cancel") {
                        Swal.fire(
                            "Cancelled",
                            "Your Process is not started :)",
                            "error"
                        )
                    }
                });
                e.preventDefault();
            });
            
        </script>
        <!--end::Global Config-->
    </body>
    <!--end::Body-->
</html>