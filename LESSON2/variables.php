<!doctype html>
<html>
<head>
    <title>Links and Variables</title>
</head>
<body>
    
    <h1>Links and Variables</h1>
    
    <p>Use PHP echo and variables to output the following link information:</p>
        
    <hr>
    
    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'https://static-assets.codecademy.com/Courses/Learn-Redux/matching-game/codecademy_logo.png';
    $linkDescription = 'Learn to code interactively, for free.';
    

    echo "<h1>$linkName</h1>";

    echo "<img src=$linkImage width=300px>";

    echo "<p>$linkDescription</p>";
    echo "<a href=$linkURL>$linkName</a>";

    ?>
        
</body>
</html>