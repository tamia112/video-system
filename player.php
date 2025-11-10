<?php
$file = isset($_GET['file']) ? $_GET['file'] : '';
$path = "uploads/" . $file;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Play Video</title>
  <link rel="stylesheet" href="style.css">
  <script>
    function changeSpeed(rate) {
      const vid = document.getElementById('vid');
      vid.playbackRate = rate;
    }
  </script>
</head>
<body>

<header>
  <h1>🎬 Video Player</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="upload.php">Upload</a>
    <a href="list.php">Video List</a>
  </nav>
</header>

<div class="container">
  <?php if (file_exists($path)) { ?>
    <h2>Now Playing: <?= htmlspecialchars($file) ?></h2>
    <video id="vid" width="640" controls>
      <source src="<?= $path ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <br><br>
    <button onclick="changeSpeed(0.5)">0.5x</button>
    <button onclick="changeSpeed(1)">1x</button>
    <button onclick="changeSpeed(1.5)">1.5x</button>
    <button onclick="changeSpeed(2)">2x</button>
  <?php } else { ?>
    <p>❌ Video not found!</p>
  <?php } ?>
</div>

<footer>
  <p>© 2025 Video System | Stylish Pink Edition 💕</p>
</footer>

</body>
</html>

