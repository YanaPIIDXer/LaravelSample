<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // ↓修正。おまじない
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // ↓追加。
        return [
            "user_id" => "required",
            "password" => "required",
        ];
    }

    // ↓追加。
    // エラー時に出力する文字列を設定。
    public function message()
    {
        return [
            "user_id.required" => "ユーザＩＤを入力してください。",
            "password.required" => "パスワードを入力してください。",
        ];
    }
}
