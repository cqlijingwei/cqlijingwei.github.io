<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"
      class="com_content view-featured itemid-593 j35 mm-hover no-touch" slick-uniqueid="3">
<head>
    <meta http-equiv="content-type" content="text/html; charset=gbk">
    <title>Home Page-EMPFCS</title>
    <link rel="stylesheet" href="css/t3-01.css" type="text/css">
    <link rel="stylesheet" href="css/t3-02.css" type="text/css">
    <link rel="stylesheet" href="css/t3-03.css" type="text/css">
    <link rel="stylesheet" href="css/t3-04.css" type="text/css">
    <script src="js/jsArr01.js" type="text/javascript"></script>
   
    <script src="js/jsArr02.js" type="text/javascript"></script>


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
    <script type="text/javascript">
        //<![CDATA[
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement("style");
            msViewportStyle.appendChild(
                    document.createTextNode("@-ms-viewport{width:auto!important}")
            );
            document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
        }
        //]]>
    </script>
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
<div class="t3-wrapper">

<?php
include("conn/conn.php");
include("index-loginCon.php");
?>
<!-- HEADER -->
<header id="t3-header" class="wrap t3-header">
    <div class="container">
        <div class="row">
            <!--LOGO-->
            <div class="col-xs-12 col-md-3 logo col-sm-6">
                <div class="logo-image">
                    <a href="index.php" title="EMPFCS">
                        <img class="logo-img" src="images/logo.png">
                    </a>
                    <small class="site-slogan hidden-xs"></small>
                </div>
            </div>
            <!-- Navigation
 -->
            <nav id="t3-mainnav" class="col-xs-12 col-md-6 t3-mainnav navbar navbar-default">
                <div class="navbar-header">
                </div>
                <?php
					include("common-navi.php");
				?>
            </nav>
				<?php
					include("searchCon.php");
				?>
		</div>
    </div>
</header>

<!-- SPOTLIGHT 1 -->
<div class="container t3-sl t3-sl-1">
    <!-- SPOTLIGHT -->
				<div class="t3-spotlight t3-spotlight-1  row">
					<div
						class=" col-lg-9 col-md-12  col-sm-3 hidden-sm   col-xs-6 hidden-xs ">
						<div class="t3-module module " id="Mod159">
							<div class="module-inner">
								<div class="module-ct">
									<div class="mijoshop">
										<div class="container_oc">
											<div class="slideshow">
												<div id="slideshow0" class="nivoSlider">
													<a href="#"
														class="nivo-imageLink" style="display: block;"><img
															src="images/img1.png"
															class="img-responsive"
															style="display: none;">
													</a>
													<a href="#"
														class="nivo-imageLink" style="display: none;"><img
															src="images/img2.png"
															class="img-responsive"
															style="display: none;">
													</a>
													<a href="#"
														class="nivo-imageLink" style="display: none;"><img
															src="images/img3.png"
															class="img-responsive"
															style="display: none;">
													</a>
													<a href="#"
														class="nivo-imageLink" style="display: none;"><img
															src="images/img4.png"
															class="img-responsive"
															style="display: none;">
													</a>
												</div>
													<div class="nivo-directionNav" style="display: none;">
														<a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a>
													</div>
													
													
											</div>
											<script type="text/javascript">
<!--
jQuery(document).ready(function() {
	jQuery('#slideshow0').nivoSlider();
});
//--></script>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div
						class=" col-lg-3  col-md-6 hidden-md   col-sm-3 hidden-sm   col-xs-6 hidden-xs ">
						<div class="t3-module module highlight " id="Mod160">
							<div class="module-inner">
								<h3 class="module-title ">
									<span>Today's recommendation</span>
								</h3>
								<div class="module-ct">
									<div class="mijoshop">
										<div class="container_oc">
											<div class="box_oc">
												
												<div>
													<div class="box-product">
														<div>
															<div class="image">
																<a
																	href="goodsDetail.php?id=211"><img
																		src="admin/upimages/5.jpg" height="100px"
																		>
																</a>
															</div>
															<div class="name">
																<a
																	href="goodsDetail.php?id=211">Notebook Computer </a>
															</div>
															<div class="rating">
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
															</div>
															<div class="price">
																
																<span class="price-new">2699CAD</span>
															</div>
															
														</div>

														<div>
															<div class="image">
																<a href="goodsDetail.php?id=246" title="Notebook Computer" ><img
																		src="admin/upimages/17.jpg" height="120px">
																</a>
															</div>

														</div>
														<div>
															<div class="image">
																<a href="goodsDetail.php?id=269" title="Desktop Computer" ><img
																		src="admin/upimages/46.jpg" height="120px">
																</a>
															</div>

														</div>
														<div>
															<div class="image">
																<a href="goodsDetail.php?id=276" title="Desktop Computer" ><img
																		src="admin/upimages/57.jpg" height="120px">
																</a>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- SPOTLIGHT -->
</div>
<!-- //SPOTLIGHT 1 -->


<!-- MASS TOP -->
<nav class="container t3-masstop  hidden-sm hidden-xs">


<div class="custom">
<div>
<div class="ja-tabswrap default" style="width:100%;">
<div id="myTab-110069409" class="container">
<div class="ja-tabs-title-top" style="height:30px;">
    <ul class="ja-tabs-title">
        <li title="Most Viewed" class="ja-tab-title col-6 first active"><h3><span>The latest goods
</span>
        </h3></li>
        <li title="Latest Articles" class="ja-tab-title col-6 last"><h3><span>Recommend commodities
</span>
        </h3></li>
    </ul>
</div>
<div class="ja-tab-panels-top" style="height: 344px;">
<div class="ja-tab-content ja-tab-content col-6 active"
     style="opacity: 1; width: 100%; visibility: visible;">
    <div class="ja-tab-subcontent">
        <div class="mijoshop">
            <div class="container_oc">
                <div class="row">
				 <?php
				 	$sql=mysqli_query($conn,"select t1.id,t1.tupian,t1.mingcheng,t1.huiyuanjia,t2.typename from tb_shangpin t1,tb_type t2 where t1.typeid=t2.id order by t1.addtime desc limit 0,12"); 
					$info=mysqli_fetch_array($sql);
		 			if($info==false){//
		   				echo "No new products!";
		  			}else{ 
		    			do{
				 ?>
                    <div class="product-grid col-lg-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="product-thumb transition">
                            <div class="actions">
                                <div class="image"><a href="goodsDetail.php?id=<?php echo $info['id'];?> " >
								<img src="<?php echo $info['tupian'];?>" alt="Heroes Proved " class="img-responsive"></a>
								</div>
                                <div class="button-group">
                                    <div class="cart">
                                        <button class="btn btn-primary btn-primary" type="button" data-toggle="tooltip"
                                                onclick='javascript:window.location.href="cart_add.php?goodsID=<?php echo $info['id'];?>&num=1"; '
                                                style="display: none; width: 33.3333%;" data-original-title="Add to cart
"><i
                                                class="fa fa-shopping-cart"></i></button>
                                    </div>

                                </div>
                            </div>
                            <div class="caption">
                                <div class="name" style="height:40px"><a
                                        href="goodsDetail.php?id=<?php echo $info['id'];?>">
                                   <span style="color:#0885B1">Name:</span>  <?php echo $info['mingcheng'];?> </a></div>
                                <div class="name" style="margin-top:10px">
                                  <span style="color:#0885B1">Class:</span><?php echo $info['typename'];?> </div>

                                <p class="price">
                                   Price:<?php echo $info['huiyuanjia'];?>CAD
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
							}while($info=mysqli_fetch_array($sql));
                    	}
                    ?>
          

                 </div>
            </div>
        </div>
    </div>
</div>
								<div class="ja-tab-content ja-tab-content col-6"
									style="opacity: 0; width: 100%; visibility: hidden;">
									<div class="ja-tab-subcontent">
										<div class="mijoshop">
											<div class="container_oc">
												<div class="row">
				<?php
				 	$sql=mysqli_query($conn,"select t1.id,t1.tupian,t1.mingcheng,t1.huiyuanjia,t2.typename from tb_shangpin t1,tb_type t2 where t1.typeid=t2.id and tuijian=1 order by t1.id desc limit 0,12");
					$info=mysqli_fetch_array($sql);
		 			if($info==false){
		   				echo "No new product in this website!";
		  			}else{ 
		    			do{
				 ?>
													<div
														class="product-grid col-lg-2 col-md-3 col-sm-6 col-xs-12">
														<div class="product-thumb transition">
															<div class="actions">
																<div class="image">
																	<a href="goodsDetail.php?id=<?php echo $info['id'];?> "><img src="<?php echo $info['tupian'];?>" alt="Heroes Proved " class="img-responsive">
																	</a>
																</div>
																<div class="button-group">
																	<div class="cart">
																		<button class="btn btn-primary btn-primary"
																			type="button" data-toggle="tooltip" 
																			onclick='javascript:window.location.href="cart_add.php?goodsID=<?php echo $info['id'];?>&num=1"; '
																			style="display: none; width: 33.3333%;"
																			data-original-title="Add to cart
">
																			<i class="fa fa-shopping-cart"></i>
																		</button>
																	</div>

																</div>
															</div>
															<div class="caption">
																<div class="name" style="height:40px">
																	<a href="goodsDetail.php?id=<?php echo $info['id'];?>" style="width:95%"> <span style="color:#0885B1">Name:</span>  <?php echo $info['mingcheng'];?> </a>
																</div>
																<div class="name" style="margin-top:10px">
																	<span style="color:#0885B1">Class:</span><?php echo $info['typename'];?>
																</div>

																<p class="price">
																	Price<?php echo $info['huiyuanjia'];?>CAD
																</p>
															</div>
														</div>
													</div>
					<?php
							}while($info=mysqli_fetch_array($sql));
                    	}
                    ?>


												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
</div>
</div>
<script type="text/javascript">
    /*<![CDATA[*/
    window.addEvent("load", function () {
        new JATabs("myTab-110069409", {position: 'top', mouseType: 'click', animType: 'animFade', style: 'default', width: '100%', height: 'auto', duration: 1000, skipAnim: false, jaclass: '', maxitems: 0, useAjax: false, numbertabs: 2, ids: '141,142', numbtab: 0});
    });
    /*]]>*/
</script>
</div>
</div>

</nav>
<!-- //MASS TOP -->


<div id="t3-mainbody" class="container t3-mainbody has-sidebar-left has-col-md-3">
<div class="row">

<!-- MAIN CONTENT -->
					<div id="t3-content"
						class="t3-content col-xs-12 col-sm-12 col-md-9 col-md-push-3">
						<div class="content-mass-top  hidden-sm hidden-xs">
							<div class="t3-module module dark " id="Mod125">
								<div class="module-inner">
									<h3 class="module-title ">
										<span>Recent activities
</span>
									</h3>
									<div class="module-ct">
										<img src="images/event.jpg" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //MAIN CONTENT -->

<!-- SIDEBAR LEFT -->
<div class="t3-sidebar t3-sidebar-left col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9  hidden-sm hidden-xs">


    <div class="t3-module module " id="Mod157">
        <div class="module-inner">
        <h3 class="module-title ">
        <span>Hot commodity
</span>
       
        </h3>

            <div class="module-ct">
                <div class="mijoshop">
                    <div class="container_oc">
											<div class="box_oc">
		<?php
	     	$sql=mysqli_query($conn,"select * from tb_shangpin order by cishu desc limit 0,3");
		 	$info=mysqli_fetch_array($sql);//
		 	if($info==false){
		   		echo "No hot products!";
		  	}else{ 
		    	do{ 
	   ?>
												<div class="box-product product-grid">
													<div>
														<div class="image">
															<a href="goodsDetail.php?id=<?php echo $info['id'];?>"><img src="<?php echo $info['tupian'];?>"
																	width="80px" >
															</a>
														</div>
														<div class="name">
															<a
																href="goodsDetail.php?id=<?php echo $info['id'];?>">
																<?php echo $info['mingcheng'];?> </a>
														</div>
														
														<div class="rating">
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
														</div>
														
														<div class="price">
															<span class="price-new">Price:<?php echo $info['huiyuanjia'];?>CAD</span>
														</div>

													</div>
												</div>
		<?php
	    		}while($info=mysqli_fetch_array($sql));
			}
		?>
											</div>
										</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //SIDEBAR LEFT -->
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