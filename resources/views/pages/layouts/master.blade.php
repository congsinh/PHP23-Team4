<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    {{--<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href="../../../public/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("style.css")}}">
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}">
    @yield('style')
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <style>
        #toast-container > .toast {
            background-image: none !important;
        }

        #toast-container > .toast:before {
            position: fixed;
            font-family: FontAwesome;
            font-size: 24px;
            line-height: 18px;
            float: left;
            color: #FFF;
            padding-right: 0.5em;
            margin: auto 0.5em auto -1.5em;
        }
        #toast-container > .toast-warning:before {
            content: "\f003";
        }
        #toast-container > .toast-error:before {
            content: "\f001";
        }
        #toast-container > .toast-info:before {
            content: "\f005";
        }
        #toast-container > .toast-success:before {
            content: "\f002";
        }
        #toast-container{margin-top:60px}
    </style>
</head>
<body>
    @include('pages.layouts.header')
    @yield('content')
    @include('pages.layouts.footer')

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- jQuery easing -->
    <script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- Slider -->
    <script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.slider.js')}}"></script>
    @yield('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(function() {
                function Toast(type, css, msg) {
                    this.type = type;
                    this.css = css;
                    this.msg = msg;
                }
                var toasts = [
                    new Toast('info', 'toast-top-full-width', 'Bạn đã mua sản phẩm thành công'),
                ];

                toastr.options.positionClass = 'toast-top-full-width';
                toastr.options.extendedTimeOut = 0; //1000;
                toastr.options.timeOut = 1000;
                toastr.options.fadeOut = 250;
                toastr.options.fadeIn = 250;

                var i = 0;

                $('.tryMe').click(function () {
                    var id = $(this).val();
                    $.ajax({
                        type: 'GET',
                        url:'{{url('/buy-product')}}',
                        data: {id:id},
                        dataType:'json',
                        success:function(data){
                            var edit = '<div class="shopping-item" id="shopping-item">\n' +
                                '                    <a href="">Cart - <span class="cart-amunt">'+data[3]+' VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> '+data[2]+' </span></a>\n' +
                                '                </div>';


                            $("#shopping-item").replaceWith(edit);
                            // console.log(data);
                        },error: function (data) {
                            console.log('Error:', data);
                        }
                    })


                    delayToasts();
                });

                function delayToasts() {
                    if (i === toasts.length) { return; }
                    var delay = i === 0 ? 0 : 2100;
                    window.setTimeout(function () { showToast(); }, delay);

                    // re-enable the button
                    if (i === toasts.length-1) {
                        window.setTimeout(function () {
                            $('#tryMe').prop('disabled', false);
                            i = 0;
                        }, delay + 1000);
                    }
                }

                function showToast() {
                    var t = toasts[i];
                    toastr.options.positionClass = t.css;
                    toastr[t.type](t.msg);
                    i++;
                    delayToasts();
                }

                $('#search').on('keyup', function(e){
                    if(e.keyCode == 13)
                    {
                        var key = $('#search').val();
                        if(key !== ''){
                            $.ajax({
                                url : '{{ route('search') }}',
                                type : 'GET',
                                data : {
                                    key: key,
                                },
                                success: function (data) {
                                    console.log(data);
                                    $('#search-result').html(data.view);
                                    $('.count-result').text(data.total);
                                }
                            });
                            $('.wp-search').show();
                        }
                    }
                });
                $('#more-product').on('click', function() {
                    var key = $('#search').val();
                    var offset = $('#search-result div.single-product-widget').length;
                    $.ajax({
                        url: '{{ route('search') }}',
                        type: 'GET',
                        data: {
                            key: key,
                            offset: offset
                        },
                        success: function (data) {
                            console.log(data);
                            $('#search-result').append(data.view);
                            $('.count-result').text(data.total);
                        }
                    });
                });
            })
        });
    </script>
</body>
</html>