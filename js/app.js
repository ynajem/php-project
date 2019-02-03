$(function(){
  "use strict";
	console.log("jQuery is Working!");
	$("#tagsinput1").tagsinput({ tagClass: "badge badge-primary" });

	// var treeviewMenu = $('.app-menu');

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

	// Set initial active toggle
	// $("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

	// // window.addEventListener('load', function() {
	// // Fetch all the forms we want to apply custom Bootstrap validation styles to
	// var forms = $('.needs-validation');

	// // Loop over them and prevent submission
	// var validation = Array.prototype.filter.call(forms, function(form) {
	// 	form.addEventListener('submit', function(event) {
	// 		if (form.checkValidity() === false) {
	// 			event.preventDefault();
	// 			// event.stopPropagation();
	// 		}
	// 		form.classList.add('was-validated');
	// 	}, false);
	// });

	var editor = CodeMirror.fromTextArea(document.getElementById('codemirror'), {
		// your settings here
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