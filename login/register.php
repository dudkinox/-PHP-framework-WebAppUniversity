<?php
if (isset($_POST["submit"])) { //เมื่อทำการกดปุ่มรหัส
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password2 = $_POST["password2"];
    $conn = new mysqli("localhost", "id15914843_data", "I1~7W8kxXzol-/9z", "id15914843_carrantal");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO login (Email, Name, Password)
VALUES ('" . $email . "', '" . $name . "', '" . $password2 . "')";

    if ($conn->query($sql) === TRUE) {
        echo '
 <script>
 alert("สมัครสมาชิกเรียบร้อย");
 window.location.href = "./";
 </script>
 ';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Car-rantat-website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <section id="main">
            <header>
                <span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
                <br><br>
                <h1>สมัครสมาชิก</h1>

            </header>

            <form method="post" action="register.php">
                <div class="fields">
                    <div class="field">
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="field">
                        <input type="password" name="password1" id="password1" placeholder="Password" />
                    </div>
                    <div class="field">
                        <input type="password" name="password2" id="password2" placeholder="Confirm Password" />
                    </div>
                    <div class="field">

                        <input type="checkbox" id="human" name="human" /><label for="human">ยอมรับเงื่อนไข</label>

                    </div>
                </div>
                <ul class="actions special">
                    <li><input type="submit" name="submit" class="button" value="CONFIRM"/></li>
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