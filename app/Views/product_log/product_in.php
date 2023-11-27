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
<li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
<div class="panel">
  <div class="panel-body container-fluid">
    <div class="row row-lg">
      <div class="col-lg-12">
        <h4>Product SKU / Product ID / Barcode Value</h4>
        <input type="text" required autofocus id="barcode_container" class="form-control" onchange="handleChangeValue()" />
        <div class="toast-example" id="success_notif">
          <div class="toast toast-just-text toast-success">
            <div class="toast-message" id="success_notif_content">
            </div>
          </div>
        </div>
        <div class="toast-example" id="fail_notif">
          <div class="toast toast-just-text toast-danger">
            <div class="toast-message" id="fail_notif_content">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>
<?php $this->section("misc"); ?>
<script>
  
  $("#success_notif").hide()
  $("#fail_notif").hide()
  function handleChangeValue() {
    $.ajax({
      url: "<?= base_url(); ?>/api/product/a05869c11f255af1658d097412becd7a2d18c2cfee88d1ae673c507ad19b4b79b",
      type: "POST",
      data: {
        "product_id": $("#barcode_container").val()
      },
      dataType: "JSON",
      success: function(data) {
        if(data.status){
          $("#success_notif").show()
          $("#fail_notif").hide()
          $("#success_notif_content").html(`
            <strong>Product SKU: ${data.data.product_id}</strong><br/>
            <strong>Product Name: ${data.data.product_name}</strong><br/>
            <strong>Product Quantity: ${data.data.product_qty}</strong><br/>
            <strong>Record Time: ${data.data.created_at}</strong><br/>
            <strong>Record ID: ${data.data.created_by}</strong><br/>
          `)
          $("#barcode_container").val("")
        }
        else{
          $("#success_notif").hide()
          $("#fail_notif").show()
          $("#fail_notif_content").html(data.msg)
          $("#barcode_container").val("")
        }
      }
    })
  }
</script>
<!-- <script>
  $("#barcode_container").on("input", () => {
    alert(this.value)
  })  
</script> -->
<?php $this->endSection(); ?>