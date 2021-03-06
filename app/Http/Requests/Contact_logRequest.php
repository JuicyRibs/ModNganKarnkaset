<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class Contact_logRequest extends FormRequest
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
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(['errors' => $errors,
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return;
            case 'POST':
                return [
                    'topic' => 'required',
                    'details' => 'required',
                    'address' => 'required',
                    'email' => 'required|email',
                    'country_id' => 'required',
                    'tel' => 'required',
                    'updated_at' => '',
                    'created_at' => ''
                ];
            case 'PUT':
                return [
                    'topic' => '',
                    'details' => '',
                    'address' => '',
                    'email' => 'email',
                    'tel' => '',
                    'country_id' => '',
                    'updated_at' => '',
                    'created_at' => ''
                ];
        }
    }
}
