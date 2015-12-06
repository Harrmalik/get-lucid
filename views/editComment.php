<?php include_once 'header.php'; ?>

<form class="ui form ui container"  method="post" action="/get-lucid/index.php" enctype="multipart/form-data">
  <div class="ui clearing segment">
    <h3 class="ui header">
      Edit Comment
    </h3>
  </div>
  <div class="field">
    <label>Comment</label>
    <textarea name="content" placeholder="What happened in the dream" rows="10">
      <?php echo $c['content']; ?>
   </textarea>
  </div>
  <input type="hidden" name="id" value="<?php echo $_GET['url']; ?>" />
  <input type="hidden" name="url" value="<?php echo $c['url']; ?>" />
  <input type="hidden" name="action" value="editcomment" />
  <input class="ui button" type="submit" name="submit" value="Save Dream" />
  <input class="ui button" type="submit" name="submit" value="Cancel" />
</form>

<?php include_once 'footer.php'; ?>
