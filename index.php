<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c065ff78d9.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <title>Hostel</title>
</head>

<body>
    <header>
        <!-- <nav id="nav">
            <div class="logo">
                <h1><a href="./index.php">HOSTEL</a></h1>
            </div>
            <div class="nav_items">
                <div class="nav_item">
                    <ul>
                        <li>
                            <a href="./index.php">Home</a>
                            <img src="images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
                <div class="nav_item">
                    <ul>
                        <li>
                            <a href="./contact.php">Contact</a>
                            <img src="images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
                <div class="nav_item">
                    <ul>
                    <li>
                            <a href="./about.php">About</a>
                            <img src="images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
                <div class="nav_item">
                    <ul>
                        <li>
                            <a href="signin.php">Join</a>
                            <img src="images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <?php
        include_once 'header.php';
        ?>
        <div class="welcome_text">
            <div class="container">
                <h1>Welcome to</h1>
                <div class='naming-container'>
                    <span id='text'></span>
                    <!-- <div class='console-underscore' id='cursor'></div> -->
                </div>
            </div>
            <p>Arya Bhatta Boy's Hostel and Kalpana Chawala Girl's Hostel are one the best Hostel in this region. It consist of the best infrastrucure - Free 24/7 wifi facility, single rooms , double rooms, Mess facility, well-equipped Gymnasium,and much more.  <br>
                </p>
        </div>
    </header>

    <section class="goto pt-5 pb-4">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                    <img src="images/even&gallery.jpg" class="card-img-top mx-auto d-block" alt="event$gallery_page_img">
                    <div class="card-body">
                        <h5 class="card-title"><a href="event.php" class="btn btn-primary" role="button">Events Gallary</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="images/complain_page.jpg" class="card-img-top img-responsive mx-auto d-block" alt="complain_page_img">
                    <div class="card-body">
                        <h5 class="card-title"><a href="complaint.php" class="btn btn-primary" role="button">Raise Complain</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

    </section>

    <?php
    include_once 'footer.php';
    ?>
    <!-- ========Javascript========= -->
    <script src="script.js"></script>
</body>

</html>