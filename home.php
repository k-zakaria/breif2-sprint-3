<?php
include 'navbar.php';

if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
  $sql="select * from users where id_user='$id'";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){

?>
<div class="container d-flex justify-content-center align-items-center">
             <div class="card">
              <div class="upper">
                <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">
              </div>
              <div class="user text-center">
                <div class="profile">
                  <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80">
                </div>
              </div>
              <div class="mt-5 text-center">
                <h4 class="mb-0"><?=$row['username']?></h4>
                <span class="text-muted d-block mb-2">Los Angles</span>
                <form action="index.php">
                    <button class="btn btn-primary btn-sm follow">Contact</button>
                </form>
                <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                  <div class="stats">
                    <h6 class="mb-0">Followers</h6>
                    <span>8,797</span>
                  </div>
                  <div class="stats">
                    <h6 class="mb-0">Projects</h6>
                    <span>142</span>
                  </div>
                  <div class="stats">
                    <h6 class="mb-0">Ranks</h6>
                    <span>129</span>
                  </div>
                </div>
              </div>
             </div>

           </div>
           <?php
  }}
           ?>