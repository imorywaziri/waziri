<?php


    if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])){

        if(isset($_POST['course-code']) && isset($_POST['course-name']) && isset($_POST['course-des']) && isset($_POST['semester']) && isset($_POST['year']) && isset($_POST['instructor']) && isset($_POST['grade']) && isset($_POST['department'])){

            $conn = mysqli_connect("localhost", "root", "", "imory_db") or die("Connection error: " . mysqli_connect_error());
            
            $course_code = $_POST['course-code'];
            $course_name = $_POST['course-name'];
            $course_des = $_POST['course-des'];
            $semester = $_POST['semester'];
            $year = $_POST['year'];
            $instructor = $_POST['instructor'];
            $grade = $_POST['grade'];
            $department = $_POST['department'];
        
            $sql = "INSERT INTO `enroll`(`course_code`, `course_name`, `course_des`, `department`, `semester`, `year`, `i_name`, `results`)
             VALUES('$course_code', '$course_name', '$course_des', '$department', '$semester', '$year', '$instructor', '$grade')";
            
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
    <title>About me</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/course.css">
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

    <!--- about start here --->
        <div id="course-main">
            <div class="course-container">
                <div class="my-course">
                    <h2>My Course</h2>
                    
                    <table class="my-table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Course Code</th> 
                                <th>Course Name</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>MT100</td>
                                <td>Foundation Analysis</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>CS174</td>
                                <td>C Programming</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>IS 162</td>
                                <td>Introduction to cumputer system</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>DS 112</td>
                                <td>Development perspective</td>
                            </tr>
                             <tr>
                                <td>5</td>
                                <td>CL 111</td>
                                <td>Communicataion engineering</td>
                            </tr>
                             <tr>
                                <td>6</td>
                                <td>CS 151</td>
                                <td>Computer organisation and architecture1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-course">
                    <h2>Enroll now</h2>

                    <form action="course.php" class="form-course-form" method="POST">
                        <label>Course Name:</label>
                        <input type="text" id="course-name" name="course-name">

                        <label>Course Code:</label>
                        <input type="text" name="course-code" id="cc">
                        

                        <label>Course Description:</label>
                        <textarea name="course-des" id="course-des" cols="30" rows="10">

                        </textarea>

                        <label>Department Name:</label>
                        <select name="department" id="department">
                            <option value=""></option>
                            <option value="CSE">CSE</option>
                            <option value="TE">TE</option>
                        </select>

                        <label>Semester:</label>
                        <select name="semester" id="semester">
                
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>

                        <label>Academic Year:</label>
                        <select name="year" id="year">
                            
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select><br><br>

                        <label>Course Instructor: </label>
                        <input type="text" id="instructor" name="instructor">

                        <label>Grade: </label>
                        <input type="text" id="grade" name="grade">

                        <input type="submit" value="Enroll" class="enroll">
                    </form>
                </div>
            </div>

            <div class="my-course table-width">

            <?php
                $conn = mysqli_connect("localhost", "root", "", "imory_db") or die("Connection error: " . mysqli_connect_error());

                $sql = " SELECT * FROM enroll ";

                $result = mysqli_query($conn, $sql);


            ?>

                    <h2>Information</h2>
                    
                    <table class="my-table">
                        <thead>
                            <tr>
                                <th>Course Code</th> 
                                <th>Course Name</th>
                                <th>Course Description</th>
                                <th>Department</th>
                                <th>Semester</th>
                                <th>Academic Year</th>
                                <th>Instructor's Name</th>
                                <th>Results</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                        <?php
                            while($row = mysqli_fetch_assoc($result))  { ?>

                            <tr>
                                <td><?php echo htmlspecialchars($row['course_code']) ?></td>
                                <td><?php echo htmlspecialchars($row['course_name']) ?></td>
                                <td><?php echo htmlspecialchars($row['course_des']) ?></td>
                                <td><?php echo htmlspecialchars($row['department']) ?></td>
                                <td><?php echo htmlspecialchars($row['semester']) ?></td>
                                <td><?php echo htmlspecialchars($row['year']) ?></td>
                                <td><?php echo htmlspecialchars($row['i_name']) ?></td>
                                <td><?php echo htmlspecialchars($row['results']) ?></td>
                                
                            </tr>

                            <?php    } ?>
                        </tbody>
                    </table>
                </div>

            
        </div>
    
    <!--- about start here --->
   
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
