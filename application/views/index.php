<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('template/header'); ?>

<body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php echo form_open("auth/cek_login"); ?>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
              <p><button type="submit">Submit</button></p>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator"></div>
              <?php echo form_close(); ?>
          </section>
        </div>

      </div>
    </div>
    <?php $this->load->view('template/footer'); ?>
  </body>
</html>