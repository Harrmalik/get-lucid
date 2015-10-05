<article>

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
    <?php } ?>
  </div>

  <a href="adddream" class="ui blue button right aligned">Add New Dream</a>
</article>
