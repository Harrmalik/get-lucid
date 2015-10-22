<?php include_once 'header.php'; ?>

<form class="ui form ui container <?php if($error != NULL) { echo "error"; } ?>"  method="post" action="/get-lucid/index.php" enctype="multipart/form-data">
   <div class="ui clearing segment">
    <h3 class="ui header">
      Login
    </h3>
   </div>

   <?php if($error != NULL) { ?>
     <div class="ui error message">
        <div class="header">Login Error</div>
        <p><?php echo $error; ?></p>
     </div>
   <?php } ?>

  <div class="field">
    <label for="username">Username</label>
    <input type="text" name="username" maxlength="60" value=" ">
  </div>
  <div class="field">
    <label for="password">Password</label>
    <input type="password" name="password" maxlength="40">
  </div>
  <input type="hidden" name="action" value="login" />
  <input class="ui blue button" type="submit" name="submit" value="Login" />
  <a href="/get-lucid/adduser" class=" ui green button">Register</a>
</form>

<?php include_once 'footer.php'; ?>
