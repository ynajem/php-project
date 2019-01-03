<div class="body col-md-7">
  <div class="card">
    <div class="card-header">
      <strong>Add New Code</strong>
      <button class="btn btn-white"><span class="fa fa-plus"></span></button>
    </div>
    <div class="card-body" style="">
      <p>Some quick example text to build on the card title.</p>
      <form>
        <div class="form-row">
          <div class="form-group col-md-3">
            <?= bs_select($topics) ?>
          </div>
          <div class="form-group col-md-4">
            <?= bs_select($sub_topics) ?>
          </div>
          <div class="form-group col-md-3"><input type="text" class="form-control" id="form28" placeholder="More Info"></div>
          <div class="col-md-1"><button class="btn btn-white"><span class="fa fa-plus"></span></button></div>
        </div>
        <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Title of the code">
          </div>
        </div>
        <hr class="hr-fancy">
        <div class="form-group">
          <label class="form-conntrol-label">The Tiny Code:</label>
          <textarea class="form-control" id="form30" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Description:</label>
          <textarea class="form-control" id="form30" rows="3"></textarea>
        </div>
        <div class="form-group"><input type="text" class="form-control" id="form29" placeholder="Tags"></div>
        <a href="#" class="btn btn-primary"> <span class="fa fa-plus mr-2"></span>Add Code</a>
        <a href="#" class="btn btn-default mx-2"> <span class="fa fa-plus mr-2"></span>Default</a>
        <a href="#" class="btn btn-white"> <span class="fa fa-plus mr-2"></span>Add Code</a>
      </form>
    </div>
  </div>
</div>