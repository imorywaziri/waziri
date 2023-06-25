
<?php


    if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])){

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['sname']) && isset($_POST['pwd']) && isset($_POST['fileupload']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['fbook']) && isset($_POST['twitter']) && isset($_POST['instagram'])){

            $conn = mysqli_connect("localhost", "root", "", "imory_db") or die("Connection error: " . mysqli_connect_error());

            $first_name = $_POST['fname'];
            $surname = $_POST['sname'];
            $middle_name = $_POST['lname'];
            $password = $_POST['pwd'];
            $file = $_POST['fileupload'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $facebook = $_POST['fbook'];
            $twitter = $_POST['twitter'];
            $instagram = $_POST['instagram'];

            $sql = "INSERT INTO register (`fname`, `lname`, `sname`, `pwd`, `fileupload`, `email`, `number`, `fbook`, `twitter`, `instagram`) 
            VALUES ('$first_name', '$middle_name', '$surname', '$password', '$file', '$email', '$number','$facebook', '$twitter', '$instagram')";

            $query = mysqli_query($conn, $sql);

            if($query){
                echo "Success";
            }else{
                echo "Failed" . mysqli_connect_error();
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register now</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">

</head>
<body>

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

    <!--- Register start here --->

    <div class="form-main">
        <form id="myForm" action="register.php" method="POST">
            <div class="registration">
                <h1>Registration Form</h1>
    
                <label>First name:</label>
                <input type="text" id="fname" name="fname"><br><br>

                <label>Middle name:</label>
                <input type="text" id="lname" name="lname"><br><br>

                <label>Surname:&nbsp;&nbsp;</label>
                <input type="text" id="sname" name="sname"><br><br>

                <label>Password:&nbsp;</label>
                <input type="password" id="pwd" name="pwd"><br><br>

                <label for="fileupload"> CV: Select a file to upload</label>
                <input type="file" id="file_upload" name="fileupload"><br>

                <input type="submit" value="Signup" id="sign_up">

            </div>
            
            <div class="contact">
            <h1>Contacts</h1>

                <label>E-mail: </label>
                <input type="email" id="email" name="email"><br><br>

                <label>Mobile number:</label>
                <input type="text" id="number" name="number">
            </div>
            

            <div class="socia-media">
            <h1>Social media</h1>

                <label>Facebook:</label>
                <input type="text" id="fbook" name="fbook" placeholder="facebook.com/imory"><br>

                <label>Twitter: </label>
                <input type="text" id="twitter" name="twitter" placeholder="twitter.com/imory"><br>

                <label>Instagram:</label>
                <input type="text" id="instagram" name="instagram" placeholder="@imory"><br>
            </div>
            

            </form>
            </div>


    <!--- Register ends here --->
   
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
                    <li><a href="#">About me</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="#">Course</a></li>
                    <li><a href="#">CV</a></li>
                    <li><a href="#">Community Engagement</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Contacts</a></li>
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