<?php
// $servername="localhost";
$pass=$_POST['pass'];
$name=$_POST['email'];
$servername="localhost";

$username="root";
$password="";
$db="dsandhultd";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("Failed to Enter Your Detail Please Try Again");
    }
else{
    $sql="SELECT*FROM `business`";
    $result=mysqli_query($conn,$sql);
    $num= mysqli_num_rows($result);
    if($num>0){
        $i=0;
        while($i<$num){
            $row=mysqli_fetch_assoc($result);
            if($row['email']==$name and $row['password']==$pass){
                echo "user Login";
               ?>
               <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duvender Sandhu</title>
    <link rel="stylesheet" href="index.css">
    <style>
        *{
            margin:0px;
            padding:0px;
        }
    </style>
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
<h1>Welcome <br> <?php echo $row['name'];?></h1>


    
</form>
        </div>
    </div>

</body>

</html>
               <?
<?php
break;
            }
            }
            }
            }
?>











