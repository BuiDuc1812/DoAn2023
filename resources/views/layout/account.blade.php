@extends('layout')
@section('title', 'Quản lí tài khoản')
@section('layout')
    <main id="main" class="">

        <div id="content" role="main" class="content-area">


            <section class="section sec_lien_he" id="section_2062859487">
                <div class="bg section-bg fill bg-fill  ">
                </div><!-- .section-bg -->
                <div class="section-content relative">
                    <div class="row row-collapse" id="row-30152463">
                        <div class="col medium-5 small-12 large-5">
                            <div class="col-inner">

                                <div class="banner has-hover" id="banner-1477469055">
                                    <div class="banner-inner fill">
                                        <div class="banner-bg fill">
                                            <div class="bg fill bg-fill "></div>

                                        </div><!-- bg-layers -->
                                        <div class="banner-layers container">
                                            <div class="fill banner-link"></div>
                                            <div id="text-box-410146975"
                                                class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                <div class="text ">

                                                    <div class="text-inner text-left">

                                                        <h1 class="uppercase"><strong>GET IN TOUCH</strong></h1>
                                                        <p><span style="font-size: 120%;"><strong>Lorem ipsum dolor sit
                                                                    amet, consectetuer adipiscing elit, sed diam nonummy
                                                                    nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                                    erat volutpat.</strong></span></p>
                                                        <p class="p1"><span style="font-size: 120%;">Um quist, a seque
                                                                et audae. Namus aut voloriae. Ecesti volupta sinihil maxim
                                                                hit quis dicid ut dolorer spiscip suntium eveniet hicatibus,
                                                                omnit dignam ulparis aut odit, et expero tectiossi acitis
                                                                aribus dis cus soluptur a dolo incipis plam, expe
                                                                enditatatur aut et volorpor aute repta non coreri
                                                                dellaboratur acea praeritio blaut voluptio. Xerum quame re
                                                                pe officae.</span></p>
                                                    </div>
                                                </div><!-- text-box-inner -->

                                                <style scope="scope">
                                                    #text-box-410146975 {
                                                        width: 80%;
                                                    }

                                                    #text-box-410146975 .text {
                                                        font-size: 110%;
                                                    }


                                                    @media (min-width:550px) {

                                                        #text-box-410146975 {
                                                            width: 80%;
                                                        }

                                                        #text-box-410146975 .text {
                                                            font-size: 125%;
                                                        }

                                                    }
                                                </style>
                                            </div><!-- text-box -->

                                        </div><!-- .banner-layers -->
                                    </div><!-- .banner-inner -->


                                    <style scope="scope">
                                        #banner-1477469055 {
                                            padding-top: 500px;
                                            background-color: rgba(226, 186, 72, 0.74);
                                        }
                                    </style>
                                </div><!-- .banner -->


                            </div>
                        </div>
                        <div class="col medium-7 small-12 large-7">
                            <div class="col-inner">

                                <div class="banner has-hover" id="banner-1329777900">
                                    <div class="banner-inner fill">
                                        <div class="banner-bg fill">
                                            <div class="bg fill bg-fill "></div>

                                        </div><!-- bg-layers -->
                                        <div class="banner-layers container">
                                            <div class="fill banner-link"></div>
                                            <div id="text-box-347917897"
                                                class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                                <div class="text ">

                                                    <div class="text-inner text-center">

                                                        <div class="gap-element"
                                                            style="display:block; height:auto; padding-top:40px"
                                                            class="clearfix"></div>
                                                        <div role="form" class="wpcf7" id="wpcf7-f43-p20-o1"
                                                            lang="vi" dir="ltr">
                                                            <div class="screen-reader-response"></div>
                                                 
                                                                <div class="form-ct clear">
                                                                    <form action="{{ route('update.account',$user_id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="form-row w50">
                                                                            <label for="">Họ và tên</label>
                                                                            <span
                                                                                class="wpcf7-form-control-wrap text-name"><input
                                                                             
                                                                                    type="text" name="name"
                                                                                    value="{{ $name }}" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form_lien_he_w50"
                                                                                    id="text-name" aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Họ và tên" /></span>
                                                                        </div>
                                                                        <div class="form-row w50">
                                                                            <label for="">Email</label>
    
                                                                            <span
                                                                                class="wpcf7-form-control-wrap email-contact"><input
                                                                            
                                                                                    type="email" name="email"
                                                                                    value="{{ $email }}" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form_lien_he_w50"
                                                                                    id="email-contact" aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email" /></span>
                                                                        </div>
                                                                        <div class="form-row w50">
                                                                            <label for="">Mật khẩu cũ</label>
    
                                                                            <span
                                                                                class="wpcf7-form-control-wrap tel-contact"><input
                                                                                    type="password" name="oldpass"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form_lien_he_w50"
                                                                                    id="contact" aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="" /></span>
                                                                                @if (Session::has('error'))
                                                                                    <span class="error">{{ Session::get('error') }}</span>
                                                                                @endif
                                                                        </div>
                                                                        <div class="form-row w50">
                                                                            <label for="">Mật khẩu mới</label>
    
                                                                            <span
                                                                                class="wpcf7-form-control-wrap tel-contact"><input
                                                                                    type="password" name="newpass"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form_lien_he_w50"
                                                                                    id="tel-contact" aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="" /></span>

                                                                            <input type="checkbox" onclick="myFunction()">Show Password
                                                                        </div>
                                                                        <script>
                                                                            function myFunction() {
                                                                                var x = document.getElementById("tel-contact");
                                                                                if (x.type === "password") {
                                                                                    x.type = "text";
                                                                                } else {
                                                                                    x.type = "password";
                                                                                }
                                                                                var y = document.getElementById("contact");
                                                                                if (y.type === "password") {
                                                                                    y.type = "text";
                                                                                } else {
                                                                                    y.type = "password";
                                                                                }
                                                                            }
                                                                        
                                                                        </script>
                                                                        <div class="form-row center-txt">
                                                                            <input type="submit" value="Sửa thông tin cá nhân"
                                                                            
                                                                                id="bt-gui" />
                                                                        </div>
                                                                    </form>
                                
                                                        </div>
                                                    </div>
                                                </div><!-- text-box-inner -->

                                                <style scope="scope">
                                                    #text-box-347917897 {
                                                        width: 90%;
                                                    }

                                                    #text-box-347917897 .text {
                                                        font-size: 140%;
                                                    }


                                                    @media (min-width:550px) {

                                                        #text-box-347917897 {
                                                            width: 69%;
                                                        }

                                                        #text-box-347917897 .text {
                                                            font-size: 129%;
                                                        }

                                                    }
                                                </style>
                                            </div><!-- text-box -->

                                        </div><!-- .banner-layers -->
                                    </div><!-- .banner-inner -->


                                    <style scope="scope">
                                        #banner-1329777900 {
                                            padding-top: 500px;
                                            background-color: rgb(255, 255, 255);
                                        }
                                    </style>
                                </div><!-- .banner -->


                            </div>
                        </div>

                        <style scope="scope">

                        </style>
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">
                    #section_2062859487 {
                        padding-top: 70px;
                        padding-bottom: 70px;
                    }

                    #section_2062859487 .section-bg.bg-loaded {
                        background-image: url(template/layout/wp-content/uploads/2018/03/unsplash18-4-of-5.jpg);
                    }

                    #section_2062859487 .section-bg {
                        background-position: 12% 6%;
                    }
                </style>
            </section>



        </div>



    </main><!-- #main -->
@endsection
