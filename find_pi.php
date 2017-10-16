<?php
    if(isset($_POST['limit'])) {
        $limit = $_POST['limit'] < 14 ? (int) $_POST['limit'] : 14;
        $pi = round(pi(), $limit);
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if($limit) { ?>
                <p>
                    pi faut <?php echo $pi . " avec un précision de " . $limit ; ?>
                </p>
            <?php }
        ?>
        <form method="post">
            <label for="limit">Précision de pi souhaité:</label>
            <input type="number" name="limit" id="limit" min="0" max="14">
            <button type="submit" >Valider</button>
        </form>
    </body>
</html>

