<?if (isset($_POST['search']))
	$search = $_POST['search'];
		else $search = NULL;
	echo <<<_END
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Создание простой формы</title>
<link href="/css/style.css" rel="stylesheet"/>
</head>
<body>
	Вы искали : $search <br>
	<form action="index.php" method="post">
		<label>Search: <input type="text" name="search" /></label>
		<input type="submit" value="Go!" class="buttonSubmit" />
	</form>
</body>
</html>
_END;
?>