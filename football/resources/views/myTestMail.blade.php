<!DOCTYPE html>
<html>
<head>
    <title>Mail From {{$details['email']}}</title>
</head>
<body>
    <h1>{{ $details['name'] }}</h1>
    <p>{{ $details['phone'] }}</p>

    <br>
    <p>{{ $details['content'] }}</p>
</body>
</html>
