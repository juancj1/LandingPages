<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<a href="profile">profile</a>
@auth

@else 
<a href="register">register</a>
<a href="login">login</a>
@endauth

<h1 class="text-red-500">
    test1
</h1>

<nav>
    <ul>

    </ul>
</nav>
    
</body>
</html>