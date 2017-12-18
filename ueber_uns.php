<?php 
// ÜBER UNS

// ----------- Anmerkungen ---------------
// Für die Seite relevante Daten und Notizen
// To Do Liste
// Probleme

// SESSION starten
session_start();

// --> Variablen definieren
$seite = "ueber_uns.php";
$seitentitel = "go and fly - Über uns";

// --> Datenbankdefinition
require_once("connect/db.php");

// --> Datenbankzugriffe
// Abfragen zu Formulareingaben und Definitionen von Inhalten

// --> HEADER
include("header.php");
$re = query_variablen();
?>

    <div id="main">
    	<div id="ueber_uns">
        <h2>Dieter Rosenbusch</h2>
        <p><img src="img/dieter_rosenbusch.png"/> ist Inhaber der Firma GO and Fly, die seit 1992 besteht und mit seiner Frau Renate geführt wird. Berufsausbildung und Studium der Geographie erzeugten ein weitreichendes Interesse an Reisevarianten, die individuell, aktiv und mit Bildungsinhalten verbunden sind. Zahlreiche Reisen führten durch Gesamteuropa, in alle tropischen Gebiete, zahlreiche Gebirgsregionen und in die Antarktis.  Wandern/Trekking, Gleitschirmfliegen und Golf sind einige der wichtigsten Sportarten, die Freizeit und Beruf gleichermaßen mitbestimmen. Akzeptable Beherrschung von 5 Sprachen, ermöglicht die internationale Kommunikation mit Geschäftspartnern und Kunden. </p>
        
        <h2 class="clear">GO and FLY </h2>
        <p>wurde am 1.4.1992 in Halle/Saale gegründet. Inhaber unserer Reisemanufaktur sind heute Dieter und Renate Rosenbusch. Mit 3, über das Stadgebiet verteilten Filialen, und maximal 8 Beschäftigten, verstand sich die Firma zunächt als Spezialist für individuelles Reisen. Diese wurden nach Kundenwunsch bei Spezialveranstaltern herausgesucht oder aus Bausteinen zusammengestellt. Daraus ergaben Sie Verträge mit oft kleineren , nach Region und Inhalt speziell aufgestellten Reiseanbietern, die sich als leitungsfähiger erwiesen. Expeditionen und das Interesse an polaren Regionen schafften Berührungspunkte zu Expeditionsseereisen, die wir bei unserer Firma "Leinen Los Kreuzfahrten" angesiedelt haben.  Gegenwärtig verknüpfen wir unseren Auftritt mit allen üblichen Kanälen im Social-Media Umfeld. Wir möchten Sie mit unserer neu gestalteten Internetseite in die Lage versetzen, wann immer Sie es wünschen, nach interessanten Reiseangeboten Auschau zu halten. Bei unseren wichtigsten Partnern "Studiosus" , "Diamir" und "Chamäleon" können Sie nun  alle Angebote online prüfen oder buchen. Wir bleiben Ihr täglicher Service Partner! Ebenso wichtig ist es uns, nahzu beliebigen Reisewünschen zu entsprechen, die Sie uns über das "Kontaktformular" übermitteln können. Alle Mitarbeiter sind speziell qualifiziert, besitzen  zertifizierten IHK Abschlüsse oder touristisch relevante Hochschulabschlüsse. Wir möchten Sie anregen, sich auf den Wege zu machen, sei es zu Fuss ...oder gar per Kreuzflug. Es bleibt dabei "Jede Reise beginnt mit dem ersten Schritt".</p>
        </div> <!-- #ueber_uns -->
        <?php include("inc.php/sidebar.inc.php"); ?>
        <p class="clear"></p>
    </div> <!-- #main -->

<?php
// --> FOOTER
include("footer.php");
?>