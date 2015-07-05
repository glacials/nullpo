<?php if(isset($color)) $root = "../"; else $root = "./"; require_once($root . "functions.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="<? print($root); ?>default.css"/>
<link rel="stylesheet" type="text/css" href="<? print($color); ?>.css"/>
<title><?print($title . " // " . $color); ?></title>
</head>

<body>

<div id="main">

	<div id="main_left">
		<div id="header">
			<h1><a href="<? print($root . $color); ?>" class=\"header_link\"><? if(!isset($color)) print($title); else print($color); ?></a></h1>
		</div>

		<div id="navigation">
			<ul>
				<li><a href="<? print($root); ?>">Home</a></li>
			</ul>
		</div>

		<div id="content">

<?php
if(isset($_GET['p'])) { // if we've been requested only a single post
	if(isset($_POST['comment'])) {
		$query = mysql_query("SELECT id FROM commenters WHERE email = '" . $_POST['email'] . "' AND password = '" . md5($_POST['pass']) . "'");
		if(!$query)
			exit("<h1>Bad username or password (need to <a href=\"" . $root . "?register\" target=\"_blank\">register</a>?).</h1><h1>(<a href=\"" . $root . $color . "/?p=" . $_GET['p'] . "\">back</a>)</h1>");
		$commenter = mysql_fetch_assoc($query);
		if($commenter['id'] == "")
			exit("<h1>Bad username or password (need to <a href=\"" . $root . "?register\" target=\"_blank\">register</a>?).</h1><h1>(<a href=\"" . $root . $color . "/?p=" . $_GET['p'] . "\">back</a>)</h1>");
		if($_POST['body'] == "")
			exit("<h1>You didn't enter a comment!</h1><h1>(<a href=\"" . $root . $color . "/?p=" . $_GET['p'] . "\">back</a>)</h1>");
		if(!mysql_query("INSERT into comments (post, commenter, body, time) VALUES ('" . $_GET['p'] . "', '" . $commenter['id'] . "', '" . $_POST['body'] . "', '" . time() . "')"))
			exit("<h1>Bad username or password (need to <a href=\"" . $root . "?register\" target=\"_blank\">register</a>?).</h1><h1>(<a href=\"" . $root . $color . "/?p=" . $_GET['p'] . "\">back</a>)</h1>");
	}
	if($_GET['p'] == "")
		print("<h1>No post specified.</h1>");
	$posts = explode(",", $_GET['p']);
	$query = "SELECT * FROM posts WHERE";
	$i = 0;
	$num_posts = count($posts);
	while($i < $num_posts) {
		$query .= " id = '" . $posts[$i] . "'";
		if(isset($posts[$i + 1]))
			$query .= " OR";
		$i++;
	}
	$query .= " ORDER BY time DESC";
	$query = mysql_query($query);
	while($post = mysql_fetch_assoc($query))
		if(!isset($color) || $color == $post['color'])
		// avoids printing posts on the wrong color page
			if($num_posts == 1) // don't link to the post if it's the one being displayed
				print_post($post['title'], $post['body'], $post['time'], $post['color'], $post['id'], true);
			else
				print_post($post['title'], $post['body'], $post['time'], $post['color'], $post['id']);

} elseif(isset($_GET['user'])) {
	$query = mysql_query("SELECT * FROM commenters WHERE id = '" . $_GET['user'] . "'");
	$commenter = mysql_fetch_assoc($query);
	print("<h1>Comments by " . $commenter['alias'] . "</h1>");
	$query = mysql_query("SELECT * FROM comments WHERE commenter = '" . $_GET['user'] . "'");
	while($comment = mysql_fetch_assoc($query)) {
		$query2 = mysql_query("SELECT * FROM posts WHERE id = '" . $comment['post'] . "'");
		$post = mysql_fetch_assoc($query2);
		print("<h3>on <a href=\"" . $root . $post['color'] . "/?p=" . $post['id'] . "\" style=\"color: " . $post['color'] . ";\">" . $post['title'] . "</a></h3>\n");
		print("<blockquote>" . $comment['body'] . "</blockquote>");
	}

} elseif(isset($_GET['register'])) {
	if(isset($_POST['submit'])) {
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$email = $_POST['email'];
		if($pass1 == $pass2)
			$password = md5($pass1);
		else
			exit("<h1>Passwords didn't match; <a href=\"" . $root . "?register\">try again</a>.</h1>");
		if($email == "" || $pass1 == "" || $pass2 == "")
			exit("<h1>You didn't fill out all required fields! <a href=\"" . $root . "?register\">Try again</a>.</h1>");
		if(strstr($email, "@") == false) // if there is no @ in $email
			exit("<h1>Invalid email. <a href=\"" . $root . "?register\">Try again</a>.</h1>");
		$alias = explode("@", $email);
		if(!mysql_query("INSERT INTO commenters (email, password, alias, time) VALUES ('$email', '$password', '" . $alias[0] . "', '" . time() . "')"))
			print("<h1>Error inserting data into database, please try again later.</h1>");
		else
			print("<h1>User created.</h1>\n<a href=\"javascript:window.close();\">Close this window</a>");
	} else {
	print("<br /><form action=\"" . $root . "?register\" method=\"post\">\n");
	print("<div class=\"descr\">Email</div>\n<input type=\"text\" name=\"email\"><br /><br />\n");
	print("<div class=\"descr\">Password</div>\n<input type=\"password\" name=\"pass1\"><br /><br />\n");
	print("<div class=\"descr\">Verify</div>\n<input type=\"password\" name=\"pass2\"><br /><br />\n");
	print("<input type=\"submit\" name=\"submit\" value=\"Register\"></form>");
	}

} else {
	if(isset($color)) // if we're on a color's page, only grab that color's posts
		$query = mysql_query("SELECT * FROM posts WHERE color = '" . $color . "' ORDER BY time DESC");
	else // otherwise grab all of them
		$query = mysql_query("SELECT * FROM posts ORDER BY time DESC");
	$n = 9; // num of posts to display
	while($post = mysql_fetch_assoc($query)) {
		if($n > 0) {
			print_post($post['title'], $post['body'], $post['time'], $post['color'], $post['id']);
			$n--;
		} else {
			break;
		}
	}
			
}
?>

		</div>

	</div>

	<div id="main_right">
		
		<div class="label">Blogroll</div>

		<ul class="block">
<?php
foreach($allcolors as $color0) {
	print("<li><a href=\"$root$color0\" class=\"block_$color0\">$color0</a></li>\n");
} ?>
		</ul>

<?php
if(isset($color))
	$query = mysql_query("SELECT * FROM posts WHERE color = '" . $color . "' ORDER BY time desc");
else
	$query = mysql_query("SELECT * FROM posts ORDER BY time desc");
$i = 0;
while($post = mysql_fetch_assoc($query)) {
	$chosen[$i]['id'] = $post['id'];
	$chosen[$i]['title'] = $post['title'];
	$chosen[$i]['color'] = $post['color'];
	$i++;
}

// right now $i is the total number of posts retrieved, so we need to see if that => 9
// if it is not, we will not display randoms.
if($i >= 9) {
	print("<div class=\"label\">Randoms</div>\n");
	print("<ul class=\"block\">");
	
	$j = 0;
	while($j < 9) { // generates our 9 random post numbers (not _ids_) to use
		$temp = rand(0, $i - 1); // $i is still the max value used for post numbering in the $posts array
		if(is_array($rand)) // we do not do the follownig check if it's the first time (because there are no values to compare to, and because foreach() will fail on a non-array
			foreach($rand as $postnum)
			// go thru all assigned values so far and make sure we don't pick the same one twice
				if($temp == $postnum)
				// if we did pick the same one twice, start over the iteration without incrementing $j
					continue 2; // _continue 2;_ continues the parent loop
		$rand[$j] = $temp;
		// we use a temporary value so that the above check doesn't trigger true on itself
		$j++;
	}
	sort($rand);
	// right now, $posts[][] has all posts in it available for selection.
	// they are numbered $posts[0], $posts[1], $posts[2] etc., not by their ids.
	// $rand[] contains 9 random numbers (in desc order) that will be used to select which posts in $posts[][] to use
	$k = 0;
	while($k < 9) { // lol k9
		print("<li><a href=\"" . $root . $chosen[$rand[$k]]['color'] . "/?p=" . $chosen[$rand[$k]]['id'] . "\">" . postparse($chosen[$rand[$k]]['title']) . "</a></li>\n");
		$k++;
	}
	print("</ul>\n");
}
?>
			<div class="label">Search</div>

			<div style="padding: 10px; font-size: 0.8em">

				<form method="get" id="searchform" action="/wp-demo/index.php">
				<div>

					<input type="text" value="" name="s" id="s" size="17" /> <input type="submit" id="sidebarsubmit" value="Search" style="font-size: 10px;" />
				
				</div>
				</form>

			</div>		

	</div>

	<div id="footer">

		<div class="left">&copy; 2008 <? print($title); ?></div>

		<div class="right"><a href="<? print($root); ?>admin">admin</a><br />
		based on a template by <a href="http://arcsin.se" target="_blank">arcsin</a></div>

		<div class="clearer"></div>

	</div>

</div>

</body>

</html>