<?php include_once 'header.php'; ?>

<form class="ui form ui container"  method="post" action="/get-lucid/index.php" enctype="multipart/form-data">
  <div class="ui clearing segment">
    <h3 class="ui header">
      Create an Account
    </h3>
  </div>
  <div class="field">
    <label for="username">Username</label>
    <input type="text" name="username" maxlength="60">
  </div>
  <div class="field">
    <label for="password">Password</label>
    <input type="password" name="password" maxlength="40">
  </div>
  <input type="hidden" name="action" value="adduser" />
  <input type="hidden" name="isAdmin" value="0" />
  <input class="ui button" type="submit" name="submit" value="Add User" />
  <input class="ui button" type="submit" name="submit" value="Cancel" />
</form>

<?php include_once 'footer.php'; ?>
