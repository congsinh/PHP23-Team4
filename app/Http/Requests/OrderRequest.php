<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       return [
           'name' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'product' => 'required',
       ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên khách hàng không được để trống !',
            'phone.required' => 'Số điện thoại không được để trống !',
            'address.required' => 'Địa chỉ không được để trống !',
            'product.required' => 'Không có sản phẩm nào trong đơn hàng !',

        ];
    }
}
