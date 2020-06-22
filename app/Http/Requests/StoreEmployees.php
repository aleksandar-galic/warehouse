<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployees extends FormRequest
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
            'name' => 'required | min:3',
            'age' => 'required | integer | min:18 | max:65',
            'job_description' => 'required | min:10',
            'warehouse_id' => 'numeric | exists:employees,warehouse_id'
        ];
    }
}