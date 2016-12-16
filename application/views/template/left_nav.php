<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('id'); ?>.png"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Md. Rockey Ahmed</p>

            </div>
        </div>

        <ul class="sidebar-menu">
            <li><a href="<?php echo base_url(); ?>index.php/pages/add_administrative_area"></i> প্রশাসনিক এলাকা যোগ
                    করুন </a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/create_new_project"></i> নতুন প্রকল্প তৈরি করুন </a>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/add_implementary_panel"></i> বাস্তবায়নকারি কর্তৃপক্ষ
                    যোগ করুন </a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/add_sector"></i> খাত যোগ করুন </a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/search_project"></i> প্রকল্প খোজ করুন </a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/search_by_union_pouroshova"></i> ইউনিয়ন ভিত্তিক খোঁজ
                    করুন </a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/search_by_implementar"></i> বাস্তবায়নকারী
                    কর্তৃপক্ষ<br> ভিত্তিক খোঁজ করুন </a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/search_by_economical_year"></i> অর্থ বছর ভিত্তিক খোঁজ
                    করুন </a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pages/search_by_sector"></i> খাত ভিত্তিক খোঁজ করুন </a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>