<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigateur</title>
</head>
<body>
    <h2>les infos sur le navigateur sont: </h2>
    <?php
        $AGENT=$_SERVER['HTTP_USER_AGENT'];
        echo $AGENT;
        echo ("\n<P>");
        if(strstr($AGENT,"MSIE")){
            
    ?>
    <b>Vous semblez utiliser internet explorer</b>
    
    <?php
        }elseif(preg_match("/Firefox/i",$AGENT)){
    ?>
    <b>Vous semblez utiliser Firefox! </b>
    <?php }
        elseif(preg_match("/chrome/i",$AGENT))
        { ?>
    <b>Vous semblez utiliser chrome! </b>
    <?php }
    elseif(preg_match("/Safari/",$AGENT))
    {?>
    <b>Vous semblez utiliser Safari</b>
    <?php }
    else echo "Navigateur Inconnu !";?>
    
</body>
</html>