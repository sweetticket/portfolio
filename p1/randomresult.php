<!doctype html>

<html lang="en">
<head>
     <meta charset="utf-8">
    <title>Random Result</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/random.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <?php include("template/nav.php"); ?>
    <div id="wrapper">
        <h1>Roll a Die</h1>
        <p>View random artwork from Yoon Jae's collection.</p>
        <form action="random.php" method="POST">
            <input id="submit-random-button" type="submit" name="submit-random" value="Go" >
        </form>
        <h2>Your Result:</h2>
        <div id="result"></div>

    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
