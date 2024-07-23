<?php
$file_path = 'submissions.txt';

if (is_writable($file_path)) {
    echo "Le fichier est accessible en écriture.";
} else {
    echo "Le fichier n'est pas accessible en écriture.";
}
?>
