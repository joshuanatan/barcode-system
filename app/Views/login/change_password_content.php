<?php $this->extend("layout/login_layout");?>
<?php $this->section("form_section") ?>
<form method="post" action="<?= base_url("user/change_password") ?>">
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <input type="text" class="form-control" name="user_email" value="<?= session()->get("user_email")?>" readonly/>
    <label class="floating-label">User Email</label>
  </div>
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <input type="password" class="form-control" name="user_password" />
    <label class="floating-label">Current Password</label>
  </div>
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <input type="password" class="form-control" name="new_password" />
    <label class="floating-label">New Password</label>
  </div>
  <div class="form-group form-material floating" data-plugin="formMaterial">
    <input type="password" class="form-control" name="confirm_new_password" />
    <label class="floating-label">Confirm New Password</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Change Password</button>
</form>
<?php $this->endSection(); ?>