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
    <div class="row">
      <div class="col-lg-3">
        <div class="card card-block p-30 bg-blue-600">
          <div class="card-watermark darker font-size-80 m-15"><i class="icon md-assignment" aria-hidden="true"></i></div>
          <div class="counter counter-md counter-inverse text-left">
            <div class="counter-number-group">
              <span class="counter-number"><?= $total_product ?></span>
              <span class="counter-number-related text-capitalize">Product</span>
            </div>
            <div class="counter-label text-capitalize">in total</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-lg">
      <div class="col-lg-12">
        <!-- Example Basic -->
        <h4>List of Products</h4>
        <button type="button" class="btn btn-primary" data-target="#AddProductModal" data-toggle="modal">Add Product</button>
        <div class="example table-responsive">
          <table class="table table-hover table-striped table-bordered" id="productTable">
            <thead>
              <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Product Notes</th>
                <th>Product Quantity</th>
                <th class="col-lg-1">Action</th>
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
      $.each($(".editProductButton"), (index, value) => {
        $(value).on("click", {
          row: index
        }, loadEditContent)
      })
      $.each($(".deleteProductButton"), (index, value) => {
        $(value).on("click", {
          row: index
        }, loadDeleteContent)
      })
      $.each($(".showProductButton"), (index, value) => {
        $(value).on("click", {
          row: index
        }, e => {
          console.log(tableData)
          let = e.data.row
          let url = `<?= base_url()?>product/show/${tableData[index]["id_pk_product"]}`
          window.open(url,"_blank")
        })
      })
      $.each($(".productPriceContainer"), (index , value) => {
        let content = `
          Base Price: ${tableData[index]["product_base_price"].replace(/\B(?=(\d{3})+(?!\d))/g, ".")}<hr/>
          Sell Price: ${tableData[index]["product_sell_price"].replace(/\B(?=(\d{3})+(?!\d))/g, ".")}
        `
        $(value).html(content)
      })
    }
    table = $("#productTable").DataTable({
      processing: true,
      serverSide: true,
      async: false,
      ajax: '<?= base_url() ?>product/data/',
      columns: [{
          data: 'product_id'
        },
        {
          data: 'product_name'
        },
        {
          data: 'product_desc'
        },
        {
          data: 'null',
          defaultContent: `
                <p class='productPriceContainer'></p>`,
          orderable: false
        },
        {
          data: 'product_notes'
        },
        {
          data: 'product_qty'
        },
        {
          data: null,
          className: '',
          defaultContent: `
                <button data-toggle="modal" data-target="#EditProductModal" class="btn btn-sm btn-primary editProductButton col-lg-12">Edit</button>
                <button data-toggle="modal" data-target="#DeleteProductModal" class="btn btn-sm btn-danger deleteProductButton col-lg-12">Delete</button>`,
          orderable: false
        }
      ],
      "drawCallback": postTableLoadActivities,
      dom: 'Bfrtip'
    })


  })
</script>
<?= $this->include("product/add_product_modal"); ?>
<?= $this->include("product/edit_product_modal"); ?>
<?= $this->include("product/delete_product_modal"); ?>
<?php $this->endSection(); ?>