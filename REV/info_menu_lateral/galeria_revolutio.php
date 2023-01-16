<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include ('../includes/headers.php'); ?>
    <link rel="stylesheet" href="galeria_revolutio.css">
    <link rel="stylesheet" href="../includes/menu.css">

</head>
<body>

    <?php include ('../includes/menu.php'); ?>

	<section class="testimony">
            <div class="testimony__container container">
                <img src="../iconos/arrow ios back_.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <figure class="testimony__picture">
                        <img src="../imagenes/Arquitectura6.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <figure class="testimony__picture">
                        <img src="../imagenes/Img_index_gris.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">

                    <figure class="testimony__picture">
                        <img src="../imagenes/Textura_metalica.JPG" class="testimony__img">
                    </figure>
                </section>

                <img src="../iconos/arrow ios forward_.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        <script src="../js/slider.js"></script>
</body>