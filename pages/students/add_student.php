<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Add student</div>
            </div>

                <div class="alert alert-danger" role="alert">
                    Create student fail!
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
