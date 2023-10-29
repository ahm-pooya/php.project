<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .image-container {
            display: flex;

        }

        .image-item img {
            width: 200px;
            padding: 10px;

        }

        .image-name {
            margin-top: 5px;
            margin-left: 10px;

        }
    </style>
</head>

<body>

    <div class="image-container">
        @foreach ($data as $datas)

        <div class="image-item">
            <img src="{{ asset('storage/images/'.$datas->name) }}" alt="Uploaded Image">
            <p class="image-name">{{ $datas->name }}</p>
            <p>{{$datas->getCreateAtShamsi()}}</p>

        </div>
        @endforeach
    </div>

</body>

</html>