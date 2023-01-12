<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include ('../includes/headers.php'); ?>
    <link rel="stylesheet" href="servicios.css">
    <link rel="stylesheet" href="../includes/menu.css">

</head>
<body>

    <?php include ('../includes/menu.php'); ?>

    <!-- INICIO DE CONTENEDOR DE CONTACTO -->
    <section class="servicios container">
            <h2 class="subtitle">OFRECEMOS SERVICIOS COMO:</h2>
            <div class="servicios__table">
                <div class="servicios__element">
                    <h3 class="servicios__servicios">ASISTENCIA</h3>

                    <div class="servicios__items">
                        <p class="servicios__features">Asistencia técnica y comercial para la implantación de empresas en el mercado LATAM.</p>
                    </div>

                    <input type="button" value="Mas informacion" class="btn-actions btn-add card_btn">
                    <!--<a href="#" class="servicios__cta">Ver asistencias</a>-->
                </div>


                <div class="servicios__element">
                    <h3 class="servicios__servicios">INSTALACIONES</h3>

                    <div class="servicios__items">
                        <p class="servicios__features">Servicios de instalación y puesta en marcha de equipamiento en activos de energía renovable.</p>
                    </div>

                    <input type="button" value="Mas informacion" class="btn-actions btn-add card_btn">
                </div>


                <div class="servicios__element">
                    <h3 class="servicios__servicios">ASESORAMIENTO</h3>

                    <div class="servicios__items">
                        <p class="servicios__features">Asesoramiento, instalación y puesta en marcha de instalaciones fotovoltaicas, 
                            aisladas e interconectadas a red para sector servicio y residencial.</p>
                    </div>

                    <input type="button" value="Mas informacion" class="btn-actions btn-add card_btn">
                </div>


            </div>
    </section>
    <!-- FIN DE CONTENEDOR DE CONTACTO -->

    <!-- INCLUDE MODALES A SERVICIOS -->
    <?php include('./modals/asistencia.php'); ?>
    <?php include('./modals/instalaciones.php'); ?>
    <?php include('./modals/asesoramiento.php'); ?>

</body>
</html>