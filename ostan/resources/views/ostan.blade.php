<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('/jquery-3.7.1.min.js') }} "></script>

    <title>Document</title>
</head>
<body>

<form action="/ostan" method="POST">
    @csrf

    <label for="ostan">استان:</label>
    <select name="ostan" id="ostan">
        @foreach ($ostan as $ostans)
            <option value="{{ $ostans->id }}">{{ $ostans->ostan }}</option>
        @endforeach
    </select>
<br>

    <label for="shahrestan">شهرستان:</label>
    <select name="shahrestan" id="shahrestan">
        <option value="">شهرستان</option>
    </select>

</form>
<script>
     $(document).ready(function() {
        $('#ostan').on('change', function() {
            var ostanId = $(this).val();

            if(ostanId) {
                $.ajax({
                    url: '/ostan/' + ostanId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)
                        $('#shahrestan').empty();
                        $.each(data, function(key, value) {
                            $('#shahrestan').append('<option value="' + value.id + '">' + value.shahrestan + '</option>');
                        });
                    }
                });
            } else {
                $('#shahrestan').empty();
            }
        });
    });
</script>
</body>
</html>