<!DOCTYPE HTML>
<html lang='de'>

<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width,initial-scale=1.0' />
  <link rel='alternate' hreflang='de-DE' href='https://www.musikstudio-ziebart.de/leistungen.html' />
  <link rel='preload' href='js/jquery-3.6.0.min.js' as='script' />
  <link rel='stylesheet' href='css/style.css' />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-66Z7DSTCPC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-66Z7DSTCPC");
    gtag("config", "AW-93825274");
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js",
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : " ";
      j.async = true;
      j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-5F9WD6T");
  </script>
  <!-- End Google Tag Manager -->
  <!-- de = deutschsprachig -->
  <meta name="DC.Language" content="de" />
  <meta name="description" content="Anmeldungs zu einem kostenlosen und unverbindlichen Probeunterricht!" />
  <meta name="revisit-after" content="7 days" />
  <link rel="shortcut icon" sizes=" 16x16" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="16x16" href="assets/apple-touch-icon.ico" type="image/x-icon" />
  <meta name="robots" content="index, follow" />
  <title>Kontakt</title>
</head>

<body>
  <!-- JavaScript jquery-3-6.0-min.js -->
  <script src='js/jquery-3.6.0.min.js' defer='defer'></script>
  <!-- JavaScript als externe Datei einbinden -->
  <script src='main.js' defer='defer'></script>
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F9WD6T" height="0" width="0" style="display: none; visibility: hidden">
    </iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <span>Kontakt</span>
    <button class="hamburger">&#9776;</button>
    <button class="cross">&#735;</button>
  </header>

  <!-- Hamburger Menu -->
  <div class="menu">
    <ul>
      <li><a href="index.html" class="aktive">Home</a></li>
      <li><a href="instrumentenkauf.html">Instrumentenkauf</a></li>
      <li><a href="honorar.html">Honorar</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
      <li><a href="leistungen.html">Leistungen</a></li>
      <li><a href="faq.html">FAQ</a></li>
      <li><a href="download.html">Download</a></li>
      <li><a href="impressum.html">Impressum</a></li>
    </ul>
  </div>

  <!-- Navigationsleiste -->
  <nav class="nav">
    <ul>
      <li><a href="index.html" class="aktive">Home</a></li>
      <li><a href="instrumentenkauf.html">Instrumentenkauf</a></li>
      <li><a href="honorar.html">Honorar</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
      <li><a href="leistungen.html">Leistungen</a></li>
      <li><a href="faq.html">FAQ</a></li>
      <li><a href="download.html">Download</a></li>
      <li><a href="impressum.html">Impressum</a></li>
    </ul>
  </nav>
  <section id="kontakt">
    <article>

      <?php

      //Datenbank Verbindungsaufbau

      $host = "localhost";

      $db_user = "web1553";

      $db_name = "usr_web1553_1";

      $db_pass = "ULAiGbe9";



      //kontaktformular empfaenger

      $empfaenger = "musikstudio-ziebart@outlook.de";



      $verbindung = mysql_connect($host, $db_user, $db_pass) or die("keine Verbindung möglich. Benutzername oder Passwort sind falsch");

      mysql_select_db($db_name) or die("Die Datenbank existiert nicht.");

      ///////



      if ($_POST) {

        $geburtsdatum = $_POST["geburtsdatum"];

        $wunschtermin = $_POST["wunschtermin"];

        $telefon = $_POST["telefon"];

        $instrument = $_POST["instrument"];

        $email = $_POST["email"];

        $betreff = $_POST["betreff"];

        $nachricht = $_POST["nachricht"];

        $vorname = $_POST["vorname"];

        $nachname = $_POST["nachname"];

        $strasse = $_POST["strasse"];

        $ort = $_POST["ort"];

        $plz = $_POST["plz"];

        $eltern = $_POST["eltern"];





        $message = "

Geburtsdatum : $geburtsdatum

Wunschtermin : $wunschtermin

Telefon : $telefon

Instrument : $instrument

Email : $email

Betreff : $betreff

Nachricht : $nachricht

Vorname : $vorname

Nachname : $nachname

Strasse : $strasse

Ort : $ort

Plz : $plz

Eltern : $eltern

";



        if ($geburtsdatum == "" || $wunschtermin == "" || $telefon == "" || $instrument == "" || $vorname == "" || $nachname == "" || $strasse == "" || $ort == "" || $plz == "" || !preg_match("/[.a-z0-9_-]+@+[.a-z0-9_-]+.+[.a-z0-9_-]{2,}/i", $email)) {

          echo "
                        <h4 align=center>Es wurden nicht alle Felder korrekt ausgefüllt!</h4><br>";
        } else {



          /*/Datenbankeintrag der Nachricht

                CREATE TABLE `usr_web1553_1`.`kontaktform` (

                `geburtsdatum` DATE NULL ,

                `wunschtermin` DATE NOT NULL,

                `telefon` VARCHAR( 20 ) NOT NULL,

                `instrument` VARCHAR( 10 ) NOT NULL ,

                `email` VARCHAR( 30 ) NOT NULL ,

                `betreff` VARCHAR( 20 ) NOT NULL,

                `nachricht` LONGTEXT NULL

                `vorname` VARCHAR( 20 ) NOT NULL,

                `nachname` VARCHAR( 20 ) NOT NULL,

                `strasse` VARCHAR( 20 ) NOT NULL,

                `ort` VARCHAR( 20 ) NOT NULL,

                `plz` VARCHAR( 10 ) NOT NULL,

                `eltern` VARCHAR( 20 ) NOT NULL,

                ) ENGINE = MYISAM ;

                /*/



          $sql = "INSERT INTO kontaktform SET

                `geburtsdatum` = '$geburtsdatum',

                `wunschtermin` = '$wunschtermin',

                `telefon` = '$telefon',

                `instrument` = '$instrument',

                `email` = '$email',

                `betreff` = '$betreff',

                `nachricht` = '$nachricht',

                `vorname` = '$vorname',

                `nachname` = '$nachname',

                `strasse` = '$strasse',

                `ort` = '$ort',

                `plz` = '$plz',

                `eltern` = '$eltern'";





          mysql_query($sql, $verbindung) or die(mysql_error());



          mail($empfaenger, $betreff, $message);

          echo "
        <h4 align=center>Besten Dank Frau/Herr <strong>$nachname</strong> fuer Ihre Mitteilung,

        <br>Sie haben das Formular erfolgreich abgeschickt!

        <br>Ich werde mich bald moeglichst bei Ihnen melden!</h4>

        ";
        }
      }



      ?>

      <?php include_once("analyticstracking.php") ?>

      <h2>Anmeldung zu einem kostenlosen Probeunterricht</h2>

      <p>Die mit optional gekennzeichneten Felder brauchen Sie nicht ausfuellen! Tipp: Beim Handy bei dem Feld "Geburtsdatum" oben auf
        das Jahr tippen, dann kann man die Jahreszahl bequem rückwärts einstellen!
      </p>

      <form action="kontakt.php" method="POST">
        <fieldset>
          <legend>Daten</legend>
          <br />
          <label for="geburtsdatum">Geburtsdatum: </label>
          <input type="date" name="geburtsdatum" id="geburtsdatum">
          <br />
          <br />

          <label for="wunschtermin">Wunschtermin: </label>
          <input type="datetime-local" name="wunschtermin" id="wunschtermin">
          <br />

          <label for="telefon">Telefon: </label>
          <input type="text" name="telefon" id="telefon" placeholder="z.B. 09116320890">

          <label for="instrument">Instrument: </label>
          <input type="text" name="instrument" id="instrument">

          <label for="email">E-Mail: </label>
          <input type="text" name="email" id="email">

          <label for="betreff">Betreff: </label>
          <input type="text" name="betreff" id="betreff" value="Probetermin">

          <label for="nachricht">Nachricht (optional): </label>
          <textarea id="nachricht" name="nachricht" textholder="Schreib etwas.." style="height:200px"></textarea>
        </fieldset>
        <fieldset>
          <legend>Name</legend>
          <br />
          <label for="vorname">Vorname: </label>
          <input type="text" name="vorname" id="vorname">

          <label for="nachname">Nachname: </label>
          <input type="text" name="nachname" id="nachname">
        </fieldset>
        <fieldset>
          <legend>Adresse</legend>
          <br />

          <label for="strasse">Strasse: </label>
          <input type="text" name="strasse" id="strasse">

          <label for="ort">Ort: </label>
          <input type="text" name="ort" id="ort">

          <label for="plz">Postleitzahl: </label>
          <input type="text" name="plz" id="plz">
        </fieldset>
        <fieldset>
        <br />
        <label for="eltern">Eltern (optional): </label>
        <input type="text" name="eltern" id="eltern">

        <input type="submit" value="Absenden">
        </fieldset>
      </form>
      <br />

      <h1>Freie Termine</h1>

      <!-- Tabelle für freie Termine-->
      <table>
        <thead>
          <tr>
            <th>Dienstag</th>
            <th>Mittwoch</th>
            <th>Donnerstag</th>
            <th>Freitag</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>14:00</td>
            <td>15:00</td>
            <td>15:30</td>
            <td>15:15</td>
          </tr>
          <tr>
            <td>15:30</td>
            <td>15:30</td>
            <td>16:00</td>
            <td>16:30</td>
          </tr>
          <tr>
            <td>16.00</td>
            <td>16:00</td>
            <td>16:30</td>
            <td>17:00</td>
          </tr>
        </tbody>
      </table>
      <p>
        <a href="index.html">zur&uuml;ck</a>
      </p>

    </article>

  </section>

  <!--footer-->

  <footer>
    <p>Kontakt</p>
  </footer>

</body>

</html>