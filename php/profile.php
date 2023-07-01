<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TixSee | Profile</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <nav class="elem">
        <div class="nav-wrapper">
            <div class="nav-logo">
                <img src="/assets/ticketlogo.svg" alt="">
                <h1>Tix<span>See</span></h1>
            </div>

            <ul class="nav-links">
                <li><a href="movies.php"><i class="fa-solid fa-ticket"></i>Movies</a></li>
                <li><a href=""><i class="fa-solid fa-calendar"></i>Events</a></li>
                <li><a href="home.php"><i class="fa-solid fa-right-to-bracket"></i>Logout</a></li>
            </ul>
        </div>
    </nav>

    <div id="profile" class="profile">
        <form action="" method="post">

            <legend>My Profile</legend>
            <div class="form-group-wrapper">
                <div class="name-group form-group">
                    <i class="fa-solid fa-user"></i>
                    <label for="funame">First Name</label>
                    <input type="text" name="funame" value="" id="funame" disabled>
                </div>
                <div class="name-group form-group">
                    <i class="fa-solid fa-user"></i>
                    <label for="luname">Last Name</label>
                    <input type="text" name="luname" value="" id="luname" disabled>
                </div>
                <div class="name-group form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <label for="uemail">Email</label>
                    <input type="email" name="uemail" value="" id="uemail" disabled>
                </div>
                <div class="name-group form-group">
                    <i class="fa-solid fa-phone"></i>
                    <label for="uphone">Mobile No</label>
                    <input type="text" name="uphone" value="" id="uphone" disabled>
                </div>
                <div class="name-group form-group">
                    <i class="fa-solid fa-cake"></i>
                    <label for="udate">Date of Birth</label>
                    <input type="date" name="udate" value="" id="udate" disabled>
                </div>
                <div class="button-group form-group">
                    <i class="fa-solid fa-edit"></i>
                    <div>Edit</div>
                </div>
            
            </div>
            

        </form>
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