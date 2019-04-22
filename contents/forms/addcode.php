<form class="needs-validation" method="post" action="/post/add-code" novalidate>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="topics">Platforms :</label>
      <select class="custom-select" name="language" id="language">
        <?= options($tmpl->topics) ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <?= bs_select($tmpl->sub_topics,"Topic") ?>
    </div>
    <div class="form-group col-md-12">
      <label for="title">Title :</label>
      <input type="text" class="form-control" name="title" placeholder="Title of the code">
    </div>
    </div>
  <hr class="hr-fancy">
  <div class="form-group">
    <label class="form-conntrol-label">The Tiny Code :</label>
    <textarea class="form-control" name="code" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Description :</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Tags :</label>
    <input name="tags" type="text" class="form-control" id="tagsinput1">
  </div>
  <button type="submit" class="btn btn-primary"> <span class="fa fa-plus mr-2"></span>Add Code</button>
  <a href="#" class="btn btn-default mx-2"> <span class="fa fa-plus mr-2"></span>Default</a>
  <a href="#" class="btn btn-white"> <span class="fa fa-plus mr-2"></span>Add Code</a>
</form>