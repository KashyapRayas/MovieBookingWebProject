<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TixSee | Booking</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="elem">
        <div class="nav-wrapper">
            <div class="nav-logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 4.212 5.265" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css">
   
                </style></defs><g><path class="fil0" d="M2.68 0l0.447 0.447c-0.177,0.176 -0.176,0.462 0,0.638 0.176,0.176 0.462,0.176 0.638,0l0.447 0.446 -2.681 2.681 -0.446 -0.447c0.176,-0.176 0.176,-0.462 0,-0.638 -0.176,-0.176 -0.462,-0.176 -0.638,0l-0.447 -0.447 2.68 -2.68zm-0.306 1.072l0.766 0.766 -1.302 1.302 -0.766 -0.766 1.302 -1.302z"/></g><text x="0" y="19.212" fill="currentColor" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Deemak Daksina</text><text x="0" y="24.212" fill="currentColor" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                <h1>Tix<span>See</span></h1>
            </div>

            <ul class="nav-links">
                <li><a href="movies.php"><i class="fa-solid fa-ticket"></i>Movies</a></li>
                <li><a href=""><i class="fa-solid fa-calendar"></i>Events</a></li>
                <?php
                    // Check if the user is logged in
                    if (isset($_SESSION['email'])) {
                        echo '<li><a href="profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>';
                    }
                    else {
                        echo '<li><a href="signup.php"><i class="fa-solid fa-user"></i>Sign Up/Login</a></li>';
                    }
                ?>
                <li><a href="#" class="darkmode-btn"><i class="fa-solid fa-circle-half-stroke"></i>Dark Mode</a></li>
            </ul>
        </div>
    </nav>

    <div id="profile" class="booking">

        <form action="" method="post">

            <legend><h3>Amazing choice! </h3>Let's book your Tix</legend>
            <div class="form-group-wrapper">
                <div class="name-group form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <label for="uemail">Email</label>
                    <input type="email" name="uemail" value="" id="uemail">
                </div>
                <div class="name-group form-group">
                    <i class="fa-solid fa-location-dot"></i>
                    <label for="uloc">Location</label>
                    <select name="uloc" id="uloc">
                    <option value="binny">Choose Cinema location</option>
                        <option value="central">INOX Central Mall, JP Nagar</option>
                        <option value="swagath">INOX Swagath Garuda, Jayanagar</option>
                        <option value="binny">Cinepolis Lulu Mall</option>
                        <option value="swagath">PVR Vega City, Bannerghatta Road</option>
                    </select>
                </div>
                <div class="seat-group form-group">
                    <label for="ubook"><i class="fa-solid fa-user-group"></i> Choose your seats</label>
                    <div class="seat-set-group form-group">
                        <div class="left-group"></div>
                        <div class="right-group"></div>
                        <div class="middle-group"></div>
                    </div>
                    <div class="screen"></div>
                    <h2 class="screen-text">Screen</h2>
                </div>
                <div class="bottom">
                    <div class="submit-button-group form-group">
                        <i class="fa-solid fa-ticket"></i>
                        <div>Book Tix</div>
                    </div>
                </div>
            </div>
            

        </form>

        <a href="#" class="card-wrapper">
                    <div class="card">
                        <div class="poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BNzQ1ODUzYjktMzRiMS00ODNiLWI4NzQtOTRiN2VlNTNmODFjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg" alt="">
                        </div>
                        <div class="title">
                            Spiderman: Across the Spiderverse
                        </div>
                        <div class="details">
                            <i class="fa-solid fa-heart"></i>
                            <h3>20k</h3><br>
                            <i class="fa-solid fa-star"></i>
                            <h3>8.7/10</h3><br>
                            <i class="fa-solid fa-clock"></i>
                            <h3>3h</h3>
                        </div>
                        <div class="details2">
                            <h3>English</h3>
                            <h3>Hindi (Dub)</h3>
                            <h3>4DX</h3>
                            <h3>3D</h3>
                            <h3>2D</h3>
                        </div>
                    </div>
        </a>

    </div>

    <footer>
        <div class="left">
            <div class="nav-logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 4.212 5.265" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css">
   
                </style></defs><g><path class="fil0" d="M2.68 0l0.447 0.447c-0.177,0.176 -0.176,0.462 0,0.638 0.176,0.176 0.462,0.176 0.638,0l0.447 0.446 -2.681 2.681 -0.446 -0.447c0.176,-0.176 0.176,-0.462 0,-0.638 -0.176,-0.176 -0.462,-0.176 -0.638,0l-0.447 -0.447 2.68 -2.68zm-0.306 1.072l0.766 0.766 -1.302 1.302 -0.766 -0.766 1.302 -1.302z"/></g><text x="0" y="19.212" fill="currentColor" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Deemak Daksina</text><text x="0" y="24.212" fill="currentColor" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                <h1>Tix<span>See</span></h1>
            </div>
        </div>
        <div class="middle">
            <ul>
                <p>Useful Links</p>
                <li><i class="fa-solid fa-up-right-from-square"></i><a href="movies.php">In Theatres</a></li>
                <li><i class="fa-solid fa-up-right-from-square"></i><a href="movies.php">Upcoming Movies</a></li>
                <li><i class="fa-solid fa-up-right-from-square"></i><a href="">Events</a></li>
                <li><i class="fa-solid fa-up-right-from-square"></i><a href="signup.php">Sign Up/Login</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <p>Contact Us</p>
                <li><i class="fa-solid fa-phone"></i><a href="">+91 1234567890</a></li>
                <li><i class="fa-solid fa-envelope"></i><a href="">tixsee@gmail.com</a></li>
                <li><i class="fa-brands fa-instagram"></i><a href="">tixsee_in</a></li>
                <li><i class="fa-brands fa-facebook"></i><a href="">tixsee_in</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/main.js"></script>
    
</body>
</html>