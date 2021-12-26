<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login_style.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login Green Shop</title>
</head>
<body>
    <!--co the them phan navbar + logo o tren doan na`y-->
    <div class="container_login">
        <form class="login">
            <p class="title">Log in</p>
                <input type="text" placeholder="Username" autofocus/>
                <i class="fas fa-user"></i>
                <input type="password" placeholder="Password" />
                <i class="fas fa-key"></i>
                <a href="#">Forgot your password?</a>
                <!-- them remember password o dong na`y-->
                <button>
                    <i class="spinner"></i>
                    <span class="state">Log in</span>
                </button>
        </form>
        <footer>
            <a target="blank" href="#">sign up</a>
        </footer>
    </div>

    <script src="./login_js.js"></script>
</body>
</html>