@extends('pages.layouts.master')
@section('style')
    <style>
        .fix-font a{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
    </style>
    @stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <img class="banner" src="{{asset('img/banner1.png')}}" width="50%"/>
                <img class="banner" src="{{asset('img/banner2.png')}}" width="50%"/>
            </div>
        </div>
        <div class="pt-10">
            <ul class="filter">
                <li class="fmanu pull-left">
                    @foreach($cate->subcate as $subcates )
                        <a href="" class="prevent subcate @if($loop->first) active @endif" data-slug="{{ $subcates->slug }}">{{ $subcates->name }}</a>
                    @endforeach
                </li>
                <li class="frange pull-right">
                    {{--<a href="" class="prevent search-price" data-id="3">--}}
                        {{--Dưới 3 triệu--}}
                    {{--</a>--}}
                    {{--<a href="" class="prevent search-price" data-id="5">--}}
                        {{--Từ 3 - 5 triệu--}}
                    {{--</a>--}}
                    {{--<a href="" class="prevent search-price" data-id="8">--}}
                        {{--Từ 5 - 8 triệu--}}
                    {{--</a>--}}
                    {{--<a href="" class="prevent search-price" data-id="15">--}}
                        {{--Từ 8 - 15 triệu--}}
                    {{--</a>--}}
                    {{--<a href="" class="prevent search-price" data-id="more">--}}
                        {{--Trên 15 triệu--}}
                    {{--</a>--}}
                </li>
                <!--#endregion-->
            </ul>
        </div>
        <div id="wp-product" >
            @include('pages.layouts.products')
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
                function showToast() {
                    var t = toasts[i];
                    toastr.options.positionClass = t.css;
                    toastr[t.type](t.msg);
                    i++;
                    delayToasts();
                }

            $('a.subcate').on('click', function(e){
                e.preventDefault();
                $('a.subcate').removeClass('active');
                var slug = $(this).attr('data-slug');
                $.ajax({
                    url : '/subcate/' + slug,
                    type : 'GET',
                    success : function(data){
                       console.log(data);
                       $('#wp-product').html(data.view);
                    }
                });
                $(this).addClass('active');
            });
        });
    </script>
@endsection


