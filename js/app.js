"use strict";
$(function(){
	// Enable bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

	/* Enable Tagsinput for #tagsinput1 */
	$("#tagsinput1").tagsinput({ tagClass: "badge badge-primary" });

	/* Form validation */
	var forms = document.querySelectorAll('.needs-validation');
	var validation = Array.prototype.filter.call(forms, function (form) {
		form.addEventListener('submit', function (event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		}, false);
	});

	/* Enable CodeMirror Plugin */
	var code = document.querySelector('#codemirror');
	var editor = CodeMirror.fromTextArea(code, {
		lineNumbers: true,
		matchBrackets: true,
		autocapitalize: true,
		tabMode: "indent",
		mode: "sql",
	});
	editor.setSize("100%","150");
});

/* HLJS Codehighligh Plugin */
hljs.initHighlightingOnLoad();

