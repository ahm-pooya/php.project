<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<div>
   @foreach($data as $datas)

    @if($loop->last)

    <h1> welcome {{$datas-> name }} {{$datas->lastname}}</h1>

     @endif

    @endforeach
</div>

</body>
</html>