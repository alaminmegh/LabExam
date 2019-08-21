<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
          'username' => 'required|unique:users,username',
          'email' => 'required|unique:users,email',
          'password' => 'required',
          'cpassword' => 'required|same:password',
            'userType' => 'required'

        ];
    }

    public function messages()
    {
        return [
          'username.required' => 'Username is required',
          'username.unique' => 'Username already exists',
          'email.required' => 'Email is required',
          'email.unique' => 'Email already exists',
          'password.required' => 'Password is required',
          'cpassword.required' => 'Confirm Password is required',
          'cpassword.same' => 'Password & Confirm Password not match',
          'userType.required' => 'User Type is required'
        ];
    }
}
