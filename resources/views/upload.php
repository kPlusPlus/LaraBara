<html>
<body>

<?php
use Symfony\Component\DomCrawler\Form;

echo Form::open(array('url' => '/uploadfile','files'=>'true'));
    echo 'Select the file to upload.';
    echo Form::file('image');
    echo Form::submit('Upload File');
    echo Form::close();
?>

</body>
</html>