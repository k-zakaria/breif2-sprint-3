<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM contacts WHERE id = $id";
    $result = mysqli_query($conn, $select);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Erreur dans la requête de sélection : " . mysqli_error($conn);
        exit();
    }
} else {
    echo "ID non spécifié pour la mise à jour.";
    exit();
}

if (isset($_POST['update'])) {
    $fname = $_POST['name1'];
    $lname = $_POST['name2'];
    $email = $_POST['Email1'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    $update = "UPDATE contacts SET first_name='$fname', last_name='$lname', email='$email', num_telephone=$telephone, message='$message' WHERE id=$id";

    $updateResult = mysqli_query($conn, $update);

    if ($updateResult) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur lors de la mise à jour : " . mysqli_error($conn);
        exit();
    }
}

mysqli_close($conn);
?>

<?php include 'heder.php'; ?>

<main class="flex-shrink-0">
    <div class="container">
        <form method="post" action="">
            <div class="mb-3">
                <label for="name1" class="form-label">First Name</label>
                <input type="text" class="form-control" id="name1" name="name1" value="<?= $row['first_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="name2" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="name2" name="name2" value="<?= $row['last_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="Email1" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email1" name="Email1" value="<?= $row['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="<?= $row['num_telephone'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <input type="text" class="form-control" id="message" name="message" value="<?= $row['message'] ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>
