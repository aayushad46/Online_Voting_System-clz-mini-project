<?php
    require('../connection.php');
    include('../header.php');
    session_start();
    //If your session isn't valid, it returns you to the login screen for protection
    if(empty($_SESSION['member_id'])){
        header("location:access-denied.php");
    }
?>
<html>
    <head>
        <link href="../css/user_styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="page">
            <div id="header">
                <h1>STUDENT HOME </h1>
                <a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="changepass.php">Change Password</a>| <a href="../user">Logout</a>
            </div>
            <div id="container">
                <p> Click a link above to do some stuff.</p>
            </div>
            <div id="footer">
                <?php include('../footer.php'); ?>
            </div>
        </div>
    </body>
</html>