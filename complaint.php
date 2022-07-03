<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Complaints/complaint.css">
    <title>Raise a Complaint</title>
</head>

<body>
    <?php
    include_once 'header.php';
    include 'dbconn.php';
    if (isset($_POST['submit'])) {
        $complainType = mysqli_real_escape_string($conn, $_POST['complaint-type']);
        $complaintBody = mysqli_real_escape_string($conn, $_POST['complaint']);
        $victimName = mysqli_real_escape_string($conn, $_POST['name']);
        $collegeId = mysqli_real_escape_string($conn, $_POST['collegeid']);
        $room_num = mysqli_real_escape_string($conn, $_POST['roomNo']);
        $phone_num = mysqli_real_escape_string($conn, $_POST['phone']);

        if (!empty($complaintType) || !empty($$complaintBody) || !empty($victimName) || !empty($collegeId) || !empty($room_num) || !empty($phone_num)) {
            
            $insertComplain = " INSERT INTO `complain`(`complainType`, `complaintBody`, `victimName`, `collegeid`, `room_num`, `phone_num`) VALUES ('$complainType','$complaintBody','$victimName','$collegeId','$room_num','$phone_num') ";

                $inquery = mysqli_query($conn, $insertComplain);

                ?>
            <script>
                alert("Your Complain is Successfully registered.");
            </script>

            <?php
        }
    }
    

    ?>




    <h1 class="heading">
        Raise a Complaint
    </h1>
    <div class="form-div">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="form" method="POST">
            <div class="form-item">
                <label for="name" class="form-name">Complaint type</label>

                <select name="complaint-type" id="type" class="text-box">
                    <option value="default" class="comp-option" disabled selected value>Select the complaint type</option>
                    <option value="Hostel" class="comp-option">Hostel Infrastructure</option>
                    <option value="room" class="comp-option">Room Related</option>
                    <option value="personal" class="comp-option">Personal</option>
                </select>
            </div>
            <div class="form-item">
                <label for="complaint" class="form-name">Write your Complaint Here</label> <br>
                <textarea name="complaint" class="text-box" id="complaint" cols="30" rows="10" placeholder="Write your complaint here"></textarea>
            </div>
            <div class="form-item">
                <label for="name" class="form-name">Name</label>
                <input type="text" maxlength="30" name="name" class="text-box" id="name" placeholder="Enter your Name" required>
            </div>
            <div class="form-item">
                <label for="id" class="form-name">College ID</label>
                <input type="text" maxlength="10" class="text-box" name="collegeid" id="id" placeholder="Enter your College ID" required>
            </div>
            <div class="form-item">
                <label for="room" class="form-name">Room Number</label>
                <input type="number" min="1" max="999" name="roomNo" class="text-box" id="room" placeholder="Enter your Room Number" required>
            </div>
            <div class="form-item">
                <label for="phone" class="form-name">Phone Number</label>
                <!-- <input type="text" name="country code" value="+91" size="2" class="text-box" id="country-code"> -->
                <input type="text" max="10" name="phone" class="text-box" id="phone" placeholder="Enter your registered Phone number" required>
            </div>
            <div class="form-item">
                <button type="submit" id="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>


    <?php
    include_once 'footer.php';
    ?>
</body>

</html>