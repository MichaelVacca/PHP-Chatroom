<!DOCTYPE html>
<html>

<head>
<title>
Log in
</title>

<style>
    body {
        color: white;
    }

    .main {
        background-color: #3d3d3d;
        position:absolute;
        top:0px;
        right:0px;
        bottom:0px;
        left:0px;
    }

    header {
        padding: 3%;
        text-align: center;
        background: #339FFF;
        color: white;
        font-size: 50px;
    }

    form {
        margin-top:5%;
        text-align:center;
    }

    .txt {
        margin:20px;
        padding: 10px;
        width: 30%;
    }

    .btn {
        background-color: #339FFF;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
</style>
</head>
<body>
    <div class="main">
        <header>Chat Room</header>
        <form action="login.php" method="post">
            <h1>Log in</h1>
            <input type="text" placeholder="Username" name="username" class="txt"><br>
            <input type="password" placeholder="Password" name="password" class="txt"><br> 
            <input type="submit" value="Login" class="btn">
            <p>Don't have an account? <a href="signupfront.php" style="color:#339FFF">Sign up now</a>.</p>
        </form>
    </div>
</body>

</html>

