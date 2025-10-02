<?php
$code = $_GET['code'];
$data = json_decode(file_get_contents("links/$code.json"), true);
$url = $data['url'];
$image = $data['image'];
$title = $data['title'];
$desc = $data['desc'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="5;url=<?php echo $url ?>">
  <title>Redirecting...</title>
</head>
<body>
  <h2><?php echo htmlspecialchars($title) ?></h2>
  <img src="<?php echo $image ?>" width="200"><br>
  <p><?php echo htmlspecialchars($desc) ?></p>
  <p>Redirecting to <a href="<?php echo $url ?>"><?php echo $url ?></a> in 5 seconds...</p>
</body>
</html>
