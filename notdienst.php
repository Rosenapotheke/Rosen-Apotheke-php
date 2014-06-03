<?php include("_header.php"); ?>
<title>Rosen Apotheke Leutkirch &bull; Notdienstkalender</title>
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
<li class="active">
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
<li class="">
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
<div class="span12">
<div class="ra-unit">
<h2 class="blau">Notdienstkalender</h2>
<p class="lead">Bitte geben Sie die Postleitzahl Ihres Wohnortes und das gewünschte Datum ein.<br/>
Nach Anklicken der Taste &quot;<b>Notdienst suchen</b>&quot; erhalten Sie eine Auswahl <b>dienstbereiter Apotheken</b><br/>
im Umkreis von zirka 15 Kilometern von Ihrem Wohnort.</p>
<iframe class="container kalender"
              style="width: 100%; height: 800px; background-color: #f5e5c5;"
              src="http://lakbw.notdienst-portal.de/">
</iframe>
</div>
</div>
</div>
</div>
<div id="push"></div>
</div>
<?php include("_footer.php");  ?>