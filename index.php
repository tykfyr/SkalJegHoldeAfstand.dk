<!DOCTYPE html>
<html lang="da" dir="ltr">
<head>
	<title>Skal JEG holde afstand?</title>
	<meta name="description" content="Tjek om du skal holde afstand til andre mennesker herunder Coronakrisen">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta property="og:url"                content="https://skaljegholdeafstand.dk" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Skal JEG holde afstand?" />
	<meta property="og:description"        content="Tjek om du stadigvæk skal holde afstand til andre mennesker - få svar med det samme!" />
	<meta property="og:image"              content="https://skaljegholdeafstand.dk/skaljegholdeafstand.png" />

	<meta name="twitter:card"              content="summary">
	<meta name="twitter:creator"           content="@tykfyr" />
	<meta name="twitter:site"              content="@tykfyr">
	<meta name="twitter:title"             content="Skal JEG holde afstand?">

	<style type="text/css">
        html, body {
            height: 100%;
	        background: #c5221f;
	        color: #fff;
	        font-family: Tahoma, Verdana;
            padding: 10px;
        }

        html {
            display: table;
            margin: auto;
        }

        body {
            display: table-cell;
            vertical-align: middle;
        }

        ul > li {
            padding-left: 5px;
        }

        #answer > span {
            font-size: 13px;
            display: block;
            font-weight: normal;
        }

        p {
            padding: 0 10px;
        }

        #guide {
            display: none;
        }
	</style>
</head>
<body>
<h2 style="display:block; text-align:center; margin:40px 0; font-size: 44px;">Skal <b style="border-bottom: 4px solid #fff;">JEG</b> holde afstand?</h2>

<h1 style="display: block; text-align: center; margin: 40px 0; font-size: 64px; background: #fff; color: #333; padding: 10px;" id="answer">
    <img src="ajax-loader.gif" />
    <span>Testen start lige om lidt!</span>
</h1>

<div id="guide">
	<strong>Generelle gode Corona-råd</strong>: <br />
	<ul>
		<li>Vask dine hænder tit eller brug håndsprit</li>
		<li>Host eller nys i ærmet</li>
		<li>Undgå håndtryk, kindkys og kram</li>
		<li>Vær opmærksom på rengøring</li>
		<li>HOLD AFSTAND!</li>
	</ul>
Læs mere på <a href="https://www.sst.dk/da/corona/forebyg-smitte/generelle-raad" target="_blank" style="color: #fff;">Sundhedsstyrelsens hjemmeside</a>.
</div>

<p style="display: block; text-align: center; margin-top: 40px;">
	<code>En service af <a href="https://twitter.com/tykfyr" target="_blank" style="color: #fff;">@tykfyr</a></code>
</p>

<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript">
    let $ = jQuery;

    var text = ["Tjekker din alder", "Tjekker dit køn", "Tjekker om du er specialcase", "Banker dine dårlige undskyldninger til jorden", "Jamen.. Det er jo snart ju- NEJ!"];
    var counter = 0;
    var elem = $("#answer > span");

    var inst = setInterval(function() {
        elem.html(text[counter] + '..');
        counter++;
        if (counter > text.length) {
            counter = 0;
            clearInterval(inst);

            $('#answer').html('JA');
            $('#guide').css('display', 'block');
        }
    }, 1500);

</script>

</body>
</html>
