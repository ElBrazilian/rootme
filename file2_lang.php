<?php

$fileContent = file_get_contents('index.php');
echo htmlspecialchars($fileContent);
echo 'done';

?>