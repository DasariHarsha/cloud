<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
        #buttn {
            color: #fff;
            background-color: #ff3300;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include("connection/connect.php");

    if (isset($_POST['submit'])) {
        // No need to check the password
        $username = $_POST['username'];

        if (!empty($_POST["submit"])) {
            $loginquery = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($db, $loginquery);
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                $_SESSION["user_id"] = $row['u_id'];
            }

            // Always redirect to index.php after the form submission
            header("Location: index.php");
            exit();
        }
    }
    ?>

    <div class="pen-title">
        <h1>Login Page</h1>
    </div>
    <div class="module form-module">
        <div class="form">
            <h2>Login to your account</h2>
            <form action="" method="post">
                <input type="text" placeholder="Username" name="username" />
                <input type="password" placeholder="Password" name="password" />
                <input type="submit" id="buttn" name="submit" value="Login" />
            </form>
        </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>
