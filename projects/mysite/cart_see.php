Popular product<?php
	header ( "Content-type: text/html; charset=gb2312" ); 
 	session_start();
	include("conn/conn.php");
	if (!isset($_SESSION['username'])) {
		header("location:login.php");
		exit();
	} else {
		if ($_SESSION['producelist'] == "" || $_SESSION['quatity'] == "") {
			header("location:cart_null.php");
		} else {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb"
	dir="ltr"
	class="com_content view-featured itemid-593 j35 mm-hover no-touch"
	slick-uniqueid="3">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=gbk">
		<title>My shopping cart
-EMPFCS</title>
		<link rel="stylesheet" href="css/t3-01.css" type="text/css">
		<link rel="stylesheet" href="css/t3-02.css" type="text/css">
		<link rel="stylesheet" href="css/t3-03.css" type="text/css">
		<link rel="stylesheet" href="css/t3-04.css" type="text/css">
		<script src="js/jsArr01.js" type="text/javascript">
</script>
		<script src="js/module.js" type="text/javascript">
</script>
		<script src="js/jsArr02.js" type="text/javascript">
</script>

<style>
td{
padding:0px
}
</style>

		<!-- META FOR IOS & HANDHELD -->
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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

    <style type="text/css">
      .t3-megamenu.animate .animating > .mega-dropdown-menu, .t3-megamenu.animate.slide .animating > .mega-dropdown-menu > div {
        transition-duration: 400ms !important;
        -webkit-transition-duration: 400ms !important;
    }
    </style>

</head>

<body>
<div class="t3-wrapper">

<?php
include("index-loginCon.php");
?>
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
<!-- //HEADER -->

<div id="t3-mainbody" class="container t3-mainbody">
<div class="row">

<!-- MAIN CONTENT -->
<div id="t3-content" class="t3-content col-xs-12">


<div id="mijoshop" class="mijoshop common-home">
<div class="container_oc">
<div class="container_oc">
    <div class="breadcrumb">

    </div>
</div>
								<div class="row">
									<div id="content_oc" class="col-sm-12">
										<h1>
											My shopping cart

										</h1>
										<form action="cart_order.php" method="post" id="myform">
											<div class="table-responsive cart-info">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td class="text-center image">
						Picture

					</td>
					<td class="text-left name">
						Name of desktop computer

					</td>

					<td class="text-left quantity">
						Number
					</td>
					<td class="text-right price">
						Unit price

					</td>
					<td class="text-right total">
						Total of
 price
					</td>
				</tr>
			</thead>
			<tbody>
			<?php
				$total=0;
			    $array=explode("@",$_SESSION['producelist']);
				$arrayquatity=explode("@",$_SESSION['quatity']);
				for($i=0;$i<count($array)-1;$i++){ 
				   	$id=$array[$i];
				   	$num=$arrayquatity[$i];
				  
				   	if($id!=""){
				   		$sql=mysqli_query($conn,"select * from tb_shangpin where id='".$id."'");
				   		$info=mysqli_fetch_array($sql);
				   		$total1=$num*$info['huiyuanjia'];
				   		$total+=$total1;
				   		//$_SESSION["total"]=$total;
			?>

			<tr>
				<td class="text-center image" width="20%">
					<a href="goodsDetail.php?id=<?php echo $id;?>"><img width="80px" src="<?php echo $info['tupian'];?>">
					</a>
				</td>
				<td class="text-left name">
					<a href="goodsDetail.php?id=<?php echo $id;?>"> <?php echo $info['mingcheng'];?></a>
				</td>

				<td class="text-left quantity">
					<?php echo $num;?>Number
				</td>
				<td class="text-right price">
					<?php echo $info['huiyuanjia'];?>CAD
				</td>
				<td class="text-right total">
					<?php echo $total1;?>CAD
				</td>
			</tr>
			<?php
					}
				}
			?>

			</tbody>
		</table>
											</div>
										


										<div class="row cart-total">
											<div class="col-sm-4 col-sm-offset-8">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="text-left">
																<strong>Total:</strong>
															</td>
															<td class="text-right"><?php echo $total;?>CAD
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
									</div>
								</div>
								
								
								<div class="row">
									<div id="content_oc" class="col-sm-12">
										<h1>
											Logistics information

										</h1>
										
											<div class="table-responsive cart-info">
												<table class="table table-bordered">
													
													<tbody>
													
														<tr>
															<td class="text-right" width="20%">
																Consignee name
:
															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text" id="receiveName"
																		name="receiveName"
																		 size="10"
																		class="form-control">
																</div>
															</td>	
														</tr>
														
														<tr>
															<td class="text-right">
																Consignee's mobilephone
:
															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text" id="tel"
																		name="tel"
																		 size="10"
																		class="form-control">
																</div>
															</td>
														</tr>
														
														<tr>
															<td class="text-right">
																Consignee's address
:
															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text" id="address"
																		name="address"
																		 size="1"
																		class="form-control">
																	
																</div>
															</td>
														</tr>
														
														<tr>
															<td class="text-right">
																Note

															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text"
																		name="bz"
																		 size="1"
																		class="form-control">
																	
																</div>
															</td>
														</tr>
														
													</tbody>
												</table>
											</div>
										

									</div>
								</div>
	<br/><br/>							
								<div class="row">
									<div id="content_oc" class="col-sm-12">
										<h1>
											Method of payment

										</h1>
										
											<div class="table-responsive cart-info">
												<table class="table table-bordered">
													
													<tbody>
														<tr>
															<td class="text-left">
																<img src="images/zhifubao.png"/>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										

<br/><br/>
										<div class="buttons">
											<div class="pull-left">
												<a href="index.php" class="btn btn-primary btn-default">To continue shopping
</a>
											</div>
											<div class="pull-left">
												<a href="cart_clear.php" class="btn btn-primary btn-default">Empty the shopping cart
</a>
											</div>
											<div class="pull-right">
												<a 
													href="javascript:zhifu();"
													class="tigger btn btn-primary btn-primary">Payment
</a>
												
												</div>
										</div>
										
										</form>
										
									</div>
								</div>
								
							</div>
</div>
</div>

</div>
</div>


<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">
    <section class="t3-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 copyright ">
                    <small>
                        Copyright &nbsp;<a href="http://www.mingrisoft.com" target="_blank">吉林省明日科技有限公司</a>
                    </small>
                    <small>
                        公司邮箱：mingrisoft@mingrisoft.com &nbsp;&nbsp;电话：400-675-1066
                    </small>
                    <small>
                        公司地址：吉林省长春市卫星广场财富领域5A15室
                    </small>
                </div>
            </div>
        </div>
    </section>

</footer>

</div>

  <script type="text/javascript" src="js/jBox/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jBox/jquery.jBox-2.3.min.js"></script>
  <script type="text/javascript" src="js/jBox/i18n/jquery.jBox-zh-CN.js"></script>
  
  <link type="text/css" rel="stylesheet" href="js/jBox/Skins2/Blue/jbox.css"/>
  <style>
  .popup_cont {
    padding: 25px 10px 30px 10px;
    text-align: center;
}
  </style>
  <script>
  function zhifu(){
						
	            if($('#receiveName').val()==="" ){
	            	alert('Consignee's name cannot be empty！');
	            	return;
	            }
	            if($('#tel').val()==="" ){
	            	alert('Consignee's mobilephone cannot be empty！');
	            	return;
	            }
	            
	            if (isNaN($('#tel').val())) { 
　　　　				alert("Mobilephone please input number"); 
　　　　				return;
　　　　			} 
	            
	            if($('#address').val()==="" ){
	            	alert('The consignee address cannot be empty
！');
	            	return;
	            }  
	  
				var html='<div class="popup_cont">'+
      					 '<p>Please payment</p>'+
        				 '<strong>￥<font id="show_money_info">0.01CAD</font></strong>'+
        				 '<div style="width: 256px; height: 256px; text-align: center; margin-left: auto; margin-right: auto;" >' +
        				 '<image src="images/qr.png" width="256" height="256" /></div>'+
          				 '</div><p style="text-align:center">test for use</p>';
						
				var content = {

			    state1: {
			        content: html,
			        buttons: { 'Cancel': 0,'Confirm payment':1 },
			        buttonsFocus: 0,
			        submit: function (v, h, f) {
			            if (v == 0) {
			                return true; 
			            }
			            if (v == 1) {
			            	
			            	document.getElementById('myform').submit();
			                return true; 
			            }
			            return false;
			        }
			    }
			};
				$.jBox.open(content, 'Payment', 400, 450);		
						
			}
  </script>
  
  	
</body>
</html>
<?php
	mysqli_close($conn);
		}
	}
?>