<?
session_start();
//check if the user is logged in
if(!isset($_SESSION['fname'])){
    //redirect to the loggin page
    header('Location:login.php');
    exit();
}
//Display the dashboard
echo "Welcome".$_SESSION['fname']."!This is the dashboard page.";
?>