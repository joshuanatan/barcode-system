<?php $this->extend("layout/login_layout"); ?>
<?php $this->section("form_section") ?>
<form method="post" action="<?= base_url("user/login") ?>">
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <input type="text" class="form-control" name="user_email" />
    <label class="floating-label">Email</label>
  </div>
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <input type="password" class="form-control" name="user_password" />
    <label class="floating-label">Password</label>
  </div> <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>

</form>
<?php $this->endSection(); ?>