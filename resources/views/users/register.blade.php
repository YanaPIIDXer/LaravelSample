@extends("layouts/view")
@section("Title")
ユーザ登録
@endsection

@section("Content")
<form METHOD="POST" action="{{url('/user_register')}}">
    {{ csrf_field() }}
    ユーザＩＤ：<input type="text" name="user_id"><br />
    @if ($errors->has("user_id"))
        <span class="error">{{ $errors->first("user_id") }}</span><br />
    @endif
    パスワード：<input type="password" name="password"><br />
    @if ($errors->has("password"))
        <span class="error">{{ $errors->first("password") }}</span><br />
    @endif
    <input type="submit" value="登録">
</form>
<br />
<a href="{{url('/')}}">戻る</a>
@endsection