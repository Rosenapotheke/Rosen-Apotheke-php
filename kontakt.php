<?php include("_header.php"); ?>
<title>Rosen Apotheke Leutkirch &bull; Kontakt</title>
</head>

<body class="noisy">

<div id="wrap">

<div class="container" id="logo">
<div class="row">
<div class="span12">
<!-- <img id="seitentitel" src="assets/img/logos/ra_seitentitel1000.png" alt="kopf1">-->
 
</div>
</div>
</div>


<!-- NAVBAR
================================================== -->
<div class="container">
<div class="navbar">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="./index.php">Rosen Apotheke Leutkirch im Allgäu</a>
<div class="nav-collapse collapse">
<ul class="nav">
<li class="">
<a href="./index.php">Start</a>
</li>
<li class="">
<a href="./notdienst.php">Notdienst</a>
</li>
<li class="">
<a href="./leistungen.php">Leistungen</a>
</li>
<li class="">
<a href="./produkte.php">Produkte</a>
</li>
<li class="">
<a href="./kundenkarte.php">Kundenkarte</a>
</li>
<li class="active">
<a href="./kontakt.php">Kontakt</a>
</li>
<li class="">
<a href="./impressum.php">Impressum</a>
</li>
<li class="">
<a href="./lageplan.php">Lageplan</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<?php include("_sidebar.php"); ?>



<div class="span8">
<div class="ra-unit">

<h2 class="blau">Kontaktformular</h2>
<p class="lead">
Wünschen Sie eine Medikamentenbereitstellung?<br>
Haben einen Vorschlag, ein Problem oder eine Anerkennung?<br>
Schreiben Sie uns.
<br>Die mit Stern (*) gekennzeichneten Felder sind erforderlich.</p>

<div id="fehler" class="fehlermeldung">
<h4 id="formResponse"><?php if($error) { echo($error); } ?></h4>
</div>

<form action="rosenapothekesend.php" class="contact-form" id="rosenapotheke"  method="post">

<fieldset>
<div class="control-group">
  <label class="control-label" for="vorname">Ihr Vorname</label>
  <div class="controls">
    <input type="text" class="span5" placeholder="Vorname" name="vorname" id="vorname">
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="name">Ihr Familienname*</label>
  <div class="controls">
    <input type="text" class="span5" placeholder="Familienname*" name="name" id="name">
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="ort">Ihr Wohnort</label>
  <div class="controls">
    <input type="text" class="span5" placeholder="Ort" name="ort" id="ort">
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="email">Ihre E-Mail-Addresse*</label>
  <div class="controls">
    <input type="text" class="span5" placeholder="E-Mail-Adresse*" name="email" id="email">
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="telefon">Ihre Telefonnummer</label>
  <div class="controls">
    <input type="text" class="span5" placeholder="Telefonnummer ohne Leer- und Sonderzeichen" name="telefon" id="telefon">
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="message">Weitere Mitteilungen</label>
  <div class="controls">
    <textarea class="input-xlarge span5" rows="5" placeholder="Weitere Mitteilungen" name="nachricht" id="nachricht" rows="5"></textarea>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="recaptcha"></label>
  <div class="controls" id="recaptcha">	
  <?php
      require_once('recaptchalib.php');
      $publickey = "6LefTt4SAAAAAL9BOzyrBPTHiQ5xA0CxGCSBH4Oo"; // Add your own public key here
      echo recaptcha_get_html($publickey);
    ?>    		      
  </div>
</div>

<div class="btn-group">
	<button id="abbrechen" class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button>
	<button id="rosenreset" class="btn" type="reset">Reset</button>
	<button id="rosensend" value="Send" name="rosensend" type="submit" class="btn btn-primary">Nachricht senden</button>
</div>
</fieldset>
</form>
</div>
</div>
</div>

</div>
<div id="push"></div>
</div>
<?php include("_footer.php");  ?>