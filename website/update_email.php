<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_email = $_POST['email'];
    echo "L'adresse email a été mise à jour à : " . htmlspecialchars($new_email);
}
?>