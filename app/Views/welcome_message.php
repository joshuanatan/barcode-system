<?php $this->extend("layout/admin_layout"); ?>

<?php $this->section("content_css") ?>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/examples/css/tables/basic.css">
<?php $this->endSection(); ?>

<?php $this->section("content_title"); ?>
  Basic Tables
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
  <div class="panel">
    <button type="button" class="btn btn-primary" data-target="#id1" data-toggle="modal">Large Generate</button>
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="col-lg-6">
          <!-- Example Basic -->
          <div class="example-wrap">
            <h4 class="example-title">Basic</h4>
            <p>Add class <code>.table</code>.</p>
            <div class="example table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Role</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Teagan</td>
                    <td>Prohaska</td>
                    <td>@Elijah</td>
                    <td>
                      <span class="badge badge-danger">admin</span>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Andy</td>
                    <td>Gaylord</td>
                    <td>@Ramiro</td>
                    <td>
                      <span class="badge badge-info">member</span>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Veronica</td>
                    <td>Gusikowski</td>
                    <td>@Maxime</td>
                    <td>
                      <span class="badge badge-warning">developer</span>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Bruce</td>
                    <td>Rogahn</td>
                    <td>@Maggio</td>
                    <td>
                      <span class="badge badge-success">supporter</span>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Carolina</td>
                    <td>Hickle</td>
                    <td>@Hammes</td>
                    <td>
                      <span class="badge badge-info">member</span>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Madaline</td>
                    <td>Eichmann</td>
                    <td>@Amaya</td>
                    <td>
                      <span class="badge badge-success">supporter</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Example Basic -->
        </div>

        <div class="col-lg-6">
          <!-- Example Hover Table -->
          <div class="example-wrap">
            <h4 class="example-title">Hover Table</h4>
            <p>Add<code>.table-hover</code>to enable a hover state on table
              rows within a<code>&lt;tbody&gt;</code></p>
            <div class="example table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Products</th>
                    <th>Popularity</th>
                    <th>Sales</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Milk Powder</td>
                    <td>
                      <span data-plugin="peityLine">5,3,2,-1,-3,-2,2,3,4,1</span>
                    </td>
                    <td>
                      <span class="text-danger text-semibold"><i class="icon md-chevron-down" aria-hidden="true"></i> 28.76%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Air Conditioner</td>
                    <td>
                      <span data-plugin="peityLine">1,-1,-2,1,2,1,0,1,3,2</span>
                    </td>
                    <td>
                      <span class="text-warning text-semibold"><i class="icon md-chevron-down" aria-hidden="true"></i> 8.55%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>RC Cars</td>
                    <td>
                      <span data-plugin="peityLine">3,2,3,-1,-3,-1,0,2,4,5</span>
                    </td>
                    <td>
                      <span class="text-success text-semibold"><i class="icon md-chevron-up" aria-hidden="true"></i> 58.56%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Down Coat</td>
                    <td>
                      <span data-plugin="peityLine">1,-2,0,2,4,5,3,2,3,5</span>
                    </td>
                    <td>
                      <span class="text-info text-semibold"><i class="icon md-chevron-up" aria-hidden="true"></i> 35.76%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>SLR Camera</td>
                    <td>
                      <span data-plugin="peityLine">1,-1,0,2,3,1,-1,1,4,2</span>
                    </td>
                    <td>
                      <span class="text-warning text-semibold"><i class="icon md-chevron-down" aria-hidden="true"></i> 21.13%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Jacket</td>
                    <td>
                      <span data-plugin="peityLine">4,2,-1,-3,-2,1,3,5,2,4</span>
                    </td>
                    <td>
                      <span class="text-info text-semibold"><i class="icon md-chevron-up" aria-hidden="true"></i> 26.88%</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Example Hover Table -->
        </div>

        <div class="col-lg-6">
          <!-- Example Bordered Table -->
          <div class="example-wrap">
            <h4 class="example-title">Bordered Table</h4>
            <p>Add<code>.table-bordered</code>for borders on all sides of the
              table and cells.</p>
            <div class="example table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Task</th>
                    <th>Progress</th>
                    <th>Deadline</th>
                    <th class="text-nowrap">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Lunar probe project</td>
                    <td>
                      <div class="progress progress-xs my-10 ">
                        <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                      </div>
                    </td>
                    <td>May 15, 2017</td>
                    <td class="text-nowrap">
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                        <i class="icon md-wrench" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                        <i class="icon md-close" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Dream successful plan</td>
                    <td>
                      <div class="progress progress-xs my-10 ">
                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                      </div>
                    </td>
                    <td>July 1, 2017</td>
                    <td class="text-nowrap">
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                        <i class="icon md-wrench" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                        <i class="icon md-close" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Office automatization</td>
                    <td>
                      <div class="progress progress-xs my-10 ">
                        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                      </div>
                    </td>
                    <td>Apr 12, 2017</td>
                    <td class="text-nowrap">
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                        <i class="icon md-wrench" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                        <i class="icon md-close" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>The sun climbing plan</td>
                    <td>
                      <div class="progress progress-xs my-10 ">
                        <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                      </div>
                    </td>
                    <td>Aug 9, 2017</td>
                    <td class="text-nowrap">
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                        <i class="icon md-wrench" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                        <i class="icon md-close" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Open strategy</td>
                    <td>
                      <div class="progress progress-xs my-10 ">
                        <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                      </div>
                    </td>
                    <td>Apr 2, 2017</td>
                    <td class="text-nowrap">
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                        <i class="icon md-wrench" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                        <i class="icon md-close" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Tantas earum numeris</td>
                    <td>
                      <div class="progress progress-xs my-10 ">
                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                      </div>
                    </td>
                    <td>July 11, 2017</td>
                    <td class="text-nowrap">
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                        <i class="icon md-wrench" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                        <i class="icon md-close" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Example Bordered Table -->
        </div>

        <div class="col-lg-6">
          <!-- Example Striped Rows -->
          <div class="example-wrap">
            <h4 class="example-title">Striped Rows</h4>
            <p>Use<code>.table-striped</code>to add zebra-striping to any table
              row within the<code>&lt;tbody&gt;</code>.Striped tables are
              styled via the<code>:nth-child</code>CSS selector, which is
              not available in Internet Explorer 8.</p>
            <div class="example table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Username</th>
                    <th>Payment</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2569</td>
                    <td>@Jessica</td>
                    <td>
                      <span class="badge badge-pill badge-dark">Credit Card</span>
                    </td>
                    <td>$256.10</td>
                  </tr>
                  <tr>
                    <td>4582</td>
                    <td>@William</td>
                    <td>
                      <span class="badge badge-pill badge-success">Paypal</span>
                    </td>
                    <td>$96.75</td>
                  </tr>
                  <tr>
                    <td>2563</td>
                    <td>@Jennifer</td>
                    <td>
                      <span class="badge badge-pill badge-dark">Credit Card</span>
                    </td>
                    <td>$458.00</td>
                  </tr>
                  <tr>
                    <td>4378</td>
                    <td>@Rolando</td>
                    <td>
                      <span class="badge badge-pill badge-success">Paypal</span>
                    </td>
                    <td>$30.25</td>
                  </tr>
                  <tr>
                    <td>8465</td>
                    <td>@Katelin</td>
                    <td>
                      <span class="badge badge-pill badge-dark">Credit Card</span>
                    </td>
                    <td>$158.50</td>
                  </tr>
                  <tr>
                    <td>1526</td>
                    <td>@Richard</td>
                    <td>
                      <span class="badge badge-pill badge-success">Paypal</span>
                    </td>
                    <td>$58.80</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Example Striped Rows -->
        </div>

        <div class="col-lg-6">
          <!-- Example Condensed -->
          <div class="example-wrap">
            <h4 class="example-title">Condensed Table</h4>
            <p>Add<code>.table-sm</code>to make tables more compact by cutting
              cell padding in half.</p>
            <div class="example table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Invoice</th>
                    <th>Username</th>
                    <th>Amount</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="javascript:void(0)">Order #53451</a></td>
                    <td>Mary Adams</td>
                    <td>$24.98</td>
                    <td>2017/7/26</td>
                  </tr>
                  <tr>
                    <td><a href="javascript:void(0)">Order #53452</a></td>
                    <td>Caleb Richards</td>
                    <td>$564.00</td>
                    <td>2017/7/15</td>
                  </tr>
                  <tr>
                    <td><a href="javascript:void(0)">Order #53453</a></td>
                    <td>June Lane</td>
                    <td>$58.87</td>
                    <td>2017/7/01</td>
                  </tr>
                  <tr>
                    <td><a href="javascript:void(0)">Order #53454</a></td>
                    <td>Crystal Bates</td>
                    <td>$97.50</td>
                    <td>2017/6/26</td>
                  </tr>
                  <tr>
                    <td><a href="javascript:void(0)">Order #53455</a></td>
                    <td>Heather Harper</td>
                    <td>$249.99</td>
                    <td>2017/6/09</td>
                  </tr>
                  <tr>
                    <td><a href="javascript:void(0)">Order #53456</a></td>
                    <td>Willard Wood</td>
                    <td>$24.98</td>
                    <td>2017/6/01</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Example Condensed -->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade example-modal-lg" id="id1">
    <div class="modal-dialog modal-simple modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="exampleOptionalLarge">Large Modal</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
      </div>
    </div>
  </div>
<?php $this->endSection(); ?>

<?php $this->section("content_js") ?>
  <script src="<?= base_url(); ?>assets/global/vendor/peity/jquery.peity.min.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/peity.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/asselectable.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/selectable.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/table.js"></script>
  <script src="<?= base_url(); ?>assets/examples/js/charts/peity.js"></script>
<?php $this->endSection(); ?>

<?php $this->section("content_breadcrumb")?>
  <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
  <li class="breadcrumb-item active">Basic</li>
<?php $this->endSection();?>
