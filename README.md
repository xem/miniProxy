miniProxy
===


A tiny (86b) PHP proxy.

````php
<?php echo file_get_contents(preg_replace("/^.*?url=/","",$_SERVER['REQUEST_URI']));?>
````

- Can be used to get any file or XHR request from another domain, with or without HTTPS.
- Can proxy any URL, even if it contains its own GET parameters.
- Requires a PHP server (d'uh!)
- NB: doesn't proxy the original headers or MIME-types. Only the data.

---

Usage:

````js
// AJAX
x = new XMLHttpRequest();
x.open("GET", "proxy.php?url={url}", true);
x.send(null);

````

````html
<!-- image -->
<img src="proxy.php?url={url}/image.gif">

<!-- video -->
<video src="proxy.php?url={url}/image.gif">

<!-- binary file download -->
<a download="file.zip" href="proxy.php?url={url}/file.zip">download</a>
````