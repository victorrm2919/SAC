<!DOCTYPE html>
<html lang="es" class="receta">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/print.css" media="print">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f4439c2413.js" crossorigin="anonymous"></script>
    <title>Receta Paciente</title> <!-- Agregar Nombre Paciente con Backend -->
</head>

<body>
    <div class="contenedor">
        <header class="grid" id="headR">
            <div class="columnas-4 imagen" id="imgR">
                <img src="img/logo.png" alt="logo">
                <p>Doctor Web</p>
            </div>


            <div id="infoDoc" class="columnas-8">
                <!-- Se agrega informacion desde backend -->
                <h1>Receta Medica</h1>
                <h2 id="name_doc">Victor Manuel Ruiz Morales</h2>
                <h4 id="speci"><i class="fas fa-user-md"></i> Medico Cirujano, UNAM</h4>
                <h4 id="cedProf"> <i class="fas fa-id-card"></i> Cedula Profesional: 123456789</h4>
                <h4 id="tel"><i class="fas fa-phone-alt"></i> Telefono: 123456789</h4>
                <h4 id="addr"><i class="fas fa-map-marker-alt"></i> Avenida Colonia del Valle 413, Del Valle, Benito
                    Juárez, 03100 Ciudad de México, CDMX</h4> <!-- Direccion -->
            </div>

        </header>

        <div id="pac" class="">
            <div id="infoPac" class="grid">
                <h4 id="nameP">
                    Nombre Paciente: <span>Victor Manuel Ruiz Morales</span>
                </h4>
                <h4 id="age">Edad: <span>25</span></h4>
                <h4 id="sex">Sexo: <span>Masculino</span></h4>
                <h4 id="date">Lunes, 18 de Marzo del 2021</h4>
            </div>

            <div id="ind">
                <div id="diagMed">
                    <h4>Diagnóstico Médico</h4>

                    <p>El paciente se econtraba con uana temepratura de 38°C, fiebre y escolofrios en el cuerpo.
                        Cras tempus, nibh non tempor vehicula, lacus enim volutpat arcu, et laoreet magna nibh non
                        justo. Vestibulum convallis consectetur arcu vitae porttitor. Curabitur pellentesque, odio ac
                        sagittis dapibus, lacus tortor euismod nisl, sed rutrum magna nunc eget odio. Etiam vel enim sit
                        amet arcu vestibulum ultricies eu sed est. In eget eros in lorem eleifend iaculis sed non ex.
                        Vivamus scelerisque congue bibendum. Ut pretium non massa vehicula blandit.</p>
                </div>


                <div id="trat">
                    <h4>Tratamiento</h4>

                    <div class="medic">
                        <span id="med">Amoxicilina + ácido cluválico.</span>
                        <span id="presn">Tabletas, 500/125 mg. ,Caja 12 tabletas</span>
                        <span id="frec">Tomar 1 cada 8 Hrs, Vía Oral</span>
                        <span id="Addi">Durante 7 dias, Administrese junto alimentos.</span>
                    </div>

                    <div class="medic">
                        <span id="med">Amoxicilina + ácido cluválico.</span>
                        <span id="presn">Tabletas, 500/125 mg. ,Caja 12 tabletas</span>
                        <span id="frec">Tomar 1 cada 8 Hrs, Vía Oral</span>
                        <span id="Addi">Durante 7 dias, Administrese junto alimentos.</span>
                    </div>

                    <div class="medic">
                        <span id="med">Amoxicilina + ácido cluválico.</span>
                        <span id="presn">Tabletas, 500/125 mg. ,Caja 12 tabletas</span>
                        <span id="frec">Tomar 1 cada 8 Hrs, Vía Oral</span>
                        <span id="Addi">Durante 7 dias, Administrese junto alimentos.</span>
                    </div>

                    <div class="medic">
                        <span id="med">Amoxicilina + ácido cluválico.</span>
                        <span id="presn">Tabletas, 500/125 mg. ,Caja 12 tabletas</span>
                        <span id="frec">Tomar 1 cada 8 Hrs, Vía Oral</span>
                        <span id="Addi">Durante 7 dias, Administrese junto alimentos.</span>
                    </div>
                    
                    <div class="medic">
                        <span id="med">Amoxicilina + ácido cluválico.</span>
                        <span id="presn">Tabletas, 500/125 mg. ,Caja 12 tabletas</span>
                        <span id="frec">Tomar 1 cada 8 Hrs, Vía Oral</span>
                        <span id="Addi">Durante 7 dias, Administrese junto alimentos.</span>
                    </div>

                    <div class="medic">
                        <span id="med">Amoxicilina + ácido cluválico.</span>
                        <span id="presn">Tabletas, 500/125 mg. ,Caja 12 tabletas</span>
                        <span id="frec">Tomar 1 cada 8 Hrs, Vía Oral</span>
                        <span id="Addi">Durante 7 dias, Administrese junto alimentos.</span>
                    </div>
                    
                    
                    
                </div>


            </div>


        </div>

        <footer id="aut">
            <div id="firma" class="centrar-texto">
                    <p>Firma Digital: <span>SDRSD4F1SDF12F156S4FSDF354SDF12SF524F6SD2F1S56D4FSD2F5S4D</span></p>
                    <p>Victor Manuel Ruiz Morales</p>
            </div>

            <div id="infoAut">
                <p>Esta receta esta autorizada por <span id="nAut">Victor Manuel Ruiz Morales</span>. Cualquier
                    situacion o duda respecto a la receta expedida favor de contactar al responsable de esta receta,
                    Doctor Web no se hace responsables por el mal uso de esta información.</p>
                <span class="nRec">RECETA_VRMR_1803202100001</span>
            </div>

            <div id="b_pdf_imp" class="centrar-texto">
                <a href="javascript:window.print()" class="btn btn-primario"> Imprimir Receta</a>
            </div>
        </footer>
    </div>

</body>

</html>