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
    <?php include("template/nav.php");
    include("functions.php");
    $myemail = "yk494@cornell.edu";
    $name = "";
    $subject = "";
    $message = "";
    $cat = array();
    $imp = "";
    $strange = "";

    if( isset( $_POST[ 'submit' ] ) ) {
        
        if (isset($_POST['name'])){ $name = htmlspecialchars(trim($_POST['name'])); };
        if (isset($_POST['subject'])){ $subject = htmlspecialchars(trim($_POST['subject'])); };
        if (isset($_POST['message'])){ $message = htmlspecialchars(trim($_POST['message'])); };
        if (isset($_POST['cat'])){ $cat = $_POST['cat']; };
        if (isset($_POST['imp'])){ $imp = $_POST['imp']; };
        if (isset($_POST['strange'])){ $strange = ($_POST['strange'])*10; };
        
        if (!empty($message)){
            if (empty($name)){
                $name = "Anon";
            };
            if (empty($subject)){
                $subject = "[No Subject]";
            };
            mail($myemail, "'$subject' from $name", $message);
        };      
        
    }else{
        echo("Something went wrong!!!");
    }

    
    ?>
    <div id="wrapper">
            <h1>SAY HELLO</h1>
            <p id="subtitle">Or something else.</p>
        <section>
            <p id="thankyou">Thanks <?php echo($name); ?> for your message!</p>
            <p class="label">You said that you liked the following categories:</p>
            <p><?php echo(implode(', ', $cat)); ?> </p>
            
                <?php
                
                if (count($cat) > 0){
                echo("<p class=\"label\">Here are some samples of what you liked:</p>
                    <div id=\"samples\">");
                echo(generateSamples($cat));
                };
                ?>
            <p class="label">You said that you had a <?php echo($imp); ?> experience.</p>
            <p class="label">You said that the art had a <?php echo($strange) ?>% strangeness level.</p>
            
            <div class="center">
            <a href="index.php" id="back-home">BACK HOME</a>
            </div>
        </section>
        
    <?php include("template/footer.php"); ?>
    </div>
</body>
</html>
