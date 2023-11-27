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
Product
<?php $this->endSection(); ?>

<?php $this->section("content_breadcrumb") ?>
<li class="breadcrumb-item"><a href="javascript:void(0)">Product Log</a></li>
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
<div class="panel">
  <div class="panel-body container-fluid">
    <div class="row row-lg">
      <div class="col-lg-12">
        <!-- Example Basic -->
        <h4>Product Logs</h4>
        <div class="example table-responsive">
          <table class="table table-hover table-striped table-bordered" id="productLogTable">
            <thead>
              <tr>
                <th>Product SKU</th>
                <th>Product Log Type</th>
                <th>Execution Date</th>
                <th>Execution By</th>
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
    table = $("#productLogTable").DataTable({
      processing: true,
      serverSide: true,
      async: false,
      ajax: '<?= base_url() ?>product/log/data/<?= $product_id ;?>',
      columns: [{
          data: 'product_id'
        },
        {
          data: 'product_log_type'
        },
        {
          data: 'created_at'
        },
        {
          data: 'user_name'
        },
      ],
      dom: 'Bfrtip'
    })


  })
</script>
<?php $this->endSection(); ?>