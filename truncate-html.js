function cut_html(txt,n){
  // first cut
  var t=txt.substring(0,n);
  // remove opened+closed tags
  var tx=t.replace(/<(.*?[^\/])>.*?<\/\1>|<.*?\/>/,"");
  // capture open tags
  var ar=tx.match(/<((?!li|hr|img|br|area|base|col|command|embed|input|keygen|link|meta|head|param|source|track|wbr).*?)>/g);
  // close tags
  if (ar) t=t+"&hellip;"+ar.reverse().join("").replace(/</g,"<\/");
	else t=txt;
  return t;
}
