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
.text{
  margin: 15px;
  color: red;
}
#btn{
  border-radius: 10px;
}
    </style>
</head>
<body>
    <form action="/login" method="POST">
      @csrf
            <label for="name"><b>enter your firstname:</b></label>
            <input type="text" name="name" id="name">
     
            <label for="lastname"><b>enter your last name:</b></label>
            <input type="text" name="lastname" id="lastname">
       
            <label for="mobile"><b>mobile number:</b></label>
            <input type="text" name="mobile" id="mobile">
      
            <label for="email"><b>email:</b></label>
            <input type="text" name="email" id="email">
    
            <label for="pass"><b>password:</b></label>
            <input type="text" name="pass" id="pass">
     
            <label for="pass_confirmation"><b>verify password:</b></label>
            <input type="text" name="pass_confirmation" id="pass_confirmation">

            <input type="submit" value="enter" id="btn">
    </form>

    @if($errors->any())
      @foreach($errors->all() as $error)
      <li class="text">
        {{$error}}
      </li>
      @endforeach
    @endif

</body>
</html>