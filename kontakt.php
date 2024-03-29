<?php 
// KONTAKT

// ----------- Anmerkungen ---------------
// Für die Seite relevante Daten und Notizen
// To Do Liste
// Probleme

// SESSION starten
session_start();

// --> Variablen definieren
$seite = "kontakt.php";
$seitentitel = "go and fly - Kontakt";

// --> Datenbankdefinition
require_once("connect/db.php");

// --> Datenbankzugriffe
// Abfragen zu Formulareingaben und Definitionen von Inhalten

// --> HEADER
include("header.php");
$re = query_variablen();
?>

    <div id="main">
    	<div id="kontakt">
        <h2>Wichtige Information</h2>
        <p>Um mit uns in Kontakt zu treten, können Sie sich entweder direkt an eine/n unserer Mitarbeiter/in  wenden, die Service Nummer benutzen (Herr Rosenbusch)  oder Sie senden Sie Ihren beliebigen Wunsch via Kontaktformular.</p>
        
        <h3>Persönlicher Service:</h3>
        
        <p>Büro: Brüderstraße 15 (Mo-Fr 09.00-18.00 Uhr Sa. 10-13.00 Uhr)</p>
        <p>Frau Anke Kühne - 0345-2100511</p>
        <p>Frau Elisabeth Stoss /Auszubildente  - 0345-2100510</p>
        <p>Frau Renate Rosenbusch - 0345-2100515</p>
        <p>Herrn Mario Kernig - 0345-2100512(Buchhaltung)</p>
        <p>Herrn Dieter Rosenbusch - 0345-2100514</p>
        <p></p>
        <p>Büro: Geiststraße 18 (Mo-Fr 10.00-18.00)</p>
        <p>Frau Babett Naumann - 0345-388480</p>
        
		<h3>Täglich kostenloser Servicekontakt:</h3>
        <p>Nutzen Sie auch unsere kostenlose Servicenummer: 0800 - 000 12 64 (zwischen 8-22 Uhr)</p>

		<h3>Kontaktformular:</h3>
        <p>Bitte füllen Sie das folgende Formular möglichst vollständig aus. Unsere Mitarbeiter werden Ihre Anfrage schnellstmöglich bearbeiten und setzen sich dann mit Ihnen in Verbindung.</p>
        <form action="inc.php/mail.sc.php" method="post" name="kontaktform">
        	<?php
			if(isset($_GET["mailsend"]))
			{
				echo "<p style=\"color:red;\">Vielen Dank für Ihr Interesse. Wir werden uns schnellstmöglichst bei Ihnen melden.</p>"; 	
			}
			?>
        	<p>
            <select name="anrede">
            	<option value="0">Bitte auswählen</option>
            	<option value="Herr">Herr</option>
                <option value="Frau">Frau</option>
            </select></p>
            
            <p class="left">
            <input type="text" name="name" placeholder="Name" required /></p>
            
            <p class="left">
            <input type="text" name="vorname" placeholder="Vorname" required /></p>
            
            <p class="clear">
            <input type="text" name="adresse" placeholder="Straße, Hausnummer" required /></p>
            
            <p class="left">
            <input type="text" name="plz" placeholder="PLZ" required  /></p>
            
            <p class="left">
            <input type="text" name="ort" placeholder="Ort" required /></p>
            
            <p class="left">
            <input type="email" name="email" placeholder="E-Mail" required /></p>
            
            <p class="left">
            <input type="tel" name="telefon" placeholder="Telefon" required /></p>
            
            <p class="clear">
            <textarea name="frage" placeholder="Ihre Frage ..." required ></textarea></p>
            
            <p><input type="submit" value="Anfrage absenden" /></p>
            <input type="hidden" name="kontaktForm" value="true" />
            
        </form>
        </div> <!-- #kontakt -->
        <?php include("inc.php/sidebar.inc.php"); ?>
        <p class="clear"></p>
    </div> <!-- #main -->

<?php
// --> FOOTER
include("footer.php");
?>