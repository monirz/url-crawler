#url-crawler

###A simple crawler for crawling all the link-url from a website.

##How to use
```php
require 'Crawler.php';
$url = 'htttp://www.example.com';
$links = Crawler::url($url)->getUrl();

var_dump($links);

```
