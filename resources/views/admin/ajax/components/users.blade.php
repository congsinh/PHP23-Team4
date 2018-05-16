<div class="animated fadeIn">
    <table id="dataTable" class="table table-bordered table-hover text-center" style="width:100%;background-color: white">
        <thead>
        <tr style="background-color: #3c8dbc;color:white;">
            <th style="width: 20px">STT</th>
            <th style="width: 80px">Tên thành viên</th>
            <th style="width: 50px">Email</th>
            <th style="width: 50px">Mật khẩu</th>
            <th style="width: 80px">Ngày đăng ký</th>
            <th style="width: 50px">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr data-id="{{ $user->id }}">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <div class="row">
                       <div class="col-sm-3">
                           <button class="btn btn-warning btn-xs pw-reset" style="margin:2px !important; padding:5px !important">
                               <i class="fa fa-lock fa-fw"></i><span class="text-pw">Reset</span>
                           </button>
                       </div>
                        <div class="col-sm-9">
                            <input name='password' type="password" class="form-control none-style pl-0"  readonly value="password" >
                        </div>
                    </div>

                </td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a href="{{ route('users-show',['id'=>$user->id]) }}" class="btn btn-info btn-xs" style="margin:2px !important">
                        <i class="fa fa-eye fa-fw"></i><span>Xem</span>
                    </a>

                    {{--<a href="" class="btn btn-danger btn-xs  del" style="margin:2px !important" data-toggle="modal" data-target="#modal-del">--}}
                        {{--<i class="glyphicon glyphicon-trash fa-fw"></i><span>Xóa</span>--}}
                        {{--<form method="post" action="{{route('orders.destroy',['id'=>$order->id]) }}">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                        {{--</form>--}}
                    {{--</a>--}}
                </td>
            </tr>
        @empty
            <p>Notthing to show!</p>
        @endforelse
        </tbody>
    </table>
    <div class="pull-right">
        {!! $users->links()  !!}
    </div>
</div>