
<main>
    <div class="container" style="background-image: url('./public/theme/img/pictures/ink.jpg'); background-repeat: no-repeat; background-size: cover; padding: 30px;
    margin-top: 50px; margin-bottom:50px">
        <section class="mb-5 text-center" style="background-color: #0d3a83; margin: 25px; padding: 30px; color: #ffffff;">
            <h3><b>LOGIN</b></h3>
            <p>Fill the form below, and check your profile!</p>
        </section>

        <section class="mb-5">

            <div class="row">

                <div class="col-3"></div>

                <div class="col-6">
                    <form class="p-4" action="./login.php" method="post" style="color: #0d3a83; font-weight: bold; background-color: #5eac1b">
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                <?php if (!empty($systemErrors['email'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                                <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="Enter your password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                            <?php if (!empty($systemErrors['password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['password']); ?></small>
                            <?php } ?>
                        </div>
                        <div div class="row">
                            <div class="col-4"></div>
                            <div class="col-4" style="margin-top: 15px">
                                <button type="submit" class="btn col-12" style="background-color: #0d3a83; color: #ffffff;" name="login" value="yes">Send Query</button>
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
