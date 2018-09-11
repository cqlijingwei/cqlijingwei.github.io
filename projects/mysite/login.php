<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"
      class="com_content view-featured itemid-593 j35 mm-hover no-touch" slick-uniqueid="3">
<head>
    <meta http-equiv="content-type" content="text/html; charset=gbk">
    <title>Log In-EMPFCS</title>
    <link rel="stylesheet" href="css/t3-01.css" type="text/css">
    <link rel="stylesheet" href="css/t3-02.css" type="text/css">
    <link rel="stylesheet" href="css/t3-03.css" type="text/css">
    <link rel="stylesheet" href="css/t3-04.css" type="text/css">
    <script src="js/jsArr01.js" type="text/javascript"></script>
    <script src="js/module.js" type="text/javascript"></script>
    <script src="js/jsArr02.js" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(window).on('load', function () {
            new JCaption('img.caption');
        });
        if (typeof acymailing == 'undefined') {
            var acymailing = Array();
        }
        acymailing['NAMECAPTION'] = 'Name';
        acymailing['NAME_MISSING'] = 'Please enter your name';
        acymailing['EMAILCAPTION'] = 'E-mail';
        acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
        acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
        acymailing['CAPTCHA_MISSING'] = 'The captcha is invalid, please try again';
        acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';

        jQuery(function ($) {
            $('.hasTip').each(function () {
                var title = $(this).attr('title');
                if (title) {
                    var parts = title.split('::', 2);
                    var mtelement = document.id(this);
                    mtelement.store('tip:title', parts[0]);
                    mtelement.store('tip:text', parts[1]);
                }
            });
            var JTooltips = new Tips($('.hasTip').get(), {"maxTitleChars": 50, "fixed": false});
        });
        jQuery(document).ready(function () {
            jQuery('.hasTooltip').tooltip({"html": true, "container": "body"});
        });
    </script>


    <!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/stylesheet">
        @-webkit-viewport {
            width: device-width;
        }
        @-moz-viewport {
            width: device-width;
        }
        @-ms-viewport {
            width: device-width;
        }

        @-o-viewport {
            width: device-width;
        }

        @viewport {
            width: device-width;
        }
    </style>
    
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="YES">
    <!-- //META FOR IOS & HANDHELD -->

    <!-- Le HTML5 shim and media query for IE8 support -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

    <link href="css/tab.css" type="text/css"
          rel="stylesheet">
    <link href="css/style.css"
          type="text/css" rel="stylesheet">
    <script src="js/tab.js"
            type="text/javascript"></script>

    <link href="css/index01.css" type="text/css">
    <link href="css/index02.css" type="text/css">
    
    <style type="text/css">.t3-megamenu.animate .animating > .mega-dropdown-menu, .t3-megamenu.animate.slide .animating > .mega-dropdown-menu > div {
        transition-duration: 400ms !important;
        -webkit-transition-duration: 400ms !important;
    }</style>

</head>

<body>
<!-- Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
<div class="t3-wrapper">
<!-- // Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
<div id="toolbar">
    <div class="container">
        <div class="row">
            <div class="toolbar-ct col-xs-12 col-md-6  hidden-sm hidden-xs">
                <div class="toolbar-ct-1">
                    <div class="t3-module module " id="Mod87">
                        <div class="module-inner">
                            <div class="module-ct">

                                <div class="custom">
                                    <p><i class="fa fa-phone"></i> <span>Tel:1-2345-678</span></p></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="toolbar-ct toolbar-ct-right col-xs-12 col-md-6">
                <div class="toolbar-ct-3 ">
                    <div class="btn-group active">
                        <button onclick='javascript:window.location.href="register.php";'  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HEADER -->
<header id="t3-header" class="wrap t3-header">
    <div class="container">
        <div class="row">
            <!--LOGO-->
            <div class="col-xs-12 col-md-3 logo col-sm-6">
                <div class="logo-image">
                    <a href="index.php" title="JoomlArt Demo Site">
                        <img class="logo-img" src="images/logo.png" alt="EMPFCS">
                    </a>
                    <small class="site-slogan hidden-xs"></small>
                </div>
            </div>
            <!-- //LOGO -->

            <!-- MAIN NAVIGATION -->
            <nav id="t3-mainnav" class="col-xs-12 col-md-6 t3-mainnav navbar navbar-default">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                </div>
                
				<?php
					include("conn/conn.php");
					include("common-navi.php");
				?>
            </nav>
            <!-- //MAIN NAVIGATION -->
        </div>
    </div>
</header>
<!-- //HEADER -->

<div id="t3-mainbody" class="container t3-mainbody">
    <div class="row">
        <!-- MAIN CONTENT -->
        <div id="t3-content" class="t3-content col-xs-12">
            <div class="login-wrap" style="margin-bottom: 60px;margin-top:50px" >
                <div class="login " style="max-width: 400px;margin: 0 auto;border: 1px solid #eeeeee;">
                    <div class="page-header" >
                        <h1 style="color:#0885B1">
                            Log In  		</h1>
                    </div>
                    <form action="login_check.php" method="post" class="form-horizontal">

									<fieldset>
										<div class="form-group">
											<div class="col-sm-4 control-label">
												<label id="username-lbl" for="username" class="required">
													Account
													<span class="star">&nbsp;*</span>
												</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="username" id="username" value=""
													class="validate-username required" size="25" required=""
													aria-required="true" autofocus="">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4 control-label">
												<label id="password-lbl" for="password" class="required">
													Password
													<span class="star">&nbsp;*</span>
												</label>
											</div>
											<div class="col-sm-8">
												<input type="password" name="userpwd" id="userpwd"
													value="" class="validate-password required" size="25"
													maxlength="99" required="" aria-required="true">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-offset-4 col-sm-8">
												<button type="submit" class="btn btn-primary">
													Log In
												</button>
											</div>
										</div>
										
							     </fieldset>
					</form>
                </div>

            </div>
        </div>
        <!-- //MAIN CONTENT -->

    </div>
</div>


<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">

    <section class="t3-copyright">
        <div class="container">
            <div class="row">
               </div>
        </div>
    </section>

</footer>
<!-- //FOOTER -->
<!-- Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
</div>
<!-- // Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
</body>
</html>