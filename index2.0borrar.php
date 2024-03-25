<?php
require_once("clases/Modelo.php");
?>

<html>
    </body>
        <div>
            <?php
                $mod = new Modelo;
                $dataBase = $mod->showAllTasks();
            ?>
        </div>
    </body>
</html>