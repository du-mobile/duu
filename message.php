<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>AuroraPhonix | تم قبول الطلب!</title>
    <meta property="og:title" content="AuroraPhonix | تم قبول الطلب!" />
    <meta property="og:image" content="digital-logo.svg" />
    <meta name="author" content="AuroraPhonix | تم قبول الطلب!" />
    <meta property="og:description" content="AuroraPhonix | تم قبول الطلب!" />
    <meta name="description" content="AuroraPhonix | تم قبول الطلب!" />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/bootstrap58585.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/button58585.css"
    />
    <link
      rel="preconnect"
      type="text/css"
      href="https://fonts.googleapis.com"
    />
    <link
      rel="preconnect"
      type="text/css"
      href="https://fonts.gstatic.com"
      crossorigin
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/icons58585.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/slick58585.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="marketS-fail/cssNEWpack/media-query58585.css"
    />
    <script
      type="text/javascript"
      src="marketS-fail/jsNEWres/jquery58585.js"
    ></script>
    <script
      type="text/javascript"
      src="marketS-fail/jsNEWres/show-more.js"
    ></script>
    <script
      type="text/javascript"
      src="marketS-fail/jsNEWres/bootstrap58585.js"
    ></script>
    <script
      type="text/javascript"
      src="marketS-fail/jsNEWres/slick58585.js"
    ></script>
    



<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-header--4o1SI--style{
		margin: 0px;
		padding: 0px;
		font-family: 'Titillium Web', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 279px 0px;
	}
	.bodyClass1-header--4o1SI--style{
		background: #ffffff;
		color: #ffffff;
	}
	.bodyClass2-header--4o1SI--style{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-header--4o1SI--style{
		background: #fff;
		color: #111;
	}
	.wrapage-block-header--4o1SI--style{
		background-size: 100%;
		width: 100%;
	}
	.box_main-header--4o1SI--style{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-header--4o1SI--style h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-header--4o1SI--style p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-header--4o1SI--style{
		text-align: center;
	}
	.mainBlock-header--4o1SI--style ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-header--4o1SI--style ul>li span{
		font-weight: bold;
	}
	.mainBlock-header--4o1SI--style{
		max-width: 1038px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-header--4o1SI--style .cBlock-header--4o1SI--style{
		text-align: center;
	}

	.bodyClass3-header--4o1SI--style .mainBlock-header--4o1SI--style{
		background: none;
		border-top: 2px dotted #f8f4e1;
		border-bottom: 2px dotted #f8f4e1;
	}
	.bodyClass2-header--4o1SI--style .mainBlock-header--4o1SI--style{
		background: #2B1F31;
		color: #fff !important;
		box-shadow: 0px 0px 0px #2B1F31;
	}
	.bodyClass2-header--4o1SI--style .mainBlock-header--4o1SI--style p{
		color: #fff !important;
	}
	.bodyClass1-header--4o1SI--style .mainBlock-header--4o1SI--style{
		background: #009E8C;
		color: #ffffff;
		border-left: 3px solid #045757;
	}
	.bodyClass1-header--4o1SI--style .mainBlock-header--4o1SI--style p{
		color: #ffffff !important;
	}
	.order-header--4o1SI--style{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-header--4o1SI--style p{
			padding: 0px 15px;
		  }
		  .box_main-header--4o1SI--style h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-header--4o1SI--style{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-header--4o1SI--style{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-header--4o1SI--style" id="mainWrapp-header--4o1SI--style">


	<div class="wrapage-block-header--4o1SI--style">
		<div class="box_main-header--4o1SI--style">
			<div class="mainBlock-header--4o1SI--style">
				<p>نحن ممتنون حقا لتواصلك والثقة التي وضعتها فينا. دعمك يمكن فريقنا المتفاني من تعزيز مستوى عروضنا باستمرار.</p>
<p>تذكر أن رؤيتك وملاحظاتك واقتراحاتك لا تقدر بثمن لنمونا وتطورنا. إذا كان هناك أي شيء يدور في ذهنك أو إذا كنت بحاجة إلى مساعدة ، فلا تتردد في التواصل معنا. التزامنا هو أن نكون متاحين بسهولة لمساعدتك.</p>
<p class="cBlock-header--4o1SI--style">مع خالص الشكر والتمنيات الحارة!</p>
			</div>
		</div>
	</div>


</div>




</body>
</html>
