<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM contacts WHERE id = $id";
    $result = mysqli_query($conn, $deleteQuery);

    if ($result) {
        header("Location:index.php");
        exit();
    } else {
        echo "Erreur lors de la suppression : " . mysqli_error($conn);
    }
} else {
    echo "ID non spécifié pour la suppression.";
}

mysqli_close($conn);
?>
