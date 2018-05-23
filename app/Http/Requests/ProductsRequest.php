<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class ProductsRequest extends FormRequest
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
        switch ($this->method()){
            case 'PUT':
                $rule_image = '';
                break;
            default :
                $rule_image = 'required';
                break;
        }

        return [
            'name' => 'required|unique:products,name,' . $this->product,
            'description' => 'required|min:100',
            'quantity_store' => 'required',
            'category_id' => 'required',
            'image_detail' => $rule_image,
            'image_detail.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:1000',
            'configuration' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên sản phẩm không được để trống !',
            'name.unique' => 'Tên sản phẩm đã bi trùng !',
            'category_id.required' => 'Danh mục sản phẩm không được để trống !',
            'quantity_store.required' => 'Số lượng trong kho không được để trống !',
            'description.required' => 'Mô tả không được để trống !',
            'description.min' => 'Mô tả ít nhất 100 ký tự !',
            'image_detail.required' => 'Hình ảnh không được để trống !',
            'image_detail.*.image' => 'File không phải là hình ảnh !',
            'image_detail.*.mimes' => 'Chỉ hỗ trợ định dạng đuôi jpeg, png, jpg, gif và svg !',
            'image_detail.*.max' => 'Kích thướt file không quá 2MB!',
            'price.required' => 'Bạn chưa nhập giá sản phẩm !',
            'price.numeric' => 'Giá tiền phải là số !',
            'price.min' => 'Giá tiền thấp nhất là 1000 !',
            'manufacture_id.required' => 'Vui lòng chọn hãng sản xuất sản phẩm!',
            'configuration.required' => 'Bạn chưa nhập thông tin cấu hình sản phẩm !',
        ];
    }
}
