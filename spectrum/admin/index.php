<?php $root = "../"; require_once($root . "functions.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="<? print($root); ?>default.css"/>
<title><?print($title . " // admin"); ?></title>
</head>

<body>

<div id="main">

	<div id="main_left">
		
		<div id="header">
			<h1><a href="<? print($root . "admin"); ?>">Administration</a></h1>
		</div>

		<div id="navigation">
			<ul>
				<li><a href="<? print($root); ?>">Home</a></li>
			</ul>
		</div>

		<div id="content">
<?php
if(isset($_POST['preview'])) {
	if($_POST['password']     == "water")
		$color = "Blue";
	elseif($_POST['password'] == "fire")
		$color = "Red";
	elseif($_POST['password'] == "grass")
		$color = "Green";
	elseif($_POST['password'] == "shadow")
		$color = "Purple";
	elseif($_POST['password'] == "pit")
		$color = "Gray";

	if(!isset($color)) print("<h1>Incorrect password.</h1>"); else
$title = preparse($_POST['title']);
$body = preparse($_POST['body']);
print("<p>" . print_post(stripslashes($title), stripslashes($body), time(), $color, "", false) . "</p>
<hr>
<h1>Modify post</h1>
<div class=\"post_body\">
 <p>
  <form action=\"./\" method=\"post\">
  <input type=\"hidden\" name=\"password\" value=\"" . $_POST['password'] . "\">
  <div class=\"discr\">title</div>
  <input type=\"text\" name=\"title\" size=\"60\" value=\"" . stripslashes($_POST['title']) . "\"><br /><br />
  <div class=\"discr\">body</div>
  <textarea cols=\"60\" rows=\"15\" name=\"body\">" . stripslashes($_POST['body']) . "</textarea><br /><br />
  <input type=\"submit\" name=\"submit\" value=\"Submit\"> <input type=\"submit\" name=\"preview\" value=\"Preview\">
  </form>
 </p>
</div>");

} elseif(isset($_POST['submit'])) {

	if($_POST['password']     == "water")
		$color = "Blue";
	elseif($_POST['password'] == "fire")
		$color = "Red";
	elseif($_POST['password'] == "grass")
		$color = "Green";
	elseif($_POST['password'] == "shadow")
		$color = "Purple";
	elseif($_POST['password'] == "pit")
		$color = "White";

	if(!isset($color)) print("<h1>Bad password.</h1>"); else {

		$title = preparse($_POST['title']);
		$body = preparse($_POST['body']);
		if(!mysql_query("INSERT into posts (title, body, color, time) VALUES ('" . $title . "', '" . $body . "', '" . $color . "', '" . time() . "')"))
			print("<h1>Error inserting data into database, please try again later.</h1>");
		else
			print("<h1><a href=\"" . $root . "\">Post created.</a></h1>");

}
} else { ?>
			
			<h1>Create a post</h1>

			<div class="post_body">

				<p>
					<form action="./" method="post">
						<div class="discr">password</div>
						<input type="password" name="password"><br /><br />
						<div class="discr">title</div>
						<input type="text" name="title" size="60"><br /><br />
						<div class="discr">body</div>
						<textarea cols="60" rows="15" name="body"></textarea><br /><br />
						<input type="submit" name="preview" value="Preview">
					</form>
				</p>

			</div>

<? } ?>

		</div>

	</div>

</div>

</body>

</html>