<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .form-style-2 {
            max-width: 500px;
            padding: 20px 12px 10px 20px;
            font: 13px Arial, Helvetica, sans-serif;
        }

        .form-style-2-heading {
            font-weight: bold;
            font-style: italic;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            font-size: 15px;
            padding-bottom: 3px;
        }

        .form-style-2 label {
            display: block;
            margin: 0px 0px 15px 0px;
        }

        .form-style-2 label>span {
            width: 100px;
            font-weight: bold;
            float: left;
            padding-top: 8px;
            padding-right: 5px;
        }

        .form-style-2 input.input-field,
        .form-style-2 .select-field {
            width: 48%;
        }

        .form-style-2 input {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #C2C2C2;
            box-shadow: 1px 1px 4px #EBEBEB;
            -moz-box-shadow: 1px 1px 4px #EBEBEB;
            -webkit-box-shadow: 1px 1px 4px #EBEBEB;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            padding: 7px;
            outline: none;
        }

        .form-style-2 input[type=submit],
        .form-style-2 input[type=button] {
            border: none;
            padding: 8px 15px 8px 15px;
            background: #FF8500;
            color: #fff;
            box-shadow: 1px 1px 4px #DADADA;
            -moz-box-shadow: 1px 1px 4px #DADADA;
            -webkit-box-shadow: 1px 1px 4px #DADADA;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .form-style-2 input[type=submit]:hover,
        .form-style-2 input[type=button]:hover {
            background: #EA7B00;
            color: #fff;
        }

        img {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="form-style-2">
        <div class="form-style-2-heading">مشخصات</div>

        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="field1"><span>نام محصول <span class="required"></span></span>
                <input type="text" class="input-field" name="field1" /></label>

            <label for="field2"><span>آپلود <span class="required"></span></span>
                <input type="file" class="input-field" name="field2" /></label>

            <label><span> </span><input type="submit" value="ثبت" /></label>

        </form>
    </div>
</body>

</html>