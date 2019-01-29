<div class="body col-md-9">
  <div class="card">
    <div class="card-header">
      <strong>Run an SQL Query</strong>
    </div>
    <div class="card-body">
      <form method="post" action="/run/sql">
        <div class="row">
          <div class="form-group col-md-8">
            <label for="title">Query Title :</label>
            <input type="text" class="form-control" name="title" placeholder="Title of the code">
          </div>
          <div class="form-group col-md-4">
            <label for="query-type">Query Type :</label>
            <select name="query-type" id="query-type" class="custom-select">
              <?= options($tmpl->query_types) ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="form-conntrol-label">Type your SQL and click on RUN to excute your query :</label>
          <textarea class="form-control" name="code" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary"> <span class="fa fa-play mr-2"></span>RUN</button>
      </form>
    </div>
  </div>
</div>
<?php include "inc.leftbar.php" ?>