<?php 

session_start();

if ($_SERVER['QUERY_STRING'] == 'noname'){
  session_unset();
}

$username = $_SESSION['username'];

?>

<div>
  <header>
    <h1>
      <a href="../dashboard.php" >
        <span><?php echo $username;?></span>
      </a>
    </h1>
  </header>
</div>
<br />