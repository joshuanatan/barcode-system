<div class="modal fade" id="DetailUserModal">
  <div class="modal-dialog modal-simple modal-lg modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Detail User</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <tr>
            <th>User ID</th>
            <td id="detail_user_id_table"></td>
          </tr>
          <tr>
            <th>User Name</th>
            <td id="detail_user_name_table"></td>
          </tr>
          <tr>
            <th>User Email</th>
            <td id="detail_user_email_table"></td>
          </tr>
          <tr>
            <th>User Role</th>
            <td id="detail_user_role_table"></td>
          </tr>
          <tr>
            <th>User Notes</th>
            <td id="detail_user_notes_table"></td>
          </tr>
          <tr>
            <th>User Last Login</th>
            <td id="detail_user_last_login_table"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  const loadDetailContent = (e) => {
    let row = e.data.row
    $("#detail_user_id_table").html(tableData[row]["user_id"])
    $("#detail_user_name_table").html(tableData[row]["user_name"])
    $("#detail_user_email_table").html(tableData[row]["user_email"])
    $("#detail_user_mobile_table").html(tableData[row]["user_mobile"])
    $("#detail_user_role_table").html(tableData[row]["user_role"])
    $("#detail_user_notes_table").html(tableData[row]["user_notes"])
    $("#detail_user_status_table").html(tableData[row]["user_status"])
    $("#detail_user_last_login_table").html(tableData[row]["user_last_login"])
  }
</script>