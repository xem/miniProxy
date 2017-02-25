<?php
if (preg_match("{^https?://example.com/}", $url = @$_GET['url'])) {
  readfile($url);
}
