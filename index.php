<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="style.css">

 <title>Niagahoster Tutorial</title>
</head>
<body>
 <div class="alert alert-warning" role="alert">
  <?php echo $_SESSION['error']?>
 </div>

 <div class="container">
  <form action="" method="POST" class="login-email">
   <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
   <div class="input-group">
    <input type="text" placeholder="Username" name="email" value="<?php echo $email; ?>" required>
   </div>
   <div class="input-group">
    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
   </div>
   <div class="input-group">
    <button name="submit" class="btn">Login</button>
   </div>
  </form>
 </div>
</body>
</html>
