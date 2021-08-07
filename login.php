<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'includes/init.php';
//require 'classes/Url.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $conn = require 'includes/db.php';

  if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {
    Auth::login();

    Url::redirect('/');
  }
  else {
    $error = "login incorrect";
  }
}

?>
<?php require 'includes/header.php' ?>

<h2>Login</h2>
<?php if (!empty($error)): ?>
  <p><?= $error ?></p>
<?php endif; ?>

<form method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input name="username" id="username" class="form-control">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
  </div>

  <button>Log In</button>
</form>

<?php require 'includes/footer.php' ?>
