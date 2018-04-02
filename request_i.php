<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
      <title>Bonjour!</title>
</head>
<body>
Ciao <?php print htmlspecialchars($_POST{'name'}, ENT_QUOTES, 'UTF-8'); ?>!
<br/>
<br/>
<span><img src="../Mini/images/greet.gif" wigth="50" height="80"></span>

<br>
<br>
<a href="index.html" style="text-decoration: none">Back</a>
</body>
</html>