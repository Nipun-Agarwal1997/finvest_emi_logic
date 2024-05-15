@extends('admin.layout.login_layout')
@section('content')

	
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Content-->
            <div
                class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                <!--begin::Wrapper-->
                <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                    <!--begin::Logo-->
                    <a href="{{WEBSITE_URL}}" class="login-logo pb-xl-20 pb-15">
                        <img src="" class="max-h-140px" alt="" />
                    </a>
                    <!--end::Logo-->

                    <!--begin::Signin-->
                    <div class="login-form">
                        <!--begin::Form-->
						{{ Form::open(['role' => 'form','url' => route("admin.login"),"class"=>"form","id"=>"kt_login_singin_form"]) }}   
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                            </div>
                            <!--begin::Title-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Your User Name</label>

                                <!-- toggle class "is-invalid" on input for error -->
								{{ Form::text('username', null, ['placeholder' => 'username', 'class' => 'form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 '.($errors->has('username') ? 'is-invalid':'')]) }}	
                                <div class="invalid-feedback"><?php echo $errors->first('username'); ?></div>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Password</label>
                                </div>
								{{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 '.($errors->has('password') ? 'is-invalid':''),'autocomplete'=>false]) }}
								
                                <div class="invalid-feedback"><?php echo $errors->first('password'); ?></div>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                {{  
                                    Form::submit('Login', ['class'=>"btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3"])    
                                }}
                            </div>
                            <!--end::Action-->
                        {{ Form::close() }}
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Content-->

            <!--begin::Aside-->
            <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right" style="background: #0000ff61; background-size: 100%;">
                <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom p_login">
                    <!--begin::Aside title-->
                    <h3 class="pt-lg-40 pl-lg-10 pb-lg-0 pl-5 py-5 m-0 display5 display1-lg text-white text-uppercase login_right_text" style="padding-top: 6rem !important;font-size: 40px !important;text-align: center;">
                        Welcome To <div class="text"> Loans & EMI Panel</div>
                    </h3>
                    <!--end::Aside title-->
                </div>
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
@stop
