@extends("layouts/view")
@section("Title")
ユーザ登録
@endsection

@section("Content")
<form METHOD="POST" action="{{url('/user_register')}}">
    {{ csrf_field() }}
    ユーザＩＤ：<input type="text" name="user_id"><br />
    パスワード：<input type="password" name="password"><br />
    <input type="submit" value="登録">
</form>
<br />
<a href="{{url('/')}}">戻る</a>
@endsection