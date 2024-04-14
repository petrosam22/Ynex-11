<?php

namespace App\Http\Requests;

use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
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
            'name'=>'required',
            'date' => 'required|date|after_or_equal:today',
            'from'=>'required',
            'to'=>'required|after:from',
            'description'=>'required',
  

        ];
    }

public function messages(){
        return[
          'name.required'=> 'Name Field Is Required',
          'date.required'=> 'Date Field Is Required',
          'date.after_or_equal'=> 'Date Can Not Be Before The  Current Date',
          'from.required'=> 'from Field Is Required',
          'to.required'=> 'to Field Is Required',
          'to.after'=> 'to Field Must Be After From',
          'description.required'=> 'description Field Is Required',
        ];
    }
}
