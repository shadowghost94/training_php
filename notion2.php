<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre 10</title>
</head>
<body>
    <!-- 
        -Différence entre guillemets simple et guillemets double
        -strlen/strtoupper/strtolower/ucfirst/ucwords
        -str(i)str
        -ereg(i)
        -str_contains
    
    -->

    <?php
        $AGENT=$_SERVER['HTTP_USER_AGENT'];
        echo $AGENT;
        if(stristr($AGENT,"MSIE"))
            echo "Vous semblez utiliser internet explorer!</b>";
            elseif(ereg("Firefox",$AGENT))
                echo "Vous semblez utiliser Firefox!</b>";
            elseif(eregi("chrome",$AGENT))
                echo "Vous semblez utiliser le navigateur chrome!</b>";

    ?>
</body>
</html>