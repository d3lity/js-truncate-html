<?php
function cut_html($txt,$n){
	// first cut
	$t=preg_replace("/<pre[^>]*?>|<\/pre>/im","",$txt);
	$t=preg_replace("/<(img|input|embed|hr|link|track)[^§]+?>/i","",$t); 
	$t=mb_substr($t,0,$n);
	// remove closed tags
	$tx=preg_replace("/<(.*?[^\/])>.*?<\/\\1>|<.*?\/>/","",$t);
	// capture open tags
	$f=preg_match_all("/<((?!li|hr|img|br|area|base|col|command|embed|input|keygen|link|meta|head|param|source|track|wbr).*?)>/",$tx,$ar);//,PREG_SET_ORDER);
	// close tags
	if ($f) $t=$t."&hellip;"."</".implode("></",array_reverse($ar[1])).">";
	else $t=$t."&hellip;";
	return $t;
}
