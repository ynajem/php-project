<?php if($tmpl->view=="main") include "inc.sidebar.php" ?>
<div class="body col-md-7">
  <div class="card">
    <div class="card-header">
      <strong>Add New Code</strong>
      <button class="btn btn-white"><span class="fa fa-plus"></span></button>
    </div>
    <div class="card-body">
      <p>Some quick example text to build on the card title.</p>
      <?php include "forms/addcode.php" ?>
    </div>
  </div>
</div>
<?php include "inc.leftbar.php" ?>