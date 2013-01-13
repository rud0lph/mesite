<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.1.min.js">
        </script>
    </head>
    <body>
    
   <div id="container">  
    
   <header></header>
<nav>
   		<?php include './includes/menu.inc.php' ?>
   </nav>
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">					Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->	
          <aside>
           <img src="img/tina2.jpg" width="180" height="180" alt="Tina">
           </aside>

        <!-- Add your site or application content here -->
        <section>
        <h2>Kmom08/10: Projekt och examination</h2>
     <p>
     <h3>Allmänt om projektet</h3>
     <p>Detta har varit en rolig och tuff resa. Avslutningen av projektet har tagit tid, men jag är också väldigt nöjd med slutresultatet. Hade kunnat... men väljer att bromsa. Detta är bra. Eftersom jag utgått från Lydia men gjort om en del har det varit en del pyssel, detta i samband med att jobba med git och GitHub har skapat ännu mer pyssel. Men efter en hel del testinstallationer och småfix är jag nu i mål. Heja mig!     </p>
     <h3>K1, K3 och K6</h3>
     <p>Här hittar du HAL på GitHub: <a href="https://github.com/tinalogan/HAL" target="_blank">https://github.com/tinalogan/HAL</a><br>
Referensinstallation med eget tema och controller: <a href="http://www.student.bth.se/~chwk12/halfromgit/my" target="_blank">http://www.student.bth.se/~chwk12/halfromgit/my</a> <br>
Referensinstallation med default tema, en ren HAL: <a href="http://thelincolncircus.com/hal/" target="_blank">http://thelincolncircus.com/hal/</a></p>
     <p>Du kan logga in med root/root, doe/doe och tina/tina</p>
     <p><strong>Krav k1: Installera från GitHub</strong><br>
Git och GitHub har jag jobbat med och använt sen uppgift två. Det har varit mycket learning by doing. Blev en hel del fel i början och jag har jobbat med bransher, inte tags och det blev ganska rörigt. Inför Kmom07 mergade jag alla brancher till master. Rensade bort alla utom master och började sen tagga versioner. Första fick heta v0.1. Nu inför redovisningen har jag senast tagen som heter v0.1.7.<br>
   </p>
     <p>Instruktionerna är ganska korta för att installera Hal då det är relativt straight forward. Har jobbat en hel del med ReadMe-filen och instruktionerna, men har inte gjort det övertydligt då jag läste detta inlägget i forumet: <a href="http://dbwebb.se/forum/viewtopic.php?f=35&t=766" target="_blank">http://dbwebb.se/forum/viewtopic.php?f=35&t=766</a><br>
       <br>
       Stegen: <br>
     Klona -&gt; ändra rättigheter på data-mappen -&gt; ev justera .htaccess -&gt; via IndexController köra module/install. <br>
     <br>
     Jag har själv testat detta både på min egen domän och på studentservern (här fick jag ändra .htaccess för att det skulle funka). Allt detta testade jag också nitiskt inför KMOM7 för att steget mellan 07 till 08 skulle bli mindre.</p>
     <p><strong>Krav k3: Ett anpassningsbart ramverk</strong><br>
       Då jag delvis har följt Lydia har ju kraven om att temat ska kunna anpassas följt med. Men jag valde att gå ifrån semantics och LESS och istället köra med Twitter Boostrap. Har jobbat igenom och lagt en hel del tid på att få min variant av Lydia att fungera fint med Bootstrap. En hel del pill med html-kod här och var för att då det att se riktigt snyggt ut. Jag är väldigt nöjd med slutresultatet. <br>
       <br>
       Du kan anpassa logotyp, titel på sidan, navigeringsmenyn, texten i footer, färgval etc.<br>
       Med HAL har jag valt att skicka med exempel på hur man kan anpassa i form av CCMycontroller och dess berörda filer. Controllern och koden för det temat är bortkommenterat i config.php men finns där som en referens och något att utgå från om man själv vill bygga vidare. <br>
       <br>
       Så klart kan man skapa, ändra och logga in som användare. Du kan skapa och ändra innehåll, både som blog och vanlig sida.<br>
       <br>
       Alla instruktioner finns i README-filen, återigen skrivna enligt beskrivningen om målgruppen.<br>
       Jag har en referensinstallation på studentservern. Där är tema, logo, titel, text i footer ändrat etc. Även färgen är annorlunda än default tema. Jag har skapat en användare (tina/tina). Har också skapat nytt innehåll, både blog och statisk sida.<br>
  </p>

     <p><strong>Krav k6: Projektdokumentation och Referensinstallation</strong><br>
       HAL har hela tiden varit baserat på Lydia men med mina egna små förändringar. <br>
     Detta för att jag kände att: </p>
     <ol>
       <li>Jag kan för lite PHP för att helt bygga eget ramverk. </li>
       <li>Gör jag modifieringar av Lydia kommer jag nog lära mig mer och förstå koden bättre. </li>
       <li>Jag gillade inte filstrukturen och filnamnen i Lydia.</li>
     </ol>
     <p>Sagt och gjort. Detta har gett mig både skratt, frustration, grått hår och massa kunskap.<br>
       Vad skiljer HAL och Lydia åt? Filstrukturen och namnkonventionen är redan nämda. Jag har valt att tydligare separera Modeller, Controllers och Views och lagt dem i olika kataloger. Jag har lagt allt som har med formulärhanteringen (Form-klasserna) i en egen katalog, form. Jag har döpt om site till application, src till core.<br>
       </p>
     <p>Namnkonventionen är alla controllers slutar med Controller, i.e. BlogController, alla modeller slutar med Model och alla views heter ngt i stil med user.tpl.php.<br>
       <br>
       View har jag också varit noga med att, eftersom de ligger alla i samma katalog, döpa dem logiskt. Alla views som är kopplade till user börjar med just user, i.e. userprofile, userlogin etc. Detsamma för övriga. Kanske kan man separera dem i underkataloger i framtiden? <br>
       <br>
       När vi började skriva till databas ville jag testa min domän och mitt webhotells MySQL och valde att koda för det istället. Det har jag både ångrat och gillat. Ångrat för att det själt dyrbar tid då syntaxen varit bråkig med mig. Gillat för att jag, återigen, lärt mig massor. <br>
       <br>
       Inför KMOM07 valde jag att köra med SQLLite och kodade stöd för det istället för MySQL. Bytet till SQLLite gjorde jag för att underlätta för installationer och att det &rdquo;bara ska vara och köra&rdquo; med HAL. Känns bra. Det enda som skiljer mot Lydia är att gästboken har ett extra fält, namn. Jag vill veta vem som skriver till mig :)<br>
       <br>
       Ett annat aktivt val jag gjort är att köra med Twitter Bootstrap istället. Varför? Det är sjukt snyggt. Det har stått på min &ldquo;att lära mig&rdquo;-lista ett tag och jag ville verkligen få till en snygg layout. Sagt och gjort. Återigen en chans att grotta ner mig i Lydia/Hal koden, bekanta mig mer med den och ändra där jag behövt och resultatet är fin-fint. Finns en hel del kvar att lära mig om Bootstrap dock.<br>
       <br>
       Kvaliteten på HAL ser jag som relativt god och jag ser många möjligheter med ramverket. Jag ser faktiskt fler möjligheter än svårigheter och jag kommer nog pilla med det i framtiden för att ändra mer. Kanske kommer jag bryta ut mer saker, döpa om och strukturera om. Definitivt kommer jag testa LESS igen. Började med bootstrap och LESS men upplevde en brist på kontroll, som säkert beror på bristande kunskap. Men jag kan se styrkan i LESS. <br>
       <br>
       Jag funderar mycket på separtion av html, php och css. Ibland känns det kladdigt med blandade element på så många platser, men jag har lite känslan av att det är så på webfronten. Back end utvecklingen är ju oftast renare. Kanske kan webutvecklingen också bli mer separerad? Gillar Lydias och Hals fina separation av databas-kod och SQL samt de interfacen som används. <br>
       <br>
       En nackdel jag kan se med att frångå Lydia med filstruktur är att jag skulle nog behöva tröska igenom koden igen och kanske förändra för att riktigt stödja min filstruktur. Lösningen som finns funkar, men allt kan alltid bli bättre. Fördelen med katalogstrukturen är att jag upplever att det är lättare att hitta och förstå uppdelningen av klasserna bara genom att titta på strukturen.</p>
<p>
  </p>
    <h3>Tankar om kursen</h3>
    <p>Kursens förkunskapskrav om man läser idag på BTH.se är de tre andra kurserna i kurspaketet. Det är nog en bra grej. Jag kan inte minnas att det kravet fanns inför HT12, då hade jag ju inte kommit in. </p>
    <p>Jag tycker ämnet är tokintressant och jag kommer gå kurspaketet nu under 2013 då jag tycker att det är bra innehåll, generellt, men också för att jag vill lära mig mer från grunden. Jag hade nog uppskattat om det fanns mer förklaring kring koden i tutorialen, under visa moment händer det så mycket i koden att det är svårt att riktigt förstå vad som händer, ibland ens varför. </p>
    <p>Jag kan känna att minimi-kravet (en kopia på Lydia med annat namn i princip) är för lågt. En blandning av eget och Lydia eller en helt egen variant känns mer rimligt med tydliga bitar som <em>måste</em> ingå. </p>
    <p>Kanske en längre kurs för att kunna fördjupa sig mer i Ramverksbygge, där första 7,5 poängen handlar om att lära sig CodeIgniter eller annat och fokus på vad ramverk och MVC är mer ingående och sen 7,5 poäng bygga Lydia-hybrid/eget ramverk?</p>
    <p> Sista grejen som stört mig oerhört är den ibland ohyggligt långa väntan på omdöme. Några moment har jag väntat 3 veckor på innan godkännande. För lång tid. Jag behöver kvitto på att jag gör rätt eller är på rätt väg för att hitta lust att jobba. När det är tyst så länge tappar man lite sugen. Men nu sist fick jag toksnabb respons, kul och peppande.<br>
      <br>
      På en skala 1 – 10 får kursen 6 Det är en bra kurs men den kan bli mycket bättre.<br>
      Forumet är för övrigt guld och mos snabba respons där är magiskt fin.</p>
    <p>Sen önskar jag mig en Ruby och Ruby on Rails kurs i framtiden ;)</p>
    <p>Toktack för bra kurs men andra ord!
    <p>        
    <hr>
</p> 
        
     <h2>Kmom07: Färdigställ och produktifiera ramverket</h2>
     <p>Nästan i mål. Jag är helt slut och drömmer om kod. Här är min slutversion av HAL (för den här kursen i alla fall)</p>
<p><strong>Git/Github<br>
</strong>I början var det väldigt krångligt med Git och GitHub och jag fick ta bort projekt och börja om den första gången jag försökt få upp HAL, förstod inte riktigt allt och valde att istället för att köra via terminal använda mig av mjukvaran GitHub för Mac. Då började det gå bättre. Jag har använt mig av brancher istället för tags då det inte stöds i gränssnittet och det är blivit lite kladdigt. Men nu har jag lagt ner lite tid på att lära mig mer Git i terminalen och det har varit bra och kul. Taggat några versioner och till mitt nästa projekt som jag laddar upp på GitHub kommer det nog både gå smidigare och vara bättre strukturerat. Jag gillar det skarpt och det är ett enormt kraftfullt sätt att dela kod, versionshantera etc. Det finns ingen direkt logik i mina taggar. Också tagit bort alla brancher efter merge till master så nu finns det en del trasiga länkar i mina förra redovisningar.</p>
        <p><strong>Summering av HAL</strong><br>
          Mitt ramverk, HAL, bygger på Lydia men jag har valt en annan filstruktur och i början också en annan databas (MySQL). Dels för att jag inte tyckte om hur Lydias filer är organiserade och dels för att det tvingar mig att sätta mig in i koden ordentligt. Jag har ju varit tvungen att koda annorlunda på sina ställen för att det ska fungera och det ger mig både huvudvärk och en känsla av att faktiskt kunna och lära. KUL! <br>
  <br>
     Jag har även valt att använda Twitter Bootstrap för att det har stått på min &rdquo;Att lära mig&rdquo;-lista. Testade först med Bootstrap med LESS men valde bort det. Kommer dock i framtiden testa det igen för jag vill ge det en ordentlig chans, tidsramen gav mig inte det utrymme jag behöver.</p>
        <p>Mellan KMOM5 och 6 blev utseendet på Hal förändrat och HAL var minst sagt fult efter KMOM6. Medan jag stegvis jobbat mig igenom KMOM7 har jag också lagt ner mycket på att få Hal att se bra ut, kör med basic Twitter Bootstrap utseende och jobbat igenom koden och byt ut en del kod som rör css. </p>
        <p>Resultatet är jag helt ok nöjd med, men vill verkligen lära mig mer kring hur du kan ändra på Boostrap för att få det exakt som du vill ha, färgval osv osv. Mycket kvar att lära där.</p>
        <p>Jag har också valt att byta ut databas och kör nu SQLLite, precis som Lydia fast med ett namn-fält i Gästboken. Bytet till SQLLite gjorde jag för att underlätta för installationer och att det &rdquo;bara ska vara och köra&rdquo; med HAL. Känns bra.</p>
        <p><strong>Testinstallation<br>
        </strong>        Drog ner dels på min egen domän och dels tills studentservern. Fick ändra på .htaccess på studentservern innan det funkade. Inget strul i sig,  men irriterande. </p>
<p>Det som ligger på Github använder default tema och default menyer men CCMycontroller ligger med samt mytheme som ett exempel för nya användare och allt som hör till så det var enkelt att koppla på.  Ska bli kul att skriva instruktionerna för hur man ska höra till KMOM08/10</p>
<p>
    <p>
		<a href="https://github.com/tinalogan/HAL/tree/v0.1.4" target="_blank">HAL på Github, tag 0.1.4</a><br>
      <a href="http://thelincolncircus.com/test/phpmvc/kmom07/hal/" target="_blank">Hal med tema default</a><br>
      <a href="http://thelincolncircus.com/test/phpmvc/kmom07/myhal/my" target="_blank">"MySite", sida med eget tema och egen kontroller, koden hämtad från GitHub.</a><br>
      <br>
         
</p>
<p>
<hr>
</p> 
        
        
<h2>Kmom06: CSS-ramverk och grid layout</h2>
        <p>
        Jag har läst igenom andras redovisningar kring detta avsnitt och många tycker att less är trevligt och bra. Vilket det säkert är, om det funkar som en vill. Varje gång jag försöker modifiera i style.less så är det något som inte vill sig och antingen så slår inte ändringarna igenom (trots tömd cache etc) eller så när jag backar till ursprungsfilen så vill den inte rendera sig rätt.
Hade även problem med att det var fel i style.less filen som jag kopierade rakt av från Lydia (version 0.2.18 och ngn senare också) så de ville inte kompilera.     
        <p> Frustrerande minst sagt. Först visade den inte rätt typsnitt, nu visar den rätt typsnitt men allt innehåll placerar sig
          längst bort till höger. Testade att dra ner en kopia av Lydia version 0.2.18 tror jag det var och smacka upp på mitt webbhotell. Ser bra ut. Och ibland har det sett bra ut för mig med.
        Känslan av att inte ha kontroll irriterar mig oerhört.         
        <p>Det jag redovisar är jag inte nöjd med. Planen var att gå igenom tutorialen och utifrån Lydias  tema <em>Grid</em> bygga ett eget tema som  	jag kunde vara nöjd med. Det står på min TODO inför sluttampen och paketeringen. Får se om jag ens behåller Less. Diskuterade Less med en kollega på jobbet och han hade jobbat lite med det i ett projekt (stort webb-projekt för stort tv-bolag) men de hade valt att inte jobba med det till slut och plockat bort det. Men jag ger mig inte än. Ska labba lite mer och sen återstår att se hur det paketeras. Jag har testat att titta på mitt ramverk i Chrome, Safari och Firefox. Tömt cache, tagit bort style.less, style.css och style.css.cache och börjat om ett antal gånger. Men den renderar inte som den ska. </p>
     <p>
       De två artiklarna som man skulle läsa, <em>Technical Web Typography: Guidelines and Techniques</em> och <em>Fixed vs. Fluid vs. Elastic Layout: What's The Right One For You? </em> var riktigt bra artiklar och väldigt intressanta. Jobbade igenom tutorialen i den första. Och gridbaserad layout är smart, det blir vansinnigt snyggt och för ögat väldigt vilsamt när det ser rätt ut och ligger rätt. <br>
     Gillar hur Mos i Lydia hanterar regionerna, att visa dom endast om de har innehåll, kraftfullt.  </p>   
     <p>
       CSS ramverk i allmänhet har jag väldigt lite erfarenhet av, fått tips om Twitters Bootstrap innan så det ligger här och väntar på mig, men än så länge väldigt lite erfarenhet. Eftersom jag kört på Lydias Grid-tema rakt av här använder jag mig av semantic.gs men hinner jag med kommer jag nog bygga ett tema med Twitter Bootstrap till slutpaketeringen.     
<p>Pst, om det ser rätt ut i din webbrowser så meddela gärna det :)
<p>
	<a href="https://github.com/tinalogan/HAL/tree/KMOM06" target="_blank">HAL på Github</a><br>
          <a href="  http://thelincolncircus.com/test/phpmvc/kmom06/hal/theme" target="_blank">Hal med tema Grid från Lydia</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom06/hal/source.php" target="_blank">HAL's källkod</a>
</p>
<p>
<hr>
</p> 
        
<section>
         <h2>Kmom05: Innehåll</h2>
        <p>
        Enkel och rolig del av kursen, gick väldigt fort att implementera, om man bortser från den tiden jag la på att lösa mina MySQL-knutar. Jag funderade faktiskt på att backa och köra med SQLite inför detta moment, men valde att fortsätta på MySQL. Finns en tanke om att ha stöd för både MySQL och SQLite i slutpaketeringen och då vill jag såklart ha koll på båda dialekterna.
</p>
<p>
Som vanligt kör jag Lydia, fast min egen version HAL där jag ändrat på katalogstruktur, filnamn och valt att köra med MySQL istället. Det tvingar mig att tänka till lite extra och då upplever jag att jag lär mig mer. 
</p>
<p>
Löste tidsstämplarna för created, updated och deleted efter att ha läst på <a href="http://michaelkimsal.com/blog/mysql-using-two-timestamps-for-createdupdated-values/" target="_blank">här</a> och <a href="http://dev.mysql.com/doc/refman/5.0/en/timestamp-initialization.html" target="_blank">här</a>. Hur man hanterar flera datumstämplar i MySQL var inte helt självklart, nyttig lärdom.
</p>
<p>
Kvar på min TODO kring den biten är:
<ul>
<li>Ändra i min php.ini fil så att min site har rätt tidzon inställd (mitt webbhotell är amerikanskt), datumen stämplas 6 timmar fel nu i databasen.</li>
<li>Fundera kring hur jag ska paketera valmöjligheten MYSQL och SQLite, om jag ens ska göra det.</li>
<li>Ändra i koden så att <em>"din profil uppdaterades senast Datum/Tid"</em> visar rätt. </li>
</ul>
</p>
<p>
Med MySQL var jag även tvungen att i mina queries definera vilken database engine (motor?) som ska användas då mitt hotell per default skapar upp alla tabeller som MyISAM, MyISAM stödjer inte joinade tabeller och främmande nycklar. Behöver alltså välja en annan motor, InnoDB. Det gör jag på alla utom Gästboken just nu.
Hur det påverkar prestanda eller annat låter jag vara osagt, ingen aning (än!).</p>
<p>
Med HTMLPurify var jag tvungen att ändra i min kod i bootstrap.php för att kunna ladda in de filerna. Enkelt gjort, dock funderar jag på hur det skulle bli med flera underkataloger i core-katalogen, kan bli många if-satser. Finns säkert snyggare lösning. Tål att funderas på. 
</p>
<p>
Jag har fortfarnade kvar Controller.php (CObject I Lydia) i controller-katalogen. Inte bestämt mig för varken namn eller plats för den än (se redovsning kmom3 kring mina tankar där).
</p>
<p>
I övrigt flöt det på bra, förutom en sak: 
</p>
<p>
Om content-tabellen inte existerar när man surfar in till 
<a href="http://thelincolncircus.com/test/phpmvc/kmom05/hal/content">http://thelincolncircus.com/test/phpmvc/kmom05/hal/content</a>
(vilket den inte är första gången man installerat ramverket) så kastades ett PDO-exception som inte fångas upp eftersom listAll i ContentModel.php anropar ExecuteSelectQueryAndFetchAll som försöker hämta från en icke-existerande tabell. 
</p>
<p>
Snabb lösning: sätta allt i en try catch i ExecuteSelectQueryAndFetchAll, det enda catch gör nu är att fångar felet.
Någon annan som sett detta? Eftersom Lydia inte fångar det så undrar jag om det handlar om valet av SQL-dialekt i samspel med PDO? Det är en try-catch i ListAll, men den verkar inte vilja fånga upp felet(?).
</p>
<p>
Jag skummade snabbt igenom XSS, inga kommentarer kring det, men vill läsa mer.
Implementerade inget extra utöver det i Lydia tutorialen.
<p>

För att testa min installation av HAL surfa till
<a href="http://thelincolncircus.com/test/phpmvc/kmom05/hal/">http://thelincolncircus.com/test/phpmvc/kmom05/hal/</a>
</p>
<p>
Klicka på user och sedan klicka på "Init database, create tables and create default admin user" – Detta bör skapa upp tabeller och användare.
<p>
Får du ett Sucess meddelande testa att logga in med root/root eller doe/doe via login-menyn uppe till höger.
</p>
<p>
Inloggad? Bra, testa att skapa upp innehåll genom att surfa till
<a href="http://thelincolncircus.com/test/phpmvc/kmom05/hal/content">http://thelincolncircus.com/test/phpmvc/kmom05/hal/content</a> och tryck på länken " Init database, create tables and sample content" 
</p>
<p>
Gick det bra? Fortsätt gärna att testa och editera innehåll, skapa nytt innehåll osv.
Hittar du ngt fel som jag inte nämnt (ex tidstämplarna) så skriv gärna det till mig.
</p>
<p>Observera att du inte kan skapa upp content-tabeller etc innan du skapar upp users.</p>
<p>
		<a href="https://github.com/tinalogan/HAL/tree/KMOM05" target="_blank">HAL på Github</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom05/hal/" target="_blank">Hal</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom05/hal/source.php" target="_blank">HAL's källkod</a>
</p>
<p>
<hr>
</p>     
        <h2>Kmom04: Modeller för login, användare och grupper</h2>
        <p>
        
Detta avsnitt var lättare än föregående, men jag fick problem med MySQL, framförallt datumhanteringen i MySQL har get mig gråa hår och jag valde efter någon timmes sökande på webben och en del tester att lägga det på TODO: min CREATED kolumn i tabellen USER sätts default till 0000:00:00 00:00:00 och av okänd anledning (än så länge I alla fall) så vill inte rätt UPDATED datum visas upp på user-sidan även om det står rätt i databasen.
</p><p>
Jag valde att titta på CodeIgniters formulärhantering då jag vill fortsätta lära mig mer om det ramverket. Enkelt och bra material, en bra tutorial och bra upplagt. 
</p><p>
CForm-klassen känns inte hundra överskådlig men efter en del pillande så börjar jag få grepp om den. Valde att använda den för min formvalidering då jag känner att för många avvikande steg från Lydia just nu kommer kosta mig mer än det smakar.
</p><p>
Lösenordet lagras med sha1salt algoritmen som i Lydia tutorialen. Funkar kanon. 
Jag gjorde extra uppgifterna, Reflections är fortfarande inte helt kristallklart för mig, men det är ett kraftfullt verktyg verkligen. Gravatar var sjukt smidigt att integrera, kul!
</p>
<p>
<a href="https://github.com/tinalogan/HAL/tree/KMOM04" target="_blank">HAL på Github</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom04/hal/user" target="_blank">Hal User</a> Logga in med root/root eller doe/doe (använder samma användare som i Lydia Tutorial <br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom04/hal/source.php" target="_blank">HAL's källkod</a>
</p>
<p>
<hr>
   </p>     
        <h2>Kmom03: En gästbok i ditt MVC-ramverk</h2>
        <p>
        	Min plan fallerade totalt när det gäller leverans av delmoment på kursen. Mycket på den privata delen av livet som rullat igång, och då är det lätt att tappa tråden. Men nu äntligen i mål med moment 3. 
        </p>
        <p>Del 3 bestod av två bitar - Dels att bygga en gästbok med CodeIgniter - det var väldigt lätt och det gjorde jag på några timmar, för 4(!) veckor sedan. Sedan kom min man och hälsade på från USA och jag åkte till Barcelona. Väl tillbaka från Barcelona var det oerhört svårt att plocka upp tråden igen. Men bit för bit, några timmar här, några timmar där är jag lyckats hitta tråden och faktiskt även nysta upp garnet en bra bit. Bit 2 av detta kursmoment, bygga en gästbok i Lydia eller i ditt egna ramverk var en mastig bit att få ner men jag känner mig oerhört starkt nu när jag  svalt den. </p>
        <p>Låt mig ta momenten bit för bit</p>
        <p><strong>CodeIgniter</strong></p>
        <p>När det gällde CodeIgniter valde jag deras egna <a href="http://codeigniter.com/tutorials/watch/blog/" target="_blank">videotutorial</a> som, även om den inte bygger på senaste versionen av CI, var väldigt enkel att förstå och istället för att bygga en blogg byggde jag en gästbok. De bitar som skilde sig från nuvarande versionen av CI mot den i tutorialen googlade jag mig lätt fram till. </p>
        <p>Jag är kär i CI och redan under förra kursmomentet var jag inne och tittade på deras tutorials och läste på. Ett ramverk som jag trivs bra med. Upplägg och struktur passar mig bra (påminner om hur vi strukturerat Javaprojekt) jag gillar när det finns mycket att läsa på webben. Google är ens bästa vän som utvecklare.</p>
        <p><strong>HAL</strong></p>
        <p>Mitt egna ramverk HAL, som utgår från Lydia men där jag gjort en del avvikande val, mest gällande filstruktur, har också fått en liten gästbok.</p>
        <p>Denna har tagit lång tid, om man tittar på antalet veckor det var sen sist att bygga klart, men sett till faktiskt jobbade timmar har det gått relativt fort. Tyvärr har det varit väldigt splittrat och svårt, som jag skrev ovan att hitta tillbaka in i koden. Men resultatet känns bra. </p>
        <p>Jag har följt Lydia tutorialen för att bygga en gästbok men har hela tiden behövt stämma av mot vad jag gjort tidigare i HAL och vart jag vill med HAL framöver. Fastnade ganska tidigt och blev oerhört frustrerad när jag inte förstod vad som hände. Här fick jag hjälp av Mos och det var ett så simpelt misstag att jag lärde mig att verkligen dubbelkolla all kod och stega igenom ordentligt vad som händer. Som javaprogrammera är jag van att jobba med anvancerade IDE's och debugga och skriva Junit tester. Här är jag nybörjare och har inte riktigt hittat mina verktyg för att felsöka. Efter det misstaget så har det rullat på bra men har inte riktigt haft tiden att sitta ner längre stunder. När det var dags att koppla in databas valde jag direkt att frångå Lydia och istället koppla upp mig mot den databas som jag har via mitt webhotell. De kör med MySql och tack vare det så upplever jag att jag fick bättre förståelse för vad koden gör  än mot vad jag skulle fått om jag bara jobbat vidare rakt av mot Lydia. Läste på om PDO (Php Data Objects) blanda annat via PHP manualen online men även på exempelvis denna <a href="http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/" target="_blank">sida</a>. Det var en prioritering från min sida att faktiskt gå en egen väg här, det tog inte mycket mer tid än att bara köra Lydia rakt av, jag lärde mig mer, fick en aha-upplevelse angående config-filen. Vinsten i kunskap kontra tidsförlusten kändes större. Jag valde även att lägga till ett namn-fält i formuläret/tabellen. Jag vill veta vem som skriver till mig i min gästbok, och vad behöver jag ändra i befintlig kod för att lyckas spara ner, hämta upp och visa om jag lägger till ett extra fält? Igen, små ändringar som jag lär mig mycket av. Något jag funderar över är om lösenord och användarnamn till db ligger säkert i config-filen eller om man ska skydda dessa ytterligare?</p>
<p>Jag valde i början av tutorialen att döpa om CObject till Controller och lägga den i min Controller-katalog. Efter tutorialens slut och efter att ha brytit ut view och model så är jag inte längre hundra på att jag vill att den ska ligga där, eller ens om den ska få heta Controller då GuestbookModel ärver från den också, inte bara GuestbookController. Min view för gästboken la jag i katalogen view och den fick namnet guestbook.tpl.php, kändes mer logiskt än Lydias upplägg och namnkonvention. Database.php (i Lydia CMDatabase) ligger i min core-katalog, ser den inte som en Model. </p>
        <p><em>Note: CSS'n för de fina meddelandena (lyckad kommunikation med db etc) funkar inte i Safari, dock i Chrome och Firefox. Står på min TODO men inte prioriterat.</em></p>
        <p>Jättekul moment även detta, om än svårt att hitta tillbaka in i koden. Känner mig både peppad och stressad inför vidare moment, men mest peppad då jag känner mig mer hemma i koden nu (och inte har varken besök eller resor inplanerade).</p>
        <p><a href="https://github.com/tinalogan/HAL/tree/KMOM03" target="_blank">HAL med gästbok finns på github</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom03/hal/guestbook" target="_blank">Skriv i HAL's gästbok</a> <br>
          <a href="https://github.com/tinalogan/ci-guestbook" target="_blank">Min CI-gästbok finns på github</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom03/codeigniter/index.php/" target="_blank">Skriv i min CI gästbok</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom03/hal/source.php" target="_blank">HAL's källkod</a>
     
          <br>
        </p>
<p>
</p>
        
        <hr>
        
        <h2><br>        
          Kmom02: Grunden till ett MVC-ramverk</h2>
<p>
       	Himmel vad lärorikt! Jag har suckat och blivit förbannad i omgångar, men landar i den här övningen med ett leende på läpparna.
    </p>
        <p>
        	Mitt ramverk heter <strong>HAL</strong>, som datorn i filmen 2001 A Space Odyssey. 
		</p>
        <p>
            MVC är inget nytt för mig då jag både lärt mig det när jag pluggade java innan samt har jobbat med java applikationer där man kört MVC design.
            Att bygga eget MVC-ramverk i PHP? Något alldeles nytt. Jag surfade runt en del och hittade såklart både 
            <a href="http://cakephp.org">CakePHP</a> 
            och <a href="http://codeigniter.com" target="_blank">CodeIgniter</a>. Tittade på 			
            tutorials för CodeIgniter och blev lite kär i hur vackert de strukturerat allt. Det kändes lite som magi. Efter det skummade jag igenom en del 
            andra tutorials, bland annat den 
            <a href="http://net.tutsplus.com/tutorials/php/create-your-first-tiny-mvc-boilerplate-with-php/" target="_blank">här</a> 
            och den <a href="http://r.je/mvc-in-php.html" target="_blank">här</a>.
            De kändes relativt enkla och rakt på sak, inte så mycket konstigheter. Men upplevde dem som lite begränsande.
        <p>
            Efter det så gick jag igenom Lydia tutorial och följde den stegvis. Hade lite svårt att hänga med i vad som hände, inte kring MVC-tänket utan 	
            kring hur man bygger ett PHP ramverk, .htaccess, php-kod och den något förvirrande katalogstrukturen i Lydia.
        </p>
        <p>  
            Jag kände ganska snabbt att strukturen på Lydia inte tilltalade mig - tycker det blir svårläst och rörigt med 		
            CCEnNyKlass, CMÄnnuEnKlass i samma katalog och jag ville direkt börja bryta ut och stuva om, men höll mig tills jag gått igenom tutorialsen. 	
            När det var gjort skapade jag  en kopia på min lokala Lydia och 
            döpte om den till HAL och började sen stegvis strukturera om det efter min egen smak. Jag trivs bra med en katalog för controllers, en för 
            models och en för views. Hur övriga filer ska struktureras är jag inte helt hundra på än, är kanske inte riktigt överens om hur katalogen core 
            ser ut eller dess namn, men jag lär väl göra om framöver några gånger. Jag har förberett med katalogerna model/ och view/ och även förberett i 
            bootstrap.php för att ladda in model-klasser.
        </p>
        <p>
            I övrigt har jag efter en del trial and error och genomgång av koden verkligen börjat uppskatta detta första lilla skelett som Lydia är. Att 
            stuva om efter eget tycke och anpassa Lydia gav mig större förståelse för hur mos tänkt, även om jag inte håller med om att ha en enda stor 
            katalog med diverse filer, känns som det rätt lätt kan svälla och bli oöverskådligt. Men mycket handlar nog om vana och jag är van vid att ha 	
            "ordentliga" (jmf IndexController och CCIndex) namn på klasserna och att dela upp i olika kataloger. Olika skolor :)
        </p>
        <p>
        	Hade en del småproblem att lösa i och med min omstrukturering, fick bland annat koda om i bootstrap.php för att kunna autoloada klasserna. 		
            Nöjd med lösningen för stunden i alla fall. I övrigt missade jag lite grejer i Lydia som jag sen fick hjälp med att hitta av mos och kunde få 	
            HAL att fungera.
        </p>
        <p>
            Reflection API och det kapitlet i boken var inte helt självklart för mig, kommer gå tillbaka till det igen. Använder det då jag använder 	
            Lydia-koden som bas. Men hade gärna gjort ett djupare dyk ner där. Tiden fanns inte riktigt för det. Verkar vara en bra grej dock :)
        </p>
        <p>
        	I övrigt tänker jag att mer och mer kommer landa för mig kring Lydia/HAL och jag ser fram emot vad som händer i del 3. Framför allt ser jag fram emot att skapa en tydligare uppdelning mellan Model View och Controller än vad som bjuds nu i Lydia/HAL. Bring it on!
        </p>
        <p>    
            <a href="https://github.com/tinalogan/HAL" target="_blank">HAL finns på github</a><br>
            <a href="http://thelincolncircus.com/test/phpmvc/kmom02/hal" target="_blank">HAL ser ut så här</a><br>
            <a href="http://thelincolncircus.com/test/phpmvc/kmom02/hal/source.php" target="_blank">HAL's källkod</a>
        </p>
        
        <hr>
        
        <h2>Kmom01: En boilerplate</h2>
        <p>Taggad till tusen kastade jag mig på uppgiften i förra veckan. Väldigt nyfiken på vad som komma skall och ivrig att lära mig. HTML5 är ju hur 
        kraftfullt som helst och jag älskar hur just enkelheten fått många små pusselbitar kring hur man får en hemsida att SE bra ut fallit på plats. Med 
        HTML5 och förbättrad CSS känns det som att de jobbar bättre ihop än någonsin (eller så har jag helt enkelt missat något innan).</p>
        <p>Jag sitter på en Mac Pro och kör med en MAMP installation på den. FileZilla som ftp-klient.<br>
          IDE är Dreamweaver CS5 och bildredigering gör jag i Photoshop CS5.</p>
<p>Begreppet  Boilerplate var något helt nytt och så även HTML5Boilerplate. Jag hittade en intro-film kring det, drog ner och började labba runt. Konceptet är jag helt med på och tycker det är smart och fantastiskt bekvämt. Detta kommer jag definitivt använda och utgå från mer i framtiden. Sen är jag osäker på vad som kan skalas bort eller bör läggas till. Men Learning by doing! Bästa sättet att lära sig på.</p>
<p>Min ingång till denna uppgift var att först försökte förstå grundtanken med boilerplate och sen därifrån börja koda min sida. Eftersom jag känner mig lite som en newbie när det gäller PHP har jag försökt hålla det enkelt och gjort ut efter vad jag lärt mig är bra att tänka på (includes, inc.php osv).<br>
  <br>
  Fokus på första uppgiften var att försöka utnyttja det som fanns med i Boilerplaten och på så sätt kunna fokusera mer på att få ihop en snygg sida med CSS och HTML5 i fin symbios och att jag skulle ta mig tiden att få igång den typen av kodande igen. Jag tycker det funkat bra. Haft en del hårslitande kring att få saker att se ut som jag vill och sådant men det har löst sig bra och jag har lärt mig mycket. Ett exempel där är att jag inte kunde begripa varför menyn inte ville vara där jag ville ha den. Med lite FireBug, lite googlande så fick jag äntligen skriva ett <code>!important</code> och glädjas åt att jag förstod varför jag skrev det och att det fungerade som jag ville. Jag gjorde en overwrite från <code>main.css</code> på en egenskap som fanns i <code>normalize.css</code> som kommer med HTML5Boilerplate. </p>
<p>Det som jag hela tiden burit med mig under de stunder jag kodat är hur HTML5Boilerplate renderar sidan i min iPad  och eftersom jag älskar min iPad, mobila applikationer och snygga websidor i mindre format är den biten med HTML5Boilerplate extra intressant just nu; inbyggt stöd för att fungera fint i smartphones. Och hur man det redan finns så mycket kod för att visas upp bra i de flesta webläsare (använder inte IE och vet ej hur siten ser ut där, men i Safari, Chrome och FF ser det kalas ut). I övrigt älskar jag den färdiga filstrukturen som man enkelt bygger vidare på. </p>
</p>
     </section>
		<footer> 
           <?php include 'file:///SAMSUNG/Development/Webdevelopment/HTML5_BoilerPlate/me/includes/footer.inc.php' ?>
        </footer> 
  </div> 


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="file:///SAMSUNG/Development/Webdevelopment/HTML5_BoilerPlate/me/js/plugins.js"></script>
        <script src="file:///SAMSUNG/Development/Webdevelopment/HTML5_BoilerPlate/me/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
