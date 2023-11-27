<?php

    include 'navbar.php'; 
?>
<div class="content py-5  bg-light">
<div class="container">
	<div class="row">
		  <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formContact"></span>
                    <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Sing In</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" method="POST" action="sing-in">
                                <fieldset>
                                    <label for="email" class="mb-0">Email</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <label for="password" class="mb-0 mt-4">Password</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="password" name="password" id="password" class="form-control" required="">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-secondary btn-lg float-centre">Sing In</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- form user info -->
                </div>
	</div>
</div>
</div>
<?php 
include 'footer.php';
?>