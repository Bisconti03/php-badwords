<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad word replacer</title>
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
    
    ?>

    <h1>This is the full text:</h1>
    <P><?php echo $text ?></p>
    <P>and its length is: <?php echo strlen($text) ?></P>

</body>
</html>