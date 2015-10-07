<?php include_once 'header.php'; ?>

<article class="ui container">

   <div class="ui breadcrumb">
     <a class="section" href="/get-lucid/">Home</a>
     <i class="right angle icon divider"></i>
     <div class="active section">Dreams</div>
   </div>

   <?php if($message != NULL) { echo $message; } ?>

  <div class="ui items">
    <?php foreach($d as $dream) { ?>
      <div class="item">
        <div class="image">
          <img src="<?php echo $dream['image']; ?>">
        </div>
        <div class="content">
          <a class="header" href="/get-lucid/dreams/<?php echo $dream['url'] ?>"><?php echo $dream['dreamName']; ?></a>
          <div class="meta">
            <span class="date"><?php echo "Posted " .date("F j, Y \a\\t g:iA",strtotime($dream['created'])); ?></span>
          </div>
          <div class="description">
            <p><?php echo $dream['dreamContent']; ?></p>
          </div>
          <div class="extra">
            <?php echo $dream['tag']; ?>
          </div>
        </div>
      </div>
      <div class="ui divider"></div>
    <?php } ?>
  </div>

  <?php if(isset($_SESSION['username'])) { ?>
    <a href="adddream" class="ui blue button right aligned">Add New Dream</a>
  <?php } ?>
</article>

<?php include_once 'footer.php'; ?>
