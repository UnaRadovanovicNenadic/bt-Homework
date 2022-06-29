
<main>
    <div class="container" style="background-image: url('./public/theme/img/pictures/form.jpg'); background-repeat: no-repeat; background-size: cover; padding: 30px;
    margin-top: 50px; margin-bottom:50px">
        <section class="mb-5 text-center" style="background-color: #0d3a83; margin: 25px; padding: 30px; color: #ffffff;">
            <h3><b>WE ARE ALWAYS HAPPY TO HELP OUR CUSTOMERS!</b></h3>
            <p>Fill the form below, and we will make sure to contact you as soon as possible.</p>
        </section>

        <section class="mb-5">

            <div class="row">

                <div class="col-3"></div>

                <div class="col-6">
                    <form class="p-4" action="./contact.php" method="post" style="color: #0d3a83; font-weight: bold; background-color: #5eac1b">
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                                <?php if (!empty($systemErrors['name'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                                <?php } ?>
                        </div>
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                <?php if (!empty($systemErrors['email'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                                <?php } ?>
                        </div>
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" placeholder="Comment" name="message"><?php echo htmlspecialchars($message); ?></textarea>
                                <?php if (!empty($systemErrors['message'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['message']); ?></small>
                                <?php } ?>
                        </div>
                        <div div class="row">
                            <div class="col-4"></div>
                            <div class="col-4" style="margin-top: 15px">
                                <button type="submit" class="btn col-12" style="background-color: #0d3a83; color: #ffffff;" name="contact" value="yes">Send Query</button>
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
