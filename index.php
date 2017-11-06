<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sudco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:800" rel="stylesheet">
    <link rel="stylesheet" href="styles/landing-style.min.css">
    <link rel="stylesheet" href="styles/menuIconStyle.css">
    <link rel="stylesheet" href="styles/menu-style.min.css">
    <link rel="stylesheet" href="styles/scrollAnimationIcon.css">
    <style type="text/css">
      h2 {
          color: white;
          font-family: 'Monaco';
          font-size: 14px;
          font-style: normal;
          font-weight: 300;
          line-height: 1.5;
          text-decoration: none;
          text-transform: none;
      }
      .typed-cursor {
        opacity: 1;
        -webkit-animation: blink 0.5s infinite;
        -moz-animation: blink 0.5s infinite;
        animation: blink 0.5s infinite;
      }
      @keyframes blink {
          0% { opacity: 1; }
          50% { opacity: 0; }
          100% { opacity: 1; }
      }
      @-webkit-keyframes blink {
          0% { opacity: 1; }
          50% { opacity: 0; }
          100% { opacity: 1; }
      }
      @-moz-keyframes blink {
          0% { opacity: 1; }
          50% { opacity: 0; }
          100% { opacity: 1; }
      }
      .auto-type-element span.block {
          background: black !important;
          padding: 10px;
          z-index: 1;
          position: absolute;
          top: 50%;
          left: 30%;
          transform: translate(-50%,-50%);

      }
  		.write{
  			font-size: 14px;
  		}
  		.container{
  			text-align: center;
  		}
  	</style>
  </head>
  <body>
    <!-- MENU CONTAINER -->
    <div class="menuContainer">

    </div>

    <!-- LEFT MENU ICON CONTAINER  -->
    <div class="menu">
      <div id="target" class="menu-container one">
        <div class="bars"><span></span><span></span><span></span>
          <div class="other-bar"></div>
        </div>
      </div>
    </div>

    <!-- TOP BAR WITH SUDCO LOGO -->
    <div class="header ">
      <img id="sudcoHeader"src="Logo-03.png" alt="">
    </div>

    <!-- RIGHT BAR WITH SOCIAL NETWORKS -->
    <div class="redes">
      <!-- FACEBOOK -->
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="13" viewBox="0 0 6.24 13">
              <title>facebook</title>
              <path d="M1.59,13V6.9H0V4.71H1.59V2.83A2.77,2.77,0,0,1,4.7,0,13,13,0,0,1,6.23.09L6.17,2.14H4.79c-.78,0-.91.36-.91,1v1.6H6.24l-.1,2.2H3.88V13Z"></path>
            </svg></a>
      <br>
      <!-- INSTAGRAM -->
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13.39 13.39">
								<title>instagram</title>
								<path d="M13.35,9.45A4.91,4.91,0,0,1,13,11.08a3.42,3.42,0,0,1-2,2,4.91,4.91,0,0,1-1.62.31c-.71,0-.94,0-2.76,0s-2,0-2.76,0A4.91,4.91,0,0,1,2.31,13a3.28,3.28,0,0,1-1.19-.77,3.28,3.28,0,0,1-.77-1.19A4.91,4.91,0,0,1,0,9.45c0-.71,0-.94,0-2.76s0-2,0-2.76A4.91,4.91,0,0,1,.35,2.31a3.28,3.28,0,0,1,.77-1.19A3.28,3.28,0,0,1,2.31.35,4.91,4.91,0,0,1,3.93,0c.71,0,.94,0,2.76,0s2,0,2.76,0a4.91,4.91,0,0,1,1.62.31,3.28,3.28,0,0,1,1.19.77A3.28,3.28,0,0,1,13,2.31a4.91,4.91,0,0,1,.31,1.62c0,.71,0,.94,0,2.76S13.38,8.74,13.35,9.45ZM12.14,4a3.7,3.7,0,0,0-.23-1.24,2.07,2.07,0,0,0-.5-.77,2.07,2.07,0,0,0-.77-.5A3.7,3.7,0,0,0,9.4,1.24c-.71,0-.92,0-2.7,0s-2,0-2.7,0a3.7,3.7,0,0,0-1.24.23A2.07,2.07,0,0,0,2,2a2.08,2.08,0,0,0-.5.77A3.7,3.7,0,0,0,1.25,4c0,.71,0,.92,0,2.7s0,2,0,2.7a3.7,3.7,0,0,0,.23,1.24,2.08,2.08,0,0,0,.5.77,2.07,2.07,0,0,0,.77.5A3.7,3.7,0,0,0,4,12.14c.71,0,.92,0,2.7,0s2,0,2.7,0a3.7,3.7,0,0,0,1.24-.23,2.22,2.22,0,0,0,1.27-1.27,3.7,3.7,0,0,0,.23-1.24c0-.71,0-.92,0-2.7S12.17,4.69,12.14,4Zm-1.88-.06a.8.8,0,1,1,.8-.8A.8.8,0,0,1,10.27,3.92ZM6.69,10.13a3.44,3.44,0,1,1,3.44-3.44A3.44,3.44,0,0,1,6.69,10.13Zm0-5.67A2.23,2.23,0,1,0,8.92,6.69,2.23,2.23,0,0,0,6.69,4.46Z"></path>
							</svg></a>
      <br>
      <!-- TWITTER -->
      <a href="#">
                  <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13.17 10.6">
                    <title>twitter</title>
                    <path class="cls-1" d="M13.17,1.26a5.43,5.43,0,0,1-1.55.42A2.69,2.69,0,0,0,12.81.2a5.45,5.45,0,0,1-1.72.65A2.71,2.71,0,0,0,6.42,2.68a2.66,2.66,0,0,0,.07.61A7.7,7.7,0,0,1,.92.49a2.66,2.66,0,0,0,.84,3.57A2.72,2.72,0,0,1,.53,3.73v0A2.69,2.69,0,0,0,2.7,6.39a2.73,2.73,0,0,1-1.22,0A2.7,2.7,0,0,0,4,8.29,5.45,5.45,0,0,1,.64,9.44,5.53,5.53,0,0,1,0,9.4a7.7,7.7,0,0,0,4.14,1.2A7.6,7.6,0,0,0,11.83,3q0-.17,0-.35A5.46,5.46,0,0,0,13.17,1.26Z"></path>
                  </svg>
                  </i>
                </a>
    </div>

    <!-- BOTTOM BAR -->
    <div class="bottom">
      <a href="#" class="scroll-icon"></a>
    </div>

    <!-- YELLOW BAR AND HELLO.IMG CONTAINER -->
    <div class="container2">
      <div id="contenido" class="textContent">
        <!-- <h2>Sud Co</h2>
        <p>Somos un galpón creativo, lleno de ideas, que ofrece soluciones en comunicación digital, marketing e innovación.</p> -->
        <div class="working">
          <h3>Estamos trabajando en nuestra web para mostrarte muy pronto todos los servicios y trabajos realizados</h3>
          <p>En sud diseñamos y desarrollamos:</p>
        </div>

        <div class="container auto-type-element">
        	<h2><span class=" block"><span class="write"></span></span></h2>
        </div>
      </div>
      <img class="textoHola" src="HE LLO.png" alt="">
      <div class="yellowBar barraAmarilla"></div>
    </div>

    <!-- CONTAINER FOR THE MAIN CONTENT OF THE PAGE -->
    <div class="infoContainer">

    </div>

    <!-- TRIGGER FOR HEADER'S YELLOW BAR / TEXT / PARAGRAPH / -->
    <div class="animationTrigger animacionBarra"></div>

    <!-- call to JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <!-- call to library for controlling GIF animation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <!-- call to typed library -->
	  <script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
    <!-- call to controller script -->
    <script type="text/javascript"  src="animationControllerIndex.js"></script>
    <!-- MENU SCRIPT -->
    <script type="text/javascript" src="menuController.js"></script>
    <script type="text/javascript">
    	$(function(){
        $(".write").typed({
          contentType:"html",
          shuffle: false,
          loop:true,
          loopCount:0,
          typeSpeed:100,
          backSpeed:50,
          startDelay:1000,
          backDelay:800,
          showCursor:true,
          cursorChar:"_",
          strings:["Sitios Web 100% Responsive","APPs Mobiles","Construimos Marcas", "Hacemos Marketing", "Y te ayudamos a lanzarte y recorrer juntos el mundo digital",""]
        });
      });
    </script>
  </body>
</html>
