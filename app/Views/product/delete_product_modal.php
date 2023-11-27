<div class="modal fade" id="DeleteProductModal">
  <div class="modal-dialog modal-simple modal-lg modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Delete Product</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-striped">
          <tr>
            <th style="width:30%">Product ID</th>
            <td id="delete_product_id"></td>
          </tr>
          <tr>
            <th>Product Name</th>
            <td id="delete_product_name"></td>
          </tr>
          <tr>
            <th>Product Description</th>
            <td id="delete_product_description"></td>
          </tr>
          <tr>
            <th>Product Base Price</th>
            <td id="delete_product_base_price"></td>
          </tr>
          <tr>
            <th>Product Sell Price</th>
            <td id="delete_product_sell_price"></td>
          </tr>
          <tr>
            <th>Product Image</th>
            <td><img id='delete_product_image'/></td>
          </tr>
          <tr>
            <th>Product Notes</th>
            <td id="delete_product_notes"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <a id="delete_button" href=""><button class="btn btn-danger">Delete</button></a>
          <button type="button" class="btn btn-danger" data-target="#DeleteProductModal" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<script>
  const loadDeleteContent = (e) => {
    let row = e.data.row;
    $("#delete_button").attr("href", "/product/delete/" + tableData[row]["id_pk_product"])
    $("#delete_product_id").html(tableData[row]["product_id"])
    $("#delete_product_name").html(tableData[row]["product_name"])
    $("#delete_product_description").html(tableData[row]["product_desc"])
    $("#delete_product_base_price").html(tableData[row]["product_base_price"].replace(/\B(?=(\d{3})+(?!\d))/g, "."))
    $("#delete_product_sell_price").html(tableData[row]["product_sell_price"].replace(/\B(?=(\d{3})+(?!\d))/g, "."))
    $("#delete_product_notes").html(tableData[row]["product_notes"])
    $("#delete_product_image").attr('src', `data:${tableData[row]["product_image_mimetype"]};base64,${tableData[row]["product_image_b64"]}`)
  }
</script>