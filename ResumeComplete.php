<?php
require 'lib/game.inc.php';
$view= new Site\ResumeView();
?>

<!doctype html>
<html lang='en'>
<?php echo $view->presenthead("Resume") ?>
<body>
<?php echo $view->presentheader() ?>
<div id="example1">
    <script src="node_modules/PDFViewer/pdfobject.min.js"></script>
    <script>
        PDFObject.embed("downloads/CurrentResume.pdf", "#example1");
    </script>
</div>
