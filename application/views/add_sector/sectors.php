<div class="content-wrapper">
    <section class="content">
        <div class="register-box">
            <h4 class="login-box-msg">খাত টেবিল </h4>



                <div class="register-box-body">

                    <div style="color: red">
                        <?php echo validation_errors(); ?>
                    </div>

                    <form action="<?php echo base_url(); ?>index.php/pages/add_sector" method="post">

                        <div class="form-group has-feedback">
                            <input type="text" name="sector" class="form-control" placeholder="খাত">
                        </div>


                        <div style="col-sm-2">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">দাখিল করুন </button>
                        </div><!-- /.col -->

                    </form>
                </div>

        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->