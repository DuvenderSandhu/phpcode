<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvender Sandhu</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="nav">

        <h1>Dsandhu</h1>
        <ul>
            <li class="listitems"> <a href="index.php">HOME</a></li>
            <li class="listitems"> <a href="#">ABOUT</a></li>
            <li class="listitems"> <a href="#">SERVICE</a></li>
            <li class="listitems"> <a href="#">DESIGN</a></li>
            <li class="listitems"> <a href="#">CONTACT</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Type Here to Search" class="text">
            <a href="#" class="btn">Search</a>
        </div>
    </div>
    <div class="homepage">

        <div class="intro">
            <h1>Web Design &</h1>
            <h1 class="red">Development</h1>
            <p>Web Design is a specialisation of the design stream. They also use HTML, CSS etc. to create design
                elements. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aspernatur dolores ipsa cupiditate vitae? Quis voluptatem earum amet eos quidem impedit harum explicabo accusamus.</p>
            <div class="button">
                <a href="join.php" class="btn">JOIN US</a>
            </div>
        </div>
        <div class="login">
<h1>Login Here</h1>
<form method="post" action="welcome.php">
    <div class="input">
        
        <input type="text" placeholder="Enter Your Email Here" class="tras" name="email" required>
    </div>
    <div class="input">
        <input type="password" placeholder="Enter Your Password Here" class="tras" name="pass" required>
    </div>
    <input type="submit" value="Login" class="btn">
    <div class="if">
        <p>Don't have an account?</p>
        <p><a href="signup.php">Sign Up</a> Here</p>
        <!-- <p class="with">Log in with</p> -->
    </div>
</form>
        </div>
    </div>

</body>

</html>