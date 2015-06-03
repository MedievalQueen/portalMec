<!DOCTYPE html>
<html>
    <?php include("_header.html")?>
<body>
    <?php
        $G_navbar_name = "Pesquisa";
        $G_navbar_image = "images/banner-search.jpg";
        include("_navbar.php")
    ?>

    <div class="container">
        <div class="row">
            <?php include("resultado-item.php") ?>
            <?php include("resultado-item.php") ?>
            <?php include("resultado-item.php") ?>
            <?php include("resultado-item.php") ?>
            <?php include("resultado-item.php") ?>
        </div>
    </div>

    <?php include("_footer.html")?>
</body>
</html>
