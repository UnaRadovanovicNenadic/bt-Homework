

<main>
    <div class="container" style="background-image: url('./public/theme/img/pictures/ink.jpg'); background-repeat: no-repeat; background-size: cover; padding: 30px;
    margin-top: 50px; margin-bottom:50px">
        <section class="mb-5 text-center" style="background-color: #0d3a83; margin: 25px; padding: 30px; color: #ffffff;">
            <h3><b>PROFILE PAGE</b></h3>
            <p>Here you can see information you have send to us during registration and update them if you want to!</p>
        </section>

        <section class="mb-5">

            <div class="row ">
                <div class="col-2"></div>

                <div class="col-8" style="color: #0d3a83; font-weight: bold; background-color: #ffffff95; 
                margin-bottom: 30px; padding: 20px">
                    <div class="row text-center">
                        <h4 style="text-decoration: underline"><b>YOUR DATA</b></h4>
                    </div>
                    <div class="row"  style="margin-top: 10px;">
                        <div class="col-2">
                            <p>Name:</p>
                        </div>
                        <div class="col-8">
                            <p><?php echo (ucfirst($user_name)); ?>    </p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-2">
                            <p>Last name:</p>
                        </div>
                        <div class="col-8">
                            <p><?php echo (ucfirst($user_surname)) ?>    </p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-2">
                            <p>E-mail:</p>
                        </div>
                        <div class="col-8">
                            <p><?php echo $user_email; ?>    </p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-2">
                            <p>Password:</p>
                        </div>
                        <div class="col-8">
                            <p><?php echo $user_password; ?>    </p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-2">
                            <p>Age:</p>
                        </div>
                        <div class="col-8">
                            <p><?php echo $user_age; ?>    </p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-2">
                            <p>Gender:</p>
                        </div>
                        <div class="col-8">
                            <p>
                                <?php 
                                if ($user_gender == 1) {
                                    echo "Male";
                                } else {
                                    echo "Female";
                                } 
                                ?>    
                            </p>
                        </div>
                    </div>
                    <div class="row text-center" style="margin-top:20px; margin-bottom: 10px;">
                        <div class=" col-2" ></div>
                        <a class="btn col-3" style="background-color: #81c449; color: #0d3a83" href="update.php"><b>UPDATE</b></a>
                        <div class=" col-2" ></div>
                        <a class="btn col-3" style="background-color: red; color: #0d3a83" href="logout.php"><b>LOGOUT</b></a>
                        <div class=" col-2" ></div>
                    </div>
                </div>

                <div class="col-2"></div>
            </div>

        </section>
    </div>
</main> 
