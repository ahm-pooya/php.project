<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
label {
  display: flex;
  flex-direction: row;
  text-align: right;
  width: 400px;
  line-height: 26px;
  margin-bottom: 10px;
}

input {
  height: 20px;
  flex: 0 0 200px;
  margin-left: 10px;
}

    </style>
</head>
<body>
    <form action="/signup" method="POST">
    @csrf
        <label for="mobile"><b>mobile number:</b></label>
        <input type="text" name="mobile" id="mobile">
    
        <label for="pass"><b>password:</b></label>
        <input type="text" name="pass" id="pass">

        <input type="submit" value="enter" id="btn">

    </form>
</body>
</html>