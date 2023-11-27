<?php $this->extend("layout/admin_layout"); ?>

<?php $this->section("content_css") ?>
<link rel="stylesheet" href="<?= base_url(); ?>assets/examples/css/tables/basic.css">
<?php $this->endSection(); ?>

<?php $this->section("content_title"); ?>
Dashboard
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
<div class="row">
  <div class="col-lg-3">
    <div class="card card-block p-30 bg-blue-600">
      <div class="card-watermark darker font-size-80 m-15"><i class="icon md-assignment" aria-hidden="true"></i></div>
      <div class="counter counter-md counter-inverse text-left">
        <div class="counter-number-group">
          <span class="counter-number" id="widget1_value">Loading...</span>
          <span class="counter-number-related text-capitalize" id="widget1_title">Loading...</span>
        </div>
        <div class="counter-label text-capitalize">in total</div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card card-block p-30 bg-blue-600">
      <div class="card-watermark darker font-size-80 m-15"><i class="icon md-assignment" aria-hidden="true"></i></div>
      <div class="counter counter-md counter-inverse text-left">
        <div class="counter-number-group">
          <span class="counter-number" id="widget2_value">Loading...</span>
          <span class="counter-number-related text-capitalize" id="widget2_title">Loading...</span>
        </div>
        <div class="counter-label text-capitalize">in total</div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card card-block p-30 bg-blue-600">
      <div class="card-watermark darker font-size-80 m-15"><i class="icon md-assignment" aria-hidden="true"></i></div>
      <div class="counter counter-md counter-inverse text-left">
        <div class="counter-number-group">
          <span class="counter-number" id="widget3_value">Loading...</span>
          <span class="counter-number-related text-capitalize" id="widget3_title">Loading...</span>
        </div>
        <div class="counter-label text-capitalize">in total</div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6 col-xl-4">
    <div class="card card-shadow">
      <div class="card-block p-20 pt-10">
        <div class="example-wrap">
          <h4 class="example-title">Monthly Stock In</h4>
          <div class="example text-center">
            <canvas id="bar_chart2"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-4">

    <div class="card card-shadow">
      <div class="card-block p-20 pt-10">
        <div class="example-wrap">
          <h4 class="example-title">Monthly Stock Out</h4>
          <div class="example text-center">
            <canvas id="bar_chart1"></canvas>
          </div>
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  $.ajax({
    url: "<?= base_url() ?>/dashboard",
    type: "GET",
    dataType: "JSON",
    success: function(data) {
      $("#widget1_value").html(data["widget"][0]["value"])
      $("#widget1_title").html(data["widget"][0]["title"])
      $("#widget2_value").html(data["widget"][1]["value"])
      $("#widget2_title").html(data["widget"][1]["title"])
      $("#widget3_value").html(data["widget"][2]["value"])
      $("#widget3_title").html(data["widget"][2]["title"])


      let ctx = document.getElementById('bar_chart1');
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: data["bar_chart"][0]["label"],
          datasets: [{
            label: data["bar_chart"][0]["label_name"],
            data: data["bar_chart"][0]["data"],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      })

      ctx = document.getElementById('bar_chart2');
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: data["bar_chart"][1]["label"],
          datasets: [{
            label: data["bar_chart"][1]["label_name"],
            data: data["bar_chart"][1]["data"],
            borderWidth: 2
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      })
    }
  })
</script>
<?php $this->endSection(); ?>

<?php $this->section("content_breadcrumb") ?>
<?php $this->endSection(); ?>