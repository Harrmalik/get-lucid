<?php include_once 'header.php'; ?>

<form class="ui form ui container"  method="post" action="/get-lucid/index.php" enctype="multipart/form-data">
  <div class="ui clearing segment">
    <h3 class="ui header">
      Submit a new Dream
    </h3>
  </div>
  <div class="field">
    <label for="dreamName">Dream Name</label>
    <input type="text" name="dreamName" placeholder="Dream Name" maxlength="150">
  </div>
  <div class="field">
    <label for="image">Image</label>
    <input type="file" name="image" placeholder="Add an Image">
  </div>
  <div class="field">
    <label>Dream Content</label>
    <textarea name="dreamContent" placeholder="What happened in the dream" rows="10"></textarea>
  </div>
  <input type="hidden" name="action" value="adddream" />
  <input class="ui button" type="submit" name="submit" value="Save Dream" />
  <input class="ui button" type="submit" name="submit" value="Cancel" />
</form>

<?php include_once 'footer.php'; ?>
