$(function(){
  "use strict";
	console.log("jQuery is Working!");
	/* Enable Tagsinput for #tagsinput1 */
	$("#tagsinput1").tagsinput({ tagClass: "badge badge-primary" });

	/* Display Line Numbers in code highlight */
	$('code').each(function (i, block) {
		hljs.lineNumbersBlock(block);
	});

	/* Form validation */
	var forms = document.getElementsByClassName('needs-validation');
	// var forms = $('.needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function (form) {
		form.addEventListener('submit', function (event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		}, false);
	});

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			$(this).parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Enable bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

	/* Enable CodeMirror Plugin */
	var editor = CodeMirror.fromTextArea(document.getElementById('codemirror'), {
		lineNumbers: true,
		matchBrackets: true,
		autocapitalize: true,
		tabMode: "indent",
		mode: "sql",
	});
	editor.setSize("100%","150");

});

/* Quill Editor Plugin */
var quill = new Quill('#editor-container', {
	modules: {
		syntax: true,
		toolbar: '#toolbar-container'
	},
	theme: 'snow'
});