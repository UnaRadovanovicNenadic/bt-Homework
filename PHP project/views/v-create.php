<main>
    <div class="container" style="background-image: url('./public/theme/img/pictures/create.jpg'); background-repeat: no-repeat; background-size: cover; padding: 30px;
    margin-top: 50px; margin-bottom:50px">
        <section class="mb-5 text-center" style="background-color: #0d3a83; margin: 25px; padding: 30px; color: #ffffff;">
            <h3><b>CREATE PRODUCT</b></h3>
            <p>Fill the form below, and insert product to data base!</p>
        </section>

        <section class="mb-5">

            <div class="row">

                <div class="col-3"></div>

                <div class="col-6">
                    <form class="p-4" action="./register.php" method="post" style="color: #0d3a83; font-weight: bold; background-color: #5eac1b">
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="name">Author:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter book author" name="name" value="<?php echo htmlspecialchars($name); ?>">
                                <?php if (!empty($systemErrors['name'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                                <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="last-name">Title:</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Enter book title" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
                            <?php if (!empty($systemErrors['last_name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['last_name']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="password">Description:</label>
                            <input type="text" class="form-control" id="password" placeholder="Enter description" name="password" value="<?php echo htmlspecialchars($password); ?>">
                            <?php if (!empty($systemErrors['password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['password']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="re-password">Category:</label>
                            <input type="text" class="form-control" id="re-password" placeholder="Enter topic category" name="re_password" value="<?php echo htmlspecialchars($re_password); ?>">
                            <?php if (!empty($systemErrors['re_password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['re_password']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="email">Type:</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter publication type" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                <?php if (!empty($systemErrors['email'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                                <?php } ?>
                        </div>
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="email">Barcode:</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter barcode" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                <?php if (!empty($systemErrors['email'])) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                                <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="age">Price:</label>
                            <input type="text" class="form-control" id="age" placeholder="Enter price" name="age" value="<?php echo htmlspecialchars($age); ?>">
                            <?php if (!empty($systemErrors['age'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['age']); ?></small>
                            <?php } ?>
                        <div class="form-group"  style="margin-top: 10px;">
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="age">Stock:</label>
                            <input type="text" class="form-control" id="age" placeholder="Enter number of books in stock" name="age" value="<?php echo htmlspecialchars($age); ?>">
                            <?php if (!empty($systemErrors['age'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['age']); ?></small>
                            <?php } ?>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="age">Image:</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <?php if (!empty($systemErrors['age'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['age']); ?></small>
                            <?php } ?>
                        <div div class="row">
                            <div class="col-4"></div>
                            <div class="col-4" style="margin-top: 15px">
                                <button type="submit" class="btn col-12" style="background-color: #0d3a83; color: #ffffff;" name="register" value="yes">Create</button>
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
