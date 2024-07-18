<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'useremail' => 'required|email',
            'userpass' => 'required|alpha_num|min:6',
            'userage' => 'required|numeric|min:18|between:18,21',
            'usercity' => 'required',
        ];
    }

    // public function messages(){
    //     return [
    //         'username.required' => ':attributes is Required!',
    //         'useremail.required' => 'User email is Required!',
    //         'useremail.email' => 'Enter the correct email address.',
    //         'userpass.required' => 'User pass is Required!',
    //         'userage.required' => 'User age is Required!',
    //         'userage.numeric' => 'User age must be numeric.',
    //         'userage.min:18' => 'user age should not less than 18 years old.',
    //         'usercity.required' => 'User city is Required!',
    //     ];
    // }


    public function attributes()
    {
        return[
            'username' => 'User Name',
            'useremail' => 'User Email',
            'userpass' => 'User Password',
            'userage' => 'User Age',
            'usercity' => 'Uaer City',
        ];
    }

    protected function prepareForValidation(): void
    {
      $this->merge(
        [
            // 'username' => strtoupper($this->username),
            
            'username' => Str::slug($this->username)
        ]
      );
    }
}
