<!DOCTYPE html>
<html>
<head>
  <title>Clay Pages</title>
  <meta charset="utc-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous">
  <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

  <div class="container">

  <header>
    <h1>Clay Pages</h1>
  </header>
  <nav>
    <ul class="nav">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
      <?php if (Auth::isLoggedIn()): ?>

        <li class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
        <li class="nav-item"><a class="nav-link" href="/logout.php">Log Out</a></li>

      <?php else: ?>

        <li class="nav-item"><a class="nav-link" href="/login.php">Log In</a></li>

      <?php endif; ?>
      <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
    </ul>
  </nav>
  <main>
