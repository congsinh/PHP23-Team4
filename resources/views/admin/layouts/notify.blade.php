@if(count($errors) > 0)
    <div class="row notify">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(session('success'))
    <div class="row notify">
        <div class="alert alert-success">{{session('success')}}</div>
    </div>
@elseif(session('error'))
    <div class="row notify">
        <div class="alert alert-danger">{{session('error')}}</div>
    </div>
@endif
