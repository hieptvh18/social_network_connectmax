<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use App\Enums\ProfileStatusEnum;

class UserRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(Request $request): array
    {
        return [
            'name'=>'required|min:6|max:30',
            'username'=>'nullable|unique:users|min:6|max:14|regex:/^\w{4,14}$/',
            'birthday'=>"required|date",
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:16',
            'avatar'=>'nullable|string|max:255',
            'bio'=>'nullable|string|max:255',
            'phone'=>'nullable|string|max:255',
            'website'=>'nullable|string|max:255',
            'gender'=>'string|in:MALE,FEMALE',
            'status'=>['nullable','string',
                new Enum(ProfileStatusEnum::class)
            ],
            'facebook_link'=>'nullable|string|max:255',
            'instagram_link'=>'nullable|string|max:255',
            'twitter_link'=>'nullable|string|max:255',
            'linkedln_link'=>'nullable|string|max:255'
        ];
    }

    public function attributes()
    {
        return [];
    }
}
