<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>sum.html</title>
</head>
<body>
<h2>{{$title}}</h2>
<dl>
<dt>書號: </dt><dd>{{$book['id']}}</dd>
<dt>書名: </dt><dd>{{$book['title']}}</dd>
<dt>作者: </dt><dd>{{$book['author']}}</dd>
<dt>定價: </dt><dd>{{$book['price']}}</dd>
</dl>
</body>
</html>