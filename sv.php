// <?php
// Keep the starting tag commented else eval will fail! :O
// -------------------------------------------------------
// English language file for gMusic
// By Hampus Månsson
$lang["author"] = "Hampus Månsson";
$lang["author_attribution"] = "http://steamcommunity.com/profiles/76561198011752043";
$lang["lang"] = "Swedish";
$lang["lang_code"] = "sv";
$lang["options"] = // don't worry about editing this part
<<<EOT
<li><a href="/lang">Help Translate!</a></li>
<li role="separator" class="divider"></li>
<li><a onclick="setlang('en');">English</a></li>
<li><a onclick="setlang('pt');">Português Europeu</a></li>
<li><a onclick="setlang('pt-br');">Português Brasileiro</a></li>
<li><a onclick="setlang('de');">Deutsch</a></li>
<li><a onclick="setlang('ru');">Русский</a></li>
<li><a onclick="setlang('fr');">Français</a></li>
EOT;

// --- Translations

// Sidebar

$lang["name"] = "gMusic";
$lang["notfound"] = "notFound";
$lang["title"] = "gMusic";
$lang["title_caps"] = "gMUSIC";
$lang["title_subheading"] = "Välj din egen musik!";

$lang["side_home"] = "Hem";
$lang["side_what"] = "Vad är detta?";
$lang["side_players"] = "För Spelare";
$lang["side_owners"] = "För Ägare";
$lang["side_devs"] = "För Utvecklare";
$lang["side_testimonials"] = "respons";
$lang["side_premium"] = "Premium";
$lang["side_stats"] = "Statistik";

$lang["side_songs"] = "Låtar";
$lang["side_servers"] = "Servrar";

$lang["side_dashboard"] = "Instrumentpanel";
$lang["side_logout"] = "Logga Ut";

// Homepage

$lang["welcome"] = "Välkommen!";
$lang["cdn_by"] = "CDN av ";
$lang["maxcdn"] = "MaxCDN";
$lang["contact"] = "Kontakt";
$lang["signinwithsteam"] = "Logga in med Steam!";

$lang["stats"] = "STATISTICS";
$lang["stats_songs"] = "Totala låtar registrerade hos gMusic";
$lang["stats_users"] = "Totala användare registrerade hos gMusic";
$lang["stats_servers"] = "Totala servrar registrerade hos gMusic";
$lang["stats_betas"] = "Totala servrar registrerade hos gMusic beta";

$lang["what_is_gmusic"] = "VAD ÄR gMUSIC?";
$lang["what_is_gmusic_text"] = 
"Hatar du att behöva lyssna på laddningsmusiken du blir påtvingad av serverägare?

Med gMusic kan du själv välja vad du vill lyssna på!";

$lang["players"] = "SPELARE";
$lang["players_text"] = 
"Är du en Garry's Mod spelare som vill ändra musiken på alla servrar eller inaktivera den totalt?

Logga in med steam nedan för att fortsätta till kontrollpanelen.";

$lang["serverowners"] = "Serverägare";
$lang["serverowners_text"] = 
"Är du en serverägare som vill lägga till gMusic till din servers laddningsskärm?

Logga in med steam nedan för att fortsätta till kontrollpanelen.";

$lang["devs"] = "SERVERUTVECKLARE";
$lang["devs_text"] = 
"Är du en serverutvecklare som vill integrera gMusic med din hemsida?

Ta en titt på vår API-Referens !";
$lang["devs_button"] = "Besök API-Referens";

$lang["testimonials"] = "Respons";

// Welcome!
$lang["wel_welcome"] = "Välkommen!";
$lang["wel_welcometo"] = "Vålkommen till gMusic!";
$lang["wel_regular"] = "Är du en regelbunden Garry's Mod spelare? <a href='/dashboard/'>Välj låtarna du vill lyssna på!</a>"; // don't edit the tags, <a> and </a>
$lang["wel_owner"] = "Är du en serverägare eller en utvecklare? <a href='/dashboard/servers'>Registrera din server med gMusic idag!</a>"; // don't edit the tags, <a> and </a>

// Banned! :C
$lang["ban_banned"] = "Bannad!";
$lang["ban_uhoh"] = "Åh nej! Ser ut som att du är bannad... :C";
$lang["ban_contact"] = 'Du är välkommen att<a href="/contact">kontakta mig</a> för att överklaga denna bannlysningen.';

// Uh oh! :O
$lang["uhoh_uhoh"] = "Åh nej!";
$lang["uhoh_lookslike"] = "Ser ut som att någonting gick fel!";
$lang["uhoh_reported"] = "Oroa dig inte, felet har meddelats till en utvecklare som kommer fixa det inom kort.";

// Dashboard
$lang["dash_title"] = "gMUSIC INSTRUMENTPANEL";
$lang["dash_subheading"] = "Välj din egen musik!";
$lang["dash_songs"] = "Låtar";
$lang["dash_servers"] = "Servrar";
$lang["dash_addasong"] = "Lägg till en låt!";
$lang["dash_addnewsong"] = "Lägg till en ny låt";
$lang["dash_mutesongs"] = "Dämpa låtar";
$lang["dash_unmutesongs"] = "Odämpa låtar";
$lang["dash_cancel"] = "Avbryt";
$lang["dash_id"] = "ID";
$lang["dash_fail"] = "Misslyckat!";
$lang["dash_youtube"] = "YouTube";
$lang["dash_soundcloud"] = "Soundcloud";
$lang["dash_notimplimented"] = "(inte tillagt)";
$lang["dash_experimental"] = "(experimentiell)";
$lang["dash_add"] = "Lägg till";
$lang["dash_duration"] = "Varaktighet";
$lang["dash_videoid"] = "Video ID";
$lang["dash_enable"] = "Sätt på";
$lang["dash_disable"] = "Stäng av";
$lang["dash_delete"] = "Ta Bort";
$lang["dash_cancel"] = "Avbryt";
$lang["dash_reset"] = "Återställ";
$lang["dash_email_doconfirm"] = "Vänligen se din e-post för Bekräftelsemailet! ( din skräplåda om du inte hittar det)";
$lang["dash_email_confirmed"] = 'Tack för att du verifierat din e-post! Du kan nu <a data-toggle="modal" href="#addServerModal">lägga till en server</a>!';
$lang["dash_email_disposable"] = "Vänligen använd inte en falsk e-post, Vi kommer aldrig att spamma dig. Det är bara utifall att någonting går fel.";
$lang["dash_email_notverified"] = "Du kan inte lägga till en server för att din e-post ej är verifierad än!";
$lang["dash_addaserver"] = "Lägg till ny server";
$lang["dash_addserver"] = "Lägg till en server!";
$lang["dash_name"] = "Namn";
$lang["dash_loadingurl"] = "Laddningsskärm URL";
$lang["dash_optional"] = "Valfritt";
$lang["dash_email_verifytitle"] = "Verifiera din e-post!";
$lang["dash_email"] = "E-post";
$lang["dash_email_wontsell"] = "Vi kommer aldrig att sälja det, någonsin!";
$lang["dash_email_sendconfirmation"] = "Skicka bekräftelse";
$lang["dash_actions"] = "Handlingar";
$lang["dash_songs_deletemsg"] = // below
'<p>Är du säker på att du vill radera <b><?php echo($songtitle); ?></b>?</p>
<p>Du kommer inte längre att höra denna låten när du ansluter om du gör det!</p>'; // don't edit the tags, <b> to </b>
$lang["dash_selectoradd"] = // below
'Vänligen <a data-toggle="modal" href="#addSongModal">Lägg till en låt</a> eller välj en existerande till vänster.<br/>
En slumpmässig låt kommer att spelas när du ansluter till en server.'; // don't edit the tags, <a> to </a>
$lang["dash_serverselectoradd"] = // below
'Vänligen <a data-toggle="modal" href="#<?php echo($modal); ?>">Lägg till en server</a> eller välj en existerande till vänster.'; // don't edit the tags, <a> to </a>

// Servers
$lang["dash_resetapi"] = "RESET APIKEY";
$lang["dash_setupinstructions"] = "Installationsanvisningar";
$lang["dash_setupinstructions_text"] = // don't worry about editing this part
<<<EOT
<ul>
  <li>Din webbserverhost måste köra PHP på laddningsskärmen för att gMusic ska fungera korrekt.</li>
  <li>Om du inte använder PHP kan du använda andra programspråk, som t.ex. ASP, så länge du har angett ditt steamid korrekt!</li>
</ul>
<ol>
  <li>Hitta filen för din laddningsskärm.</li>
  <li>Om du redan har musik på din laddningsskärm, byt ut &lt;audio&gt; elementet med koden hittad under Inbädda Kod. </li>
  <li>Om du inte har någon musik på din laddningsskärm, placera inbäddningen vid botten nära &lt;/body&gt; tag.</li>
</ol>
EOT;
$lang["dash_embedcode"] = "Inbädda Kod";
$lang["dash_customjscode"] = "Anpassad JS Kod";
$lang["dash_customjscode_text"] = "Den anpassade javascriptsektionen tar vi avstånd från! Vänligen använd det uppkommande <a href='/api'>API</a> istället!";
$lang["dash_serverdelete"] = // below 
"
<p>Är du säker på att du vill ta bort <b>%s</b>?</p>
<p>All annan anpassad musik på laddningsskärmen kommer sluta att fungera!</p>
";
$lang["dash_resetapikey_modal_title"] = "Återställa API-Nyckeln?";
$lang["dash_resetapikey_modal_text"] = // don't worry about editing this part
<<<EOT
<p>Är du säker på att du vill återställa API-Nyckeln för <b>%s</b>?</p>
<p>Se till att uppdatera API-Nyckeln i din inbäddning!</p>
EOT;
$lang["dash_totalconnects"] = "Totala anslutningar";

// Servers - embed widget
$lang["dash_embedwidget"] = "Inbäddningswidget";
$lang["dash_embedwidget_text"] = "Hallå där! Jag håller bokstavligt talat på med Inbäddningswidgeten just nu! Du borde antagligen inte röra det här för att risken finns att något går sönder.";

// Premium
$lang["premium"] = "Premium";
$lang["premium_text"] = // below 
"
<p>Vill du hjälpa till med att stödja utvecklingen av gMusic?</p>
<p>När du köper premium försvinner stämpeln från inbäddningswidgeten och du får möjligheten att se antal unika besök på din laddningsskärm.Jag kommer också att designa widgeten till att passa på din sida!</p>
<p>Engångsbetalning på 43 SEK</p>
";
$lang["premium_already"] = "Du är redan premium!";
$lang["premium_notloggedin"] = "Du är inte inloggad!";

// 404
$lang["404"] = "404";
$lang["404_uhoh"] = "Åh nej! Det här var inte vad du letade efter...";
$lang["404_contact"] = 'Om du kom hit från en valid länk, vänligen <a href="/contact">låt mig får veta detta</a> eller så kan du <a href="/">gå tillbaka till startsidan</a>.'; // don't edit the tags, <a> and </a> (edit inside)

// Etc
$lang["contact"] = "Kontakt";


$lang["stats_views"] = "Totala antal serveranslutningar med gMusic";
