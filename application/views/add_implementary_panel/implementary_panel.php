<div class="content-wrapper">
    <section class="content">
        <div class="register-box">
            <h4 class="login-box-msg">প্রকল্প টেবিল </h4>


            <div style="color: red">
                <?php echo validation_errors(); ?>
            </div>

            <form action="<?php echo base_url(); ?>index.php/pages/add_implementary_panel" method="post">

                <div class="form-group has-feedback">
                    <input type="text" name="implementar" class="form-control" placeholder=" বাস্তবায়নকারি কর্তৃপক্ষ">
                </div>


                <div style="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">দাখিল করুন</button>
                </div><!-- /.col -->

            </form>
        </div>

    </section><!-- /.content -->
</div><!--