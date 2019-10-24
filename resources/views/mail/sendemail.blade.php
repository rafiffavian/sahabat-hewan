<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Send Email</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('css/app.css')}}">
    <script src='main.js'></script>
</head>
<body>
Please activate your account using the following link<br><br>
---<br>
<a href="http://localhost/sahabathewan/public/resetPassword/{{$key}}/{{$id}}">http://localhost/sahabathewan/public/resetPassword/{{$key}}/{{$id}}</a><br>
</body>
</html>