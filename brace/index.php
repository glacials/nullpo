<?php

if (isset($_GET['employee'])) {
  $page = 'Employee';
} elseif (isset($_GET['new_visitor'])) {
  $page = 'New visitor';
  $user = 'employee';
} elseif (isset($_GET['enter_id'])) {
  $page = 'Enter visitor ID';
  $user = 'employee';
} elseif (isset($_GET['edit_visitor'])) {
  $page = 'Edit visitor';
  $user = 'employee';
} elseif (isset($_GET['delete_visitor'])) {
  $page = 'Delete visitor';
  $user = 'employee';
} elseif (isset($_GET['emergency_stop'])) {
  $page = 'Emergency stop';
  $user = 'employee';
} elseif (isset($_GET['disable_admission'])) {
  $page = 'Disable admission';
  $user = 'employee';
} elseif (isset($_GET['visitor'])) {
  $page = 'Visitor';
} elseif (isset($_GET['enter_this_ride'])) {
  $page = 'Enter this ride';
  $user = 'visitor';
} elseif (isset($_GET['recommended_attractions'])) {
  $page = 'Recommended attractions';
  $user = 'visitor';
} elseif (isset($_GET['purchase_food'])) {
  $page = 'Purchase food';
  $user = 'visitor';
} else {
  $page = "Main menu";
}

?>
<html>
  <head>
    <title>Brace Yourself - <?php print $page; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <h1>Brace Yourself</h1>
    <h2><?php print $page; ?></h2>
<?php if ($page == "Main menu") { ?>
    <h3>Select one:</h3>
    <a href="?employee">Employee</a> / <a href="?visitor">Visitor</a>
<?php } elseif ($user == 'employee') { ?>
    <h3><a href="?employee=auth">Go to employee home</a></h3>
<?php } elseif ($user == 'visitor') { ?>
    <h3><a href="?visitor=auth">Go to visitor home</a></h3>
<?php } else { ?>
    <h3><a href="?">Go home</a></h3>
<?php } ?>
<?php if ($page == "Employee" && !isset($_POST['login']) && $_GET['employee'] != 'auth') { ?>
    <form action="?employee" method="post">
    <table>
    <tr><td>Username:<td><input type="text"/><br/>
    <tr><td>Password:<td><input type="password"/>
    <tr><td><td><input type="submit" value="Login" name="login"/>
    </table>
    </form>
<?php } elseif ($page == "Employee" && isset($_POST['login']) || $_GET['employee'] == 'auth') { ?>
    <h3>Select one:</h3>
    <a href="?new_visitor">New visitor</a> / <a href="?enter_id=edit">Edit visitor</a> / <a href="?enter_id=delete">Delete visitor</a><br/>
    <a href="?emergency_stop">Emergency stop</a> / <a href="?disable_admission">Disable admission</a>
<?php } elseif (($page == "New visitor" && !isset($_POST['new'])) || ($page == "Edit visitor" && isset($_GET['id']))) { ?>
    <h3>Enter visitor information</h3>
    <form action="?new_visitor" method="post">
    <table>
    <tr><td>Name<td><input type="text"/>
    <tr><td>Credit card number<td><input type="text"/>
    <tr><td>Credit card expiration<td><input type="text"/><td>/<input type="text"/>
    <tr><td>Credit card security code<td><input type="text"/>
    <tr><td><td><input type="submit" value="<?php print $page; ?>" name="new"/>
    </table>
    </form>
<?php } elseif ($page == "New visitor" && isset($_POST['new'])) { ?>
    <span style="color: green;">Visitor created.</span>
<?php } elseif ($page == "Enter visitor ID") { ?>
    <form action="?<?php print $_GET['enter_id']; ?>_visitor" method="post">
    <table>
    <tr><td>Enter ID<td><input type="text" name="id"/>
    <tr><td><td><input type="submit" value="<?php print $_GET['enter_id']; ?>"/>
    </table>
    </form>
<?php } elseif ($page == "Edit visitor" && !isset($_POST['edit'])) { ?>
    <h3>Enter visitor information</h3>
    <form action="?edit_visitor" method="post">
    <table>
    <tr><td>Name<td><input type="text"/>
    <tr><td>Credit card number<td><input type="text"/>
    <tr><td>Credit card expiration<td><input type="text"/><td>/<input type="text"/>
    <tr><td>Credit card security code<td><input type="text"/>
    <tr><td><td><input type="submit" value="<?php print $page; ?>" name="edit"/>
    </table>
    </form>
<?php } elseif ($page == "Edit visitor" && isset($_POST['edit'])) { ?>
    <span style="color: green;">Visitor edited.</span>
<?php } elseif ($page == "Delete visitor") { ?>
    <span style="color: red;">Visitor deleted.</span>
<?php } elseif ($page == "Emergency stop" && $_GET['emergency_stop'] != 'start') { ?>
    <span style="color: red;">Stop successful.</span> <a href="?emergency_stop=start">Resume</a>?
<?php } elseif ($page == "Emergency stop" && $_GET['emergency_stop'] == 'start') { ?>
    <span style="color: green;">Start successful.</span>
<?php } elseif ($page == "Disable admission" && $_GET['disable_admission'] != 'enable') { ?>
    <span style="color: red;">Admission disabled.</span> <a href="?disable_admission=enable">Re-enable</a>?
<?php } elseif ($page == "Disable admission" && $_GET['disable_admission'] == 'enable') { ?>
    <span style="color: green;">Admission enabled.</span>
<?php } elseif ($page == "Confirm action") { ?>
<?php } elseif ($page == "Visitor" && $_GET['visitor'] != 'auth') { ?>
    <h3>Scan your bracelet now.</h3>
    <a href="?visitor=auth">&lt;scan bracelet&gt;</a>
<?php } elseif ($page == "Visitor" && $_GET['visitor'] == 'auth') { ?>
    <h3>Select one:</h3>
    <a href="?enter_this_ride">Enter this ride</a> / <a href="?purchase_food">Purchase food</a> / <a href="?recommended_attractions">Recommended attractions</a><br/>
<?php } elseif ($page == "Scan bracelet") { ?>
<?php } elseif ($page == "Enter this ride") { ?>
    Your account has been charged. <b>Have fun!</b>
<?php } elseif ($page == "Purchase food") { ?>
    Please see the shopkeeper for a menu.
<?php } elseif ($page == "Recommended attractions") { ?>
    <p>Based on your history, we recommend the following attractions:</p>
    <table>
    <tr><td>Attraction A
    <tr><td>Attraction B
    <tr><td>Attraction C
    <tr><td>Attraction D
    </table>
<?php } ?>
  </body>
</html>
