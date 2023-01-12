<!DOCTYPE html>
<html lang="en">
<head>
    
<?php include ('../includes/headers.php'); ?>
    <link rel="stylesheet" href="otro-servicio.css">
    <link rel="stylesheet" href="../includes/menu.css">
    <link rel="stylesheet" href="modals.css">

</head>
<body>

    <?php include ('../includes/menu.php'); ?>
    
    <div id="tab2" class="tab-slider-body">
        <div class="wrapper-add-info">
            <div class="card-add card-one">
                <h3>ASESORAMIENTO</h3>
                <div class="servicios__items">
                    <p class="servicios__features">Instalación y puesta en marcha de instalaciones fotovoltaicas, 
                            aisladas e interconectadas a red.</p>
                </div>
                <input type="button" value="Mas informacion" class="btn-actions btn-add card_btn">
            </div>

            <div class="card-add card-two">
                <h3>ASISTENCIA</h3>
                <div class="servicios__items">
                    <p class="servicios__features">Asistencia técnica y comercial para la implantación de empresas en el mercado LATAM.</p>
                </div>
                <input type="button" value="Mas informacion" class="btn-actions btn-add card_btn">
            </div>

            <div class="card-add card-three">
                <h3>INSTALACIONES</h3>
                <div class="servicios__items">
                    <p class="servicios__features">Servicios de instalación y puesta en marcha de equipamiento en activos de energía renovable.</p>
                </div>
                <input type="button" value="Mas informacion" class="btn-actions btn-add card_btn">
            </div>
        </div>
    </div>

    <!-- INCLUDE MODALES A SERVICIOS -->
    <?php include('./modals/asesoramiento.php'); ?>
    <?php include('./modals/asistencia.php'); ?>
    <?php include('./modals/instalaciones.php'); ?>
    
    <script src="./js/modals.js"></script>

</body>
</html>