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
     <h2>Kmom06: CSS-ramverk och grid layout</h2>
        <p>
        Jag har läst igenom andras redovisningar kring detta avsnitt och många tycker att less är trevligt och bra. Vilket det säkert är, om det funkar som en vill.
        Varje gång jag försöker modifiera i style.php så är det något som inte vill sig och antingen så slår inte ändringarna igenom (trots tömd cache etc) eller så när jag backar
        till ursprungsfilen så vill den inte rendera sig rätt.        
        <p> Frustrerande minst sagt. Först visade den inte rätt typsnitt, nu visar den rätt typsnitt men allt innehåll placerar sig
          längst bort till höger. Testade att dra ner en kopia av Lydia version 0.2.18 tror jag det var och smacka upp på mitt webbhotell. Ser bra ut. Och ibland har det sett bra ut för mig med.
        Känslan av att inte ha kontroll irriterar mig oerhört.         
        <p>Det jag redovisar är jag inte nöjd med. Planen var att gå igenom tutorialen och utifrån Lydias  tema <em>Grid</em> bygga ett eget tema som  	jag kunde vara nöjd med. Det står på min TODO inför sluttampen och paketeringen. Får se om jag ens behåller Less. Diskuterade Less med en kollega på jobbet och han hade jobbat lite med det i ett projekt (stort webb-projekt för stort tv-bolag) men de hade valt att inte jobba med det till slut och plockat bort det. Men jag ger mig inte än. Ska labba lite mer och sen återstår att se hur det paketeras. Jag har testat att titta på mitt ramverk i Chrome, Safari och Firefox. Tömt cache, tagit bort style.less, style.css och style.css.cache och börjat om ett antal gånger. Men den renderar inte som den ska. 
     <p>Vad tycker du om gridbaserad layout?<br>
       De två artiklarna som man skulle läsa, <em>Technical Web Typography: Guidelines and Techniques</em> och <em>Fixed vs. Fluid vs. Elastic Layout: What's The Right One For You? </em> var riktigt bra artiklar och väldigt intressanta. Jobbade igenom tutorialen i den första. Och gridbaserad layout är smart, det blir vansinnigt snyggt och för ögat väldigt vilsamt när det ser rätt ut och ligger rätt. <br>
     Gillar hur Mos i Lydia hanterar regionerna, att visa dom endast om de har innehåll, kraftfullt.     
     <p>Vad tycker du om CSS ramverk i allmänhet och vilka erfarenheter har du av dem?<br>
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
