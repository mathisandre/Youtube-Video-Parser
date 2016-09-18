# Youtube-Video-Parser
Very small class for parse Youtube videos when you build web apps in PHP.
Before, it was very boring to rewrite each time these methods, so I decided to share it. It's simple and small but badass.

## How to use 
If you want just getting the Youtube id of the video put this code.
```php 
VideoParser::get_id_youtubeURI('https://www.youtube.com/watch?v=oDiili2Gs-0');
```
If you want just getting the Youtube embed of the video put this code (and the second parameter to 1 if you want to enable autoplay).
```php 
VideoParser::get_embed_youtubeURI('https://www.youtube.com/watch?v=oDiili2Gs-0', 1);
