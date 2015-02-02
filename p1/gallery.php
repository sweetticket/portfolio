<!doctype html>

<html lang="en">
<head>
     <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <?php include("template/nav.php"); ?>
    <div id="wrapper">
        <div id="artbox">
            <table class="artgrid">
                <tr class="artgrid">
                    <td class="artgrid">
		    <a href="oncanvas.php" class="artlink"><div class="cat-text"><p>ON<br>CANVAS</p></div><img src="img/categories/oncanvas.jpg" alt="On Canvas" class="artthumbs"></a>
		    </td>
                    <td class="artgrid"><a href="drawings.php" class="artlink"><div class="cat-text"><p>DRAW-<br>INGS</p></div><img src="img/categories/drawings.jpg" alt="Drawings" class="artthumbs"></a>
		    </td>
                    <td class="artgrid"><a href="contra.php" class="artlink"><div class="cat-text"><p>CONTRA<br>NATURAM</p></div><img src="img/categories/contra.jpg" alt="Contra Naturam" class="artthumbs"></a>
		    </td>
                    <td class="artgrid"><a href="sketchbook.php" class="artlink"><div class="cat-text"><p>SKETCH<br>BOOK</p></div><img src="img/categories/sketch.jpg" alt="Sketchbook" class="artthumbs"></a>
		    </td>
                    <td class="artgrid"><a href="other.php" class="artlink"><div class="cat-text"><p>OTHER<br>PROJECTS</p></div><img src="img/categories/other.jpg" alt="Other Projects" class="artthumbs"></a>
		    </td>
                </tr>
            </table>
        </div>


    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
