<?php
    $keys = [
        'Màn hình',
        'Hệ điều hành',
        'Camera sau',
        'Camera trước',
        'CPU',
        'RAM',
        'Thẻ SIM',
        'Dung lượng pin',
    ]
?>
@foreach($keys as $key)
    <tr>
        <td width="120px">
            <input
                    class="form-control"
                    name='configuration[key][]'
                    type='text'
                    @if(Input::old('configuration[key][]'))
                        value="{{ old('configuration[key][]') }}"
                    @else
                        value="{{ $key }}"
                    @endif
            />
        </td>
        <td><input class="form-control" name='configuration[value][]' type='text' value="{{ old('configuration[value][]')}}"/></td>
    </tr>
@endforeach


