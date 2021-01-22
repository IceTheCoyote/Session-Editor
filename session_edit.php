<?php
session_start();

if(isset($_POST['clear'])) {
	session_unset();
	header("Location: session_edit.php");
}
if(isset($_POST['add'])) {
	$_SESSION[$_POST['session_name']] = $_POST['session_value'];
	header("Location: session_edit.php");
}
if(isset($_POST['remove'])) {
	unset($_SESSION[$_POST['session_name']]);
	header("Location: session_edit.php");
}

echo "<form action=\"session_edit.php\" method=\"POST\">";

echo "<br>".var_dump($_SESSION)."<br>";
echo "<p><b>Add a session value</b></p>";
echo "<p><input type=\"text\" name=\"session_name\" value=\"example\" /></p>";
echo "<p><input type=\"text\" name=\"session_value\" value=\"Example value\" /></p>";
echo "<p><input type=\"submit\" name=\"add\" value=\"Add Session\" /><input type=\"submit\" name=\"clear\" value=\"Clear all session value\" /><input type=\"submit\" name=\"remove\" value=\"Remove session value\" /></p></form>";

?>