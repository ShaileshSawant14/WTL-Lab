<html>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $target = "uploads/"; 
            $targetFile = $target . basename($_FILES['FileToUpload']['name']);

            if (move_uploaded_file($_FILES['FileToUpload']['tmp_name'], $targetFile)) {
                echo "File uploaded successfully.";
            } else {
                echo "File not uploaded.";
            }
        }
        ?>
    </body>
</html>
