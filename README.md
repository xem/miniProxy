miniProxy
===

A tiny PHP proxy

````php
<?php
if(preg_match("{^(https?://)?(www\.)?(example\.com|example\.net)/}",$url=preg_replace("{^.*?url=}","",$_SERVER['REQUEST_URI'])))readfile($url);
else die("Bad URL");
````

- Can be used to get any file or XHR request from another domain, with or without HTTPS.
- Can proxy any URL, even if it contains its own GET parameters.
- Requires a PHP server.
- doesn't proxy the original headers or MIME-types. Only the data.
- to avoid security breaches, you need to whitelist your target domain(s) by editing the ````(example\.com|example\.net)```` part.

---

Usage:

````js
// AJAX
x = new XMLHttpRequest();
x.open("GET", "proxy.php?url=" + url, true);
x.send(null);

````

````html
<!-- image -->
<img src="proxy.php?url={url}/image.gif">

<!-- video -->
<video src="proxy.php?url={url}/image.mp4">

<!-- binary file download -->
<a download="file.zip" href="proxy.php?url={url}/file.zip">download</a>
````
