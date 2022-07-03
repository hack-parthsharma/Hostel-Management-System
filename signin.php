<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Sign in</title>
</head>

<body>
    <!-- -=-=-=-=--PHP--=-=-=-=- -->
    <?php
    include 'dbconn.php';

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $member = mysqli_real_escape_string($conn, $_POST['email']);
        $clgid = mysqli_real_escape_string($conn, $_POST['clgid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        $re_pwd = mysqli_real_escape_string($conn, $_POST['re_pwd']);

        $pass = password_hash($pwd, PASSWORD_BCRYPT);
        $repass = password_hash($re_pwd, PASSWORD_BCRYPT);

        $token = bin2hex(random_bytes(20));

        $memquery = " select * from members where email = '$member'";
        $query = mysqli_query($conn, $memquery);
        $clgidquery = " select * from members where college_ID = '$clgid'";
        $idquery = mysqli_query($conn, $clgidquery);

        $memcount = mysqli_num_rows($query);
        $clgidcount = mysqli_num_rows($idquery);

        if ($memcount > 0 || $clgidcount > 0) {

    ?>
            <script>
                alert("Email or ID already exist.");
                location.replace('login.php');
            </script>

            <?php
        } else {
            if ($pwd === $re_pwd) {
                $insertquery = " insert into members(`Name`, `Email`, `college_ID`, `Password`, `Re-password`, `token`, `status`) values('$username', '$member', '$clgid', '$pass', '$repass', '$token', 'inactive') ";

                $inquery = mysqli_query($conn, $insertquery);

                if ($inquery) {
            ?>
                    <script>
                        location.replace('login.php')
                    </script>

                <?php
                } else {
                ?>
                    <script>
                        alert("NOT inserted!")
                    </script>

    <?php
                }
            } else {
                ?>
                    <script>
                        alert("Password are not matching..")
                    </script>

    <?php
            }
        }
    }


    include_once 'header.php';
    ?>

    <!-- -=-=-=-=--HTML--=-=-=-=- -->

    <div class="rect"></div>
    <div class="big-rect"></div>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off" class="sign_form">
        <h2>Sign up</h2>
        <label for="phone">Name
            <input type="text" name="username" placeholder="Full Name" onfocus="(this.type='text')" required>
        </label>
        <label for="phone">E-mail
            <input type="email" name="email" placeholder="example@example.com" onfocus="(this.type='email')" required>
        </label>
        <label for="dob">College ID
            <input type="text" name="clgid" placeholder="College Id" onfocus="(this.type='text')" required>
        </label>
        <label for="dob">Passoword
            <input type="password" name="pwd" placeholder="Passoword" onfocus="(this.type='password')" required>
        </label>
        <label for="dob">Repeat Passoword
            <input type="password" name="re_pwd" placeholder=" Re-enter Passoword" onfocus="(this.type='password')" required>
        </label>
        <button type="submit" name="submit">sign in</button>
        <span>Already member? <a href="login.php"> Log in</a></span>
    </form>
</body>

</html>