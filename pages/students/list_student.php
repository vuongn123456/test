<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Add student</div>
            </div>

            <form action="" name="frm_create_student" method="POST" id="add_data_student">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" required class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" maxlength="11" required minlength="10" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" name="create_student" id="btn_add_student" type="submit">Create</button>
                    <button class="btn btn-danger" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="row" id="load_data">
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <div class="card-title">List student</div>
            </div>

            <div class="card-body">
                <table class="table mt-3" id="">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Addres</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 0;
                            foreach ($results as $result) {
                        ?>
                            <tr>
                                <td><?= ++$count ?></td>
                                <td><?= $result['name'] ?></td>
                                <td><?= $result['email'] ?></td>
                                <td><?= $result['title'] ?></td>
                                <td><?= $result['phone'] ?></td>
                                <td><?= $result['addres'] ?></td>
                                <td>
                                    <a href="index.php?page=student&method=edit&id=<?= $result['id'] ?>" class="btn btn-primary">Edit</a>
                                    <button class="btn btn-danger deleteStudent" value="<?=$result['id']?>" >Delete</button>
                                    <button class="btn btn-danger detailStudent" value="<?=$result['id']?>" >Detail</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>