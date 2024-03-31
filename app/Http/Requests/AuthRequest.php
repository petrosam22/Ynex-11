<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name'=> 'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
            'phone'=>'required|size:10',
            'position'=>'required',
            'photo'=>'sometimes|required|image|max:4000000',
            'is_verify'=>'sometimes|required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Name Felid Is Required',
            'phone.max' => 'Phone number Must Be 11 numbers',
            'password.max' => 'Password cannot be Smaller than 11 numbers',

            'position.required' => 'Position Felid Is Required',
            'email.unique' => 'Email Already Exists',
            'email.required'=>'Email Felid Is Required',
            'photo.max'=>'Photo Must Be Smaller Than 4M ',



        ];
    }
}
