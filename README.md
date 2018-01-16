# js-truncate-html
Javascript function to truncate html-text and closing open tags. Short and sweet.

Usage:
```javascript
  cut_html("<p><b>html-text seems hard to be truncated</b></p>",26);
  
  // ..and you'll get:
  
  "<p><b>html-text seems hard</b></p>..."
```

ToDO:
- Make it only count text, now it also counts tag-characters
- Remove html-comments before cutting
