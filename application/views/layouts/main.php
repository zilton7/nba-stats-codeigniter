<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-sortable.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

    <script src="<?php echo base_url(); ?>assets/scripts/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/bootstrap-sortable.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/custom.js"></script>


    <?php if (isset($title) && ($title == 'Swipe Editor' || $title == 'Profile Editor')): ?>
    <!-- if Editor include Summernote CDN -->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
    <?php endif;?>


</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">NBA Stats</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="col-xs-3">

        </div>

        <div class=" col-xs-9">
            <?php $this->load->view($main_view);?>
        </div>
    </div>

</body>

</html>