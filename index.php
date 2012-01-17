<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'lib/FuzzyTime.php';
        ?>
        <br>
        3400 seconds: <?php echo FuzzyTime::format(3400); ?>
        <br>
        3600 seconds: <?php echo FuzzyTime::format(3600); ?>
        <br>
        3620 seconds: <?php echo FuzzyTime::format(3620); ?>
        <br>
        -86400 seconds: <?php echo FuzzyTime::format(-86400); ?>
        <br>
        -7200 seconds: <?php echo FuzzyTime::format(-7200); ?>
    </body>
</html>
