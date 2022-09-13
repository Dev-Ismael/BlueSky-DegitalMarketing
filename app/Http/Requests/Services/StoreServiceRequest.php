<?php

namespace App\Http\Requests\Services;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use League\Config\Exception\ValidationException;
class StoreServiceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'           => ['required' , 'string' , 'max:100' , Rule::unique('services', 'title')->ignore($this->service)],
            'summary'         => ['required' , 'string' ],
            'content'         => ['required' , 'string' ],
            'seo_title'       => ['required' , 'string' , 'max:500'],
            'seo_description' => ['required' , 'string' , 'max:1000'],
            'seo_keywords'    => ['required' , 'string' , 'max:1000'],
            'img'             => ['required' , 'mimes:jpeg,png,jpg' , 'max:2048'],
            'icon'            => ['required' , 'mimes:jpeg,png,jpg' , 'max:2048'],
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'msg'    => 'validation failed',
            'errors'  => $validator->errors()
        ], 200));
    }
}