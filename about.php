<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c065ff78d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <title>Hostel | About</title>
</head>

<body>
    <header class="about_head">
        <?php
        include_once 'header.php';
        ?>
        <div class="aboutWel">
            <div class="container">
                <div class='naming-container'>
                    <span id='text'></span>
                    <!-- <div class='console-underscore' id='cursor'></div> -->
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- =======----WARDENS-----====== -->
        <section class="wardens">
            <div class="heading">
                <h1>Our Wardens</h1>
            </div>
            <div class="abt-warden">
                <div class="chief">
                    <div class="photo">
                        <img src="./images/chief-warden.jpg" alt="prabodh-sir">
                    </div>
                    <div class="about">
                        <h2>Prabodh Dwivedi</h2>
                        <span>--Chief Warden--</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti cupiditate, odio minus eum
                            officiis consectetur corporis nisi. Temporibus, nostrum possimus! Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Recusandae, inventore minus culpa laboriosam molestias
                            architecto, officia temporibus nostrum quos vitae voluptates? Quo, accusantium facere sequi
                            consequatur aspernatur voluptatibus nesciunt nulla!<br>~~~~~~~~~</p>
                    </div>
                </div>
                <div class="girls">
                    <div class="photo">
                        <img src="./images/girls-warden.jfif" alt="vanshika-ma'am">
                    </div>
                    <div class="about">
                        <h2>Vansika Arora</h2>
                        <span>--Girl's Hostel Warden--</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti cupiditate, odio minus eum
                            officiis consectetur corporis nisi. Temporibus, nostrum possimus! Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Aspernatur hic minima laboriosam, dolorem reprehenderit nisi
                            recusandae enim incidunt temporibus impedit illo facilis facere nihil ex nobis esse
                            accusantium soluta beatae!<br>~~~~~~~~~</p>
                    </div>
                </div>
                <div class="boys">
                    <div class="photo">
                        <img src="./images/boys-warden.jpg" alt="rb_patel-sir">
                    </div>
                    <div class="about">
                        <h2>Raj Bali Patel</h2>
                        <span>--Boy's Hostel Warden--</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti cupiditate, odio minus eum
                            officiis consectetur corporis nisi. Temporibus, nostrum possimus! Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Laborum sint possimus voluptatibus magnam. Doloribus inventore
                            debitis rem laboriosam non officiis deserunt distinctio voluptatibus assumenda nobis
                            voluptatem, sunt hic accusamus quod.<br>~~~~~~~~~</p>
                    </div>
                </div>
            </div>
        </section>

        <!-------------=====BUILDINGS====------------>
        <div class="h_title">
            <h1>Our Hostel</h1>
        </div>
        <section class="buildings">
            <div class="girl_hostels">
                <div class="girlhostel">
                    <div class="image">
                        <img src="./images/girlHostel.jpg" alt="girlHostel1">
                    </div>
                    <div class="text">
                        <h3>Girl Hostel 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, dolor est vel sunt
                            consequuntur velit fugit iure tempore modi impedit!</p>
                    </div>
                </div>
                <div class="girlhostel">
                    <div class="image">
                        <img src="./images/girlsHostel.jpg" alt="girlHostel2">
                    </div>
                    <div class="text">
                        <h3>Girl Hostel 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, dolor est vel sunt
                            consequuntur velit fugit iure tempore modi impedit!</p>
                    </div>
                </div>
            </div>
            <div class="boy_hostels">
                <div class="boyhostel">
                    <div class="image">
                        <img src="./images/boyHostel.jpg" alt="boyHostel1">
                    </div>
                    <div class="text">
                        <h3>Boy Hostel 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, dolor est vel sunt
                            consequuntur velit fugit iure tempore modi impedit!</p>
                    </div>
                </div>
                <div class="boyhostel">
                    <div class="image">
                        <img src="./images/boysHostel.jpg" alt="boyHostel2">
                    </div>
                    <div class="text">
                        <h3>Boy Hostel 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, dolor est vel sunt
                            consequuntur velit fugit iure tempore modi impedit!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    include_once 'footer.php';
    ?>
    <!-- ========Javascript========= -->
    <script src="script.js"></script>
</body>

</html>