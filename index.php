<?php

use voku\helper\AntiXSS;

require_once __DIR__ . '/vendor/autoload.php'; // example path

$antiXss = new AntiXSS();

$simpleStrings = require('simplestrings.php');

$obfuscatedStrings = require('obfuscatedstrings.php');

$testStrings = array_merge($simpleStrings, $obfuscatedStrings);


$xssTest = '';

foreach ($testStrings as $testString) {

    $clean = $antiXss->xss_clean($testString);

    $xssTest .= "$clean<hr/>\r\n";
}

?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>
<body>

<h1>XSS test</h1>
<?= $xssTest ?>

<div style="display:none">
    <h1>DOM update section</h1>
    <p>Use this to trigger the hash of the body changing for the <pre>onhashchange</pre> event check</p>
    <p id="test-1"></p>
</div>

<script>
    $("#test-1").text("Hello World")
</script>

</body>
</html>

