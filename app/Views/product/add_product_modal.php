<div class="modal fade" id="AddProductModal">
  <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Add Product</h4>
      </div>
      <form method="POST" action="<?= base_url("product/insert"); ?>" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product ID</h5>
              <input type="text" class="form-control" name="product_id" required autofocus value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Name</h5>
              <input type="text" class="form-control" name="product_name" required value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Desription</h5>
              <textarea rows="3" class="form-control" name="product_description"></textarea>
            </div>
            
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Base Price</h5>
              <input type="text" class="form-control" name="product_base_price" required value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Sell Price</h5>
              <input type="text" class="form-control" name="product_sell_price" required value="" />
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Image</h5>
              <input type="file" class="form-control" name="product_image" value="" accept="image/png, image/gif, image/jpeg"/>
            </div>
            <div class="form-group col-md-12">
              <h5 class="form-control-label">Product Notes</h5>
              <textarea rows="3" class="form-control" name="product_notes"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-danger" data-target="#AddProductModal" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>