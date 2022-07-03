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
        $member = $_POST['email'];
        $pwd = $_POST['password'];

        $check_member = " SELECT * FROM `members` WHERE email='$member' ";
        $checkQuery = mysqli_query($conn, $check_member);
        $countMember = mysqli_num_rows($checkQuery);

        if ($countMember) {
            $check_pass = mysqli_fetch_assoc($checkQuery);
            $pre_pass = $check_pass['Password']; // table name of password in database
            $_SESSION['name'] = $check_pass['Email'];
            $pass_dec = password_verify($pwd, $pre_pass);

            if ($pass_dec) {
                echo "Log in successfully";
                ?>
                <script>
                    location.replace("index.php");
                </script>
                <?php
            } else {
                echo "Somthing Wrong";
            }
        } else {
            echo "Invalid Email";
        }
    }
    ?>

    <!-- -=-=-=-=--HTML--=-=-=-=- -->
    <?php
        include_once 'header.php';
    ?>
    <div class="rect"></div>
    <div class="big-rect"></div>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off" class="log_form">
        <h2>Log in</h2>
        <label for="phone">E-mail
            <input type="email" name="email" placeholder="example@example.com" onfocus="(this.type='email')" required>
        </label>
        <label for="dob">Passoword
            <input type="password" name="password" placeholder="Passoword" onfocus="(this.type='password')" required>
        </label>
        <button type="submit" name="submit">Log in</button>
        <span>Not a member? <a href="signin.php"> Sign in</a></span>
    </form>
</body>

</html>