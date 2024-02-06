<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>REGISTER FORM</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="NAME">
            <input name="email" type="text" placeholder="EMAIL">
            <input name="password" type="password" placeholder="PASSWORD">
            <input name="cpassword" type="password" placeholder="CONFIRM PASSWORD">
            <button>REGISTER</button>
        </form>
    
</body>
</html>