<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censored word replacer</title>
</head>
<body>
    <?php
        $text = "Oh, oh, luxury
        Chidi-ching-ching could buy anything, cop that
        Oh, oh, collard greens
        Three degrees low, make it hot for me, drop that
        Oh, oh, down with that shit
        Drink this, smoke this, get down with the shit, aye
        Oh, oh, down with the shit
        Cop this, pop this, down with the shit";

        $word = $_GET['censoredWord'];
        $censoredText = str_replace("$word", "***", "$text");
        
    
    ?>

    <h1>This is the full text:</h1>
    <P><?php echo $text ?></p>
    <P>and its length is: <?php echo strlen($text) ?></P>


    <form action="" method="get">
        <label for="selectCensoredWord">Censor a Word: </label>
        <input type="text" name="censoredWord" id="selectCensoredWord">
        <button>Censor!</button>
    </form>

    <h1>This is the censored text:</h1>
    <p><?php echo $censoredText ?></p>
    <P>and its length is: <?php echo strlen($censoredText) ?></P>
    

</body>
</html>