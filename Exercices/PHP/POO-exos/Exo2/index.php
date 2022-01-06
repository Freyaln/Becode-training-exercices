<?php
require 'htmlbuilder.php';

$htmlBuild = new Build();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    echo $htmlBuild->metaCharSet();
    echo $htmlBuild->metaViewport();
    echo $htmlBuild->cssLink();

    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>

<body>

    <?php echo $htmlBuild->imageSrc(); ?>
    <?php echo $htmlBuild->linkHref(); ?>


    <?php echo $htmlBuild->scriptSrc(); ?>
</body>

</html>