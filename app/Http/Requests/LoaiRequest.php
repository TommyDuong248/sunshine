<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiRequest extends FormRequest
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
            'l_ten' => 'required|unique:loai|max:60',
            'l_taoMoi' => 'required',
            'l_capNhat' => 'required',
            'l_trangThai' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'l_ten.required' => 'Tên loại không được để trống',
            'l_ten.unique' => 'Tên loại đã tồn tại',
            'l_ten.max' => 'Tên loại vượt quá số ký tự cho phép',
            'l_taoMoi.required' => 'Ngày tạo mới không được để trống',

        ];
    }
        
    
}
