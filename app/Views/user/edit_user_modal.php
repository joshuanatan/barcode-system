<div class="modal fade" id="EditUserModal">
  <div class="modal-dialog modal-simple modal-lg modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit User</h4>
      </div>
      <form method="POST" action="<?= base_url("user/update"); ?>">
        <input type="hidden" id="edit_id_pk_user_form" name="id_pk_user" />
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User ID</h5>
              <input type="text" class="form-control" id="edit_user_id_form" name="user_id" placeholder="User ID" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Name</h5>
              <input type="text" class="form-control" id="edit_user_name_form" name="user_name" placeholder="John Doe" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Email</h5>
              <input type="text" class="form-control" id="edit_user_email_form" name="user_email" placeholder="john.doe@company.com" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Role</h5>
              <select class="form-control" id="edit_user_role_form" name="user_role">
                <option value="NON ADMINISTRATOR">NON ADMINISTRATOR</option>
                <option value="ADMINISTRATOR">ADMINISTRATOR</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">User Notes</h5>
              <textarea class="form-control" id="edit_user_notes_form" name="user_notes" rows="5" placeholder=""></textarea>
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
<script>
  const loadEditContent = (e) => {
    let row = e.data.row
    $("#edit_id_pk_user_form").val(tableData[row]["id_pk_user"]);
    $("#edit_user_id_form").val(tableData[row]["user_id"]);
    $("#edit_user_name_form").val(tableData[row]["user_name"]);
    $("#edit_user_email_form").val(tableData[row]["user_email"]);
    $("#edit_user_mobile_form").val(tableData[row]["user_mobile"]);
    $("#edit_user_role_form").val(tableData[row]["user_role"]);
    $("#edit_user_notes_form").val(tableData[row]["user_notes"]);
  }
</script>