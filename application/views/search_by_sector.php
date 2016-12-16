<!DOCTYPE html>
<html>
<head>
    <?php include 'template/head.php'; ?>
    <style>
        table, td, th {
            border: 1px solid green;
        }

        th {
            background-color: #00753f;
            color: white;
        }

        #infoMessage p {
            padding: .8em;
            margin-bottom: 1em;
            border: 2px solid #ddd;
            background: #FFF6BF;
            color: #817134;
            border-color: #FFD324;
            text-align: center;
        }

        div.shadow {
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="align-items: center">

<div class="wrapper" style="margin-left:12%;margin-right: 12% ">

    <div class="shadow">
        <?php /*include 'template/header.php'; */ ?>
        <div class="content-wrapper">
            <img style="height: 100%;width: 100%" src="<?php echo base_url(); ?>res/dist/img/df.png" alt="banner">
            <div style="background-color: #00753f;margin-top: 1%;color: white;padding: .5%; margin-bottom:  2%">
                <h4> খাত ভিত্তিক খোঁজ করুন </h4>
            </div>
            <div style="padding-top: 2%">
                <?php include 'search_page/search_by_sector.php'; ?>
                <br>

                <?php include 'search_page/search_result_page.php'; ?>
                <br>
                <?php include 'template/footer.php'; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

