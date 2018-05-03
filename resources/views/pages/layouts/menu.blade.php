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
                    <li class="active"><a href="{{asset("pages/home.blade.php")}}">Home</a></li>
                    @foreach($categories as $category)
                        @if($category->children->count() > 0)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{$category->name}}
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @foreach($category->children as $submenu)
                                        <li><a href="#">{{$submenu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="#">{{$category->name}}</a></li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->