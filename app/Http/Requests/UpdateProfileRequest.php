<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name'=> 'sometimes|required',

            'phone'=>'sometimes|required|size:10',

            'position'=>'sometimes|required',

            'photo'=>'sometimes|required|image|max:4000000',
            'bio'=>'sometimes|required',
 
        ];
    }

    public function messages(){
        return [
            'phone.max' => 'Phone number Must Be 11 numbers',
            'photo.max'=>'Photo Must Be Smaller Than 4M ',
        ];
    }
}
