<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    List student <br/>
                    <a href="?page=student&method=create" class="btn btn-primary">Add student</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table mt-3">
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