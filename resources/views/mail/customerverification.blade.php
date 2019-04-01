<!doctype html>
<html>
<body>
<h2>Hi, {{$data['name']}}</h2>
<p>Yo're just signup in The Mango BD shop, Please verify your email using the bellow code</p>
<h3>{{$data['verification_code']}}</h3>
<a href="{{ url('/verify-customer') }}"></a>
</body>
</html>