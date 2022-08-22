<head>
    <title>Index</title>
    <link rel="stylesheet" href="lab6.css">

</head>

<?php include('partials/header.user.php'); ?>

<div>
    <ul>
        <li>
            <a  href="Dashboard/editprofile.php">Edit Profile</a>
        </li><br>
        <li>
            <a href="Dashboard/changepassword.php">Change Password</a>
        </li>

        <br><br>
        <div>
            <a href="login.php">Logout</a>
        </div>

    </ul>
</div>

<div>
    <div>
        <h1>This is <?php echo $username; ?> Page!</h1>
    </div>
</div>

<?php include('partials/footer.php'); ?>