<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => 'required|string|max:256',
                'industry' => 'required',
                'website' => 'nullable|url',
                'country' => 'nullable|string|max:200',
                'city' => 'nullable|string|max:200',
                'logo_path' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:2048',
                'contact_name' => 'required|string|max:256',
                'email' => 'required|email|max:300',
                'phone' => 'nullable|string',
                'job_title' => 'nullable',
                'client_status' => 'required|in:onboarding,active,paused,draft',
                'start_date' => 'nullable',
                'currency' => 'required',
                'monthly_budget' => 'nullable|numeric|min:0',
                'advertising_platforms' => 'nullable'
            
        ];

        /*[
                'logo_path.image' => 'The company logo must be an image',
                'logo_path.mimes' => 'The company logo must be a file of type: jpeg, jpg, png, webp or gif',
                'logo_path.max' => 'The company logo must be maximum 2MB'
            ]*/
    }
}
