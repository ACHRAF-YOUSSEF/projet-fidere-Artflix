<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="/Artflix/css/register_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="background"></div> 
    <header class="header">
        <nav class="navbar">
            <a href="/Artflix/php/home.php">Home</a>
            <a href="/Artflix/php/login.php">Account</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
        <form action="#" class="search-bar">
            <input type="text" placeholder="Search...">
            <input type="button" value="search">
        </form>
    </header>
    <div class="container">
        <div class="content">
            <h2 class="logo"><i class="bx bxs-cart-alt" ></i>
                Artflix</h2>
            <div class="sci">
                <h2>Welcome!<br><span>To Our New Website.</span> </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos harum modi velit impedit.</p>
                <div class="social-icons">
                    <a href="#" style="color: black"><i class='bx bxl-linkedin' ></i></a>
                    <a href="#" style="color: black"><i class='bx bxl-facebook-circle' ></i></a>
                    <a href="#" style="color: black"><i class='bx bxl-instagram' ></i></a>
                    <a href="#" style="color: black"><i class='bx bxl-twitter' ></i></a>
                    
                </div>
            </div>
        </div>        
        <div class="logreg-box">
            <div class="form-box register">
                <form enctype="multipart/form-data" action="/Artflix/db/signup_with_mail.php" method="post">
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user' ></i></span>
                        <input type="text" required name="nom">
                        <label>Name</label>
                    </div>                  
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox">I agree to the terms & conditions
                        </label>
                    </div>
                    <input type="submit" value="Sign Up" class="btn">
                    <div class="login-register">
                        <p>Already have any account? <a href="/Artflix/php/login.php" id="login-link">Sign In</a></p>
                    </div>
                </form>   
            </div>
        </div>
    </div>
</body>
</html>