<!doctype html>

<html lang="en">
<head>
     <meta charset="utf-8">
    <title>Random</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/random.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <?php include("template/nav.php"); ?>
    <div id="wrapper">
        <h1>Roll a Die</h1>
        <p>View random artwork from Yoon Jae's collection.</p>
        <form action="randomresult.php" method="POST">
            <input id="submit-random-button" type="submit" name="submit-random" value="Go" >
        </form>
        <h2>To make it less random:</h2>
        <form action="formresult.php" method="POST">
            <div class="left">
            <p>Choose categories:</p>
                <input class="cat choice" type="checkbox" name="cat[]" value="oncanvas"> On Canvas <br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òdrawings"> Drawings <br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òcontra">Contra Naturam<br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òsketchbook"> Sketch Book<br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òother"> Other Projects<br>
            </div>
            <div class="right">
            <p>Choose subject:</p>
                <input class="subject choice" type="radio" name="subject" value="any"> Any<br>
                <input class="subject choice" type="radio" name="subject" value=Òhumans"> Humans<br>
                <input class="subject choice" type="radio" name="subject" value="objects"> Objects<br>
                <input class="subject choice" type="radio" name="subject" value=Òcreatures"> Creatures<br>
            </div>
            <div class="clear-floats">
            <p>Choose creation year: &nbsp;&nbsp;
                <select name="year">
                    <option value="Any">Any</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                </select>
            </p>
            <p>Try searching for a title: &nbsp;&nbsp;
                <input type="text" name="title">
            </p>
            <input id="submit-form-button" type="submit" name="submit-form" value="Go" >
            </div>

        </form>
    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
