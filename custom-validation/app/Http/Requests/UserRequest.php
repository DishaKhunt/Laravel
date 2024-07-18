<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use App\Rules\Uppercase;

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
            'username' => ['required', new Uppercase],
            'useremail' => 'required|email'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         "username.required" => ':attribute is Required!',
    //         "useremail.required" => 'Email is Required!'
    //     ];
    // }

    // public function attributes()
    // {
    //     return [
    //         'username' => 'Name',
    //         'useremail' => 'Email'
    //     ];
    // }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'username' => Str::slug($this->name)
        ]);
    }

    protected $stopOnFirstFailure = true;
}