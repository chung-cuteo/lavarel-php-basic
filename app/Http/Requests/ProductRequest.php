<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ten_sp' => 'required | min:6',
            'gia' => 'required | integer'
        ];
    }

    public function messages()
    {
        return [
            'ten_sp.required' => ':attribute bat buoc phai nhap',
            'ten_sp.min' => ':attribute ko dk nho hon :min ki ti',
            'gia.required' => ':attribute bat buoc phai nhap',
            'gia.integer' => ':attribute pahi la so',
        ];
    }

    public function attributes()
    {
        return [
            'ten_sp' => 'ten san pham',
            'gia' => 'gia san pham'
        ];
    }
    // xu lu sau khi request
    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg_error', 'Something is wrong with this field!');
            }
        });
    }

    // xu lu trk khi request
    protected function prepareForValidation()
    {
        $this->merge([
            'create_at' => date('Y-m-d H:i:s'),
        ]);
    }

    protected function failedAuthorization()
    {
        // throw new AuthorizationException('ko co quen dang nhap');
        // throw new HttpResponseException(redirect('/')->with('msg', 'dang nhap ko thanh cong'));
    }


}
