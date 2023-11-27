<?php
include 'connect.php';
include 'heder.php';

if (isset($_POST["submit"])) {
    $fname = $_POST["name1"];
    $lname = $_POST["name2"];
    $email = $_POST["Email1"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];

    $query = "INSERT INTO contacts (first_name, last_name, email, num_telephone, message, id_user) VALUES ('$fname', '$lname', '$email', '$telephone', '$message', '1')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Insert successfully');</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!-- Button trigger modal -->
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter</button>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="name1" class="form-control" required="" placeholder="First name">
                </div>
                <div class="modal-body">
                    <input type="text" name="name2" class="form-control" required="" placeholder="Last name">
                </div>
                <div class="modal-body">
                    <input type="email" name="Email1" class="form-control" aria-describedby="emailHelp" placeholder="Address email">
                </div>
                <div class="modal-body">
                    <input type="text" name="telephone" class="form-control" required="" placeholder="Telephone number">
                </div>
                <div class="modal-body">
                    <input type="text" name="message" class="form-control" required="" placeholder="Message">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
	include 'footer.php';
?>