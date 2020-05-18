<?php

namespace App\Http\Requests\Host\Page;

use App\Models\Page;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class ConfirmPasswordRequest extends FormRequest
{
    // /**
    //  * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    // public function authorize()
    // {
    //     return false;
    // }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {

            if (!$validator->errors()->has('password')) {
                $data = Page::where('page_id', $this->route('page_id'))->firstOrFail();
                $result = Hash::check($this->input('password'), $data['password']);
                if ($result) {
                    session(['host' => $this->route('page_id')]);
                }else{
                    $validator->errors()->add('password', 'パスワードが間違っています。');
                }
            }
        });
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required'
        ];
    }
}
