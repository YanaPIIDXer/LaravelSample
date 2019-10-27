<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    public function register_index()
    {
        return view("users.register");
    }

    public function register(UserRequest $request)
    {
        $user = new User();
        $user->user_id = $request->user_id;
        $user->password = password_hash($request->password, PASSWORD_BCRYPT);

        if(!$user->save())
        {
            return redirect("/register")->with("error", "登録に失敗しました。");
        }
        
        // 今回はひとまずトップページに飛ばす。
        return redirect("/")->with("success", "登録しました。");
    }
}
