<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class SkillsRequest extends FormRequest
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
            'name'=> 'required|alpha|unique:skills',
 
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Name Felid Is Required',
            'name.unique'=>'Name Felid Must Be Unique',
            'name.alpha'=>'Name Felid Must Be string',

        ];
    }
}
