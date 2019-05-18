<link rel="stylesheet" href="http://cdn.quilljs.com/1.3.6/quill.snow.css" ><!-- Quill Plugin -->
<div class="body col-md-9">
  <div class="card">
    <div class="card-header">
      <strong>Add New Code</strong>
      <button class="btn btn-white"><span class="fa fa-plus"></span></button>
    </div>
    <div class="card-body">
      <p>Some quick example text to build on the card title.</p>
      <div id="toolbar-container">
        <span class="ql-formats">
          <button class="ql-bold"></button>
          <button class="ql-italic"></button>
          <button class="ql-underline"></button>
          <button class="ql-strike"></button>
        </span>
        <span class="ql-formats">
          <select class="ql-color"></select>
          <select class="ql-background"></select>
        </span>
        <span class="ql-formats">
          <button class="ql-script" value="sub"></button>
          <button class="ql-script" value="super"></button>
        </span>
        <span class="ql-formats">
          <button class="ql-blockquote"></button>
          <button class="ql-code-block"></button>
        </span>
        <span class="ql-formats">
          <button class="ql-list" value="ordered"></button>
          <button class="ql-list" value="bullet"></button>
          <button class="ql-indent" value="-1"></button>
          <button class="ql-indent" value="+1"></button>
        </span>
        <span class="ql-formats">
          <button class="ql-direction" value="rtl"></button>
          <select class="ql-align"></select>
        </span>
        <span class="ql-formats">
          <button class="ql-link"></button>
          <button class="ql-image"></button>
          <button class="ql-video"></button>
          <button class="ql-formula"></button>
        </span>
      </div>
      <div id="editor-container"></div>
    </div>
  </div>
</div>

<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
/* Quill Editor Plugin */
var quill = new Quill('#editor-container', {
	modules: {
		syntax: true,
		toolbar: '#toolbar-container'
	},
	theme: 'snow'
});
</script>
