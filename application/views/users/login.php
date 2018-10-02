<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="width: 40%;margin-top: 100px;">
  <h2>Login</h2>
  <br>
  <?php echo validation_errors(); ?>
  
      <?php echo form_open('user/login/') ;?>
  <div class="form-group">
      <label >Username</label>
      <input type="text" class="form-control" placeholder="Username" name="username">
  </div>
  
  <div class="form-group">
      <label >Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  
  <input type="submit" name="login" value="Login" class="btn btn-success">
</form>
</div>

</body>
</html>
