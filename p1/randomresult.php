<!doctype html>

<html lang="en">
<head>
     <meta charset="utf-8">
    <title>Random Result</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/randomresult.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <?php include("template/nav.php");
        include("functions.php"); ?>
    <div id="wrapper">
        <?php echo(generateResult($allkeys, $allpairs)); ?>
        <a href="randomresult.php" id="submit-random-button">GO AGAIN</a>
    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
