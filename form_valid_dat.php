<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Validation de date</title>
    </head>

    <body>
        <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>" >
            <fieldset>

                <legend>Entrez votre date de naissance sous la forme JJ/MM/AAAA</legend>
                <input type="text" name="date" />
                <input type="submit" value="Envoi"/>

            </fieldset>
        </form>

        <?php
            //checkdate
            if(isset($_POST['date']))
            {
                $date=$_POST['date'];
                $tabdate=explode("/",$date);
                if(!checkdate($tabdate[1],$tabdate[0],$tabdate[2]) ) {
                echo "<hr/>La date $date n'est pas validez Recommencez! <hr/>";
                }
                else {echo "<h3> La date $date est valide. Merci!</h3>";}
            }
        ?>
    </body>
</html>
