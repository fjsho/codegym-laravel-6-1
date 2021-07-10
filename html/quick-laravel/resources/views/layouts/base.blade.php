<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<!-- a. titleの置き場所 -->
<title>@yield('title')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ"/>
<hr/>
<!--b.mainコンテンツの置き場所-->
@section('main')
<p>既定のコンテンツです。</p>
@show
<hr/>
<p>Copyright(c)19982019,WINGSProject.AllRightReserved.</p>
</body>
</html>
