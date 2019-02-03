<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?= $tmpl->page_description ?>">
<meta name="author" content="Najem Uness">
<link rel="icon" href="favicon.ico">

<title><?= $tmpl->page_title; ?></title>

<script src="/js/pace.min.js"></script><!-- Pace Script -->
<link rel="stylesheet" href="/css/font-awesome.min.css"><!-- Fontawesome CSS -->
<link rel="stylesheet" href="/css/bootstrap.css"><!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css/plugins/tagsinput.css"><!-- Bootstrap Tagsinput -->
<!-- Page styles -->
<link href="/css/main.css" rel="stylesheet">
<?php if($view == 'dashboard'){?>
  <link href="/css/dashboard.css" rel="stylesheet"><!-- DashBoard Spicefic Style -->
<?php } ?>
<?php if($model == 'runsql'){?>
  <link href="/plugins/codemirror/codemirror.css" rel="stylesheet"><!-- CodeMirror Plugin -->
<?php } ?>
<link href="http://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"><!-- Quill Plugin -->