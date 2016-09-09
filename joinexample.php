<?php
	require_once("inc/database.php");
	$sql = "SELECT posts.*, users.username FROM posts join users on posts.user_id = users.user_id";
	$result = mysqli_query($c, $sql);
	while($row = mysqli_fetch_assoc($result)) {
		echo "<h1>{$row["title"]}</h1>";
		echo "<small>{$row["created_at"]} by {$row["username"]}</small>";
		echo "<p>{$row["content"]}</p>";
		echo "<hr>";

	}