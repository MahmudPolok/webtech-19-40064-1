<?php

require_once 'database/connect.php';

if (isset($_POST['submit'])) {
  session_start();

  if ($_POST['username'] == '' || $_POST['password'] == '') {
    echo '<script>';
    echo 'alert("Fields Can not be Empty!");';
    echo '</script>';
  } else {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header('Location: dashboard.php');
  }
}

?>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="lab6.css">
  
</head>

<body>
  <?php include('partials/header.php'); ?>

  <h1>Login</h1>

  <form action="" method="post">
    <div>
      <table>
        <tr>
          <th>Username</th>
          <td>
            <input type="text" name="username" />
          </td>
        </tr>
        <tr>
          <th>Password</th>
          <td>
            <input type="text" name="password" />
          </td>
        </tr>
      </table>
    </div>
    </div>
    <div>
      <button>
        <input type="submit" name="submit" value="Login" />
      </button>
    </div>
    <div>
      <p>
        Not Registered?
        <a  href="signup.php">Sign up</a>
      </p>
    </div>
  </form>

  <?php include('partials/footer.php'); ?>
</body>

</html>