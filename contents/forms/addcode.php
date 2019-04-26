<form class="needs-validation" method="post" action="/post/add-code" novalidate>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="title">The snippet title :</label>
      <input type="text" class="form-control" name="title" placeholder="The title of the snippet" required>
      <div class="invalid-feedback">Please enter a title.</div>
    </div>
    <div class="form-group col-md-4">
      <label for="language">Topic :</label>
      <select class="custom-select" name="language" id="language"><?= options($tmpl->topics) ?></select>
    </div>
  </div>
  <div class="form-group">
    <label class="form-conntrol-label">The Tiny snippet :</label>
    <!-- <textarea class="form-control" name="code" rows="6" required></textarea> -->
    <textarea id="codemirror" class="form-control" name="code" rows="10" required></textarea>
    <div class="invalid-feedback">The snippet is required.</div>
  </div>
  <hr class="hr-fancy">
  <div class="form-group">
    <label>Description (Optional) :</label>
    <textarea class="form-control" name="description" rows="4"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label>Tags (Optional) :</label>
      <input name="tags" type="text" class="form-control" id="tagsinput1">
    </div>
    <div class="form-group col-md-4">
      <label for="topic">Field of use (Optional) :</label>
      <select class="custom-select" name="topic" id="topic"><?= options($tmpl->sub_topics) ?></select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Add Snippet</button>
</form>