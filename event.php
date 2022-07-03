<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Gallary/style.css">
    <title>Events and Gallery</title>
    <script src="https://kit.fontawesome.com/5194f2ea08.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include_once 'header.php';
    ?>
    <!--Heading starts-->
    <h1 class="heading">
        Events and Gallery
    </h1>
    <!--Heading ends-->


    <!--Filter bar starts-->
    <div class="filter-nav">
        <nav class="filter-bar">
            <div class="filters">
                <span class="item active" data-name="all">All</span>
                <span class="item" data-name="premise">Premise</span>
                <span class="item" data-name="spandan">Spandan</span>
                <span class="item" data-name="hpl">HPL</span>
                <span class="item" data-name="dj">DJ Night</span>
                <span class="item" data-name="festival">Festival</span>
            </div>
        </nav>
        <!-- filter images-->
        <div class="gallery">
            <div class="image" data-name="dj"><span><img src="Gallary/Hostel images/dj1.jpg" alt=""></span></div>
            <div class="image" data-name="festival"><span><img src="Gallary/Hostel images/festivals1.jpg" alt=""></span></div>
            <div class="image" data-name="hpl"><span><img src="Gallary/Hostel images/hpl1.jpg" alt=""></span></div>
            <div class="image" data-name="spandan"><span><img src="Gallary/Hostel images/spandan1.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Gallary/Hostel images/premise1.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Gallary/Hostel images/room1.jpg" alt=""></span></div>
            <div class="image" data-name="hpl"><span><img src="Gallary/Hostel images/hpl2.jpg" alt=""></span></div>
            <div class="image" data-name="dj"><span><img src="Gallary/Hostel images/sj2.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Gallary/Hostel images/room2.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Gallary/Hostel images/premise3.jpg" alt=""></span></div>
            <div class="image" data-name="spandan"><span><img src="Gallary/Hostel images/spandan3.jpg" alt=""></span></div>
            <div class="image" data-name="spandan"><span><img src="Gallary/Hostel images/spandan2.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Gallary/Hostel images/premise2.jpg" alt=""></span></div>
        </div>
    </div>
    <!--Filter bar ends-->

    <!-- full screen image preview -->
    <div class="preview-box">
        <div class="details">
            <span class="title">Image Category: <p></p></span>
            <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box">
            <img src="Gallary/Hostel images/hpl2.jpg" alt="">
        </div>
    </div>
    <div class="shadow"></div>
    <script src="Gallary/script.js"></script>

    <?php
    include_once 'footer.php';
    ?>
</body>
</html>