<?php
    require_once("../../config/conexion.php");

    if (isset($_SESSION["usuarioId"])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>Empresa::Perfil</title>
</head>
<!--body with default sidebar pinned -->

<body class="sidebar-pinned">
    <?php require_once("../html/MainMenu.php"); ?>


    <main class="admin-main">

        <?php require_once("../html/MainHeader.php"); ?>
        <section class="admin-content">
            <h3>Perfil</h3>
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <!--  container or container-fluid as per your need-->
            <div class="container">

            </div>
            <!-- END PLACE PAGE CONTENT HERE -->
        </section>
    </main>



    <?php require_once("../html/MainJs.php"); ?>

    <!--page specific scripts for demo-->

</body>

</html>

<?php
    }else {
        header("Location:" . Conectar::ruta() . "/views/error/401");
    }

?>