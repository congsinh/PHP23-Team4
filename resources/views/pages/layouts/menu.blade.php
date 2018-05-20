<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{asset("/")}}">Home</a></li>
                    @foreach($categories as $category)
                        @if($category->subcate->count() > 0)
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    {{$category->name}}
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @foreach($category->subcate as $submenu)
                                        <li><a href="/subcate/{{$submenu->slug}}">{{$submenu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="#">{{$category->name}}</a></li>
                        @endif
                    @endforeach

                </ul>
                <div class="box pull-right">
                    <div class="container-2">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <input type="search" id="search" placeholder="Tìm kiếm..." />
                        <div class=" wp-search p-5 pull-right ">
                            <div class="search ">
                                <div id="search-result">
                                </div>
                                <i><span class="count-result pull-left"></span>&nbsp; kết quả tìm thấy !</i>
                                <span class="pull-right" id="more-product">Xem thêm</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div> <!-- End mainmenu area -->

