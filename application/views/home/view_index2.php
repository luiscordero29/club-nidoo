<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nacho Ruiz Compés</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>assets/css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- This is what you need -->
    <script src="<?php echo base_url(); ?>assets/vendor/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/sweetalert2/sweetalert2.min.css">

    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Nacho Ruiz Compés</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Cobertura</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Contratar Seguro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Oferta de seguros de accidentes colectivos 2017/2018</h1>
				<br><h2 id="homeHeading">Dirigida a Universidad de Zaragoza</h2>
                <hr>
				<h3 id="homeHeading">Nacho Ruiz Compés</h3>
                <p>Corredor de Seguros<br> Nº Autorizacion DGA F-0122GA - Nº Colegiado: 76032</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Cobertura</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Cobertura</h2>
                    <hr class="light">
                    <p class="text-faded">Durante la Estancia en Instalaciones Universidad de Zaragoza, actividades comprendidas dentro del estudio correspondientes y RIESGO IN ITINIRE</p>
					<br>
					<h2 class="section-heading">Garantías y Sumas Aseguradas por Persona</h2>
                    <hr class="light">
                    <p class="text-faded">Fallecimiento accidental: 9.000€</p>
					<hr class="light">
                    <p class="text-faded">Invalidez Permanente Baremo: 18.000€</p>
					<hr class="light">
                    <p class="text-faded">Gastos Sanitarios:
					<br>Ilimitados en centros concertados en territorio Nacional (Máximo 2 años)</p>
					<br>
					<h2 class="section-heading">PRIMA NETA POR PERSONA: 5,66€</h2>
					<br>					
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Contratar seguro</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contratar Seguro</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container" id="contratar">
            <div class="row">
                <div class="col-md-12">
                    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?> 
                    <?php 
                      $at = array('id' => 'forms' );
                      echo form_open('home/index',$at); 
                    ?>
                        <div class="row">
                           <div class="col-md-12">
                               <div class="input-field">
                                   <label for="name">
                                        Nombre y Apellidos <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="name" name="name" required value="<?php echo set_value('name'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-5">
                               <div class="input-field">
                                   <label for="nif">NIF <i class="fa fa-asterisk"></i></label>
                                   <input type="text" id="nif" name="nif" required value="<?php echo set_value('nif'); ?>">
                               </div>
                           </div>
                           <div class="col-md-7">
                               <div class="input-field">
                                   <label for="date">Fecha nacimiento <i class="fa fa-asterisk"></i></label>
                                   <input type="date" id="date" name="date" required value="<?php echo set_value('date'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="input-field">
                                   <label for="profesion">Profesión <i class="fa fa-asterisk"></i></label>
                                   <input type="text" id="profesion" name="profesion" required value="<?php echo set_value('profesion'); ?>">
                               </div>
                           </div>
                       </div>
                       <hr>

                       <div class="row">
                           <div class="col-md-12">
                               <div class="input-field">
                                   <label for="domicilio">
                                        Domicilio <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="domicilio" name="domicilio" required value="<?php echo set_value('domicilio'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="localidad">
                                        Localidad <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="localidad" name="localidad" required value="<?php echo set_value('localidad'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="codigo_postal">
                                        Código postal <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="codigo_postal" name="codigo_postal" required onkeypress="return valida(event)" value="<?php echo set_value('codigo_postal'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="Pais">
                                        País <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="pais" name="pais" required value="<?php echo set_value('pais'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="provincia">
                                        Provincia <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="provincia" name="provincia" required value="<?php echo set_value('provincia'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="telefono">
                                        Teléfono <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="telefono" name="telefono" required onkeypress="return valida(event)" value="<?php echo set_value('telefono'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="otro_telefono">
                                        Otro teléfono
                                    </label>
                                   <input type="text" id="otro_telefono" name="otro_telefono" onkeypress="return valida(event)" value="<?php echo set_value('otro_telefono'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="input-field">
                                   <label for="email">
                                        E-mail <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="email" id="email" name="email" required value="<?php echo set_value('email'); ?>">
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="row">
                           <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                        Estado Civil <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row" id="radios">
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Soltero/a" id="soltero" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Soltero/a'); ?>>
                                            <label for="soltero">Soltero/a</label>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Casado/a" id="casado" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Casado/a'); ?>>
                                            <label for="casado">Casado/a</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Divorciado/a" id="divorciado" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Divorciado/a'); ?>>
                                            <label for="divorciado">Divorciado/a</label>
                                         </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Viudo/a" id="viudo" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Viudo/a'); ?>>
                                            <label for="viudo">Viudo/a</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                       Sexo <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row" id="radios">
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Hombre" id="hombre" name="sexo" required <?php echo  set_radio('sexo', 'Hombre'); ?>>
                                            <label for="hombre">Hombre</label>
                                        </div>
                                     </div>
                                     <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Mujer" id="mujer" name="sexo" required <?php echo  set_radio('sexo', 'Mujer'); ?>>
                                            <label for="mujer">Mujer</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                       </div>
                       <hr>
                         <div class="row">
                           <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                        BENIFICIARIOS <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>El cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)</p>
                                     </div>
                                </div>
                                <div class="row bene" id="radios">
                                    <div class="col-md-6">
                                        <div class="input-field radio">
                                            <input type="radio" id="conyugue" value="conyugue" name="beneficiarios" required onclick="input_no_required();" <?php echo  set_radio('beneficiarios', 'conyugue'); ?>>
                                            <label for="conyugue">Cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)</label>
                                        </div>
                                     </div>
                                     <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="otros" id="otros" name="beneficiarios" required onclick="input_required();" <?php echo  set_radio('beneficiarios', 'otros'); ?>>
                                            <label for="otros">Otros (rellenar nombre y apellidos, NIF y fecha de nacimiento)</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                       </div>
                       <div class="row" id="data_bene" style="display: none;">
                           <div class="col-md-12">
                               <div class="input-field">
                                   <label for="name_bene">
                                        Nombre y Apellidos <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="name_bene_1" name="name_bene_1" required><br><br>
                                   <input type="text" id="name_bene_2" name="name_bene_2"><br><br>
                                   <input type="text" id="name_bene_3" name="name_bene_3"><br><br>
                               </div>
                           </div>
                           <div class="col-md-5">
                               <div class="input-field">
                                   <label for="nif_bene">
                                        Nif <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="nif_bene_1" name="nif_bene_1" required><br><br>
                                   <input type="text" id="nif_bene_2" name="nif_bene_2"><br><br>
                                   <input type="text" id="nif_bene_3" name="nif_bene_3"><br><br>
                               </div>
                           </div>
                           <div class="col-md-7">
                               <div class="input-field">
                                   <label for="date_bene">
                                        Fecha nacimiento <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="date" id="date_bene_1" name="date_bene_1" required><br><br>
                                   <input type="date" id="date_bene_2" name="date_bene_2"><br><br>
                                   <input type="date" id="date_bene_3" name="date_bene_3"><br><br>
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="row">
                           <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                        FORMA DE PAGO <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row fp" id="radios">
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="transfe" id="transfe" name="fp_cash" required <?php echo  set_radio('fp_cash', 'transfe'); ?>>
                                            <label for="transfe">Transferencia / Ingreso en cuenta</label>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="card" id="card" name="fp_cash" required <?php echo  set_radio('fp_cash', 'card'); ?>>
                                            <label for="card">Tarjeta</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <p>El pago del Seguro se puede efectuar mendiante:</p>
                                <p>- Transferencia Bancaria a favor de Jose Ignacio Cómpes: <b>ES38 2085 8366 8003 3040 1759</b> - Entidad IBERCAJA</p>
                                <p>- Ingreso Directo en misma cuenta</p>
                                <p>Una vez recibida la solicitud debídamente cumplimentada y copia del pago efectuado, se expedirá certificado en un máximo de 48 horas.</p>
                                <p>Por favor enviar datos a mjroble@mapfre.com . Teléfono: 636 787 815 para cualquier duda.</p>
                            </div>
                       </div>
                       <div class="row">
                          <div class="col-md-12">
                            <div class="terminos">
                            <h2>
                            Obtención de Datos - Genérico                                 
                            </h2>
                            <p>
                            Para la obtención de datos de carácter personal, deberemos incluir esta cláusula en los formularios, con el fin de informar que los 
                            datos facilitados serán tratados de manera correcta, según indica la Ley Orgánica 15/1999 de Protección de Datos de Carácter 
                            Personal 
                            </p>
                            <p>                            
                            Los datos que nos facilite a través del formulario serán incluidos en un fichero debidamente inscrito en el Registro General de 
                            Protección de Datos bajo responsabilidad de NACHO RUIZ COMPES, con domicilio social en la calle CALABUCH, 18, 4E, 50019, 
                            ZARAGOZA. 
                            </p>
                            <p>
                            Los datos marcados con un asterisco son obligatorios. Sin ellos, no podremos proceder a tramitar _________________. 
                            Utilizaremos sus datos para _____________________________(finalidad de estos datos). 
                            </p>
                            <p>
                            Para ejercer los derechos de acceso, rectificación, cancelación u oposición de sus datos de carácter personal, puede usted dirigirse 
                            a nuestra dirección de correo electrónico, NACHORUIZMEDIACION@GMAIL.COM o bien a nuestra dirección postal CALABUCH, 18, 
                            4E, 50019, ZARAGOZA. al encargado del Fichero de nuestra empresa. 
                            </p>
                            </div>
                            <label>
                              <input type="checkbox" name="terminos_1" value="SI" required> Acepto Ley Obtencion de Datos
                            </label>
                            <p></p>
                         </div>
                       </div>
                       <div class="row">
                          <div class="col-md-12">
                            <div class="terminos">
                            <h2>  
                            Política de Privacidad
                            </h2>
                            <p>
                              Si dispone de pagina Web, deberá incluir una apartado (normalmente al final de la pagina principal), denominado “Política de 
                              Privacidad”, donde deberá incluir el siguiente texto, referente a la Ley 34/02,de 11 Julio , de Servicios de la Sociedad de la 
                              Información y de Correo Electrónico (LSSI) 
                            </p>
                            <p>                              
                              El Sitio Web _______________________________ (en adelante, el “Sitio Web”) es propiedad de NACHO RUIZ COMPES con CIF/NIF 
                              73098292Z y domicilio social en CALABUCH, 18, 4E, 50019, ZARAGOZA. 
                              NACHO RUIZ COMPES le da la bienvenida y le invita a leer atentamente las Condiciones Generales de Uso de este Sitio Web que 
                              describen los términos y condiciones que serán aplicables a su navegación por el mismo, de conformidad con lo establecido en la 
                              normativa española de aplicación. Dado que NACHO RUIZ COMPES podría modificar en el futuro estas Condiciones de Uso, le 
                              recomendamos que las visite periódicamente para estar debidamente informado de los cambios realizados. 
                              Con el ánimo de que el Sitio Web se ajuste a los criterios de transparencia , claridad y sencillez, NACHO RUIZ COMPES informa al 
                              Usuario que cualquier sugerencia , duda o consulta sobre las Condiciones Generales de Uso será recibida y solucionada 
                              contactando a través de la dirección de correo electrónico NACHORUIZMEDIACION@GMAIL.COM 
                            </p>
                            <p>                              
                              1. OBJETO <br> 
                              NACHO RUIZ COMPES suministra el contenido y los servicios que están disponibles en el sitio Web, con sujeción a las presentes 
                              Condiciones Generales de Uso así como la política sobre el tratamiento de datos personales (en adelante “Política sobre Protección 
                              de Datos”). El acceso a este sitio Web o su utilización en cualquier forma le otorga la calificación de Usuario e implica la aceptación 
                              sin reservas de todas y cada una de las presentes Condiciones de Uso, reservándose NACHO RUIZ COMPES el derecho a 
                              modificarlos en cualquier momento. En consecuencia, será responsabilidad de todo Usuario la atenta lectura de las Condiciones 
                              Generales de Uso vigente en cada una de las ocasiones que acceda a este sitio Web, por lo que si éste no está de acuerdo con 
                              cualquiera de los mismos aquí dispuestos, deberá abstenerse respecto al uso del presente Sitio Web. 
                              Asimismo, queda advertido de que, en ocasiones se podrán establecer condiciones particulares para la utilización en el sitio Web de 
                              contenidos y/o servicios específicos, la utilización de dichos contenidos o servicios implicará la aceptación de las condiciones 
                              particulares en ellos especificadas. 
                            </p>
                            <p>                              
                              2. PRIVACIDAD Y TRATAMIENTO DE DATOS <br>
                              Cuando para el acceso de determinados contenidos o servicios sea necesario facilitar datos de carácter personal, los Usuarios 
                              garantizarán su veracidad, exactitud, autenticidad y vigencia. NACHO RUIZ COMPES dará a dichos datos tratamiento automatizado 
                              que corresponda en función de su naturaleza o finalidad, en los términos indicados en la Sección de Política de Protección de Datos. 
                            </p>
                            <p>                              
                              3. PROPIEDAD INDUSTRIAL E INTELECTUAL<br> 
                              El usuario reconoce y acepta que todos los contenidos que se muestran en el sitio Web y en especial , diseños , textos , imágenes , 
                              logos , iconos , botones, software, nombres comerciales , marcas , o cualesquiera de los signos susceptibles de utilización industrial 
                              y/o comercial están sujetos a derechos de propiedad intelectual y todas las marcas , nombres comerciales o signos distintivos, 
                              todos los derechos de propiedad intelectual e industrial, sobre los contenidos y/o cualesquiera otros elementos insertados en la 
                              página , son propiedad exclusiva de NACHO RUIZ COMPES y/o terceros, quienes tienen derecho exclusivo de utilizarlos en el 
                              tráfico económico. Por todo ello el Usuario se compromete a no reproducir, copiar, distribuir, poner a disposición o cualquier otra 
                              forma de comunicar públicamente, transformar o modificar tales contenidos manteniendo indemne a NACHO RUIZ COMPES de 
                              cualquier reclamación que se derive del incumplimiento de tales obligaciones. En ningún caso el acceso al sitio Web implica ningún 
                              tipo de renuncia, transmisión, licencia o cesión total ni parcial de dichos derechos, salvo que se establezca expresamente lo 
                              contrario. Las presentes Condiciones Generales de Uso de este sitio Web no confieren a los Usuarios ningún otro tipo de derecho 
                              de utilización, explotación, alteración, reproducción, distribución o comunicación pública del Sitio Web y/o de sus contenidos 
                              distintos de los aquí expresamente previstos. Cualquier otro uso o explotación de cualquiera de los derechos estará sujeto a la 
                              previa y expresa autorización específicamente otorgada a tal efecto por NACHO RUIZ COMPES o el tercero titular de los derechos 
                              afectados. 
                            </p>  
                            <p>                              
                              www.laboralgroup.com | correo@laborallopd.com | Telf: 902 999 551 | Fax: 902 999 553 Página 120 de 154Recomendaciones y Cláusulas
                              11 NACHO RUIZ COMPES
                            </p>
                            <p>                              
                              Los contenidos, textos, fotografías, diseños, logotipos, imágenes, programas de ordenador, códigos fuente y, en general, cualquier 
                              creación intelectual existente en este sitio, así como el propio sitio en su conjunto, como obra artística multimedia, están protegidos 
                              como derechos de autor por la legislación en materia de propiedad intelectual NACHO RUIZ COMPES es titular de los elementos 
                              que integran el diseño gráfico del Sitio Web, lo menús, botones de navegación, el código HTML, los textos, imágenes, texturas, 
                              gráficos y cualquier otro contenido del Sitio Web o, en cualquier caso dispone de la correspondiente autorización para la utilización 
                              de dichos elementos. El contenido dispuesto en el Sitio Web no podrá ser reproducido ni en todo ni en parte, ni transmitido, ni 
                              registrado por ningún sistema de recuperación de información, en ninguna forma ni en ningún medio, a menos que se cuente con 
                              la autorización previa, por escrito, de la citada Entidad. 
                              Asimismo queda prohibido suprimir, eludir o manipular el "copyright" así como los dispositivos técnicos de protección, o 
                              cualesquiera mecanismos de información que pudieren contener los contenidos. El Usuario de este Sitio Web se compromete a 
                              respetar los derechos enunciados y a evitar cualquier actuación que pudiera perjudicarlos, reservándose en todo caso NACHO 
                              RUIZ COMPES el ejercicio de cuantos medios o acciones legales le correspondan en defensa de sus legítimos derechos de 
                              propiedad intelectual e industrial. 
                            </p>                              
                            <p>
                              
                              4. OBLIGACIONES Y RESPONSABILIDADES DEL USUARIO DEL SITIO WEB 
                              El Usuario se compromete a: 
                              a) Hacer un uso adecuado y lícito del sitio Web así como de los contenidos y servicios, de conformidad con: 
                              (I) la legislación aplicable en cada momento; 
                              (II) las Condiciones Generales del Sitio Web; 
                              (III) la moral y buenas costumbres generalmente aceptadas y 
                              (IV) el orden público. 
                               
                              b) Proveerse de todos los medios y requerimientos técnicos que se precisen para acceder al Sitio Web. 
                               
                              c) Facilitar información veraz al cumplimentar con sus datos de carácter personal los formularios contenidos en el Sitio Web y a 
                              mantenerlos actualizados en todo momento de forma que responda, en cada momento, a la situación real del Usuario. El Usuario 
                              será el único responsable de las manifestaciones falsas o inexactas que realice y de los perjuicios que cause a NACHO RUIZ 
                              COMPES o a terceros por la información que facilite. 
                               
                              No obstante lo establecido en el apartado anterior el Usuario deberá asimismo abstenerse de: 
                              a) Hacer un uso no autorizado o fraudulento del Sitio Web y/o de los contenidos con fines o efectos ilícitos, prohibidos en las 
                              presentes Condiciones Generales de Uso, lesivos de los derechos e intereses de terceros, o que de cualquier forma puedan dañar, 
                              inutilizar, sobrecargar, deteriorar o impedir la normal utilización de los servicios o los documentos, archivos y toda clase de 
                              contenidos almacenados en cualquier equipo informático. 
                               
                              b) Acceder o intentar acceder a recursos o áreas restringidas del Sitio Web, sin cumplir las condiciones exigidas para dicho acceso. 
                               
                              c) Provocar daños en los sistemas físicos o lógicos del Sitio Web, de sus proveedores o de terceros. 
                               
                              d) Introducir o difundir en la red virus informáticos o cualesquiera otros sistemas físicos o lógicos que sean susceptibles de 
                              provocar daños en los sistemas físicos o lógicos de NACHO RUIZ COMPES, de sus proveedores o de terceros. 
                               
                              e) Intentar acceder, utilizar y/o manipular los datos de NACHO RUIZ COMPES, terceros proveedores y otros Usuarios. 
                               
                              f) Reproducir o copiar, distribuir, permitir el acceso del público a través de cualquier modalidad de comunicación pública, 
                              transformar o modificar los contenidos, a menos que se cuente con la autorización del titular de los correspondientes derechos o 
                              ello resulte legalmente permitido. 
                               
                              g) Suprimir, ocultar o manipular las notas sobre derechos de propiedad intelectual o industrial y demás datos identificativos de los 
                              derechos de NACHO RUIZ COMPES o de terceros incorporados a los contenidos, así como los dispositivos técnicos de protección o 
                              cualesquiera mecanismos de información que puedan insertarse en los contenidos. 
                               
                              h) Obtener e intentar obtener los contenidos empleando para ello medios o procedimientos distintos de los que, según los casos, se 
                              hayan puesto a su disposición a este efecto o se hayan indicado expresamente en las páginas Web donde se encuentren los 
                              contenidos o, en general, de los que se empleen habitualmente en Internet por no entrañar un riesgo de daño o inutilización del 
                              Sitio Web y/o de los contenidos. 
                               
                               
                              www.laboralgroup.com | correo@laborallopd.com | Telf: 902 999 551 | Fax: 902 999 553 Página 121 de 154Recomendaciones y Cláusulas
                              11 NACHO RUIZ COMPES
                               
                               
                               
                               
                              i) En particular, y a título meramente indicativo y no exhaustivo, el Usuario se compromete a no transmitir, difundir o poner a 
                              disposición de terceros informaciones, datos, contenidos, mensajes, gráficos, dibujos, archivos de sonido y/o imagen, fotografías, 
                              grabaciones, software y, en general, cualquier clase de material que: 
                               
                              (I) De cualquier forma sea contrario, menosprecie o atente contra los derechos fundamentales y las libertades públicas 
                              reconocidas constitucionalmente, en los Tratados Internacionales y en el resto de la legislación vigente. 
                               
                              (II) Induzca, incite o promueva actuaciones delictivas, denigratorias, difamatorias, violentas o, en general, contrarias a la ley, a la 
                              moral, a las buenas costumbres generalmente aceptadas o al orden público. 
                               
                              (III) Induzca, incite o promueva actuaciones, actitudes o pensamientos discriminatorios por razón de sexo, raza, religión, 
                              creencias, edad o condición. 
                               
                              (IV) Incorpore, ponga a disposición o permita acceder a productos, elementos, mensajes y/o servicios delictivos, violentos, 
                              ofensivos, nocivos, degradantes o, en general, contrarios a la ley, a la moral y a las buenas costumbres generalmente aceptadas o 
                              al orden público. 
                               
                              (V) Induzca o pueda inducir a un estado inaceptable de ansiedad o temor. 
                               
                              (VI) Induzca o incite a involucrarse en prácticas peligrosas, de riesgo o nocivas para la salud y el equilibrio psíquico. 
                               
                              (VII) Se encuentra protegido por la legislación en materia de protección intelectual o industrial perteneciente a NACHO RUIZ 
                              COMPES o a terceros sin que haya sido autorizado el uso que se pretenda realizar. 
                               
                              (VIII) Sea contrario al honor, a la intimidad personal y familiar o a la propia imagen de las personas. 
                               
                              (IX) Constituya cualquier tipo de publicidad. 
                               
                              (X) Incluya cualquier tipo de virus o programa que impida el normal funcionamiento del Sitio Web. 
                               
                              Si para acceder a algunos de los servicios y/o contenidos del Sitio Web, se le proporcionara una contraseña, se obliga a usarla de 
                              manera diligente, manteniéndola en todo momento en secreto. En consecuencia, será responsable de su adecuada custodia y 
                              confidencialidad, comprometiéndose a no cederla a terceros, de manera temporal o permanente, ni a permitir el acceso a los 
                              mencionados servicios y/o contenidos por parte de personas ajenas. Igualmente, se obliga a notificar a NACHO RUIZ COMPES 
                              cualquier hecho que pueda suponer un uso indebido de su contraseña, como, a título enunciativo, su robo, extravío o el acceso no 
                              autorizado, con el fin de proceder a su inmediata cancelación. En consecuencia, mientras no efectúe la notificación anterior, NACHO 
                              RUIZ COMPES quedará eximido de cualquier responsabilidad que pudiera derivarse del uso indebido de su contraseña, siendo de 
                              su responsabilidad cualquier utilización ilícita de los contenidos y/o servicios del Sitio Web por cualquier tercero ilegítimo. 
                              Si de manera negligente o dolosa incumpliera cualquiera de las obligaciones establecidas en las presentes Condiciones Generales 
                              de Uso, responderá por todos los daños y perjuicios que de dicho incumplimiento pudieran derivarse para NACHO RUIZ COMPES. 
                            </p>
                            <p>
                              
                              5. RESPONSABILIDADES 
                              NACHO RUIZ COMPES no garantiza el acceso continuado, ni la correcta visualización, descarga o utilidad de los elementos e 
                              informaciones contenidas en las páginas, que pueden verse impedidos, dificultados o interrumpidos por factores o circunstancias 
                              que están fuera de su control. 
                              NACHO RUIZ COMPES no se hace responsable de las decisiones que pudieran adoptarse como consecuencia del acceso a los 
                              contenidos o informaciones ofrecidas. 
                              NACHO RUIZ COMPES podrá interrumpir el servicio o resolver de modo inmediato la relación con el Usuario si detecta un uso de su 
                              Sitio Web o de cualquiera de los servicios ofertados en el mismo son contrarios a las presentes Condiciones Generales de Uso. 
                               
                              www.laboralgroup.com | correo@laborallopd.com | Telf: 902 999 551 | Fax: 902 999 553 Página 122 de 154Recomendaciones y Cláusulas
                              11 NACHO RUIZ COMPES
                                
                              NACHO RUIZ COMPES no se hace responsable por daños, perjuicios, pérdidas, reclamaciones o gastos derivados del uso del Sitio 
                              Web. Únicamente será responsable de eliminar, lo antes posible, los contenidos que puedan generar tales perjuicios, siempre que 
                              así se notifique. En especial no será responsable de los perjuicios que se pudieran derivar, entre otros, de: 
                              (I) Interferencias, interrupciones, fallos, omisiones, averías telefónicas, retrasos, bloqueos o desconexiones en el funcionamiento 
                              del sistema electrónico, motivadas por deficiencias, sobrecargas y errores en las líneas y redes de telecomunicaciones, o por 
                              cualquier otra causa ajena al control de NACHO RUIZ COMPES. 
                               
                              (II) Intromisiones ilegítimas mediante el uso de programas malignos de cualquier tipo y a través de cualquier medio de 
                              comunicación, tales como virus informáticos o cualesquiera otros. 
                               
                              (III) Abuso indebido o inadecuado del Sitio Web. 
                               
                              (IV) Errores de seguridad o navegación producidos por un mal funcionamiento del navegador o por el uso de versiones no 
                              actualizadas del mismo. 
                              Los administradores de NACHO RUIZ COMPES se reservan el derecho de retirar, total o parcialmente, cualquier contenido o 
                              información presente en el Sitio Web. 
                              NACHO RUIZ COMPES excluye cualquier responsabilidad por los daños y perjuicios de toda naturaleza que pudieran deberse a la 
                              mala utilización de los servicios de libre disposición y uso por parte de los Usuarios del Sitio Web. Asimismo, NACHO RUIZ COMPES 
                              queda exonerado de cualquier responsabilidad por el contenido e informaciones que puedan ser recibidas como consecuencia de 
                              los formularios de recogida de datos, estando los mismos únicamente para la prestación de los servicios de consultas y dudas. Por 
                              otro lado, en caso de causar daños y perjuicios por un uso ilícito o incorrecto de dichos servicios, podrá ser el usuario reclamado 
                              por NACHO RUIZ COMPES de los daños o perjuicios causados. 
                              Usted defenderá, indemnizará y mantendrá a NACHO RUIZ COMPES indemne frente a cualesquiera daños y perjuicios que se 
                              deriven de reclamaciones, acciones o demandas de terceros como consecuencia de su acceso o uso del Sitio Web. Asimismo, usted 
                              se obliga a indemnizar a NACHO RUIZ COMPES frente a cualesquiera daños y perjuicios, que se deriven del uso por su parte de 
                              “robots”, “spiders”, “crawlers” o herramientas similares empleadas con el fin de recabar o extraer datos o de cualquier otra 
                              actuación por su parte que imponga una carga irrazonable sobre el funcionamiento del Sitio Web. 
                            </p>
                            <p>
                              6. HIPERVÍNCULOS 
                              El usuario se obliga a no reproducir de ningún modo, ni siquiera mediante un hiperenlace o hipervínculo, el Sitio Web de NACHO 
                              RUIZ COMPES así como ninguno de sus contenidos, salvo autorización expresa y por escrito de NACHO RUIZ COMPES. 
                              El Sitio Web de NACHO RUIZ COMPES incluye enlaces a otras sitios Web gestionados por terceros, con objeto de facilitar el acceso 
                              del Usuario a la información de empresas colaboradoras y/o patrocinadoras. Conforme con ello, NACHO RUIZ COMPES no se 
                              responsabiliza del contenido de dichos sitios Web, ni se sitúa en una posición de garante ni/o de parte ofertante de los servicios y/o 
                              información que se puedan ofrecer a terceros a través de los enlaces de terceros. 
                              Se concede al usuario un derecho limitado, revocable y no exclusivo a crear enlaces a la página principal del Sitio Web 
                              exclusivamente para uso privado y no comercial. Los sitios Web que incluyan enlace a nuestro Sitio Web: 
                              (i) no podrán dar a entender que NACHO RUIZ COMPES recomienda ese sitio Web o sus servicios o productos; 
                              (ii) no podrán falsear su relación con NACHO RUIZ COMPES ni afirmar que NACHO RUIZ COMPES ha autorizado tal enlace, ni 
                              incluir marcas, denominaciones, nombres comerciales, logotipos u otros signos distintivos de NACHO RUIZ COMPES; 
                              (iii) no podrán incluir contenidos que puedan considerarse de mal gusto, obscenos, ofensivos, controvertidos, que inciten a la 
                              violencia o la discriminación por razón de sexo, raza o religión, contrarios al orden público o ilícito; 
                              (iv) no podrán enlazar a ninguna página del Sitio Web distinta de la página principal; 
                              (v) deberá enlazar con la propia dirección del Sitio Web, sin permitir que el sitio Web que realice el enlace reproduzca el Sitio Web 
                              como parte de su Web o dentro de uno de sus “frames” o crear un “browser” sobre cualquiera de las páginas del Sitio Web. NACHO 
                              RUIZ COMPES podrá solicitar, en cualquier momento, que elimine cualquier enlace al Sitio Web, después de lo cual deberá 
                              proceder de inmediato a su eliminación. NACHO RUIZ COMPES no puede controlar la información, contenidos, productos o servicios 
                              facilitados por otros sitios Web que tengan establecidos enlaces con destino al Sitio Web. 
                              En consecuencia, NACHO RUIZ COMPES no asume ningún tipo de responsabilidad por cualquier aspecto relativo a tales sitios Web. 
                               
                              www.laboralgroup.com | correo@laborallopd.com | Telf: 902 999 551 | Fax: 902 999 553 Página 123 de 154Recomendaciones y Cláusulas
                              11 NACHO RUIZ COMPES
                            </p> 
                            <p>
                              
                              7. PROTECCIÓN DE DATOS 
                              Para utilizar algunos de los Servicios, los Usuarios deben proporcionar previamente ciertos datos de carácter personal. Para ello, 
                              NACHO RUIZ COMPES tratará automatizadamente los Datos Personales en cumplimiento con la Ley 15/1999 de 13 de diciembre de 
                              Protección de Datos de Carácter Personal y el RD de desarrollo 1720/2007. Para ello, el Usuario puede acceder a la política 
                              seguida en el tratamiento de los datos personales así como el establecimiento de las finalidades previamente establecidas, a lo 
                              dispuesto en las condiciones definidas en la Política de Protección de Datos que presenta el Sitio Web. 
                            </p>     
                            <p>
                              
                              8. COOKIES 
                              NACHO RUIZ COMPES se reserva el derecho de utilizar la tecnología “cookie” en el Sitio Web, a fin de reconocerlo como Usuario 
                              frecuente y personalizar el uso que realice del Sitio Web mediante la preselección de su idioma, o contenidos más deseados o 
                              específicos. Las “cookies” utilizadas por el Sitio Web, o el tercero que actúe en su nombre, se asocian únicamente con un usuario 
                              anónimo y su ordenador, y no proporcionan por sí los datos personales del usuario. 
                              Las cookies son ficheros enviados a un navegador por medio de un servidor Web para registrar la navegación del Usuario en el 
                              Sitio Web, cuando el Usuario permita su recepción. A su vez podrá eliminar las “cookies” para lo cual deberá consultar las 
                              instrucciones de uso de su navegador. 
                              Gracias a las cookies, resulta posible que NACHO RUIZ COMPES reconozca el navegador del ordenador utilizado por el Usuario con 
                              la finalidad de facilitar contenidos y ofrecer las preferencias de navegación u publicitarias que el Usuario, a los perfiles 
                              demográficos de los Usuarios así como para medir las visitas y parámetros del tráfico, controlar el progreso y número de entradas. 
                            </p> 
                            <p>
                              
                              9. DURACIÓN Y TERMINACIÓN 
                              La prestación del servicio del presente Sitio Web y los demás servicios tienen en principio una duración indefinida. No obstante, 
                              NACHO RUIZ COMPES podrá dar por terminada o suspender cualquiera de los servicios del portal. Cuando sea ello posible, NACHO 
                              RUIZ COMPES anunciará la terminación o suspensión de la prestación del servicio determinado. 
                            </p> 
                            <p>
                              
                              10. DECLARACIONES Y GARANTÍAS 
                              En general, los contenidos y servicios ofrecidos en el Sitio Web tienen carácter meramente informativo. Por consiguiente, al 
                              ofrecerlos, NACHO RUIZ COMPES no otorga garantía ni declaración alguna en relación con los contenidos y servicios ofrecidos en 
                              el Sitio Web, incluyendo, a título enunciativo, garantías de licitud, fiabilidad, utilidad, veracidad, exactitud, o comerciabilidad, salvo 
                              en la medida en que por ley no puedan excluirse tales declaraciones y garantías. 
                            </p> 
                            <p>
                              
                              11. FUERZA MAYOR 
                              NACHO RUIZ COMPES no será responsable en todo en caso de imposibilidad de prestar servicio, si ésta se debe a interrupciones 
                              prolongadas del suministro eléctrico, líneas de telecomunicaciones, conflictos sociales, huelgas, rebelión, explosiones, 
                              inundaciones, actos y omisiones del Gobierno, y en general todos los supuestos de fuerza mayor o de caso fortuito. 
                            </p> 
                            <p>
                              
                              12. RESOLUCIÓN DE CONTROVERSIAS. LEY APLICABLE Y JURISDICCIÓN 
                              Las presentes Condiciones Generales, así como el uso del Sitio Web, se regirán por la legislación española. 
                              En el supuesto de que cualquier estipulación de las presentes Condiciones Generales resultara inexigible o nula en virtud de la 
                              legislación aplicable o como consecuencia de una resolución judicial o administrativa, dicha inexigibilidad o nulidad no hará que las 
                              presentes Condiciones Generales resulten inexigibles o nulas en su conjunto. En dichos casos, NACHO RUIZ COMPES procederá a 
                              la modificación o sustitución de dicha estipulación por otra que sea válida y exigible y que, en la medida de lo posible, consiga el 
                              objetivo y pretensión reflejados en la estipulación original.
                            </p> 
                            </div>
                            <label>
                              <input type="checkbox" name="terminos_2" value="SI" required> Autorizo mi datos para fines comerciales
                            </label>
                            <p></p>

                         </div>
                       </div>
                       <button type="submmit" class="btn btn-primary">Enviar</button></center>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>

    

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Nacho Ruiz Compés</h2>
				Corredor de Seguros
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contacta con nosotros</h2>
                    <hr class="primary">
                    <p>Contacta con nosotros y te ofreceremos el seguro que mejor se adapte a tus necesidades</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>653 793 549</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:nachoruizmediacion@gmail.com">nachoruizmediacion@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/creative.min.js"></script>
    <script>
        function valida(e){
            tecla = (document.all) ? e.keyCode : e.which;          
            patron =/^([0-9])*[-]?[0-9]*$/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
        function input_no_required(){
            document.getElementById("name_bene_1").removeAttribute("required");
            document.getElementById("nif_bene_1").removeAttribute("required");
            document.getElementById("date_bene_1").removeAttribute("required");
            document.getElementById("data_bene").setAttribute("style", "display:none"); 
        }
        function input_required(){
            document.getElementById("name_bene_1").setAttribute("required", ""); 
            document.getElementById("nif_bene_1").setAttribute("required", ""); 
            document.getElementById("date_bene_1").setAttribute("required", ""); 
            document.getElementById("data_bene").removeAttribute("style");
        }
        <?php if ($swal): ?>
        swal(
            'Procesado correctamente!',
            'Hacer la transferencia bancaria y enviar el justificante al correo info@nachoruizmediacion.es',
            'success'
        ).then(function () {
            window.location.replace("<?php echo site_url('home/pdf/'.$numero); ?>");
        }, function (dismiss) {
            window.location.replace("<?php echo site_url('home/pdf/'.$numero); ?>");
        });
        <?php endif; ?>
    </script>


</body>

</html>
