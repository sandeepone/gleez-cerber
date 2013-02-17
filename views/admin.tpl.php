<?php defined("SYSPATH") OR die("No direct script access."); ?>

<div id="backend-place" class="clearfix">
  <!-- Messages Start -->
  <div id="messages" class="messages span<?php echo $main_column; ?>">
    <?php echo $messages ?>
  </div>
  <!-- Messages End -->

  <div class="pad"></div>
  <?php if ($sidebar_left): ?>
    <!-- Sidebar Left Start -->
    <div class="sidebar_left">
      <?php echo $sidebar_left; ?>
    </div>
    <!-- Sidebar Left End -->
  <?php endif; ?>

  <!-- Main Start -->
  <div class="main">
    <div class="postcontent">
      <?php if ($title): ?>
        <h1><?php echo $title;?></h1>
        <!-- Tabs Start -->
        <?php if ($tabs): ?>
          <div id="tabs-actions" class="span<?php echo ($main_column-1); ?>">
            <div id="tabs"><?php echo $tabs; ?></div>
          </div>
        <?php endif; ?>
        <!-- Tabs End -->
      <?php endif; ?>
      <!-- Content Start -->
      <div id="content">
        <?php echo $content; ?>
      </div>
      <!-- Content End -->
    </div>
  </div>
  <!-- Main End -->

  <?php if ($sidebar_right): ?>
    <!-- Sidebar Right Start -->
    <div class="sidebar_right">
      <?php echo $sidebar_right; ?>
    </div>
    <!-- Sidebar Right End -->
  <?php endif; ?>
</div>



    

      
        
          
            

