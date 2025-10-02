<?php
// Simulate short link generation
$original = $_POST['url'];
$title = $_POST['title'];
$desc = $_POST['description'];
$image = $_POST['image'];

// Generate a fake short code
$code = substr(md5($original), 0, 6);
$short = "redirect.php?code=$code";

// Save data (in real app, use database)
file_put_contents("links/$code.json", json_encode([
  'url' => $original,
  'title' => $title,
  'desc' => $desc,
  'image' => $image
]));

echo json_encode([
  'short' => $short,
  'original' => $original
]);
?>
