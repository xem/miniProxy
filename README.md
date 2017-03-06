miniProxy
===

A tiny PHP proxy

````php
<?php
if (preg_match("{^https?://example.com/}", $url = @$_GET['url'])) {
  readfile($url);
}
````

- Can be used to get any file or XHR request from another domain, with or without HTTPS.
- Can proxy any URL, even if it contains its own GET parameters.
- Requires a PHP server (d'uh!)
- NB: doesn't proxy the original headers or MIME-types. Only the data.
- NB: to avoid security breaches, replace "example.com" on line 2 with your whitelisted target domain(s).

---

Usage:

````js
// AJAX
x = new XMLHttpRequest();
x.open("GET", "proxy.php?url=" + encodeURIComponent(url), true);
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
