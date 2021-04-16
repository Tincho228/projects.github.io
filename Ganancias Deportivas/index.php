<!doctype html>
<html lang="en">

<head>
  <title>Ganancias-deportivas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Comienza a incrementar tus ganancias de forma segura">
  <link rel="stylesheet" href="Css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- Favicon code -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <!--      HEADER         -->
  <div class="wrapper_header">
    <img src="Images/bk_hero_image.jpg" alt="" class="background_img">
    <header>
      <!-- nav -->
      <nav class="navbar_container">
        <ul class="list_nav">
          <li>
            <div>
              <img class="navFace_icon" src="/Images/facebook_icon.png" alt="nav facebook icon">
              <a class="link_nav link_face" target="_blank"
                href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif">Seguinos
                en facebook</a>

            </div>
          </li>
          <li><a class="link_nav link_faq" href="#faq_section">Preguntas frecuentes</a></li>
          <li> <a class="link_nav link_contact" data-toggle="modal" data-target="#exampleModal"
              data-whatever="@getbootstrap">Contacto</a>
          </li>
        </ul>
        <?php include 'contactUs.php';?>
      </nav>
      <img src="Images/Imagen1.png" alt="image of soccer player" class="player animate__animated animate__fadeIn">
      <img src="Images/billetes.png" alt="billetes" class="billetes">
      <div class="hero_title">
        <div class="separador">&nbsp;</div>
        <!-- title -->
        <div class="bienvenido">
          <h1 class="bienvenidoA animate__animated animate__fadeInUp">Bienvenido</h1>
          <h1 class="blog animate__animated animate__fadeInUp"><span class="small">al</span> BLOG <span
              class="small">de</span></h1>
          <h1 class="blog animate__animated animate__fadeInUp">Ganancias</h1>
          <h1 class="small animate__animated animate__fadeInUp">Argentina</h1>
          <!-- button invitation -->
          <a class="boton_empeza animate__animated animate__fadeInRight" data-toggle="modal"
            data-target="#link-referido">Empezá ahora</a>
            
         </div> 
        </div> 
      </header> 
      <?php include 'linkReferido.php';?>
    </div> 
          <!-- MAIN -->
          <div class="wrapper_main">
            <main>
              <!-- CAROUSEL -->
              <div class="wrapper_carousel">
                <div class="container_carousel">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="Images/bitcoin.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="Images/carousel2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="Images/carousel3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- VIDEO BLOCK -->
              <div class="wrapper_funciona">
                <div class="container1">
                  <div class="box_texto">
                    <img class="logo_gd" src="/Images/logoGrande.png" alt="">
                    <h2>Llegaste al lugar correcto!!</h2>
                    <p>No permitas que tu dinero se devalúe. Invertí comprando en Euros y obtené un 20 porciento de
                      ganancias
                      asegurada.<br>
                      Sumáte a esta increíble empresa con miles de usuarios y convertite en inversor desde la comodidad
                      de tu
                      casa.<br>
                      Mirá el video express de presentación e informáte con <br>nosotros.
                    </p>
                  </div>
                  <div class="box_video">
                    <img class="placeholder" src="Images/placeholder.jpg" alt="placeholder">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/jTR98AtCrnA"
                        allowfullscreen></iframe>
                    </div>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
                      data-whatever="@getbootstrap">Hacé tu consulta aqui.</button>
                  </div>
                </div>
              </div>
              <!-- PASOS BLOCK-->
              <div class="wrapper_paso1">
                <div class="pasoUnoTitle_box">
                  <h2 class="pasoUno_title">Solo tenés que seguir estos simples pasos… </h2>
                </div>
                <!-- Card section -->
                <section class="tarjetas">
                  <div class="tarjeta_paso">
                    <h2 class="tarjeta_title">PASO 1</h2>
                    <h2 class="tarjeta_bodycopy">Registráte en la plataforma</h2>
                    <a class="boton_registrate text-light" data-toggle="modal" data-target="#link-referido">Empecemos</a>
                  </div>
                  <div class="tarjeta_paso">
                    <h2 class="tarjeta_title">PASO 2</h2>
                    <h2 class="tarjeta_bodycopy">Creá una cuenta en tu billetera virtual</h2>
                  </div>
                  <div class="tarjeta_paso">
                    <h2 class="tarjeta_title">PASO 3</h2>
                    <h2 class="tarjeta_bodycopy">Comprá tu centro de negocio y paquetes</h2>
                  </div>
                </section>
                <!-- Faq section -->
                <div class="faq_titleBox" id="faq_section">
                  <img src="/Images/signo_pregunta.png" alt="question icon" class="question_icon">
                  <h2 class="faq_title">Preguntas frecuentes</h2>
                </div>
                <section class="faq_container">
                  <div class="left_column">
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                              aria-controls="collapseOne">
                              Que es una billetera virtual? Es gratuita?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Una <span>billetera virtual</span> es un medio por el cual se puede guardar,
                              enviar y recibir cualquier moneda o datos. Realizar la cuenta es totalmente gratuito y una
                              manera
                              segura de guardar fondos.
                              Elegi la que mas te guste, te mostramos las mas importantes.
                            </p>
                            <div class="wallets_box">
                              <a href="https://buenbit.com/" target="_blank"><img src="/Images/buenbit.png"
                                  alt="billetera buenbit"></a>
                              <a href="https://www.ripio.com/ar/" target="_blank"><img src="/Images/ripio.png"
                                  alt="billetera ripio"></a>
                              <a href="https://argenbtc.com/" target="_blank"><img src="/Images/argenbtc.png"
                                  alt="billetera argenbtc"></a>
                              <a href="https://www.coinbase.com/es/" target="_blank"><img src="/Images/coinbase.png"
                                  alt="billetera Exterior"></a>
                            </div>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                              aria-controls="collapseTwo">
                              Como puedo ver mis ganancias?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Solo tenés que ingresar en la <span>pagina WEB </span>de la plataforma desde la compu o
                              tu
                              celular con tu usuario y contraseña.
                              Disponible todos los dias, las 24 horas.
                            </p>
                            <img class="faq_cellphone" src="/Images/cell_phone.jpg" alt="web movil">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTwo"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                              aria-controls="collapseThree">
                              Mi dinero esta seguro? Cuándo lo puedo retirar y cómo?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>EL dia 5 y el 20 de cada mes estan habilitados para realizar retiros. Todo se realiza de
                              forma
                              online, sin necesidad de moverte
                              de tu casa.
                              Los retiros son recibidos en la billetera virtual de tu elección, con tu usuario y
                              contraseña.
                              Para recibir tutoriales con ejemplos de retiro o si tenes preguntas, no dudes en
                              consultarnos.</p>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseThree"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFour">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              O sea que no tengo que hacer nada para ganar el 20%?
                            </button>
                          </h2>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Exacto!! Tus ganancias dependen del tiempo y la cantidad del paquete que inviertas.</p>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFour"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFive">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                              aria-controls="collapseFive">
                              Si la empresa no gana dinero, yo también pierdo?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Quedate tranquilo por dos razones:<br>
                              1- Por declaracion privada de la empresa, la misma se compromete al pago diario
                              acumulativo del
                              interés. No perdés un centavo.<br>
                              2- Los balances mensuales de la empresa durante los dos años han sido en promedio del 60%.
                            </p>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFive"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSix">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseSix" aria-expanded="true"
                              aria-controls="collapseSix">
                              Hay algún beneficio además del 20%?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <p>El 20% es solo el comienzo! Además de poder triplicar tu inversion en 6 meses, podes
                              ganar
                              intereses adicionales
                              de mas del 6 porciento por invitar personas al negocio. Tenes premios por nivel y
                              organizacion.
                            </p>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseSix"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="right_column">
                    <div class="accordion" id="accordionExample2">
                      <div class="card">
                        <div class="card-header" id="headingSeven">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true"
                              aria-controls="collapseSeven">
                              No se nada de tecnología, me pueden ayudar con esto?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                          data-parent="#accordionExample2">
                          <div class="card-body">
                            <p>No dudes en contactarnos para ayudarte en lo que necesites. Contactanos por mensaje
                              privado,
                              whatsapp, o mail.
                              Actualmente estamos ayudando a muchas personas a que no pierdan su dinero con la
                              devaluacion.
                              Siempre hay manera de darle curso a tus ganancias. Tu patrocinador estará para ayudarte a
                              entender
                              el negocio y
                              tambien a asegurar tu dinero.
                            </p>
                            <div class="faq_socialHelp">
                              <div>
                                <a href="mailto:consultas@ganancias-deportivas.com.ar"><img src="/Images/mail_icon.png"
                                    alt=""></a>
                              </div>
                              <div>
                                <a href="https://api.whatsapp.com/send?phone=542604375615" target="_blank">
                                  <img src="Images/whatsapp_icon.png" alt="whatsapp contact">
                                </a>
                              </div>
                              <div>
                                <a href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif"
                                  target="_blank">
                                  <img src="Images/facebook_icon.png" alt="facebook contact">
                                </a>
                              </div>
                            </div>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseSeven"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingEight">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseEight" aria-expanded="true"
                              aria-controls="collapseEight">
                              Que hace la empresa con el dinero?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                          data-parent="#accordionExample2">
                          <div class="card-body">
                            Realiza apuestas deportivas bajo las direccion de un equipo propio de expertos analistas,
                            ese impecable labor viene generando resultados elevados desde hace años, con ello se
                            garantiza la
                            sostenibilidad del negocio.
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseEight"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingNine">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseNine" aria-expanded="true"
                              aria-controls="collapseNine">
                              Donde esta ubicada la empresa?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                          data-parent="#accordionExample2">
                          <div class="card-body">
                            <p>La empresa es Europea. Legalmente se encuentra acentada en Costa Rica. Actualmente cuenta
                              con
                              tres presidentes fundadores:</p>
                            <p class="p_center">
                              CEO de Ganancias Deportivas<br>
                              <strong>Miguel Rodríguez Acosta</strong><br>

                              Global Master<br>
                              <strong>Gino Ferruggiaro</strong><br>

                              Distribuidor<br>
                              <strong>Antonio Manuel Buendía</strong>
                            </p>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseNine"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTen">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                              Cuanta plata en pesos $$$ necesito para empezar?
                            </button>
                          </h2>
                        </div>

                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen"
                          data-parent="#accordionExample2">
                          <div class="card-body">
                            <p>
                              Esta respuesta cambia todos los dias junto con el valor de nuestra moneda. Ultimamente la
                              inversion inicial ha ido subiendo.
                              Te pedimos que nos contactes y te ayudamos con una simulacion de dinero.
                            </p>
                            <div class="faq_socialHelp">
                              <div>
                                <a href="mailto:consultas@ganancias-deportivas.com.ar"><img src="/Images/mail_icon.png"
                                    alt=""></a>
                              </div>
                              <div>
                                <a href="https://api.whatsapp.com/send?phone=542604375615" target="_blank">
                                  <img src="Images/whatsapp_icon.png" alt="whatsapp contact">
                                </a>
                              </div>
                              <div>
                                <a href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif"
                                  target="_blank">
                                  <img src="Images/facebook_icon.png" alt="facebook contact">
                                </a>
                              </div>
                            </div>
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTen"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingEleven">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true"
                              aria-controls="collapseEleven">
                              Tengo que trabajar o vender algo?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
                          data-parent="#accordionExample2">
                          <div class="card-body">
                            <p>
                              La respuesta en NO.
                            </p>
                            <img src="/Images/no_image.png" alt="imagen de no">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseEleven"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwelve">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true"
                              aria-controls="collapseTwelve">
                              Se pagan impuestos del gobierno? Es legal?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve"
                          data-parent="#accordionExample2">
                          <div class="card-body">
                            <p>
                              No existen regulaciones en nuestro pais sobre la compra/venta de BITCOIN a traves de tu
                              billetera
                              virtual.
                            </p>
                            <img src="/Images/no_image.png" alt="imagen de no">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTwelve"
                              aria-expanded="false" aria-controls="collapseExample">
                              Cerrar
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Join section -->
                <section class="wrapper_moreInfo">
                  <div class="section_moreInfo">
                    <div class="moreInfo_title_box">
                      <img src="/Images/Logo Favicon.png" alt="logo de GD">
                      <h2 class="moreInfo_title">Unite a nuestros grupos de informacion</h2>
                    </div>
                    <div class="moreInfo_bodyContainer">
                      <div class="moreInfo_leftColumn">
                        <img class="logo_zoom" src="/Images/zoom_logo.png" alt="zoom">
                        <img class="flag_image" src="/Images/flags_icon.png" alt="flags">
                      </div>
                      <div class="moreInfo_rightColumn">
                        <ul class="rightColumn_text">
                          <li>contacto@ganancias-argentinas.com.ar</li>
                          <li>Beneficios Adicionales.</li>
                          <li>Salas de Zoom internacionales.</li>
                          <li>Información las 24 horas.</li>
                          <li>Grupos Sociales en Facebook y WhatsApp.</li>
                          <li>Transparencia.</li>
                        </ul>
                        <div class="rightColumn_socialmedia">
                          <div class="">
                            <a href="mailto:consultas@ganancias-deportivas.com.ar"><img src="/Images/mail_orange.png"
                                alt=""></a>
                          </div>
                          <div class="">
                            <a href="https://api.whatsapp.com/send?phone=542604375615" target="_blank">
                              <img src="Images/whatsapp_orange.png" alt="whatsapp contact">
                            </a>
                          </div>
                          <div class="">
                            <a href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif"
                              target="_blank">
                              <img src="Images/facebook_orange.png" alt="facebook contact">
                            </a>
                          </div>
                          <div class="">
                            <a href="https://t.me/BLOGdeGANANCIASeINVERSIONES" target="_blank">
                              <img src="Images/telegram_orange.png" alt="telegram_icon contact">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </main>
          </div>
          <!--      FOOTER         -->
          <footer>
            <div class="background_footer">
              <div class="wrapper_footer">
                <!-- title -->
                <div class="footerHeader_container">
                  <div class="headerTitle_box">
                    <h1>
                      <span class="headerTitle_size">Deja</span> que<br>
                      tus <span class="headerTitle_size">Ganancias</span> escalen por vos
                    </h1>

                  </div>
                  <div class="headerSeparator_box">&nbsp;</div>
                </div>
                <!-- button -->
                <a class="boton_footer text-light" data-toggle="modal" data-target="#link-referido">Empezá ahora</a>
                <!-- logo -->
                <div class="logoTitle_box">
                  <img src="/Images/Logo Favicon.png" alt="logo de GD">
                  <h2 class="logoTitle">Blog de Ganancias Argentina</h2>
                </div>
                <!-- mail contact -->
                <a class="footerMail_link"
                  href="mailto:consultas@ganancias-deportivas.com.ar">consultas@ganancias-deportivas.com.ar</a>
                <!-- copyright -->
                <p class="footerCopyright">&copy;2020copyright | Todos los derechos reservados </p>
              </div>
            </div>
          </footer>
          <!--      FLOAT BUTTONS         -->
          <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=542604375615" target="_blank">
              <img src="Images/whatsapp_icon.png" alt="whatsapp contact">
            </a>
          </div>
          <div class="btn-facebook">
            <a href="https://www.facebook.com/BLOG-De-Ganancias-Argentina-103371018178827/?modal=admin_todo_tour&notif_id=1599607581917840&notif_t=page_invite&ref=notif"
              target="_blank">
              <img src="Images/facebook_icon.png" alt="facebook contact">
            </a>
          </div>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
          </script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
          </script>
          <script src="Js/main.js"></script>
</body>

</html>