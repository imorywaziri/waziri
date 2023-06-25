<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imory - Website</title>
    <link rel="stylesheet" href="css/style.css">
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
<?php
    $conn = mysqli_connect("localhost", "root", "", "imory_db") or die("Connection error: " . mysqli_connect_error());

    $sql = " SELECT fname, number, fbook, twitter, instagram FROM register";

    $result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
    <div align="center"class="contacts">
    <h1 style="color:darkolivegreen">Contacts </h1><br><br>
    <ul>
        <?php
        while($row = mysqli_fetch_assoc($result))  { ?>
            <li>Username: <?php echo htmlspecialchars($row['fname']) ?></li>
            <li>Phone Number: <?php echo htmlspecialchars($row['number']) ?></li>
            <li>Facebook: <?php echo htmlspecialchars($row['fbook']) ?></li>
            <li>Twitter: <?php echo htmlspecialchars($row['twitter']) ?></li>
            <li>Instagram: <?php echo htmlspecialchars($row['instagram']) ?></li><br>

        <?php } ?>
    </ul>
    </div>

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