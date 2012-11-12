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
        
        <h2>Kmom03: En gästbok i ditt MVC-ramverk</h2>
        <p>
        	Min plan fallerade totalt när det gäller leverans av delmoment på kursen. Mycket på den privata delen av livet som rullat igång, och då är det lätt att tappa tråden. Men nu äntligen i mål med moment 3. 
        </p>
        <p>Del 3 bestod av två bitar - Dels att bygga en gästbok med CodeIgniter - det var väldigt lätt och det gjorde jag på några timmar, för 4(!) veckor sedan. Sedan kom min man och hälsade på från USA och jag åkte till Barcelona. Väl tillbaka från Barcelona var det oerhört svårt att plocka upp tråden igen. Men bit för bit, några timmar här, några timmar där är jag lyckats hitta tråden och faktiskt även nysta upp garnet en bra bit. Bit 2 av detta kursmoment, bygga en gästbok i Lydia eller i ditt egna ramverk var en mastig bit att få ner men jag känner mig oerhört starkt nu när jag  svalt den. </p>
        <p>Låt mig ta momenten bit för bit</p>
        <p><strong>CodeIgniter</strong></p>
        <p>När det gällde CodeIgniter valde jag deras egna <a href="http://codeigniter.com/tutorials/watch/blog/" target="_blank">videotutorial</a> som, även om den inte bygger på senaste versionen av CI, var väldigt enkel att förstå och istället för att bygga en blogg byggde jag en gästbok. De bitar som skillde sig från nuvarande versionen av CI mot den i tutorialen googlade jag mig lätt fram till. </p>
        <p>Jag är kär i CI och redan under förra kursmomentet var jag inne och tittade på deras tutorials och läste på. Ett ramverk som jag trivs bra med. Upplägg och struktur passar mig bra (påminner om hur vi strukturerat Javaprojekt) jag gillar när det finns mycket att läsa på webben. Google är ens bästa vän som utvecklare.</p>
        <p><strong>HAL</strong></p>
        <p>Mitt egna ramverk HAL, som utgår från Lydia men där jag gjort en del avvikande val, mest gällande filstruktur, har också fått en liten gästbok.</p>
        <p>Denna har tagit lång tid, om man tittar på antalet veckor det var sen sist att bygga klart, men sett till faktiskt jobbade timmar har det gått relativt fort. Tyvärr har det varit väldigt splittrat och svårt, som jag skrev ovan att hitta tillbaka in i koden. Men resultatet känns bra. </p>
        <p>Jag har följt Lydia tutorialen för att bygga en gästbok men har hela tiden behövt stämma av mot vad jag gjort tidigare i HAL och vart jag vill med HAL framöver. Fastnade ganska tidigt och blev oerhört frustrerad när jag inte förstod vad som hände. Här fick jag hjälp av Mos och det var ett så simpelt misstag att jag lärde mig att verkligen dubbelkolla all kod och stega igenom ordentligt vad som händer. Som javaprogrammera är jag van att jobba med anvancerade IDE's och debugga och skriva Junit tester. Här är jag nybörjare och har inte riktigt hittat mina verktyg för att felsöka. Efter det misstaget så har det rullat på bra men har inte riktigt haft tiden att sitta ner längre stunder. När det var dags att koppla in databas valde jag direkt att frångå Lydia och istället koppla upp mig mot den databas som jag har via mitt webhotell. De kör med MySql och tack vare det så upplever jag att jag fick bättre förståelse för vad koden gör  än mot vad jag skulle fått om jag bara jobbat vidare rakt av mot Lydia. Läste på om PDO (Php Data Objects) blanda annat via PHP manualen online men även på exemplvis denna <a href="http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/" target="_blank">sida</a>. Det var en prioritering från min sida att faktiskt gå en egen väg här, det tog inte mycket mer tid än att bara köra Lydia rakt av, jag lärde mig mer, fick en aha-upplevelse angående config-filen. Vinsten i kunskap kontra tidsförlusten kändes större. Jag valde även att lägga till ett namn-fält i formuläret/tabellen. Jag vill veta vem som skriver till mig i min gästbok, och vad behöver jag ändra i befintlig kod för att lyckas spara ner, hämta upp och visa om jag lägger till ett extra fält? Igen, små ändringar som jag lär mig mycket av. Något jag funderar över är om lösenord och andvändarnamn till db ligger säkert i config-filen eller om man ska skydda dessa ytterligare?</p>
        <p>Jag valde i början av tutorialen att döpa om CObject till Controller och lägga den i min Controller-katalog. Efter tutorialens slut och efter att ha brytit ut view och model så är jag inte längre hundra på att jag vill att den ska ligga där, eller ens om den ska få heta Controller då GuestbookModel ärver från den också, inte bara GuestbookController. Min view för gästboken la jag i katalogen view och den fick namnet guestbook.tpl.php, kändes mer logiskt än Lydias upplägg och namnkonvention. Database.php (i Lydia CMDatabase) ligger i min core-katalog, ser den inte som en Model. </p>
        <p><em>Note: CSS'n för de fina meddelandena (lyckad kommunikation med db etc) funkar inte i Safari, dock i Chrome och Firefox. Står på min TODO men inte prioriterat.</em></p>
        <p>Jättekul moment även detta, om än svårt att hitta tillbaka in i koden. Känner mig både peppad och stressad inför vidare moment, men mest peppad då jag känner mig mer hemma i koden nu (och inte har varken besök eller resor inplanerade).</p>
        <p><a href="https://github.com/tinalogan/HAL/tree/KMOM03" target="_blank">HAL med gästbok finns på github</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom03/hal/guestbook" target="_blank">Skriv i HAL's gästbok</a> <br>
          <a href="https://github.com/tinalogan/HAL/tree/KMOM03" target="_blank">Min CI-gästbok finns på github</a><br>
          <a href="http://thelincolncircus.com/test/phpmvc/kmom03/codeigniter/index.php/" target="_blank">Skriv i min CI gästbok</a>
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
           <?php include './includes/footer.inc.php' ?>
        </footer> 
  </div> 


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
