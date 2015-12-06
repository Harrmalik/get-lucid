<?php include_once 'header.php'; ?>

<form class="ui form ui container"  method="post" action="/get-lucid/index.php" enctype="multipart/form-data">
  <div class="ui clearing segment">
    <h3 class="ui header">
      Submit a new Dream
    </h3>
  </div>
  <div class="field">
    <label for="dreamName">Dream Name</label>
    <input type="text" name="dreamName" placeholder="Dream Name" maxlength="150"
      value="<?php echo $d['dreamName'] = isset($d['dreamName']) ? $d['dreamName'] : '' ; ?>">
  </div>
  <div class="feilds">
     <?php if(isset($_GET['dream'])) { ?>
        <div class="field">
      <img src="<?php echo $d['image']; ?>" alt="<?php echo $d['dreamName']; ?>" class="ui image medium"/>
   </div>
     <?php } ?>
       <div class="field">
         <label for="image">Image</label>
         <input type="file" name="image" placeholder="Add an Image" value="">
      </div>
  </div>
  <div class="field">
    <label>Dream Content</label>
    <textarea name="dreamContent" placeholder="What happened in the dream" rows="10">
      <?php echo $d['dreamContent'] = isset($d['dreamContent']) ? $d['dreamContent'] : '' ; ?>
   </textarea>
  </div>
  <?php if(isset($_GET['dream'])) { ?>
    <input type="hidden" name="action" value="editdream" />
    <p>edit</p>
  <?php } else { ?>
    <input type="hidden" name="action" value="adddream" />
    <p>new</p>
  <?php } ?>
  <input type="hidden" name="id" value="<?php echo $d['id'] = isset($d['id']) ? $d['id'] : NULL ; ?>" />
  <input class="ui button" type="submit" name="submit" value="Save Dream" />
  <input class="ui button" type="submit" name="submit" value="Cancel" />
</form>

<?php include_once 'footer.php'; ?>
