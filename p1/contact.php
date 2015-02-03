<!doctype html>

<html lang="en">
<head>
     <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <?php include("template/nav.php"); ?>
    <div id="wrapper">
            <h1>Contact the Artist</h1>
                <form action="formresult.php" method="POST">
            <div class="left">
            <p>Choose categories:</p>
                <input class="cat choice" type="checkbox" name="cat[]" value="oncanvas"> On Canvas<br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òdrawings"> Drawings<br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òcontra"> Contra Naturam<br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òsketchbook"> Sketch Book<br>
                <input class="cat choice" type="checkbox" name="cat[]" value=Òother"> Other Projects<br>
            </div>
            <div class="right">
            <p>Choose subject:</p>
                <input class="subject choice" type="radio" name="subject" value="any" CHECKED> Any<br>
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
            <p>Level of Strangeness: &nbsp;&nbsp;
                <span id="range-label">Normal <input type="range" name="strange" min="0" max="10"> Crazy </span>
            </p>
            <p>Try searching for a title: &nbsp;&nbsp;
                <input type="text" name="title">
            </p>
            <input id="submit-form-button" type="submit" name="submit-form" value="GO" >
            </div>
    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
