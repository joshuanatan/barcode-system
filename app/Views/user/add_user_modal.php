<div class="modal fade" id="AddUserModal">
  <div class="modal-dialog modal-simple modal-lg modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Add User</h4>
      </div>
      <form method="POST" action="<?= base_url("user/insert"); ?>">
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User ID</h5>
              <input type="text" class="form-control" name="user_id" placeholder="User ID" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Name</h5>
              <input type="text" class="form-control" name="user_name" placeholder="John Doe" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Email</h5>
              <input type="text" class="form-control" name="user_email" placeholder="john.doe@company.com" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Role</h5>
              <select class="form-control" name="user_role">
                <option value="NON ADMINISTRATOR">NON ADMINISTRATOR</option>
                <option value="ADMINISTRATOR">ADMINISTRATOR</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Notes</h5>
              <textarea class="form-control" name="user_notes" rows="5" placeholder=""></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>