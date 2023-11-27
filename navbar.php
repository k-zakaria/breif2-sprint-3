<?php
include 'connect.php';
include 'heder.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
$sql="select * from users where id_user='$id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){


?>

<nav class="navbar navbar-expand-sm  bg-light border">
  <div class="container">
  <a class="navbar-brand" href="" >
    You<span>Contact</span>
  </a>
  <div class ="d-flex gap-3">
    <form class="form-inline" action="registre.php">
        <button class="btn btn-primary" type="submit"><?=$row['username']?></button>
    </form>
    <a href="logout.php"><button class="btn btn-danger" type="submit">Logout</button></a>
 </div>
</div>
</nav>
<?php 
}}else{
  ?>
  <nav class="navbar navbar-expand-sm  bg-light border">
  <div class="container">
  <a class="navbar-brand" href="" >
    You<span>Contact</span>
  </a>
    <form class="form-inline" action="registre.php">
        <button class="btn btn-primary" type="submit">Sing-up</button>
    </form>
 </div>
</nav>
  <?php
}
	include 'footer.php';
?>