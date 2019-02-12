<?php if($tmpl->view!="dashboard") include "inc.sidebar.php" ?>
<div class="body col-md-7">
  <div class="card">
    <div class="card-header">
      <strong>Add New Code</strong>
      <img src="/svg/icon-prototype.svg" height="32" alt="">
    </div>
    <div class="card-body">
      <p>Some quick example text to build on the card title.</p>
      <?php include "forms/addcode.php" ?>
    </div>
  </div>
</div>
<?php include "inc.leftbar.php" ?>