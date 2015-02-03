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
            <h1>SAY HELLO</h1>
            <p id="subtitle">Or something else.</p>
        <form action="formresult.php" method="POST">
            <p class="label">Name:&nbsp;&nbsp;&nbsp;<input type="text" name="name"> </p>
            <p class="label">Subject:&nbsp;&nbsp;&nbsp;<input type="text" name="subject"> </p>
            <p class="label">Your Message:</p> <textarea cols="75" rows="10"></textarea>
            <p class="label">What categories did you like?</p>
                <div class="slight-center">
                <input class="cat choice" type="checkbox" name="cat[]" value='on canvas'> On Canvas<br>
                <input class="cat choice" type="checkbox" name="cat[]" value='drawings'> Drawings<br>
                <input class="cat choice" type="checkbox" name="cat[]" value='contra naturam'> Contra Naturam<br>
                <input class="cat choice" type="checkbox" name="cat[]" value='sketch book'> Sketch Book<br>
                <input class="cat choice" type="checkbox" name="cat[]" value='other projects'> Other Projects<br>
                </div>
            <p class="label">Your general impression of the art:</p>
                <div class="slight-center">
                <input class="imp choice" type="radio" name="imp" value="neutral" CHECKED> Neutral<br>
                <input class="imp choice" type="radio" name="imp" value="positive"> Positive<br>
                <input class="imp choice" type="radio" name="imp" value="negative"> Negative<br>
                </div>
            <p class="label">How strange did you think the artwork was?</p>
                
                <div class="slight-center">
                    <span id="range-label">Normal <input type="range" name="strange" min="0" max="10"> Crazy </span><br>
                </div>
            <div class="center">
            <input type="submit" name="submit" value="SEND" id="send-button" >
            </div>
        </form>
    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
