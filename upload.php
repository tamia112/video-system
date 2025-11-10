<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['video'])) {
  $targetDir = "uploads/";
  $fileName = basename($_FILES["video"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

  $allowedTypes = array('mp4','mov','avi','mkv');
  if (in_array($fileType, $allowedTypes)) {
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $targetFilePath)) {
      $msg = "✅ Video uploaded successfully!";
    } else {
      $msg = "❌ Failed to upload video.";
    }
  } else {
    $msg = "⚠️ Only MP4, MOV, AVI, or MKV files allowed.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Video</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Upload Your Video</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="list.php">Video List</a>
  </nav>
</header>

<div class="container">
  <h2>📤 Choose a video to upload</h2>

  <?php if(!empty($msg)) echo "<p><strong>$msg</strong></p>"; ?>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="video" required>
    <br><br>
    <input type="submit" value="Upload">
  </form>
</div>

<footer>
  <p>© 2025 Video System</p>
</footer>

</body>
</html>
