<?php
require_once("database.php");
require_once("classes.php");

$pdo = connectDatabase();
$sql = "select * from list";
$pstmt = $pdo->prepare($sql);
$pstmt->execute();
$rs = $pstmt->fetchAll();
disconnectDatabase($pdo);

$list = [];
foreach ($rs as $record){
    $id = intval ($record["id"]);
    $name = $record["name"];
    $price = $record["price"];
    $pref = $record["pref"];
    $city = $record["city"];
    $address = $address["address"];
    $memo = $record["memo"];
    $image = $recird["image"];
    $list = new Lists($id, $name, $price, $pref, $city, $address, $memo, $image);
    $list[] = $lists;
}

echo"<pre>";
var_dump($list);
echo"</pre>";
exit(0);


?>





<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>ホテル検索</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/hotels.css" />
</head>

<body>
	<header>
		<h1>ホテルの検索</h1>
	</header>
	<main>
		<article>
			<p>ホテルの所在地を入力してください。所在地の一部でも構いません。</p>
			<form action="list.php" method="get">
				<input type="text" name="address" />
				<input type="submit" value="検索" />
			</form>
		</article>
	</main>
	<footer>
		<div id="copyright">(C) 2019 The Web System Development Course</div>
	</footer>
</body>

</html>