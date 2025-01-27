<!DOCTYPE html>
<!-- saved from url=(0033)https://the-gentleman.reservy.es/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <title>Haz tu reserva con The Gentleman by Toni - Barbershop en Barcelona</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="https://the-gentleman.reservy.es/assets/favicon.ico">
    <link rel="alternate" hreflang="x-default" href="https://the-gentleman.reservy.es/">
              <link rel="alternate" hreflang="en" href="https://the-gentleman.reservy.es/en/">
                   <link rel="alternate" hreflang="es" href="https://the-gentleman.reservy.es/">
                   <link rel="alternate" hreflang="ca" href="https://the-gentleman.reservy.es/ca/">
             <style>
     .loader{
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		width: 100%;
		height: 100%;
		display:flex;
		align-items:center;
		justify-content:center;
		flex-direction: column;
		flex-wrap: wrap;
		transition:ease 0.7s;
		-webkit-transition:ease 0.7s;
	}

     #pageLoader.loader{
          position:fixed;
		left:0px;
		top: 0px;
		z-index: 999999999;
		background:#000000;
     }

     #page_holder .loader{
          background:#ffffff;
          position:relative;
          z-index: 10;
     }

     .loader .spinner{
		width: 40px;
		height: 40px;
		background-color:;
		margin: 100px auto;
		-webkit-animation: loader 1.2s infinite ease-in-out;
		animation: loader 1.2s infinite ease-in-out;
	}
     #pageLoader.loader .spinner{
          background-color:#ffffff;
     }
     #page_holder .loader .spinner{
          background-color:#212121;
     }
	@-webkit-keyframes loader {
		0% { -webkit-transform: perspective(120px) }
		50% { -webkit-transform: perspective(120px) rotateY(180deg) }
		100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
	}
	@keyframes loader {
		0% { 
			transform: perspective(120px) rotateX(0deg) rotateY(0deg);
			-webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg) 
		} 50% { 
			transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
			-webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg) 
		} 100% { 
			transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
			-webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
		}
	}

     #generalMessage{
		display:none;
		background:#fff;
		padding:30px;
		font-family:Arial,Tahoma,sans-serif;
		color:#000;
		font-size:16px;
          z-index:999999999;
          position:fixed;
          top:0;
          left:0;
          width:100%;
          height:100vh;
          flex-direction:column;
          align-items:center;
          justify-content:center;
	}
	#generalMessage img{
		max-width:180px;
	}
	#generalMessage .message{
		display:inline-block;
		margin-top:30px;
	}
     .our-price-box.template{
          display:none;
     }
     #employees.closed .our-price-text h2:before{
          content:"BARBERO: ";
     }
     </style>
          <link rel="stylesheet" href="./Toni_Barbershop_David_Encina_Martinez_files/style.css" type="text/css">
          <!--[if IE]>
      <script src="/forms/1/js/html5.js"></script>
     <![endif]-->
     <!-------------------------------------- My Scriptsheet -------------------------------------->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript" src="js/scriptsheet.js"></script>
     <!-------------------------------------------------------------------------------------------->
     <!-------------------------------------- My Stylesheet --------------------------------------->
      <link rel="stylesheet" href="css/stylesheet.css" type="text/css"></style>
      <link rel="stylesheet" href="css/toni_barbershop_stylesheet.css" type="text/css"></style>
     <!-------------------------------------------------------------------------------------------->
</head>
<body cz-shortcut-listen="true" style="background-image: url(&quot;https://the-gentleman.reservy.es/assets/page_background.jpg&quot;);">
<div id="pageLoader" class="loader" style="display: none;"><div class="spinner"></div></div>
<div id="generalMessage"><img src="./Toni_Barbershop_David_Encina_Martinez_files/info.svg"><div class="message"></div></div>
<nav style="padding-top: 130px;">
 <a href="javascript:newReservation();" class="new_reservation current">New Booking</a>
  </nav>
<div id="navBackground"></div>
<header>
 <img src="./Toni_Barbershop_David_Encina_Martinez_files/header_logo.png" alt="The Gentleman by Toni">
 <span id="navButton">
  <span></span>
  <span></span>
  <span></span>
 </span>
  <div class="languages">
  <div class="lang-icon" style="background-image:url(https://the-gentleman.reservy.es/default/images/lang_en.png);" title="EN"></div>
  <ul>
              <li><a class="lang-icon" href="https://the-gentleman.reservy.es/es/" data-lang="es" style="background-image:url(https://the-gentleman.reservy.es/default/images/lang_es.png);" title="ES"></a></li>
                   <li><a class="lang-icon" href="https://the-gentleman.reservy.es/ca/" data-lang="ca" style="background-image:url(https://the-gentleman.reservy.es/default/images/lang_ca.png);" title="CA"></a></li>
           </ul>
 </div>
 </header>
<div id="page">
 <div id="headerSpacer" style="height: 130px;"></div>
 <section id="appointment" class="container make-appointment" style="padding-bottom: 70px;">
         <div class="row">
                            <h1 class="heading-title">New Booking</h1>
              <div class="appointment-header">
                   <div class="appointment-cell prev">
                     <div style="display: none;"></div>
                   </div>
                   <div class="appointment-cell tab-1 current">
                        <div class="appointment-inner" id="tab1">
                             <span>01</span>
                             <p>Choose Service(s)</p>
                        </div>
                   </div>
                   <div class="appointment-cell tab-2">
                        <div class="appointment-inner" id="tab2">
                             <span>02</span>
                             <p>Choose Date and Time</p>
                        </div>
                   </div>
                   <div class="appointment-cell tab-3">
                        <div class="appointment-inner" id="tab3">
                             <span>03</span>
                             <p>Client Data</p>
                        </div>
                   </div>
                   <div class="appointment-cell tab-4">
                        <div class="appointment-inner" id="tab4">
                             <span>04</span>
                             <p>Confirmation</p>
                        </div>
                   </div>
                   <div class="appointment-cell next">
                     <div style="display: none;"></div>
                   </div>
              </div>
              <div id="tab-1" class="appointment-form tab-content2 current clearfix">
                   <div class="appointment-form-wrapper clearfix ">
                        <div id="" class="our-price-box template">
                         <div class="selected"></div>
                          <div class="our-price-box-inner clearfix">
                           <div class="our-price-box-left">
                            <div class="our-price-ic"></div>
                            <div class="our-price-text">
                             <h2></h2>
                             <p><span class="description"></span><br> <i class="duration_holder"><span class="duration"></span> Minutes</i></p>
                             <b class="more">Select</b>
                            </div>
                           </div>
                                                      <div class="our-price-box-right">
                            <div class="table">
                             <div class="table-cell">
                              <div class="start-price">
                               <span>for</span>
                               <b>€ <span class="price"></span></b>
                              </div>
                             </div>
                            </div>
                           </div>
                                                     </div>
                         </div>
                   <div class="our-price-box" id="product61">
                         <div class="selected"></div>
                          <div class="our-price-box-inner clearfix">
                           <div class="our-price-box-left" style="height: 144px;">
                            <div class="our-price-ic"><img src="./Toni_Barbershop_David_Encina_Martinez_files/price-ic1.png" alt="Cambio de Estilo"></div>
                            <div class="our-price-text">
                             <h2>Cambio de Estilo</h2>
                             <p><span class="description"></span><br> <i class="duration_holder"><span class="duration">30</span> Minutes</i></p>
                             <b class="more">Select</b>
                            </div>
                           </div>
                                                      <div class="our-price-box-right">
                            <div class="table">
                             <div class="table-cell">
                              <div class="start-price">
                               <span>for</span>
                               <b>€ <span class="price">18.00</span></b>
                              </div>
                             </div>
                            </div>
                           </div>
                                                     </div>
                         </div><div class="our-price-box" id="product1">
                         <div class="selected"></div>
                          <div class="our-price-box-inner clearfix">
                           <div class="our-price-box-left" style="height: 144px;">
                            <div class="our-price-ic"><img src="./Toni_Barbershop_David_Encina_Martinez_files/price-ic1.png" alt="Corte Cabello"></div>
                            <div class="our-price-text">
                             <h2>Corte Cabello</h2>
                             <p><span class="description">Lavado, Corte y Peinado</span><br> <i class="duration_holder"><span class="duration">30</span> Minutes</i></p>
                             <b class="more">Select</b>
                            </div>
                           </div>
                                                      <div class="our-price-box-right">
                            <div class="table">
                             <div class="table-cell">
                              <div class="start-price">
                               <span>for</span>
                               <b>€ <span class="price">15.00</span></b>
                              </div>
                             </div>
                            </div>
                           </div>
                                                     </div>
                         </div><div class="our-price-box" id="product4">
                         <div class="selected"></div>
                          <div class="our-price-box-inner clearfix">
                           <div class="our-price-box-left" style="height: 144px;">
                            <div class="our-price-ic"><img src="./Toni_Barbershop_David_Encina_Martinez_files/price-ic8.png" alt="Corte Cabello + Spa Capilar"></div>
                            <div class="our-price-text">
                             <h2>Corte Cabello + Spa Capilar</h2>
                             <p><span class="description">Lavado + Masaje Capilar, Corte y Peinado</span><br> <i class="duration_holder"><span class="duration">35</span> Minutes</i></p>
                             <b class="more">Select</b>
                            </div>
                           </div>
                                                      <div class="our-price-box-right">
                            <div class="table">
                             <div class="table-cell">
                              <div class="start-price">
                               <span>for</span>
                               <b>€ <span class="price">17.00</span></b>
                              </div>
                             </div>
                            </div>
                           </div>
                                                     </div>
                         </div><div class="our-price-box" id="product3">
                         <div class="selected"></div>
                          <div class="our-price-box-inner clearfix">
                           <div class="our-price-box-left" style="height: 144px;">
                            <div class="our-price-ic"><img src="./Toni_Barbershop_David_Encina_Martinez_files/price-ic5.png" alt="Afeitado Clasico"></div>
                            <div class="our-price-text">
                             <h2>Afeitado Clasico</h2>
                             <p><span class="description">Navaja, Jabón, Aceite y Toalla</span><br> <i class="duration_holder"><span class="duration">30</span> Minutes</i></p>
                             <b class="more">Select</b>
                            </div>
                           </div>
                                                      <div class="our-price-box-right">
                            <div class="table">
                             <div class="table-cell">
                              <div class="start-price">
                               <span>for</span>
                               <b>€ <span class="price">16.00</span></b>
                              </div>
                             </div>
                            </div>
                           </div>
                                                     </div>
                         </div><div class="our-price-box" id="product2">
                         <div class="selected"></div>
                          <div class="our-price-box-inner clearfix">
                           <div class="our-price-box-left" style="height: 144px;">
                            <div class="our-price-ic"><img src="./Toni_Barbershop_David_Encina_Martinez_files/price-ic2.png" alt="Arreglo Barba"></div>
                            <div class="our-price-text">
                             <h2>Arreglo Barba</h2>
                             <p><span class="description">Perfilado, Afeitado de Contornos y Toalla</span><br> <i class="duration_holder"><span class="duration">30</span> Minutes</i></p>
                             <b class="more">Select</b>
                            </div>
                           </div>
                                                      <div class="our-price-box-right">
                            <div class="table">
                             <div class="table-cell">
                              <div class="start-price">
                               <span>for</span>
                               <b>€ <span class="price">12.00</span></b>
                              </div>
                             </div>
                            </div>
                           </div>
                                                     </div>
                         </div></div>
              </div>
              <div id="tab-2" class="appointment-form tab-content2 clearfix">
                                <div id="employees"></div>
                                <div id="calendar">
                 <div class="calendar_holder"></div>
                 <div id="legend"><div><span class="available"></span> <strong>Available</strong></div><div><span class="unavailable"></span> <strong>Not Available</strong></div></div>
                </div>
                <div id="hours"></div>               
              </div>
              <div id="tab-3" class="appointment-form tab-content2 clearfix">
               <div id="loginForm">
                   <p class="title current">Do you have an account?</p>
                   <div class="hr"><span></span></div>
                   <form action="https://the-gentleman.reservy.es/" method="post" class="appointment-form-wrapper clearfix">
                        <div class="form-field">
                             <label>E-mail</label>
                             <input type="email" name="username" value="">
                        </div>
                        <div class="form-field">
                             <label>Password</label>
                             <input type="password" name="password" value="">
                             <a class="passwordForgotten">I have forgotten my password</a>
                        </div>
                        <div class="form-field">
                             <label class="checkbox"><input type="checkbox" name="permanent_session" value="1"> <span>Stay logged in on this device</span></label>
                        </div>
                        <div class="form-field submit-field">
                             <input type="submit" name="login" value="Log in">
                        </div>
                   </form>
               </div>
               <div id="passwordForgottenForm">
                   <p class="title noIcon">I have forgotten my password</p>
                   <div class="hr"><span></span></div>
                   <p>Please enter your e-mail address and confirm that you like to receive an e-mail containing a link to change your password.</p>
                   <form action="https://the-gentleman.reservy.es/" method="post" class="appointment-form-wrapper clearfix">
                        <div class="form-field">
                             <label>E-mail</label>
                             <input type="email" name="username" value="">
                        </div>
                        <div class="form-field">
                             <input type="submit" name="newPassword" value="Request password">
                        </div>
                   </form>
                   <div class="loading"></div>
               </div>
               <div id="guestForm">
                   <p class="title">Continue without account</p>
                   <div class="hr"><span></span></div>
                   <form action="https://the-gentleman.reservy.es/" method="post" class="appointment-form-wrapper clearfix">
                        <div class="form-field">
                             <label>First name</label>
                             <input type="text" name="firstname" value="">
                        </div>
                        <div class="form-field">
                             <label>Last Name</label>
                             <input type="text" name="lastname" value="">
                        </div>
                        <div class="form-field">
                             <label>E-mail</label>
                             <input type="email" name="username" value="">
                        </div>
                        <div class="form-field">
                             <label>Phone Number</label>
                             <input type="phone" name="phone" value="">
                        </div>
                        <p>Create an account to save time in the future (optional):</p>
                        <div class="form-field">
                             <label>Password</label>
                             <input type="password" name="password" value="">
                             <span class="explanation">At least 8 characters, with upper and lower case and numbers</span>
                        </div>
                        <div class="form-field">
                             <label>Repeat password</label>
                             <input type="password" name="password2" value="">
                        </div>
                        <div class="form-field">
                                                          <label class="checkbox"><input type="checkbox" name="newsletter" value="1"> <span>I'd like to receive offers and news from The Gentleman by Toni via e-mail.</span></label>
                                                     </div>
                        <div class="form-field submit-field">
                             <input type="submit" name="guest" value="Continue">
                        </div>
                    </form>
               </div>
               <div id="sessionForm">
                   <p>Logged in with following account:</p>
                   <form action="https://the-gentleman.reservy.es/" method="post" class="appointment-form-wrapper clearfix">
                        <div class="form-field">
                             <label>First name</label>
                             <input type="text" name="firstname" value="">
                        </div>
                        <div class="form-field">
                             <label>Last Name</label>
                             <input type="text" name="lastname" value="">
                        </div>
                        <div class="form-field">
                             <label>E-mail</label>
                             <input type="email" name="username" value="">
                        </div>
                        <div class="form-field">
                             <label>Phone Number</label>
                             <input type="phone" name="phone" value="">
                        </div>
                        <p>Would you like to change your password?</p>
                        <div class="form-field">
                             <label>Password</label>
                             <input type="password" name="password" value="" autocomplete="new-password">
                             <span class="explanation">At least 8 characters, with upper and lower case and numbers</span>
                        </div>
                        <div class="form-field">
                             <label>Repeat password</label>
                             <input type="password" name="password2" value="">
                        </div>
                        <div class="form-field submit-field right">
                             <input type="submit" name="continue" value="Save and continue">
                        </div>
                        <div class="form-spacer"></div>
                        <div class="form-field submit-field left">
                             <input type="submit" name="logout" value="Logout">
                        </div>
                   </form>
               </div>
              </div>
              <div id="tab-4" class="appointment-form tab-content2 clearfix">
                <div id="ok"><img src="./Toni_Barbershop_David_Encina_Martinez_files/ok.svg"></div>
                <div id="selection"></div>
                <div id="tab-4-loader"><div class="loader"><div class="spinner"></div></div></div>
                <div id="reserve"><input type="submit" name="reserve" value="Book now"></div>
                <div id="restart"><input type="submit" name="restart" value="Back"></div>
              </div>
         </div>
         <div id="nextBar" style="">
           <div class="container">
             <b>Selection:</b>
             <span class="text"><span class="products"></span><span class="total"></span><span class="date"></span></span>
             <input type="submit" id="submit" name="" value="Continue">
           </div>
         </div>
         <!-------------------------------------- My HTML --------------------------------------------->
          <div id="content-container">
            <div id="content-container-title">
              <h1>Últimas Reseñas</h1>
            </div>
            <div id="comment-container">
            </div>
          </div>
          <div id="comment-form">
            <div id="comment-form-data">
              <h2>Escribe tu reseña</h2>
              <input type="text" placeholder="Nombre">
              <textarea maxlength="300" placeholder="Escribe aquí tu reseña"></textarea>
            </div>
            <div id="comment-form-submit">
              <button>Enviar</button>
            </div>
          </div>
         <!-------------------------------------------------------------------------------------------->
         <div class="copyright">© Copyright 2021 by The Gentleman by Toni<br><span class="reservy">Booking software by <a href="https://www.reservy.eu/">reservy</a></span></div><a href="https://www.reservy.eu/">
 </a></section><a href="https://www.reservy.eu/">
  <section id="page_holder" style="min-height: 772px;">
  <div class="loader"><div class="spinner"></div></div>
  <div class="text_holder">
   
  </div>
 </section>
  </a></div><a href="https://www.reservy.eu/">

<script type="text/javascript" src="./Toni_Barbershop_David_Encina_Martinez_files/jquery.min.js.descarga"></script>
<script type="text/javascript" src="./Toni_Barbershop_David_Encina_Martinez_files/scripts.js.descarga"></script>
<script type="text/javascript">
     var lang = 'en';
     var langs = ["en","es","ca"];
     var currentTab = 1;
     var products = false;
     var productsByPos = {};
     var groups = {};
     var available_days = [];
     var available_employees = [];
     var selected_employee = false;
     var available_hours = [];
     var session_id = false;
     var user = false;
     var last_employees = false;
     var order = {products: {}, day: false, hour: false, employee: false};
     var steps_ok = {1: false, 2: false, 3: false};
     var background_loaded = false;
     var finished = false;
     var pages = [];
     var messages = {"UNKNOWN_ACTION":"Unknown Action","UKNOWN_CREDENTIALS":"The entered data could not be found in our database. Please, check your input and try again.","UKNOWN_PERMANENT_SESSION_ID":"Your session has expired due to inactivity.","USER_EXISTS_ALREADY":"The entered e-mail has already been registered. Please, log into your account.","SESSION_EXPIRED":"Your session has expired due to inactivity. Please log into your account again.","HOUR_NOT_EXISTING":"We are sorry! The selected time is currently unavailable. Please choose another option.","DAY_NOT_EXISTING":"Wer are sorry! There are no times slots left on the selected date. Please choose another date.","EMPLOYEE_NOT_AVAILABLE":"We are so sorry! The chosen employee is not available anymore for the selected date. Please select another employee and\/or date.","SELECT_DAY":"Please, choose a date with remaining time slots.","MAINTENANCE":"We\u00b4re currently updating our system. Please, try again later. We apologize for the inconveniences.","AJAX_ERROR":"An error has occured. Please try again. If the error occures again, please try again later.","UKNOWN_EMAIL":"The entered e-mail address could not be found in our database. Please check your input and try again.","ACCOUNT_NOT_CONFIRMED":"The entered eMail address has not been confirmed yet. We've just sent you another email. Please click on the link in this email to confirm your account.","NEW_PASSWORD_SENT":"We just sent you an eMail containing a link to set a new password.","TOO_MANY_LOGIN_TRIES":"The maximum amount of login tries has been reached. For security reasons you cannot perform a login until {time}. Please request a new password or wait until this time.","AJAX_ERROR_PARSING":"An error ocurred on the server. Please try again later.","AJAX_ERROR_TIMEOUT":"A timeout ocurred. Please try again. If this happens again, please try again later.","INCORRECT_EMAIL":"The E-mail entered is not valid.","INCORRECT_PHONE":"The phone number entered is not valid.","FILL_REQUIRED_FIELDS":"Please, fill in the necessary fields to continue."};
     var loading_img = '<div class="loader"><div class="spinner"></div></div>';
 
     var platform = ((typeof device != 'undefined') ? device.platform : '');

     $(document).ready(function(){
          onDocumentReady();
     });

     if(platform == 'iOS'){
          $('input, textarea, select').focus(function(){
               $('body').addClass('iOSFix');
          })
          .blur(function(){
               $('body').removeClass('iOSFix');
          });
     }

     var lastWindowWidth = $(window).width();
     $(window).resize(function(){
          if(lastWindowWidth != $(window).width()){
               lastWindowWidth = $(window).width();
               loadBackgroundImage();
               setHeader();
               setBoxHeights($('#tab-1 .our-price-box:not(.template)'));
               setBoxHeights($('#employees .our-price-box'));
               setNextBarPadding();
               setTabNavigation();
               setTimeout(function(){
                    loadBackgroundImage();
                    setHeader();
                    setBoxHeights($('#tab-1 .our-price-box:not(.template)'));
                    setBoxHeights($('#employees .our-price-box'));
                    setNextBarPadding();
                    setTabNavigation();
               }, 500);
          }
     })
     .scroll(function(){
          if($(window).scrollTop() > 0)
               $('header').addClass('stuck');
          else
               $('header').removeClass('stuck');
     })
     .on('hashchange', function(){
          hashchange();
     });

     window.addEventListener("message", receiveMessageFromParentFrame, false);
     
          $('body, nav, #navBackground').on('swipeleft', function(){
          if($('body').hasClass('navActive'))
               closeNavigation();
     })
     .on('swiperight', function(){
          if(!$('body').hasClass('navActive'))
               openNavigation();
     });
     
     if(typeof universalLinks != 'undefined'){
          universalLinks.subscribe(null, function(data){
               console.log('Did launch application from the link: ' + data.url);
          });
          universalLinks.subscribe('cancel_reservation', function(data){
               console.log('cancel_reservation: Did launch application from the link: ' + data.url);
          });
     }

     function hashchange(){
          var hash = location.hash.split('#')[1];
          var step = 1;
          if(typeof hash == 'undefined')
               hash = '';
          if(hash == '' || hash.indexOf('step') > -1){
               if(finished)
                    resetAll();
               $('nav a.current').removeClass('current');
               $('nav a.new_reservation').addClass('current');
               closeNavigation();
               if($('#appointment:visible').length == 0){
                    $('section:not(#appointment)').hide(0);
                    $('#appointment').show(0);
               }
               hash = hash.replace(/step/, '');
               if(hash != '')
                    step = parseInt(hash);
               if(steps_ok[step])
                    setTab(step);
          }
          else if(isset(pages[hash]))
               showPage(hash);
     }

     function receiveMessageFromParentFrame(e){
          var height = $('#nextBar').outerHeight();
          var tmp = {top: (e.data.scrollTop + e.data.windowHeight - height) + 'px', bottom: 'auto'};
          if(e.data.event == 'setWindow' && parseInt(tmp.top) >= 0){
               if(parseInt(tmp.top) + height >= $(window).height())
                    tmp = {top: 'auto', bottom: '0'};
               $('#nextBar').css(tmp);
          }
    }

     var documentReady = false;
     function onDocumentReady(){
          if(documentReady)
               return;
          else
               documentReady = true;
          if(platform != '' && typeof app.systemLang == 'string' && typeof localStorage.lang == 'undefined' && langs.indexOf(app.systemLang) != -1){
               localStorage.lang = app.systemLang;
               window.location.reload(true);
          }
          if(typeof device != 'undefined')
               $('body').addClass(((platform == 'iOS') ? 'iOS' : ((platform == 'Android') ? 'Android' : '')));
          loadBackgroundImage();
                    setHeader();
          $('header img').on('load', function(){
               setHeader();
          });
          setTimeout(function(){
               setHeader();
          }, 1000);
          $('#navButton, #navBackground').click(function(e){
               if($('body').hasClass('navActive'))
                    closeNavigation();
               else
                    openNavigation();
          });
          hashchange();
          
          $('#tab-4-loader').html(loading_img);
          showUserDataForm();
          $.ajax({
               url: 'https://the-gentleman.reservy.es/ajax.php',
               data: {
                    projectId: 1,
                    action: 'getServiceProducts',
                    platform: platform,
                    lang: lang
               },
               success: function(data){
                    if(data.status == 'OK'){
                         products = data.products;
                         init();
                    }
                    else{
                         var msg = ((typeof messages[data.message] != 'undefined') ? messages[data.message] : data.message);
                         $('#generalMessage .message').text(msg);
                         $('#generalMessage').css('display', 'flex');
                         hideLoader();
                    }
               },
               error: function(xhr, status, error){
                    if(status == 'timeout')
                         $('#generalMessage .message').html(messages.AJAX_ERROR_TIMEOUT + ((error != '') ? '<span class="jsErrorMsg">(' + error + ')</span>' : ''));
                    else if(status == 'parsererror')
                         $('#generalMessage .message').html(messages.AJAX_ERROR_PARSING + ((error != '') ? '<span class="jsErrorMsg">(' + error + ')</span>' : ''));
                    else
                         $('#generalMessage .message').html(messages.AJAX_ERROR + '<span class="jsErrorMsg">(' + status + ((error != '') ? ':' + error : '') + ')</span>');
                    sendLastError('getServiceProducts', status, error);
                    $('#generalMessage').css('display', 'flex');
                    hideLoader();
               },
               dataType: 'json'
          });

          doPermanentLogin();
          if(typeof localStorage.lastError != 'undefined')
               sendLastError();

          $('#nextBar, #nextBar input[type="submit"]').click(function(e){
               if($('#nextBar input[type="submit"]:visible').length > 0)
                    doNext();
               e.stopPropagation();
          });

          $('.appointment-header .appointment-inner').click(function(){
               if($(this).parent().hasClass('past')){
                    var tab = $(this).attr('id').replace(/tab/, '');
                    setTab(tab);
                    setTabNavigation();
               }
          });

          $('.appointment-header .appointment-cell.prev div, .appointment-header .appointment-cell.next div').click(function(){
               var tab = currentTab;
               if($(this).parent().hasClass('prev'))
                    tab -= 1;
               else
                    tab += 1;
               if(tab > 0 && tab <= 4 && (tab == 1 || steps_ok[(tab - 1)]))
                    setTab(tab);
          });

          $('input[type="checkbox"]').change(function(){
               if($(this).prop('checked'))
                    $(this).parent().addClass('checked');
               else
                    $(this).parent().removeClass('checked')
          });

          $('#loginForm p.title, #guestForm p.title').click(function(){
               showUserDataForm(this);
          });

          $('#tab-3 form').submit(function(e){
               e.preventDefault();
          });

          if(platform == 'iOS'|| platform == 'Android')
               $('input[name="permanent_session"]').prop('checked', true).closest('label').addClass('checked');

          $('#loginForm form').on('submit', function(e){
               e.preventDefault();
               removeErrors();
               $('#passwordForgottenForm').slideUp();
               $('input.error').removeClass('error');
               var error = false;
               var required = ['username', 'password'];
               for(var i = 0; i < required.length; i++){
                    if($('#loginForm input[name="' + required[i] + '"]').val() == ''){
                         error = messages.FILL_REQUIRED_FIELDS;
                         $('#loginForm input[name="' + required[i] + '"]').addClass('error');
                    }
               }
               if(!error && !(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($('#loginForm input[name="username"]').val()))){
                    error = messages.INCORRECT_EMAIL;
                    $('#loginForm input[name="username"]').addClass('error');
               }
               if(error)
                    showError(error);
               else{
                    $.ajax({
                         method: 'POST',
                         url: 'https://the-gentleman.reservy.es/ajax.php?action=login&projectId=1&platform=' + platform + '&lang=' + lang,
                         data: $('#loginForm :input').serialize(),
                         success: function(data){
                              if(data.status == 'OK'){
                                   session_id = data.session_id;
                                   user = data.user;
                                   if(data.permanent_session_id)
                                        localStorage['permanent_session_id'] = data.permanent_session_id;
                                   steps_ok[3] = true;
                                   setTab(4);
                                   $('#loginForm, #guestForm').fadeOut(500);
                                   $('#loginForm input[type="text"], #loginForm input[type="email"], #loginForm input[type="phone"], #loginForm input[type="password"], #guestForm input[type="text"], #guestForm input[type="email"], #guestForm input[type="phone"], #guestForm input[type="password"], #passwordForgottenForm input[name="username"]').val('');
                                   $('#loginForm input[type="checkbox"], #guestForm input[type="checkbox"]').prop('checked', false);
                                   $('#loginForm label.checkbox, #guestForm label.checkbox').removeClass('checked');
                                   $('#passwordForgottenForm').slideUp();
                                   $('#sessionForm').fadeIn(500);
                                   $('#sessionForm input[name="firstname"]').val(data.user.firstname);
                                   $('#sessionForm input[name="lastname"]').val(data.user.lastname);
                                   $('#sessionForm input[name="username"]').val(data.user.email);
                                   $('#sessionForm input[name="phone"]').val(data.user.phone);
                              }
                              else{
                                   if(data.message == 'TOO_MANY_LOGIN_TRIES'){
                                        var tmp = new Date(data.blocked_until * 1000);
                                        data.blocked_until = tmp.getHours() * 60 + tmp.getMinutes();
                                        data.message = messages.TOO_MANY_LOGIN_TRIES.replace(/\{time\}/, timeToString(data.blocked_until));
                                        $('#passwordForgottenForm').slideDown();
                                   }
                                   showError(data.message);
                              }
                         },
                         error: function(xhr, status, error){
                              if(status == 'timeout')
                                   showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                              else if(status == 'parsererror')
                                   showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                              else
                                   showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                              sendLastError('login', status, error);
                         },
                         dataType: 'json'
                    });
               }
          });

          $('#loginForm a.passwordForgotten').click(function(){
               if($('#passwordForgottenForm:visible').length > 0)
                    $('#passwordForgottenForm').slideUp();
               else{
                    $('#passwordForgottenForm').slideDown();
                    scrollTo($('#passwordForgottenForm').offset().top - $('header').outerHeight() - 20);
               }
          });

          $('#passwordForgottenForm form').on('submit', function(e){
               e.preventDefault();
               removeErrors();
               $('input.error').removeClass('error');
               var error = false;
               var required = ['username'];
               for(var i = 0; i < required.length; i++){
                    if($('#passwordForgottenForm input[name="' + required[i] + '"]').val() == ''){
                         error = messages.FILL_REQUIRED_FIELDS;
                         $('#passwordForgottenForm input[name="' + required[i] + '"]').addClass('error');
                    }
               }
               if(!error && !(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($('#passwordForgottenForm input[name="username"]').val()))){
                    error = messages.INCORRECT_EMAIL;
                    $('#passwordForgottenForm input[name="username"]').addClass('error');
               }
               if(error)
                    showError(error);
               else{
                    $('#passwordForgottenForm form').hide(0);
                    $('#passwordForgottenForm .loading').html(loading_img);
                    $.ajax({
                         method: 'POST',
                         url: 'https://the-gentleman.reservy.es/ajax.php?action=newPassword&projectId=1&platform=' + platform + '&lang=' + lang,
                         data: $('#passwordForgottenForm :input').serialize(),
                         success: function(data){
                              if(data.status == 'OK'){
                                   $('#loginForm input[name="username"]').val($('#passwordForgottenForm input[name="username"]').val());
                                   $('#passwordForgottenForm input[name="username"]').val('');
                                   showError(messages.NEW_PASSWORD_SENT, '', false, 'okay');
                                   $('#passwordForgottenForm').slideUp();
                              }
                              else
                                   showError(data.message, '', false, '', '#passwordForgottenForm');
                              $('#passwordForgottenForm form').show(0);
                              $('#passwordForgottenForm .loading').empty();
                         },
                         error: function(xhr, status, error){
                              if(status == 'timeout')
                                   showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''), false, '', '#passwordForgottenForm');
                              else if(status == 'parsererror')
                                   showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''), false, '', '#passwordForgottenForm');
                              else
                                   showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')', false, '', '#passwordForgottenForm');
                              sendLastError('newPassword', status, error);
                              $('#passwordForgottenForm form').show(0);
                              $('#passwordForgottenForm .loading').empty();
                         },
                         dataType: 'json'
                    });
               }
          });

          $('#guestForm form').on('submit', function(e){
               e.preventDefault();
               removeErrors();
               $('input.error').removeClass('error');
               var error = false;
               var required = ['firstname', 'lastname', 'username', 'phone'];
               var password = $('#guestForm input[name="password"]').val();
               for(var i = 0; i < required.length; i++){
                    if($('#guestForm input[name="' + required[i] + '"]').val() == ''){
                         error = messages.FILL_REQUIRED_FIELDS;
                         $('#guestForm input[name="' + required[i] + '"]').addClass('error');
                    }
               }
               if(!error && !(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($('#guestForm input[name="username"]').val()))){
                    error = messages.INCORRECT_EMAIL;
                    $('#guestForm input[name="username"]').addClass('error');
               }
               else if(!error && !(/\d\d+/.test($('#guestForm input[name="phone"]').val()))){
                    error = messages.INCORRECT_PHONE;
                    $('#guestForm input[name="phone"]').addClass('error');
               }
               else if(!error && password != ''){
                    if(password.length < 8)
                         error = "The password is too short. It must contain at least 8 characters.";
                    else if(!(/([a-z]+)/.test(password)) || !(/([A-Z]+)/.test(password)) || !(/([0-9]+)/.test(password)))
                         error = "The password must include at least one lower case, upper case and number";
                    if(error)
                         $('#guestForm input[name="password"]').addClass('error');
                    else if(password != $('#guestForm input[name="password2"]').val()){
                         error = "The passwords don\u00b4t match!";
                         $('#guestForm input[name="password2"]').addClass('error');
                    }
               }
               if(error)
                    showError(error);
               else if(password != ''){
                    $.ajax({
                         method: 'POST',
                         url: 'https://the-gentleman.reservy.es/ajax.php?action=register&permanentLogin=' + ((platform == 'iOS'|| platform == 'Android') ? 1 : 0) + '&projectId=1&platform=' + platform + '&lang=' + lang,
                         data: $('#guestForm :input').serialize(),
                         success: function(data){
                              if(data.status == 'OK'){
                                   session_id = data.session_id;
                                   if(data.permanent_session_id)
                                        localStorage['permanent_session_id'] = data.permanent_session_id;
                                   user = data.user;
                                   steps_ok[3] = true;
                                   setTab(4);
                                   $('#loginForm, #guestForm').fadeOut(500);
                                   $('#loginForm input[type="text"], #loginForm input[type="email"], #loginForm input[type="phone"], #loginForm input[type="password"], #guestForm input[type="text"], #guestForm input[type="email"], #guestForm input[type="phone"], #guestForm input[type="password"], #passwordForgottenForm input[name="username"]').val('');
                                   $('#loginForm input[type="checkbox"], #guestForm input[type="checkbox"]').prop('checked', false);
                                   $('#loginForm label.checkbox, #guestForm label.checkbox').removeClass('checked');
                                   $('#passwordForgottenForm').slideUp();
                                   $('#sessionForm').fadeIn(500);
                                   $('#sessionForm input[name="firstname"]').val(data.user.firstname);
                                   $('#sessionForm input[name="lastname"]').val(data.user.lastname);
                                   $('#sessionForm input[name="username"]').val(data.user.email);
                                   $('#sessionForm input[name="phone"]').val(data.user.phone);
                              }
                              else
                                   showError(data.message);
                         },
                         error: function(xhr, status, error){
                              if(status == 'timeout')
                                   showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                              else if(status == 'parsererror')
                                   showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                              else
                                   showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                              sendLastError('register', status, error);
                         },
                         dataType: 'json'
                    });
               }
               else{
                    steps_ok[3] = true;
                    setTab(4);
                    session_id = -1;
               }
          });

          $('#sessionForm form').on('submit', function(e){
               if((e.type == 'click' && $(this).attr('type') != 'submit') || (e.type == 'keyup' && e.which != 13))
                    return;
               e.preventDefault();
               removeErrors();
               $('#passwordForgottenForm').slideUp();
               $('input.error').removeClass('error');
               var error = false;
               var required = ['firstname', 'lastname', 'username', 'phone'];
               var password = $('#sessionForm input[name="password"]').val();
               var changed = [];
               for(var i = 0; i < required.length; i++){
                    if($('#sessionForm input[name="' + required[i] + '"]').val() == ''){
                         error = messages.FILL_REQUIRED_FIELDS;
                         $('#sessionForm input[name="' + required[i] + '"]').addClass('error');
                    }
                    else if($('#sessionForm input[name="' + required[i] + '"]').val() != user[(required[i])])
                         changed.push(required[i]);
               }
               if(!error && !(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($('#sessionForm input[name="username"]').val()))){
                    error = messages.INCORRECT_EMAIL;
                    $('#sessionForm input[name="username"]').addClass('error');
               }
               else if(!error && !(/\d\d+/.test($('#sessionForm input[name="phone"]').val()))){
                    error = messages.INCORRECT_PHONE;
                    $('#sessionForm input[name="phone"]').addClass('error');
               }
               else if(!error && password != ''){
                    if(password.length < 8)
                         error = "The password is too short. It must contain at least 8 characters.";
                    else if(!(/([a-z]+)/.test(password)) || !(/([A-Z]+)/.test(password)) || !(/([0-9]+)/.test(password)))
                         error = "The password must include at least one lower case, upper case and number";
                    if(error)
                         $('#sessionForm input[name="password"]').addClass('error');
                    else if(password != $('#sessionForm input[name="password2"]').val()){
                         error = "The passwords don\u00b4t match!";
                         $('#sessionForm input[name="password2"]').addClass('error');
                    }
               }
               if(error)
                    showError(error);
               else if(password != '' || changed.length > 0){
                    $.ajax({
                         method: 'POST',
                         url: 'https://the-gentleman.reservy.es/ajax.php?action=changeProfile&projectId=1&platform=' + platform + '&lang=' + lang,
                         data: $('#sessionForm :input').serialize() + '&session_id=' + session_id,
                         success: function(data){
                              if(data.status == 'OK'){
                                   user = data.user;
                                   setTab(4);
                              }
                              else
                                   showError(data.message);
                         },
                         error: function(xhr, status, error){
                              if(status == 'timeout')
                                   showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                              else if(status == 'parsererror')
                                   showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                              else
                                   showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                              sendLastError('changeProfile', status, error);
                         },
                         dataType: 'json'
                    });
               }
               else{
                    setTab(4);
               }
          });

          $('#sessionForm input[type="submit"][name="logout"]').click(function(e){
               e.preventDefault();
               removeErrors();
               $.ajax({
                    method: 'POST',
                    url: 'https://the-gentleman.reservy.es/ajax.php?action=logout&projectId=1&platform=' + platform + '&lang=' + lang,
                    data: {
                         session_id: session_id,
                         permanent_session_id: localStorage['permanent_session_id']
                    },
                    success: function(data){
                         if(data.status == 'OK'){
                              session_id = false;
                              user = false;
                              if(localStorage['permanent_session_id'])
                                   delete localStorage['permanent_session_id'];
                              $('#sessionForm').fadeOut(500, function(){
                                   $('#loginForm, #guestForm').fadeIn(400);
                              });
                         }
                         else
                              showError(data.message);
                    },
                    error: function(xhr, status, error){
                         if(status == 'timeout')
                              showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                         else if(status == 'parsererror')
                              showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                         else
                              showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                         sendLastError('logout', status, error);
                    },
                    dataType: 'json'
               });
          });

          $('#reserve input[type="submit"][name="reserve"]').click(function(){
               doReserve();
          });

          $('#restart input[type="submit"][name="restart"]').click(function(){
               resetAll();
          });

          sendHeightToParentFrame();
     }

     var inited = false;
     function init(){
          console.log(init, inited)
          if(inited || !background_loaded || !products)
               return;
          else
               inited = true;
          for(var p in products){
               productsByPos[(products[p].position)] = p;
          }
          for(var pos in productsByPos){
               var p = productsByPos[pos];
               var elem = $('.our-price-box.template').clone();
               if(products[p].symbol != '')
                    $('.our-price-ic', elem).append($('<img />').attr({src: products[p].symbol, alt: products[p].name}));
               $('h2', elem).text(products[p].name);
               $('.our-price-text span.description', elem).text(products[p].description);
               if(isset(products[p].duration))
                    $('.our-price-text span.duration', elem).text(products[p].duration);
               else
                    $('.our-price-text .duration_holder', elem).remove();
               $('.start-price span.price', elem).text(number_format(products[p].price, 2, '.', ' '));
               $(elem).removeClass('template')
                    .attr('id', 'product' + p)
                    .appendTo($('.our-price-box.template').parent());
          }

          setBoxHeights($('#tab-1 .our-price-box:not(.template)'));
          setTimeout(function(){
               setBoxHeights($('#tab-1 .our-price-box:not(.template)'));
          }, 1000);

          hideLoader();

          $('#tab-1 .our-price-box').click(function(){
               var id = $(this).attr('id').replace(/product/, '');
               if($(this).hasClass('selected')){
                    $(this).removeClass('selected');
                    $('.more', this).text("Select");
                    delete groups[(products[id].groupId)];
                    delete order.products[id];
               }
               else{
                    $(this).addClass('selected');
                    $('.more', this).text("Selection");
                    order.products[id] = id;
                    if(typeof groups[(products[id].groupId)] != 'undefined'){
                         var tmp = groups[(products[id].groupId)];
                         $('.our-price-box#product' + tmp).removeClass('selected');
                         $('.our-price-box#product' + tmp + '.more').text("Select");
                         delete order.products[tmp];
                    }
                    groups[(products[id].groupId)] = id;
               }
               if(Object.size(order.products) > 0){
                    $('#nextBar').css('display', 'block').css('opacity', '1');
                    var tmp = {};
                    var total = 0;
                    for(var p in order.products){
                         tmp[(products[p].position)] = products[p].name;
                         total += parseFloat(products[p].price);
                    }
                    var lastProduct = '';
                    var size = Object.size(tmp);
                    if(size > 1){
                         var i = 0;
                         for(var k in tmp){
                              if(i == size - 1){
                                   lastProduct = ' y ' + tmp[k];
                                   delete tmp[k];
                              }
                              i++;
                         }
                    }
                    $('#nextBar .text .products').text(Object.join(tmp, ', ') + lastProduct);
                    $('#nextBar .text .total').html('(' + "Total" + ': &euro; ' + number_format(total, 2, '.', ' ') + ')');
                    steps_ok[1] = true;
               }
               else{
                    $('#nextBar').css('display', 'none').css('opacity', '0');
                    $('.appointment-header .appointment-cell.next div').hide();
                    steps_ok[1] = false;
               }
               order.day = false;
               order.hour = false;
               order.employee = false;
               steps_ok[2] = false;
               $('#nextBar .text .date').empty();
               setTabNavigation(true);
               setNextBarPadding();
          });
          sendHeightToParentFrame();

               }

     function loadBackgroundImage(){
          var background_image;
                    background_image = 'https://the-gentleman.reservy.es/assets/page_background.jpg';
                              if($(window).width() <= 1200)
               background_image = 'https://the-gentleman.reservy.es/assets/page_background_1200.jpg';
                              if($(window).width() <= 991)
               background_image = 'https://the-gentleman.reservy.es/assets/page_background_991.jpg';
                              if($(window).width() <= 767)
               background_image = 'https://the-gentleman.reservy.es/assets/page_background_767.jpg';
                              if($(window).width() <= 479)
               background_image = 'https://the-gentleman.reservy.es/assets/page_background_479.jpg';
                    if(typeof background_image == 'undefined'){
               background_loaded = true;
               init();
          }
          $('<img/>').attr('src', background_image).on('load', function(){
               $(this).remove();
               $('body').css('background-image', 'url(' + background_image + ')');
               background_loaded = true;
               init();
          })
          .on('error', function(){
               $(this).remove();
               background_loaded = true;
               init();
          });
     }

     function setHeader(){
                    var height = $('header').outerHeight();
          $('#headerSpacer').height(height);
          $('nav').css('padding-top', height + 'px');
          $('section:not(#appointment)').css('min-height', ($(window).height() - height) + 'px');
          $('header .languages a').click(function(e){
               e.preventDefault();
               localStorage.lang = $(this).data('lang');
               if(platform != '')
                    window.location.reload(true);
               else
                    window.location.href = $(this).attr('href');
          });
               }

     function sendHeightToParentFrame(){
          parent.postMessage({event: 'setIframeHeight', iframeHeight: $('body').height()}, '*');
     }

     function setBoxHeights(elements){
          $('.our-price-box-left', elements).css('height', '');
          if($(window).width() <= 479)
               return;
          var height = 0;
          $('.our-price-box-left', elements).css('height', '').each(function(){
               if($(this).height() > height)
                    height = $(this).height();
          });
          $('.our-price-box-left', elements).height(Math.ceil(height));
     }

     function setNextBarPadding(){
          if($('#nextBar:visible').length > 0)
               $('section#appointment').css('padding-bottom', 70 + $('#nextBar').height());
          else
               $('section#appointment').css('padding-bottom', 70);
          sendHeightToParentFrame();
     }

     function doNext(){
          setTab(currentTab + 1);
     }

     function setTab(tab){
          if(tab === currentTab)
               return;
          var tmpCurrentTab = currentTab;
          currentTab = parseInt(tab);
          $('#tab-' + tmpCurrentTab).fadeOut(500, function(){
               $('#tab-' + tab).fadeIn(500, function(){
                    sendHeightToParentFrame();
               });
               sendHeightToParentFrame();
          });
          removeErrors();
          scrollTo($('.appointment-header').offset().top - $('header').outerHeight() - 20);
          if(currentTab == 1)
               $('#nextBar input[type="submit"]').show(0);
          else
               $('#nextBar input[type="submit"]').hide(0);
          if(currentTab == 2){
               $('#calendar .calendar_holder').html(loading_img);
               if(!order.day)
                    $('#hours').html('<p>' + messages.SELECT_DAY + '</p>');
               getAvailableDays(initCalendarAndHours);
          }
          if(currentTab == 4){
               $('#selection').html($('#nextBar .container').html()
                               + '<span class="employee">' + "with" + ' ' + available_employees[order.employee].firstname + '</span>'
                              );
               $('#nextBar').css('display', 'none').css('opacity', '0');
          }
          else
               $('#nextBar').css('display', 'block').css('opacity', '1');
          window.location.hash = 'step' + currentTab;
          setTabNavigation(true);
     }

     function setTabNavigation(updateTabs){
          if(updateTabs){
               var tabs = $('.appointment-header .appointment-cell').length;
               $('.appointment-header .appointment-cell').removeClass('current').removeClass('past');
               var broken_step;
               for(var i = 1; i <= tabs; i++){
                    if(i == currentTab)
                         $('.appointment-header .appointment-cell.tab-' + i + '').addClass('current');
                    else if(!broken_step && (i == 1 || steps_ok[(i - 1)]))
                         $('.appointment-header .appointment-cell.tab-' + i + '').addClass('past');
                    else
                         broken_step = true;
               }
          }
          if(currentTab > 1 && $(window).width() <= 991)
               $('.appointment-header .appointment-cell.prev div').show(0);
          else
               $('.appointment-header .appointment-cell.prev div').hide(0);
          if(steps_ok[currentTab] && $(window).width() <= 991)
               $('.appointment-header .appointment-cell.next div').show(0);
          else
               $('.appointment-header .appointment-cell.next div').hide(0);
     }

     function initCalendarAndHours(){
          if(available_days.indexOf(order.day) == -1 || (isset(available_employees) && isset(available_employees[order.employee]))){
               if(steps_ok[2]){
                    if(available_days.indexOf(order.day) == -1)
                         showError(messages.DAY_NOT_EXISTING);
                    else
                         showError(messages.EMPLOYEE_NOT_AVAILABLE);
               }
               $('#hours').html('<p>' + messages.SELECT_DAY + '</p>');
               order.day = false;
               order.hour = false;
               order.employee = false;
               steps_ok[2] = false;
               setTabNavigation(true);
               var day;
               if(available_days.length > 0)
                    day = new Date(available_days[0] * 1000);
               else
                    day = new Date();
               setEmployees();
               setCalendar(day.getFullYear(), day.getMonth() + 1);
          }
          else if(order.day){
               var day = new Date(order.day * 1000);
               setEmployees();
               setCalendar(day.getFullYear(), day.getMonth() + 1);
               $('#hours').html(loading_img);
               getAvailableHours(function(){
                    listHours();
                    var found = false;
                    for(var i in available_hours){
                         if(available_hours[i].hour == order.hour){
                              found = true;
                              break;
                         }
                    }
                    if(!found){
                         if(steps_ok[2])
                              showError(messages.HOUR_NOT_EXISTING);
                         order.hour = false;
                         order.employee = false;
                         steps_ok[2] = false;
                         setTabNavigation(true);
                    }
               });
          }
     }

     function getAvailableDays(fnt){
          var employee = '';
          var employee_selected = '';
          if(selected_employee !== false){
               employee = selected_employee;
               employee_selected = 1;
          }
          else if(last_employees){
               for(var i in order.products){
                    if(typeof last_employees[i] != 'undefined'){
                         employee = last_employees[i];
                         break;
                    }
               }
          }
          $.ajax({
               url: 'https://the-gentleman.reservy.es/ajax.php',
               data: {
                    projectId: 1,
                    services: order.products,
                    action: 'getAvailableDaysForServices',
                    platform: platform,
                    employee: employee,
                    employee_selected: employee_selected,
                    lang: lang
               },
               success: function(data){
                    if(data.status == 'OK'){
                         available_days = data.days;
                         available_employees = data.employees;
                         selected_employee = data.selected_employee;
                         if(typeof fnt != 'undefined')
                              fnt();
                    }
                    else
                         showError(data.message);
               },
               error: function(xhr, status, error){
                    if(status == 'timeout')
                         showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                    else if(status == 'parsererror')
                         showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                    else
                         showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                    sendLastError('getAvailableDaysForServices', status, error);
                    setTab(1);
               },
               dataType: 'json'
          });
     }

     function setEmployees(){
                    $('#employees').addClass('closed').empty();
          var elem = $('.our-price-box.template').clone();
          $('h2', elem).text('Any employee');
          $('.our-price-text p, .our-price-box-right', elem).remove();
          $(elem).removeClass('template')
               .attr('id', 'employee')
               .appendTo($('#employees'));
          for(var i in available_employees){
               var elem = $('.our-price-box.template').clone();
               if(available_employees[i].photo != null)
                    $('.our-price-ic', elem).append($('<img />').attr({src: 'https://the-gentleman.reservy.es/' + available_employees[i].photo, alt: available_employees[i].firstname}));
               $('h2', elem).text(available_employees[i].firstname);
               $('.our-price-text p, .our-price-box-right', elem).remove();
          $(elem).removeClass('template')
                    .attr('id', 'employee' + available_employees[i].id)
                    .appendTo($('#employees'));
          }
          $('#employee' + ((selected_employee) ? selected_employee : '')).addClass('selected').find('.more').text("Selection");

          setBoxHeights($('#employees .our-price-box'));
          setTimeout(function(){
               setBoxHeights($('#employees .our-price-box'));
          }, 1000);

          $('#employees .our-price-box').click(function(){
               removeErrors();
               if($('#employees').hasClass('closed')){
                    $('#employees').removeClass('closed');
                    $('#calendar, #hours').fadeOut(500, function(){
                         sendHeightToParentFrame();
                    });
               }
               else{
                    var id = $(this).attr('id').replace(/employee/, '');
                    $('#employees .our-price-box').removeClass('selected').find('.more').text("Select");
                    $(this).addClass('selected').find('.more').text("Selection");
                    selected_employee = id;
                    $('#employees').addClass('closed');
                    $('#calendar, #hours').fadeIn(500, function(){
                         sendHeightToParentFrame();
                    });
                    getAvailableDays(initCalendarAndHours);
               }
               setBoxHeights($('#employees .our-price-box'));
               sendHeightToParentFrame();
          });
          sendHeightToParentFrame();
               }

     var currentMonth = 0;
     var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
     function setCalendar(year, month){
          month--;
          currentMonth = new Date(year, month, 1);
          var today = new Date();
          var weekday = currentMonth.getDay();
          if(weekday == 0)
               weekday = 6;
          else
               weekday--;
          var max = new Date(year, month + 1, 0);

          var calendar = $('<table class="calendar"></table>');
          
          var head = $('<tr class="head"></tr>');
          var tmp = $('<td class="prev"><div></div></td>');
          if(currentMonth.getTime() > today.getTime())
               $('div', tmp).css('display', 'block').click(function(){
                    var newMonth = currentMonth.getMonth();
                    var newYear = currentMonth.getFullYear();
                    if(newMonth == 0){
                         newMonth = 12;
                         newYear--;
                    }
                    setCalendar(newYear, newMonth);
               });
          head.append(tmp);
          head.append('<td colspan="6">' + months[month] + ' ' + year +  '</td>');
          tmp = $('<td class="next"><div></div></td>');
          if(available_days.length > 0 && max.getTime() / 1000 < available_days[(available_days.length - 1)])
               $('div', tmp).css('display', 'block').click(function(){
                    var newMonth = currentMonth.getMonth() + 2;
                    var newYear = currentMonth.getFullYear();
                    if(newMonth > 12){
                         newMonth = newMonth % 12;
                         newYear++;
                    }
                    setCalendar(newYear, newMonth);
               });
          head.append(tmp);
          calendar.append(head);
          calendar.append('<tr class="weekday"><td></td><td>' + "Mon" + '</td><td>' + "Tue" + '</td><td>' + "Wed" + '</td><td>' + "Thu" + '</td><td>' + "Fri" + '</td><td>' + "Sat" + '</td><td>' + "Sun" + '</td></tr>');

          max = max.getDate();
          var tr = $('<tr></tr>');
          var i = 0;
          for(; i < weekday + max; i++){
               var current_day = new Date(year, month, i + 1 - weekday);
               if(i % 7 == 0){
                    if(i > 0){
                         calendar.append(tr);
                         tr = $('<tr></tr>');
                    }
                    tr.append('<td class="week">' + current_day.getWeekNumber() + '</td>');
               }
               tmp = $('<td></td>');
               if(i >= weekday){
                    if(today.getTime() > current_day.getTime() + 86400 - 1)
                         $(tmp).addClass('past');
                    if(i % 7 == 5 || i % 7 == 6)
                              $(tmp).addClass('weekend');
                    tmp.append('<span>' + (i + 1 - weekday) + '</span>');
                    if(available_days.indexOf(current_day.getTime() / 1000) > -1){
                         $('span', tmp).addClass('available')
                              .attr('id', 'd' + current_day.getTime() / 1000);
                         if(current_day.getTime() / 1000 == order.day)
                              $('span', tmp).addClass('selected');
                    }
               }
               else
                    $(tmp).addClass('empty');
               tr.append(tmp);
          }
          for(; i % 7 != 0; i++){
               tr.append('<td class="empty"></td>');
          }
          calendar.append(tr);

          $('span.available', calendar).click(function(){
               $('.calendar span.available.selected').removeClass('selected');
               $(this).addClass('selected');
               setDay(parseInt($(this).attr('id').replace(/d/, '')));               
          });
          $('#calendar .calendar_holder').empty().append(calendar);
     }

     function setDay(day){
          removeErrors();
          order.day = day;
          order.hour = false;
          order.employee = false;
          var tmp = new Date(order.day * 1000);
          $('#nextBar .text .date').text(tmp.getDate() + ' ' + "of" + ' ' + months[tmp.getMonth()] + ' ' + tmp.getFullYear());
          if($(window).width() <= 767){
               scrollTo($('#hours').offset().top - $('header').outerHeight() - 20);
          }
          sendHeightToParentFrame();
          steps_ok[2] = false;
          $('#hours').html(loading_img);
          getAvailableHours(function(){
               listHours();
          });          
     }

     function getAvailableHours(fnt){
          var employee = '';
          if(selected_employee !== false)
               employee = selected_employee;
          $.ajax({
               url: 'https://the-gentleman.reservy.es/ajax.php',
               data: {
                    projectId: 1,
                    services: order.products,
                    day: order.day,
                    action: 'getAvailableHoursForDay',
                    employee: employee,
                    platform: platform,
                    lang: lang
               },
               success: function(data){
                    if(data.status == 'OK'){
                         available_hours = data.hours;
                         if(typeof fnt != 'undefined')
                              fnt();
                    }
                    else
                         alert(data.status + ': ' + data.message);
               },
               error: function(xhr, status, error){
                    if(status == 'timeout')
                         showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                    else if(status == 'parsererror')
                         showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                    else
                         showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                    sendLastError('getAvailableHoursForDay', status, error);
               },
               dataType: 'json'
          });
     }

     function listHours(){
          var day = new Date(order.day * 1000);
          $('#hours').html('<p>' + "Available appointments on" + ' ' + day.getDate() + ' ' + "of" + ' ' + months[day.getMonth()] + ' ' + day.getFullYear() +'</p>');
          for(var i = 0; i < available_hours.length; i++){
               $('#hours').append('<div id="h' + i + '" class="' + ((available_hours[i].hour == order.hour) ? 'selected' : '') + '">' + timeToString(available_hours[i].hour) + '</div>');
          }
          $('#hours div').click(function(){
               $('#hours div.selected').removeClass('selected');
               $(this).addClass('selected');
               var i = parseInt($(this).attr('id').replace(/h/, ''));
               order.hour = available_hours[i].hour;
               order.employee = available_hours[i].employee;
               $('#nextBar .text .date').text(day.getDate() + ' ' + "of" + ' ' + months[day.getMonth()] + ' ' + day.getFullYear() + ' ' + "at" + ' ' + timeToString(order.hour) + "h");
               steps_ok[2] = true;
               if(session_id)
                    setTab(4);
               else
                    setTab(3);
          });
     }

     function resetAll(){
          finished = false;
          setTab(1);
          groups = {};
          order = {products: {}, day: false, hour: false, employee: false};
          steps_ok = {1: false, 2: false, 3: false};
          finished = false;
          $('.our-price-box').removeClass('selected');
          $('.our-price-box .more', this).text("Select");
          'reset';
          $('#nextBar').css('display', 'none').css('opacity', '0');
          showUserDataForm();
          $('#guestForm input[name="firstname"], #guestForm input[name="lastname"], #guestForm input[name="username"], #guestForm input[name="phone"], #guestForm input[name="password"], #guestForm input[name="password2"]').val('');
          $('#loginForm input[type="checkbox"], #guestForm input[type="checkbox"]').prop('checked', false);
          $('#ok, #restart').fadeOut(500, function(){
               $('#tab-4').removeClass('ok');
               $('#selection, #reserve, .appointment-header').fadeIn(500);
          });
          if(session_id == -1){
               session_id = false;
               user = false;
          }
     }

     function timeToString(time){
          tmp = time % 60;
          return ((time - tmp) / 60) + ':' + ((tmp < 10) ? '0' : '') + tmp;
     }

     function showError(msg, jsError, resistOnce, classes, beforeElement){
          removeErrors();
          if(messages[msg])
               msg = messages[msg];
          var error = $('<div class="error ' + ((typeof classes != 'undefined') ? classes : '') + '"><span>' + msg + ((typeof jsError != 'undefined' && jsError != '') ? '<span class="jsErrorMsg">' + jsError + '</span>' : '') + '</span></div>')
               .css('display', 'none');
          if(resistOnce)
               error.addClass('resistOnce');
          if(typeof beforeElement == 'undefined'){
               scrollTo($('.appointment-header').offset().top - $('header').outerHeight() - 20);
               $('.appointment-header').after(error);
          }
          else{
               scrollTo($(beforeElement).offset().top - $('header').outerHeight() - 20 - 50);
               $(beforeElement).before(error);
          }
          error.slideDown(300, function(){
               sendHeightToParentFrame();
          });
     }

     function removeErrors(){
          $('div.error:not(.resistOnce)').slideUp(300, function(){
               $(this).remove();
          });
          $('div.error.resistOnce').removeClass('resistOnce');
     }

     function sendLastError(action, type, msg){
          if(typeof type != 'undefined' || typeof msg != 'undefined'){
               var data = {
                    action: action,
                    type: type,
                    time: Date.now(),
                    session_id: session_id
               };
               if(typeof msg != 'undefined')
                    data.message =  msg.toString();
               if(typeof device != 'undefined'){
                    data.is_app = true;
                    data.platform = platform;
               }
               else
                    data.is_shop = true;
               localStorage.lastError = JSON.stringify(data);
          }
          if(typeof localStorage.lastError != 'undefined'){
               $.ajax({
                    method: 'POST',
                    url: 'https://the-gentleman.reservy.es/ajax.php?action=logError&projectId=1&platform=' + platform + '&lang=' + lang,
                    data: JSON.parse(localStorage.lastError),
                    success: function(data){
                         if(data.status == 'OK')
                              delete localStorage.lastError;
                         else{
                              setTimeout(function(){
                                   sendLastError();
                              }, 60 * 1000);
                         }
                    },
                    error: function(){
                         setTimeout(function(){
                              sendLastError();
                         }, 60 * 1000);
                    },
                    dataType: 'json'
               });
          }
     }

     function scrollTo(position, duration){
          if(typeof duration == 'undefined')
               duration = 1000;
          $('html, body').animate({
               scrollTop: position
          }, duration);
          parent.postMessage({event: 'scrollTo', scrollTo: position}, '*');
     }

     function doReserve(){
          removeErrors();
          $('#selection, #reserve').hide(0);
          $('#tab-4-loader').show(0);
          var data = {};
          if(session_id == -1){
               var user = {
                    firstname: $('#guestForm input[name="firstname"]').val(),
                    lastname: $('#guestForm input[name="lastname"]').val(),
                    email: $('#guestForm input[name="username"]').val(),
                    phone: $('#guestForm input[name="phone"]').val(),
                    newsletter: (($('#guestForm input[name="newsletter"]').prop('checked')) ? 1 : 0)
               };
               data.user = user;                    
          }
          else
               data.session_id = session_id;
          data.order = order;
          if(typeof device != 'undefined'){
               data.is_app = true;
               data.platform = platform;
          }
          else
               data.is_shop = true;
          $.ajax({
               method: 'POST',
               url: 'https://the-gentleman.reservy.es/ajax.php?action=reserve&projectId=1&platform=' + platform + '&lang=' + lang,
               data: data,
               success: function(data){
                    if(data.status == 'OK'){
                         $('#selection, #reserve, .appointment-header, #tab-4-loader').fadeOut(500, function(){
                              $('#tab-4').addClass('ok');
                              $('#selection b').text("Successfully reserved" + ':');
                              $('#ok, #selection, #restart').fadeIn(500);
                         });
                         finished = true;
                         selected_employee = order.employee;
                         order = {products: {}, day: false, hour: false, employee: false};
                         steps_ok = {1: false, 2: false, 3: false};
                    }
                    else{
                         $('#selection, #reserve').fadeIn(500);
                         $('#tab-4-loader').fadeOut(500);
                         if(data.type == 'HOUR_NOT_EXISTING'){
                              steps_ok[2] = false;
                              order.hour = false;
                              order.employee = false;
                              showError(data.message, '', true);
                              setTab(2);
                         }
                         else if(data.type == 'DAY_NOT_EXISTING'){
                              steps_ok[2] = false;
                              order.hour = false;
                              order.employee = false;
                              order.day = false;
                              showError(data.message, '', true);
                              setTab(2);
                         }
                         else if(data.type == 'SESSION_EXPIRED'){
                              session_id = false;
                              user = false;
                              if(localStorage['permanent_session_id']){
                                   doPermanentLogin(function(){
                                        doReserve();
                                   }, function(){
                                        steps_ok[3] = false;
                                        showError(data.message, '', true);
                                        setTab(3);
                                        $('#sessionForm').fadeOut(500, function(){
                                             $('#loginForm, #guestForm').fadeIn(400);
                                        });
                                   });
                              }
                              else{
                                   steps_ok[3] = false;
                                   showError(data.message, '', true);
                                   setTab(3);
                                   $('#guestForm p.title').removeClass('current');
                                   $('#guestForm .appointment-form-wrapper').hide(0);
                                   $('#loginForm p.title').addClass('current');
                                   $('#loginForm .appointment-form-wrapper').show(0);
                                   $('#sessionForm').fadeOut(500, function(){
                                        $('#loginForm, #guestForm').fadeIn(400);
                                   });
                              }
                         }
                    }
               },
               error: function(xhr, status, error){
                    if(status == 'timeout')
                         showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                    else if(status == 'parsererror')
                         showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                    else
                         showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                    sendLastError('reserve', status, error);
                    $('#selection, #reserve').fadeIn(500);
                    $('#tab-4-loader').fadeOut(500);
               },
               dataType: 'json'
          });
     }

     function doPermanentLogin(onSuccess, onFail){
          if(localStorage['permanent_session_id']){
               $.ajax({
                    method: 'POST',
                    url: 'https://the-gentleman.reservy.es/ajax.php?action=permanentLogin&projectId=1&platform=' + platform + '&lang=' + lang,
                    data: {
                         permanent_session_id: localStorage['permanent_session_id']
                    },
                    success: function(data){
                         if(data.status == 'OK'){
                              session_id = data.session_id;
                              user = data.user;
                              if(typeof data.last_employees != 'undefined')
                                   last_employees = data.last_employees;
                              steps_ok[3] = true;
                              $('#loginForm, #guestForm').fadeOut(500);
                              $('#loginForm input[type="text"], #loginForm input[type="password"], #loginForm input[type="email"], #loginForm input[type="phone"], #guestForm input[type="text"], #guestForm input[type="password"], #guestForm input[type="email"], #guestForm input[type="phone"]').val('');
                              $('#loginForm input[type="checkbox"], #guestForm input[type="checkbox"]').prop('checked', false);
                              $('#loginForm label.checkbox, #guestForm label.checkbox').removeClass('checked');
                              $('#sessionForm').fadeIn(500);
                              $('#sessionForm input[name="firstname"]').val(data.user.firstname);
                              $('#sessionForm input[name="lastname"]').val(data.user.lastname);
                              $('#sessionForm input[name="username"]').val(data.user.email);
                              $('#sessionForm input[name="phone"]').val(data.user.phone);
                              if(onSuccess)
                                   onSuccess();
                         }
                         else{
                              if(data.message != 'MAINTENANCE'){
                                   delete localStorage['permanent_session_id'];
                                   if(onFail)
                                        onFail();
                              }
                         }
                    },
                    dataType: 'json'
               });
          }
          else{
               if(onFail)
                    onFail();
          }
     }

     function showUserDataForm(clickedElement){
          var show = 'loginForm';
          var hide = 'guestForm';
          if(clickedElement){
               if(($(clickedElement).parent().attr('id') == 'guestForm' && !$('#guestForm p.title').hasClass('current')) || ($(clickedElement).parent().attr('id') == 'loginForm' && $('#loginForm p.title').hasClass('current'))){
                    show = 'guestForm';
                    hide = 'loginForm';
               }
               $('#passwordForgottenForm').slideUp();
               $('#' + hide + ' p.title').removeClass('current');
               $('#' + hide + ' .appointment-form-wrapper').slideUp();
               $('#' + show + ' p.title').addClass('current');
               $('#' + show + ' .appointment-form-wrapper').slideDown();
          }
          else if(typeof clickedElement == 'undefined' && $(window).width() < 991){
               $('#loginForm p.title, #guestForm p.title').removeClass('current');
               $('#loginForm .appointment-form-wrapper, #guestForm .appointment-form-wrapper').slideUp();
          }
          sendHeightToParentFrame();
          setTimeout(function(){
               sendHeightToParentFrame();
          }, 500);
     }

     function historyBack(){
          if($('body').hasClass('navActive'))
               $('body').removeClass('navActive');
          else if($('#appointment:visible').length > 0){
               if(currentTab == 1){
                    if (typeof cordova != 'undefined' && cordova.platformId !== 'windows')
                         navigator.app.exitApp();
                    else
                         throw new Error('Exit');
               }
               else
                    setTab(currentTab - 1);
          }
          else{
               $('section:not(#appointment)').hide(0);
               $('#appointment').show(0);
          }
     }

     function hideLoader(){
          $('#appLoader').hide(0);
          if($('#appLoader').length > 0)
               document.getElementById('appLoader').style.display = 'none';
          $("#pageLoader").fadeOut(400, function(){
               document.getElementById('pageLoader').style.display = 'none';
          });
     }

     function openNavigation(){
          var left = $(window).width() * 0.85;
          $('#page').css('position', 'absolute');
          $('body').addClass('navActive');
          if(left < 350)
               $('#page, #nextBar').css('left', left + 'px');
     }

     function closeNavigation(){
          $('body').removeClass('navActive');
          $('#page, #nextBar').css('left', '');
          setTimeout(function(){
               if(!$('body').hasClass('navActive'))
                    $('#page').css('position', '');
          }, 500);
     }

     function newReservation(){
          //resetAll();
          //setTab(1);
          window.location.hash = 'step' + currentTab;
          $('nav a.current').removeClass('current');
          $('nav a.new_reservation').addClass('current');
          $('section:not(#appointment)').hide(0);
          $('#appointment').show(0);
          scrollTo(0, 0);
          closeNavigation();
     }

     function showPage(hash){
          if(!isset(pages[hash]))
               return;
          window.location.hash = hash;
          $('nav a.current').removeClass('current');
          $('nav a.page' + pages[hash].id).addClass('current');
          $('section, #page_holder .text_holder').hide(0);
          $('#page_holder, #page_holder .loader').show(0);
          $('#page_holder .text_holder').empty();
          $.ajax({
               url: 'https://the-gentleman.reservy.es/ajax.php',
               data: {
                    projectId: 1,
                    action: 'getFormPage',
                    id: pages[hash].id,
                    platform: platform,
                    lang: lang
               },
               success: function(data){
                    if(data.status == 'OK'){
                         $('#page_holder .text_holder').html(data.content).show(0);
                         $('#page_holder .loader').hide(0);
                    }
                    else
                         showError(data.message);
               },
               error: function(xhr, status, error){
                    if(status == 'timeout')
                         showError(messages.AJAX_ERROR_TIMEOUT, ((error != '') ? '(' + error + ')' : ''));
                    else if(status == 'parsererror')
                         showError(messages.AJAX_ERROR_PARSING, ((error != '') ? '(' + error + ')' : ''));
                    else
                         showError(messages.AJAX_ERROR, '', '(' + status + ((error != '') ? ':' + error : '') + ')');
                    sendLastError('showPage', status, error);
               },
               dataType: 'json'
          });
          scrollTo(0, 0);
          closeNavigation();
     }

     function isset(elem){
          return (typeof elem != 'undefined' && elem != null && elem != '');
     }

     </script>

</a></body></html>