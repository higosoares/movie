<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/10/2018
 * Time: 20:53
 */

namespace App\Http\Requests\Profile;


use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\Console\Input\Input;

class ProfileRequest extends FormRequest
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
        return \App\Validates\Profile\ProfileValidate::rules();
    }

    public function messages()
    {
        return \App\Validates\Profile\ProfileValidate::messages();
    }
}
