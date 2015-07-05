<?php

if(!mysql_connect("mysql1043.servage.net", "colurs", "weretherainbow")) {
	exit("Could not connect to database server!");
}
if(!mysql_select_db("colurs")) {
	exit("Could not select database!");
}

$title = "Spectrum";

$allcolors = glob($root . "*"); // grab all directories
foreach($allcolors as $key => $dir) {
// remove everything except color _directories_
	if(strstr($dir, "admin") != false || strstr($dir, "img") != false || !is_dir($dir)) {
	// we use strstr because the various ../ / etc will get in the way of a ==
		unset($allcolors[$key]);
	} else {
	// strip it down to only the word of the color
		$allcolors[$key] = str_replace(".", "", $allcolors[$key]);
		$allcolors[$key] = str_replace("/", "", $allcolors[$key]);
	}
}
$allcolors = array_values($allcolors); // and reform the array to reorganize the keys

function print_post($title, $body, $time, $author, $id, $indie = false) {
// in this function, $author is the author of the post that will be displayed, NOT $color
// $color is what it always is; the current color of the blog being viewed, or "" on homepage
global $root, $color;
	
	// implemented for White:
	// $author is the name of the author, e.g. "White";
	// $authcol is the coloring to use, e.g. "Gray"
	if($author == "White")
		$authcol = "Gray";
	else
		$authcol = $author;
	
	print("<h1>");
	if(!$indie) // link the title only if there are other posts being displayed
		print("<a href=\"" . $root . $author . "/?p=" . $id . "\" style=\"color: " . $authcol . ";\">" . postparse($title) . "</a>");
	else
		print("<span style=\"color: " . $authcol . ";\">" . postparse($title) . "</span>");
	print("</h1>\n<div class=\"descr\">" . date("M j, Y") . " by ");
	if(isset($_GET['p']) || !isset($color)) // link author name if we're not at the author's page
		print("<a href=\"" . $root . $author . "\" style=\"color: " . $authcol . ";\">" . $author . "</a>");
	else // otherwise, don't link it
		print("<span style=\"color: " . $authcol . ";\">" . $author . "</span>");
	print("</div>\n<div class=\"post_body\">" . postparse($body) . "</div><br />\n");
	$query = mysql_query("SELECT * FROM comments WHERE post = '" . $id . "' ORDER BY time ASC");
	$num_comments = 0;
	while($comment = mysql_fetch_assoc($query)) { // this scroll through is only meant to count comments
		$num_comments++;
	}
	if($indie)
		print("<a name=\"comments\"></a><span style=\"color: " . $authcol . ";\">" . $num_comments . " comments</span><br /><br />\n");
	else
		print("<a href=\"" . $root . $author . "/?p=" . $id . "#comments\" style=\"color: " . $authcol . ";\">" . $num_comments . " comments</a><br />\n");
	if($indie) { // display comments if only this post is the only one being displayed
		$query = mysql_query("SELECT * FROM comments WHERE post = '" . $id . "' ORDER BY time ASC");
		while($comment = mysql_fetch_assoc($query)) { // $query is still set from the first scroll through comments
			$query2 = mysql_query("SELECT * FROM commenters WHERE id = '" . $comment['commenter'] . "'");
			$commenter = mysql_fetch_assoc($query2); // grab info about commenter
			print("<div class=\"descr\"><a href=\"" . $root . "?user=" . $commenter['id'] . "\" style=\"color: " . $color . ";\">" . $commenter['alias'] . "</a> says:</div>\n");
			print("<blockquote class=\"comment\">" . $comment['body'] . "</blockquote>");
		}
		print("<p><b>Comment on this post</b></p>\n");
		print("<form action=\"" . $root . $color . "/?p=" . $id . "\" method=\"post\">\n");
		print("<div class=\"descr\">Email (<a href=\"" . $root . "?register\" target=\"_blank\">need to register?</a>)</div>\n");
		print("<input type=\"text\" name=\"email\"><br />\n");
		print("<div class=\"descr\">Password</div\n");
		print("<input type=\"password\" name=\"pass\"><br /><br />\n");
		print("<div class=\"descr\">Body</div>\n<textarea name=\"body\" cols=\"40\" rows=\"8\"></textarea><br /><br />\n");
		print("<input type=\"submit\" name=\"comment\" value=\"Submit\"></form>");
	}
}

function preparse($string) {
// use this function to parse text for entrance into the database
	$string = addslashes($string);
	return $string;
}

function postparse($string) {
global $allcolors;
// use this function to parse text for display
	$string = stripslashes($string);
	$string = nl2br($string);
	
	// start bbcode
	
	if(is_array($allcolors))
	// tbh i have NO idea why this IF works, but if it's not here we get an invalid implode() error all over the place
		$allcolors2 = !empty($allcolors) ? implode('|', $allcolors) : 'Red'; // make sure allcolors always has a value
   	$replace = array('~\[url=(https?://.*?/)(' . $allcolors2 . ')(/.*?)\](.*?)\[/url\]~si' => '<a href="\\1\\2\\3" style="color: \\2;">\\4</a>');
   	$string = preg_replace(array_keys($replace), array_values($replace), $string);
   	
	$preg_find[] = '/\[url\=(.*?)\](.*?)\[\/url\]/is';
	$preg_replace[] = '<a href="$1" target="_blank">$2</a>';
	
	// removed because of conflictions
	//$preg_find[] = '/\[url\](.*?)\[\/url\]/is';
	//$preg_replace[] = '<a href="$1" target="_blank">$1</a>';
	
	$preg_find[] = '/\[b\](.*?)\[\/b\]/is';
	$preg_replace[] = '<strong>$1</strong>';
	
	$preg_find[] = '/\[i\](.*?)\[\/i\]/is';
	$preg_replace[] = '<em>$1</em>';
	
	$preg_find[] = '/\[u\](.*?)\[\/u\]/is';
	$preg_replace[] = '<u>$1</u>';
	
	$preg_find[] = '/\[img\](.*?)\[\/img\]/is';
	$preg_replace[] = '<img src="$1" border="0" />';
	
	$preg_find[] = '/\[blockquote\](.*?)\[\/blockquote\]/is';
	$preg_replace[] = '<blockquote>$1</blockquote>';
	
	$string = preg_replace($preg_find, $preg_replace, $string);
	
	// end bbcode
	
	return $string;
}
