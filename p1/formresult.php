<!doctype html>

<html lang="en">
<head>
     <meta charset="utf-8">
    <title>Your Result</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/random.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <?php include("template/nav.php");
        include("functions.php");
        
        if( isset( $_POST[ 'submit' ] ) ) {
			
	    $newPlayer=$_POST['newPlayer'];		
	    $newTeam=$_POST['newTeam'];	
				
					
	    if(isset($newPlayer) && isset($newTeam) && preg_match("/^[A-z\s]+$/", $newPlayer)){
	    
            }else{
	    }
	}
        
        ?>
    <div id="wrapper">
        <?php echo(generateResult($keys, $pairs)); ?>
        <a href="random.php" id="back-button">Back</a>
    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
