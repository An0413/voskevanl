<?php


namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'lastname' => 'required|string',
            'position' => 'required|integer',
            'seq' => 'required|integer',
//            'img' => 'nullable|file',
//            'img' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'mail_link' => 'email|nullable|string',
            'fb_link' => 'url|nullable|string',
            'insta_link' => 'url|nullable|string',
            'in_link' => 'url|nullable|string',
        ];
    }
}

