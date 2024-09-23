<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formas</title>
</head>
<body>
<?php echo "text from php"; ?>
<?php echo "<h3>this is h3 from php</h3>"; ?>

<?php
    $someText = "some Text";
    echo $someText
?>
<a href="about.php">about</a>
    <h1>Formas</h1>

    

    <form action="" method="post">
        <label for="title">title</label>
        <input type="text" id="title" name="title" placeholder="Enter text ...">
        
        <br>
        <label for="title">content</label>
        <textarea name="content" id="content" > Default text</textarea>
        <br>

        <input type="radio" id="veg1" name="veg" value="1">
        <label for="veg1">Carrot</label><br>
        <input type="radio" id="veg2" name="veg" value="2">
        <label for="veg2">Potato</label><br>  

        <input type="submit" value="send">


    </form>
</body>
</html>