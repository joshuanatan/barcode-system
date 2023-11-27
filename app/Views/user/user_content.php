<?php $this->extend("layout/admin_layout"); ?>

<?php $this->section("content_css") ?>
<link href="<?= base_url(); ?>assets/datatable/datatables.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/select2/select2.min.css" rel="stylesheet" />

<?php $this->endSection(); ?>

<?php $this->section("content_js") ?>
<script src="<?= base_url(); ?>assets/global/vendor/peity/jquery.peity.min.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/peity.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/asselectable.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/selectable.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/table.js"></script>

<script src="<?= base_url(); ?>assets/datatable/datatables.min.js"></script>
<script src="<?= base_url(); ?>assets/select2/select2.full.min.js"></script>
<?php $this->endSection(); ?>

<?php $this->section("content_title"); ?>
User
<?php $this->endSection(); ?>

<?php $this->section("content_breadcrumb") ?>
<li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
<div class="panel">
  <div class="panel-body container-fluid">
    <?php if (session()->get("add_status")) : ?>
      <div role="alert" class="alert alert-success alert-dismissible">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button">
          <span aria-hidden="true">×</span>
        </button>
        <h4>Add User Success</h4>
        <p>
          Email: <?= session()->get("new_email") ?><br />
          Password: <?= session()->get("new_password") ?><br />
          <br />
          Please save and tell to the user securely
        </p>
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-lg-3">
        <div class="card card-block p-30 bg-blue-600">
          <div class="card-watermark darker font-size-80 m-15"><i class="icon md-assignment" aria-hidden="true"></i></div>
          <div class="counter counter-md counter-inverse text-left">
            <div class="counter-number-group">
              <span class="counter-number"><?= $total_user[0]["count"] ?></span>
              <span class="counter-number-related text-capitalize">User</span>
            </div>
            <div class="counter-label text-capitalize">in total</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-lg">
      <div class="col-lg-12">
        <!-- Example Basic -->
        <h4>List of Users</h4>
        <button type="button" class="btn btn-primary" data-target="#AddUserModal" data-toggle="modal">Add User</button>
        <div class="example table-responsive">
          <table class="table table-hover table-striped table-bordered" id="userTable">
            <thead>
              <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Role</th>
                <th>User Last Login</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <!-- End Example Basic -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>
<?php $this->section("misc"); ?>
<script>
  let tableData = [];
  var table;
  $(document).ready(() => {
    const postTableLoadActivities = () => {
      tableData = table.rows().data().toArray()
      $.each($(".editUserButton"), (index, value) => {
        $(value).on("click", {
          row: index
        }, loadEditContent)
      })
      $.each($(".deleteUserButton"), (index, value) => {
        $(value).on("click", {
          row: index
        }, loadDeleteContent)
      })
      $.each($(".detailUserButton"), (index, value) => {
        $(value).on("click", {
          row: index
        }, loadDetailContent)
      })
    }
    table = $("#userTable").DataTable({
      processing: true,
      serverSide: true,
      async: false,
      ajax: '<?= base_url() ?>user/data/',
      columns: [{
          data: 'user_id'
        },
        {
          data: 'user_name'
        },
        {
          data: 'user_email'
        },
        {
          data: 'user_role'
        },
        {
          data: 'user_last_login'
        },
        {
          data: null,
          className: '',
          defaultContent: `
                <button data-toggle="modal" data-target="#EditUserModal" class="btn btn-sm btn-primary editUserButton col-lg-12">Edit</button>
                <button data-toggle="modal" data-target="#DeleteUserModal" class="btn btn-sm btn-danger deleteUserButton col-lg-12">Delete</button>
                <button data-toggle="modal" data-target="#DetailUserModal" class="btn btn-sm btn-light detailUserButton col-lg-12">Detail</button>
                `,
          orderable: false
        }
      ],
      "drawCallback": postTableLoadActivities,
      dom: 'Bfrtip'
    })


  })
</script>
<?= $this->include("user/add_user_modal"); ?>
<?= $this->include("user/edit_user_modal"); ?>
<?= $this->include("user/delete_user_modal"); ?>
<?= $this->include("user/detail_user_modal"); ?>
<?php $this->endSection(); ?>