<div class="body col-md-9">
  <div class="card">
    <div class="card-header">
      <strong><?php echo $tmpl->data['title'] ?></strong>
      <div>
        <button type="submit" class="btn btn-success">Python</button>
        <button type="submit" class="btn btn-dark">Network</button>
        <!-- <img src="/svg/icon-export-presets.svg" height="32" alt=""> -->
      </div>
    </div>
    <div class="card-body">
      <div class="subtitle">
       <strong>Created By : </strong><a href="user/najem-uness">Najem Uness</a> in 2019-05-05 22:02:09
      </div>
      <div class="code-container">
        <pre class="mb-0">
          <code class="mb-0"><?= stripslashes($tmpl->data['code']) ?></code>
        </pre>
      </div>
      <div class="tags mb-3">
      <style>
      .tags a, .tag {
          color:#333;
          display: inline-block;
          margin-right: 5px;
          margin-bottom: 5px;
          padding: 8px;
          background-color: #f6f6f6;
          border-radius: 3px;
          line-height:.8;
          -webkit-transition: background-color .3s ease;
          -o-transition: background-color .3s ease;
          transition: background-color .3s ease;
          font-family: proxima-nova,"Helvetica Neue",Helvetica,sans-serif;
          font-size:13px;
      }
      .tags a:hover, .tag:hover {
          background-color: #eee;
          color:#000;
      }

      </style>
        <strong class="mr-2">Keywords :</strong>
        <a href="tag/developer">Developer</a>
        <a href="tag/web">Web</a>
        <a href="tag/web-development">Web Development</a>
			</div>
      <p class="description"><?= $tmpl->data['description'] ?></p>
    <p><a href="bobo" class="tag">Tag Class</a></p>
    </div>
    <div class="card-footer">
      <div>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-dark">Dark</button>
      </div>
    </div>
  </div>
</div>
<?php include "inc.leftbar.php" ?>