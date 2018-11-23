@extends('layouts.main')

@section('head')
        

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{url('/')}}/section/css/bootstrap.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{url('/')}}/section/css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{url('/')}}/section/css/style.css"/>

        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/css/util.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/newpost/css/main.css">
@endsection

@section('content')
<div style="height: 100px;">
    
</div>


<div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="{{Route('create')}}">
                {{csrf_field()}}
                <span class="contact100-form-title">
                   Show Us your Wonderful Idea...
                </span>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                    <span class="label-input100">Judul</span>
                    <input class="input100" type="text" name="title" placeholder="Masukkan Judul ...">
                </div>

                <div class="wrap-input100 input100-select bg1">
                    <span class="label-input100">Kategori</span>
                    <div >
                        <select class="js-select2" name="category" id="category">
                            <option value="Teknologi">Teknologi</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Bisnis">Bisnis</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                    <span class="label-input100">Message</span>
                    <textarea class="input100" name="content" id="content" placeholder="Your message here..."></textarea>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>




<div class="container-fluid">
<!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg); height: 100px;"></div>
</div>
@endsection

@section('java')
<!--===============================================================================================-->
    <script src="{{url('/')}}/newpost/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/newpost/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/newpost/vendor/bootstrap/js/popper.js"></script>
    <script src="{{url('/')}}/newpost/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/newpost/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    }
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/newpost/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{url('/')}}/newpost/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/newpost/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/newpost/vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 1500, 3900 ],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

@endsection