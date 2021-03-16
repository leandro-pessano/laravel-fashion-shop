<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($dresses as $dress)
    <ul>
        <li>ID: {{$dress -> id}} </li>
        <li>Nome: {{$dress -> nome}} </li>
        <li>Colore: {{$dress -> colore}} </li>
    </ul>
    @endforeach
</body>
</html>