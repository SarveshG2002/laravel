<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Registration</h1>
        <form action="{{url('/')}}/register" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="uname">
            </div>
            <x-input/>
            <div>
                <input type="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>