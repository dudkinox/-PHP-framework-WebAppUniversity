<?php
session_start();
session_destroy();
if(isset($_POST["submit"])){
    session_start();
    $_SESSION["user"] = htmlentities($_POST["user"]);
    $_SESSION["password"] = htmlentities($_POST["password"]);
    header("location: app/homepage/");
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>วิทยาการคอมพิวเตอร์</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="is-preload">
    <div id="wrapper">
        <section id="main">
            <header>
                <span class="avatar"><img src="images/logocomsci.png" alt="" /></span>
                <br><br>
                <h1>Login</h1>
            </header>
            <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
                <div class="fields">
                    <div class="field">
                        <input type="text" name="user" id="user" placeholder="USERNAME" />
                    </div>
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="PASSWORD" />
                    </div>
                    <div class="field">
                        <a href="/register.php">สมัครสมาชิก</a>
                    </div>
                    <div class="field">
                        <a href="/register.php">ลืมรหัสผ่าน</a>
                    </div>
                </div>
                <ul class="actions special">
                    <li><input name = "submit" type = "submit" class="button" value = "เข้าสู่ระบบ"/></li>
                </ul>
            </form>
            <hr />

        </section>


    </div>

    <!-- Scripts -->
    <script>
        if ('addEventListener' in window) {
            window.addEventListener('load', function() {
                document.body.className = document.body.className.replace(/\bis-preload\b/, '');
            });
            document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
        }
    </script>

</body>

</html>