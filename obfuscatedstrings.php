<?php

return [
    "javascript:/*--></title></style></textarea></script></xmp><svg/onload=\'+/\"/+/onmouseover=1/+/[*/[]/+alert(1)//\'>",
    '<IMG SRC="javascript:alert(\'XSS\');">',
    '<IMG SRC=javascript:alert(\'XSS\')>',
    '<IMG SRC=JaVaScRiPt:alert(\'XSS\')>',
    '<IMG SRC=javascript:alert(&quot;XSS&quot;)>',
    '<IMG SRC=`javascript:alert("RSnake says, \'XSS\'")`>',
    '\<a onmouseover="alert(document.cookie)"\>xxs link\</a\>',
    '\<a onmouseover=alert(document.cookie)\>xxs link\</a\>',
    '<IMG """><SCRIPT>alert("XSS")</SCRIPT>"\>',
    '<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>',
    '<IMG SRC=# onmouseover="alert(\'xxs\')">',
    '<IMG SRC= onmouseover="alert(\'xxs\')">',
    '<IMG onmouseover="alert(\'xxs\')">',
    '<IMG SRC=/ onerror="alert(String.fromCharCode(88,83,83))"></img>',
    '<img src=x onerror="&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041"',
    '<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;&#39;&#88;&#83;&#83;&#39;&#41;>',
    '<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>',
    '<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>',
    '<IMG SRC="jav ascript:alert(\'XSS\');">',
    '<IMG SRC="jav&#x09;ascript:alert(\'XSS\');">',
    '<IMG SRC="jav&#x0D;ascript:alert(\'XSS\');">',
    '<IMG SRC=java' . "\0" . 'scr' . "\0" . 'ipt:alert(\"XSS\")>',
    '<IMG SRC=" &#14; javascript:alert(\'XSS\');">',
    '<SCRIPT/XSS SRC="http://xss.rocks/xss.js"></SCRIPT>',
    '<BODY onload!#$%&()*~+-_.,:;?@[/|\]^`=alert("XSS")>',
    '<SCRIPT/SRC="http://xss.rocks/xss.js"></SCRIPT>',
    '<<SCRIPT>alert("XSS");//\<</SCRIPT>',
    '<SCRIPT SRC=http://xss.rocks/xss.js?< B >',
    '<SCRIPT SRC=//xss.rocks/.j>',
    '<' . "\0" . 'p SRC="(\'XSS\')"',
    '</script><script>alert(\'XSS\');</script>',
    "exp/*<img STYLE='no\xss:noxss(\"*//*\");",
    "xss:ex/*XSS*//*/*/pression(alert(\"XSS\"))'>",
    '<a STYLE="xss:expression(alert(\'XSS\'))">foo</a>',
    '<a STYLE="xss:expression(al\u0065rt(1)(\'XSS\'))">bar</a>',
    '¼script¾alert(¢XSS¢)¼/script¾',
    '<META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K">',
    '<img STYLE="background-image:\0075\0072\006C\0028\'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029\'\0029">',
    '<!--[if gte IE 4]><SCRIPT>alert(\'XSS\');</SCRIPT><![endif]-->',
    '<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"></EMBED>',
    '<?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time"><?import namespace="t" implementation="#default#time2"><t:set attributeName="innerHTML" to="XSS<SCRIPT DEFER>alert("XSS")</SCRIPT>">',
    '<img src=jav' . "\0" . 'ascript:alert(String.fromCharCode(88,83,83))>',
    '<img src="https://xss.rocks/xss.js?"/>',
    '<img src=`${al\u0065rt(1)``}` />',
    // Overlong UTF-8
    '%C0%BCscript>alert(1)</script>%E0%80%BCscript>alert(1)</script>%F0%80%80%BCscript>alert(1)</script>%F8%80%80%80%BCscript>alert(1)</script>%FC%80%80%80%80%BCscript>alert(1)</script>',
    // Unicode escapes
    '<script>\u0061lert(1)</script>',
    // Decimal encoding with optional semi-colon
    '<a href="&#106;avascript:alert(1)">XSS</a><a href="&#106avascript:alert(1)">XSS</a>',
    // SVG script with HTML encoding
    '<svg><script>&#97;lert(1)</script></svg><svg><script>&#x61;lert(1)</script></svg><svg><script>alert&NewLine;(1)</script></svg><svg><script>x="&quot;,alert(1)//";</script></svg>',
    // Decimal encoding with padded zeros
    '<a href="&#0000106avascript:alert(1)">XSS</a>',
    // Hex encoding entities
    '<a href="&#x6a;avascript:alert(1)">XSS</a>',
    // Hex encoding without semi-colon provided next character is not a-f0-9
    '<a href="j&#x61vascript:alert(1)">XSS</a><a href="&#x6aavascript:alert(1)">XSS</a><a href="&#x6a avascript:alert(1)">XSS</a>',
    // Hex encoding with padded zeros
    '<a href="&#x0000006a;avascript:alert(1)">XSS</a>',
    // Hex encoding is not case sensitive
    '<a href="&#X6A;avascript:alert(1)">XSS</a>',
    // HTML entities
    '<a href="javascript&colon;alert(1)">XSS</a><a href="java&Tab;script:alert(1)">XSS</a><a href="java&NewLine;script:alert(1)">XSS</a><a href="javascript&colon;alert&lpar;1&rpar;">XSS</a>',
    // URL encoding
    '<a href="javascript:x=\'%27-alert(1)-%27\';">XSS</a>',
    // HTML entities and URL encoding
    '<a href="javascript:x=\'&percnt;27-alert(1)-%27\';">XSS</a>',
    // Data protocol inside script src with base64
    '<script src=data:text/javascript;base64,YWxlcnQoMSk=></script>',
    // Data protocol inside script src with base64 and HTML entities
    '<script src=data:text/javascript;base64,&#x59;&#x57;&#x78;&#x6c;&#x63;&#x6e;&#x51;&#x6f;&#x4d;&#x53;&#x6b;&#x3d;></script>',
    // Iframe srcdoc HTML encoded
    '<iframe srcdoc=&lt;script&gt;alert&lpar;1&rpar;&lt;&sol;script&gt;></iframe>',
    // Iframe JavaScript URL with HTML and URL encoding
    '<iframe src="javascript:\'&#x25;&#x33;&#x43;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x25;&#x33;&#x45;&#x61;&#x6c;&#x65;&#x72;&#x74;&#x28;&#x31;&#x29;&#x25;&#x33;&#x43;&#x25;&#x32;&#x46;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x25;&#x33;&#x45;\'"></iframe>',
    // SVG script with unicode escapes and HTML encoding
    '<svg><script>&#x5c;&#x75;&#x30;&#x30;&#x36;&#x31;&#x5c;&#x75;&#x30;&#x30;&#x36;&#x63;&#x5c;&#x75;&#x30;&#x30;&#x36;&#x35;&#x5c;&#x75;&#x30;&#x30;&#x37;&#x32;&#x5c;&#x75;&#x30;&#x30;&#x37;&#x34;(1)</script></svg>',
    //Img tag with base64 encoding
    '<img src=x onerror=location=atob`amF2YXNjcmlwdDphbGVydChkb2N1bWVudC5kb21haW4p`>',
    '<form><button formaction=//evil>XSS</button><textarea name=x>',
    '<a href=abc style="width:100%;height:100%;position:absolute;font-size:1000px;">xss<base href="javascript:/*--></title></style></textarea></script></xmp><svg/onload=\'+/"/+/onmouseover=1/+/[*/[]/+alert(1)//\'>"',
    '<a href=# language="JScript.Encode" onclick="#@~^CAAAAA==C^+.D`8#mgIAAA==^#~@">XSS</a><a href=# onclick="JScript.Encode:#@~^CAAAAA==C^+.D`8#mgIAAA==^#~@">XSS</a>',
    '<a href="javascript&#x6a;avascript:alert(1)">Firefox</a>',
    '<a href="javascript&colon;alert(1)">Firefox</a>',
    "<a href='j\0avasc\0ript&colon;alert(1)'>Firefox</a>",
    '<!-- ><img title="--><iframe/onload=alert(1)>"> --><!-- ><img title="--><iframe/onload=alert(1)>"> -->',
    '<svg><discard onbegin=alert(1)>',
    '<svg><use href="//subdomain1.portswigger-labs.net/use_element/upload.php#x" /></svg>'
];

