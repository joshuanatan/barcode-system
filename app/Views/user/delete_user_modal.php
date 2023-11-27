<div class="modal fade" id="DeleteUserModal">
  <div class="modal-dialog modal-simple modal-lg modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Delete User</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <tr>
            <th>User ID</th>
            <td id="delete_user_id_table"></td>
          </tr>
          <tr>
            <th>User Name</th>
            <td id="delete_user_name_table"></td>
          </tr>
          <tr>
            <th>User Email</th>
            <td id="delete_user_email_table"></td>
          </tr>
          <tr>
            <th>User Role</th>
            <td id="delete_user_role_table"></td>
          </tr>
          <tr>
            <th>User Notes</th>
            <td id="delete_user_notes_table"></td>
          </tr>
          <tr>
            <th>User Last Login</th>
            <td id="delete_user_last_login_table"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <a id="delete_button" href=""><button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
<script>
  const loadDeleteContent = (e) => {
    let row = e.data.row
    $("#delete_button").attr("href", "/user/delete/" + tableData[row]["id_pk_user"])
    $("#delete_user_id_table").html(tableData[row]["user_id"])
    $("#delete_user_name_table").html(tableData[row]["user_name"])
    $("#delete_user_email_table").html(tableData[row]["user_email"])
    $("#delete_user_mobile_table").html(tableData[row]["user_mobile"])
    $("#delete_user_role_table").html(tableData[row]["user_role"])
    $("#delete_user_notes_table").html(tableData[row]["user_notes"])
    $("#delete_user_status_table").html(tableData[row]["user_status"])
    $("#delete_user_last_login_table").html(tableData[row]["user_last_login"])
  }
</script>