<html lang="en">
<!-- Mirrored from diliat.in/themeforest/sentir/1.2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Sep 2014 14:41:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
    <meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
    <meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
    <title>Login | SENTIR - Responsive admin and dashboard UI kits template</title>

    <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
    <link href="<?= $this->getThemePath() ?>assets//css/bootstrap.min.css" rel="stylesheet">

    <!-- PLUGINS CSS -->
    <link href="<?= $this->getThemePath() ?>assets//plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/prettify/prettify.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/chosen/chosen.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/icheck/skins/all.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/datepicker/datepicker.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/summernote/summernote.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/morris-chart/morris.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/c3-chart/c3.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/slider/slider.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/salvattore/salvattore.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/toastr/toastr.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/fullcalendar/fullcalendar/fullcalendar.css"
          rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//plugins/fullcalendar/fullcalendar/fullcalendar.print.css"
          rel="stylesheet" media="print">

    <!-- MAIN CSS (REQUIRED ALL PAGE)-->
    <link href="<?= $this->getThemePath() ?>assets//plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//css/style.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>assets//css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login tooltips">

<!-- BEGIN PANEL DEMO -->
<div class="box-demo">
    <div class="inner-panel">
        <div class="cog-panel" id="demo-panel"><i class="fa fa-cog fa-spin"></i></div>
        <p class="text-muted small text-center">COLOR SCHEMES</p>

        <div class="row text-center">
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Default" id="color-reset">
                    <div class="half-tiles bg-primary"></div>
                    <div class="half-tiles bg-primary"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Success" id="bg-success">
                    <div class="half-tiles bg-success"></div>
                    <div class="half-tiles bg-success"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Info" id="bg-info">
                    <div class="half-tiles bg-info"></div>
                    <div class="half-tiles bg-info"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Danger" id="bg-danger">
                    <div class="half-tiles bg-danger"></div>
                    <div class="half-tiles bg-danger"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Warning" id="bg-warning">
                    <div class="half-tiles bg-warning"></div>
                    <div class="half-tiles bg-warning"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Dark" id="bg-dark">
                    <div class="half-tiles bg-dark"></div>
                    <div class="half-tiles bg-dark"></div>
                </div>
            </div>
        </div>
        <button class="btn btn-block btn-primary btn-sm" id="btn-reset">Reset to default</button>
        <a href="http://themeforest.net/item/sentir-responsive-admin-and-dashboard-ui-kits/7700260?ref=arirusmanto"
           class="btn btn-block btn-danger btn-sm" id="btn-reset"><i class="fa fa-shopping-cart"></i> Buy this template</a>
    </div>
</div>
<!-- END PANEL DEMO -->


<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="login-header text-center">
    <img src="<?= $this->getThemePath() ?>assets//img/logo-login.png" class="logo" alt="Logo">
</div>
<div class="login-wrapper">
    <div class="alert alert-warning alert-bold-border fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Warning!</strong> Better check yourself, you're <a href="#fakelink" class="alert-link">not looking too
            good</a>.
    </div>
    <form role="form" action="<?= $this->createUrl('site/login') ?>" method="post">
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="text" name="LoginForm[username]" class="form-control no-border input-lg rounded"
                   placeholder="Enter username" autofocus="">
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="password" name="LoginForm[password]" class="form-control no-border input-lg rounded"
                   placeholder="Enter password">
            <span class="fa fa-unlock-alt form-control-feedback"></span>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label class="">
                    <div class="icheckbox_flat-yellow" aria-checked="false" aria-disabled="false"
                         style="position: relative;"><input type="checkbox" class="i-yellow-flat"
                                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
                        <ins class="iCheck-helper"
                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                    </div>
                    Remember me
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">LOGIN</button>
        </div>
    </form>
    <p class="text-center"><strong><a href="forgot-password.html">Forgot your password?</a></strong></p>

    <p class="text-center">or</p>

    <p class="text-center"><strong><a href="register.html">Create new account</a></strong></p>
</div>
<!-- /.login-wrapper -->
<!--
===========================================================
END PAGE
===========================================================
-->

<!--
===========================================================
Placed at the end of the document so the pages load faster
===========================================================
-->
<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
<script src="<?= $this->getThemePath() ?>assets//js/jquery.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//js/bootstrap.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/retina/retina.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/nicescroll/jquery.nicescroll.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/backstretch/jquery.backstretch.min.js"></script>

<!-- PLUGINS -->
<script src="<?= $this->getThemePath() ?>assets//plugins/skycons/skycons.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/prettify/prettify.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/chosen/chosen.jquery.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/icheck/icheck.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/mask/jquery.mask.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/validator/bootstrapValidator.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/datatable/js/bootstrap.datatable.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/summernote/summernote.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/markdown/markdown.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/markdown/to-markdown.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/markdown/bootstrap-markdown.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/slider/bootstrap-slider.js"></script>

<script src="<?= $this->getThemePath() ?>assets//plugins/toastr/toastr.js"></script>

<!-- FULL CALENDAR JS -->
<script src="<?= $this->getThemePath() ?>assets//plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//js/full-calendar.js"></script>

<!-- EASY PIE CHART JS -->
<script src="<?= $this->getThemePath() ?>assets//plugins/easypie-chart/easypiechart.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/easypie-chart/jquery.easypiechart.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="<?=$this->getThemePath()?>assets//plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="<?= $this->getThemePath() ?>assets//plugins/jquery-knob/jquery.knob.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/jquery-knob/knob.js"></script>

<!-- FLOT CHART JS -->
<script src="<?= $this->getThemePath() ?>assets//plugins/flot-chart/jquery.flot.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/flot-chart/jquery.flot.tooltip.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/flot-chart/jquery.flot.time.js"></script>

<!-- MORRIS JS -->
<script src="<?= $this->getThemePath() ?>assets//plugins/morris-chart/raphael.min.js"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/morris-chart/morris.min.js"></script>

<!-- C3 JS -->
<script src="<?= $this->getThemePath() ?>assets//plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
<script src="<?= $this->getThemePath() ?>assets//plugins/c3-chart/c3.min.js"></script>

<!-- MAIN APPS JS -->
<script src="<?= $this->getThemePath() ?>assets//js/apps.js"></script>
<script src="<?= $this->getThemePath() ?>assets//js/demo-panel-login.js"></script>


<!-- Mirrored from diliat.in/themeforest/sentir/1.2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Sep 2014 14:41:31 GMT -->
</body>
</html>