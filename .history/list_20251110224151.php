<?php
$files = glob("uploads/*.{mp4,mov,avi,mkv}", GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>🎥 Video Library</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="upload.php">Upload</a>
  </nav>
</header>

<div class="container">
  <h2>Available Videos</h2>
  <?php
  if (!empty($files)) {
    foreach ($files as $file) {
      $name = basename($file);
      echo "<div class='video-item'><a href='player.php?file=$name'>$name</a></div>";
    }
  } else {
    echo "<p>No videos uploaded yet.</p>";
  }
  ?>
</div>

<footer>
  <p>© 2025 Video System</p>
</footer>

</body>
</html>
