<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'name'=>'sometimes',
            'date' => 'sometimes|date|after_or_equal:today',
            'from'=>'sometimes',
            'to'=>'sometimes|after:from',
            'description'=>'sometimes',
        ];
    }

    public function messages(){
        return[
           'date.after_or_equal'=> 'Date Can Not Be Before The  Current Date',
          'from.required'=> 'from Field Is Required',
           'to.after'=> 'to Field Must Be After From',
          'description.required'=> 'description Field Is Required',
        ];
    }

}
