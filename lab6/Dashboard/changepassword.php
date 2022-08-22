<head>
    <title>Index</title>
    
</head>

<?php include('../partials/header.user.php'); ?>

<div>
    <ul>
        <li>
            <a href="editprofile.php">Edit Profile</a>
        </li><br>
        <li>
            <ahref="changepassword.php">Change Password</a>
        </li>

        <br><br>
        <div>
      <a  href="../login.php">Logout</a>
    </div>

    </ul>
</div>

<div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <form method="post">
        <table>
            <tr>
                <th>Password</th>
                <td>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </td>
            </tr>
            <tr>
                <th>New Password</th>
                <td>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </td>
            </tr>
        </table>
        <br>
        <p><input type="submit" value="Update" name="update"></p>
    </form>
</div>

<?php include('../partials/footer.php'); ?>