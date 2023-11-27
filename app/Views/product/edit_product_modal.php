<div class="modal fade" id="EditProductModal">
  <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit Product</h4>
      </div>
      <form method="POST" action="<?= base_url("product/update"); ?>" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="edit_id_pk_product" name="id_pk_product" value="" />
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product ID</h5>
              <input type="text" class="form-control" id="edit_product_id" name="product_id" value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Name</h5>
              <input type="text" class="form-control" id="edit_product_name" name="product_name" value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Desription</h5>
              <textarea rows="3" class="form-control" id="edit_product_description" name="product_description"></textarea>
            </div>

            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Base Price</h5>
              <input type="text" class="form-control" id="edit_product_base_price" name="product_base_price" value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Sell Price</h5>
              <input type="text" class="form-control" id="edit_product_sell_price" name="product_sell_price" value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Image</h5>
              <input type="file" class="form-control" name="product_image" value="" accept="image/png, image/gif, image/jpeg" />
              <br/>
              <img id='edit_product_image' style="width:100%"/>
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Notes</h5>
              <textarea rows="3" class="form-control" id="edit_product_notes" name="product_notes"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-danger" data-target="#EditProductModal" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const loadEditContent = (e) => {
    let row = e.data.row;
    $("#edit_id_pk_product").val(tableData[row]["id_pk_product"])
    $("#edit_product_id").val(tableData[row]["product_id"])
    $("#edit_product_name").val(tableData[row]["product_name"])
    $("#edit_product_description").val(tableData[row]["product_desc"])
    $("#edit_product_base_price").val(tableData[row]["product_base_price"])
    $("#edit_product_sell_price").val(tableData[row]["product_sell_price"])
    $("#edit_product_notes").val(tableData[row]["product_notes"])
    $("#edit_product_image").attr('src', `data:${tableData[row]["product_image_mimetype"]};base64,${tableData[row]["product_image_b64"]}`)
  }
</script>