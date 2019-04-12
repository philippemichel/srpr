<?php
  ob_start();
  $base=new PDO(
    'mysql:host=localhost;dbname=phpmyadmin','phpmyadmin','polii'
    ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
  );
  ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
  session_start();
  $_SESSION['connect']=0;
  ?>
<!DOCTYPE HTML PUBLIC "HTML">
<html lang ="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://code.cdn.mozilla.net/fonts/fira.css">
    <link rel="stylesheet" href="style.css"/>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>SRPR</title>
  </head>
  <body>
    <header>
      <h1>SRPR</h1>
      <h2>Fichier patients</h2>
    </header>
    <DIV class="corps">
      <aside>
        <p>De la place pour un texte explicatif ou autre. </p>
        <HR>
        <p>V 1.3 du 14/02/2019</P>
    </aside>
    <SECTION>
      <form action="postindex.php" method="POST">
        <fieldset>
          <p> <LABEL FOR="login">Nom</LABEL>
          <input type="text" name="login" id="login" maxlength=30 size=20 required value="rea"></BR>
          <LABEL FOR="pass">Mot de passe </LABEL>
          <input type="password" name="pass" id="pass" maxlength=30 size=20 required value="srpr"></p>
          <p CLASS="fin"> <input class="summ" type="SUBMIT" value="Validation"></p>
        </fieldset>
      </form>
      <h4>Pour tout problème, <a mailto:philippe@docteur-michel.fr>philippe (at) docteur-michel.fr</a>.</h4>
    </section>
  </DIV>
  <footer>
    <address>Dr Philippe MICHEL - SRPR<br/>
      <!-- hhmts start -->Last modified: Fri Feb  8 17:44:30 CET 2019 <!-- hhmts end -->
    </address>
  </footer>
</body>
</html>
