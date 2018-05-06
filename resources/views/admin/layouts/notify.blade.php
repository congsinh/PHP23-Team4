@if(count($errors) > 0)
    <div class="notify errors">
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
    <div class=" notify success">
        <div class="alert alert-success">{{session('success')}}</div>
    </div>
@elseif(session('error'))
    <div class=" notify error">
        <div class="alert alert-danger">{{session('error')}}</div>
    </div>
@endif
