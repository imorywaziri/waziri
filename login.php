<?
session_start();

//define valid username and password

$validUsername='fname';
$validPassword='pwd';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $username=$_POST['fname'];
    $password=$_POST['pwd'];

    if($username===$validUsername && $password===$validPassword){
        //store user information in session

        $_SESSION['fname']=$username;

        //redirect to te dashboard page

        header('Location:dashboard.php');
        exit();
    }
    else{
        echo"invalid username or password";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imory - Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <link rel="php" href="cv.php">

    <!-- Navbar Start -->

    <div class="nav">
        <div class="navbar">
            <div class="logo">
                <a href="home.php">IM<span>ORY</span></a>
            </div>

            <div class="nav-items">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="me.php">About me</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="course.php">Course</a></li>
                    <li><a href="cv.php">CV</a></li>
                    <li><a href="comm.php">Community Engagement</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="library.php">Library</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--- Navbar Ends ---->

    <!--- Hero start here --->
        
    <div class="login-form">
        <form action="cv.php" method="POST" class="form-css">
            <label>First name: </label>
            <input type="text" name="fname">

            <label>Password: </label>
            <input type="password" name="pwd">  
            
            <input type="submit" value="Login" class="submit-login">
        </form>    
    </div>
      <!--- News ends here --->

      <!--- Footer start here --->

      <div class="footer">
        <div class="footer-content">
            <div class="footer-1">
                <h3>Contacts</h3>
                <div class="contact-f">
                    <p>Call Us: +255612 410 107</p>
                    <p>imory@gmail.com</p>
                    <p>Open: Monday-Friday, 8am-5pm</p>
                </div>
            </div>

            <div class="footer-2">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="me.php">About me</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="course.php">Course</a></li>
                    <li><a href="cv.php">CV</a></li>
                    <li><a href="comm.php">Community Engagement</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="library.php">Library</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                </ul>
            </div>

            <div class="footer-3">
                <h3>About me</h3>
                <p>Web developer</p>
                <p>Education background</p>
            </div>
        </div>
        
      </div>
</body>
</html>