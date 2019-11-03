<!DOCTYPE html>
<html>
<head>
<title>Laravelサンプル</title>
<meta charset="utf-8">
</head>
<body>
@if (session("success"))
    <span class="success">{{ session("success") }}</span>
@endif

@if (session("error"))
    <span class="error">{{ session("error") }}</span>
@endif
<h1>@Yield("Title")</h1>
@Yield("Content")
</body>
</html>