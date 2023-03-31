<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit student</div>
            </div>
            <?php
                if (isset($_SESSION['noti']) && $_SESSION['noti'] == 1) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        Create student success
                    </div>
                <?php } else if (isset($_SESSION['noti']) && $_SESSION['noti'] == 2) {?>
                    <div class="alert alert-success" role="alert">
                        Update student success
                    </div>
                    <?php
                } else if (isset($_SESSION['noti']) && $_SESSION['noti'] == 0) { ?>
                    <div class="alert alert-danger" role="alert">
                        Update student fail!
                    </div>
            <?php
                }
                unset($_SESSION['noti']);
            ?>

            <form action="" name="frm_update_student" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required class="form-control" name="name" id="name" value="<?= $student['name'] ?>" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" required class="form-control" name="email" id="email" value="<?= $student['email'] ?>" disabled placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" maxlength="11" required minlength="10" name="phone" value="<?= $student['phone'] ?>" class="form-control" id="phone" placeholder="Enter phone">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" maxlength="100" required minlength="3" name="address" value="<?= $student['addres'] ?>" class="form-control" id="address" placeholder="Enter address">
                    </div>

                    <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <select class="form-control" id="faculty" name="faculty">
                            <?php
                            foreach ($facultys as $faculty) {
                                ?>
                                <option <?= ($faculty['id'] == $student['facultys_id']) ? 'selected' : '' ?> value="<?= $faculty['id'] ?>"><?= $faculty['title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" name="update_student" type="submit">Update</button>
                    <button class="btn btn-danger" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
