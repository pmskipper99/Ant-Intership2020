<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<!--Head-->
<?php echo $this->element('head');?>
<body>
    <!-- Left Panel -->
        <?php echo $this->element('left_menu');?>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header  -->
            <?php echo $this->element('header');?>
        <!-- /header -->

        <!--  Dashboard  -->
            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        <!--  /Dashboard  -->

        <!-- Content -->
            <?php echo $this->Session->Flash();?>

            <?php echo $this->fetch('content'); ?>
        <!-- /Content -->
    </div><!-- /#right-panel -->

    <!-- Script -->
        <?php echo $this->element('script');?>
    <!-- /Script -->
</body>

</html>
