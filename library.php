<?php 
    $conn = mysqli_connect("localhost", "root", "", "imory_db") or die("Connection Failed: " . mysqli_connect_error());
    if(isset($_POST['image']) && isset($_POST['author']) && isset($_POST['title']) && isset($_POST['title']) && isset($_POST['year']) && isset($_POST['publisher'])){
            $image = $_POST['image'];
            $author = $_POST['author'];
            $title = $_POST['title'];
            $year = $_POST['year'];
            $publisher = $_POST['publisher'];
    }

    $sql = "SELECT * FROM library";

    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imory - Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/library.css">
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

    <!--- Hero start here --->

    <div class="books">
        <?php if($result ->num_rows > 0) { ?>
            <?php while($rows = $result->fetch_assoc()) {?>
        <div class="rows">
            <img src="img/<?= $rows['image'] ?>" style="height: 150px">
            <!-- <img src="img/books.jpg"> -->
            <p><strong>Author:</strong> <?php echo $rows['author']; ?></p>
            <p><strong>Title:</strong> <?php echo $rows['title']; ?></p>
            <p><strong>Publisher:</strong> <?php echo $rows['publisher']; ?></p>
            <p><strong>Year:</strong> <?php echo $rows['year']; ?></p>
        </div>

        <?php }?>
        <?php }?>
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