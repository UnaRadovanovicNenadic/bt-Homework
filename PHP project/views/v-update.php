<main>
    <div class="container" style="background-image: url('./public/theme/img/pictures/ink.jpg'); background-repeat: no-repeat; background-size: cover; padding: 30px;
    margin-top: 50px; margin-bottom:50px">
        <section class="mb-5 text-center" style="background-color: #0d3a83; margin: 25px; padding: 30px; color: #ffffff;">
            <h3><b>UPDATE PROFILE DATA</b></h3>
            <p>Here you can see update them if you want to!</p>
        </section>

        <section class="mb-5">

            <div class="row">

                <div class="col-3"></div>

                <div class="col-6">
                    <form class="p-4" action="./update.php" method="post" style="color: #0d3a83; font-weight: bold; background-color: #5eac1b">
                        <div class="row text-center">
                            <h4 style="text-decoration: underline"><b>Only insert data you want to change</b></h4>
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo htmlspecialchars($name_update); ?>">
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="last-name">Last name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Enter your last name" name="last_name" value="<?php echo htmlspecialchars($last_name_update); ?>">
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="Enter your password" name="password" value="<?php echo htmlspecialchars($password_update); ?>">
                            <?php if (!empty($systemErrors_update['password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors_update['password']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="re-password">Re-type password</label>
                            <input type="text" class="form-control" id="re-password" placeholder="Renter your password" name="re_password" value="<?php echo htmlspecialchars($re_password_update); ?>">
                            <?php if (!empty($systemErrors_update['re_password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors_update['re_password']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo htmlspecialchars($email_update); ?>">
                                <?php if (!empty($systemErrors_update['email'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors_update['email']); ?></small>
                                <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" id="age" placeholder="Enter your age" name="age" value="<?php echo htmlspecialchars($age_update); ?>">
                            <?php if (!empty($systemErrors_update['age'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors_update['age']); ?></small>
                            <?php } ?>
                        <div class="form-group"  style="margin-top: 10px;">

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-2">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-2">                            
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="1">Male
                                    <?php if ($gender_update == 'male') {
                                        echo htmlspecialchars("Checked");
                                    } ?>
                            </div></div>
                            <div class="col-2">                            
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="2">Female
                            </div></div>
                            <?php if ( $gender_update == 'female') {
                                echo htmlspecialchars("Checked");
                            } ?>
                        </div>
                        <div div class="row">
                            <div class="col-4"></div>
                            <div class="col-4" style="margin-top: 15px">
                                <button type="submit" class="btn col-12" style="background-color: #0d3a83; color: #ffffff;" name="update" value="yes">Send Update</button>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        </form>
                </div>

                <div class="col-3"></div>
            </div>
        </section>
    </div>
</main> 
