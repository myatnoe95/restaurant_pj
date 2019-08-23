<?php 
	ob_start();
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurant Guide</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<!-- <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css"> -->
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">


<style>
	/*sidebar*/
		.news_sidebar
	{
		width: 100%;
	}

	.sidebar_categories
	{
		/*margin-top: 60px;*/
	}

	.sidebar_title
	{
		font-size: 24px;
		font-weight: 600;
		color: #404040;
		line-height: 1.2;
	}

	.categories
	{
		background: #e5ecf1;
		padding-left: 27px;
		padding-top: 37px;
		padding-right: 26px;
		padding-bottom: 37px;
		margin-top: 44px;
	}
	.categories ul li:not(:first-child)
	{
		margin-top: -4px;
	/*	008577*/
	}
	.categories ul li a > div
	{
		width: 100%;
		height: 44px;
		padding-right: 22px;
		padding-left: 15px;
		-webkit-transition: all 200ms ease;
		-moz-transition: all 200ms ease;
		-ms-transition: all 200ms ease;
		-o-transition: all 200ms ease;
		transition: all 200ms ease;
	}
	.categories ul li a > div > div
	{
		font-size: 16px;
		font-weight: 500;
		color: #838383;
		-webkit-transition: all 200ms ease;
		-moz-transition: all 200ms ease;
		-ms-transition: all 200ms ease;
		-o-transition: all 200ms ease;
		transition: all 200ms ease;
	}
	.categories ul li:hover a > div
	{
		background: #FFFFFF;
	}
	.categories ul li:hover a > div > div
	{
		color: #32c69a;
	}
	/*sidebar*/

	/*boxes*/
			.boxes
		{
			width: 100%;
		}
		.box
		{
			width: calc(100% / 3);
			padding-top: 79px;
			padding-left: 90px;
			padding-bottom: 64px;
			padding-right: 30px;
		}
		.box_title
		{
			font-size: 30px;
			font-weight: 600;
			color: #FFFFFF;
			line-height: 1.2;
		}
		.box_subtitle
		{
			font-size: 11px;
			font-weight: 600;
			color: #FFFFFF;
			text-transform: uppercase;
			line-height: 0.75;
			margin-top: 16px;
			padding-left: 1px;
		}
		.box_text
		{
			margin-top: 60px;
			font-size: 14px;
			font-weight: 500;
			color: rgba(255,255,255,0.66);
			line-height: 2.14;
			padding-left: 3px;
		}
		.box_button
		{
			margin-top: 77px;
		}

		.background_image
		{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
		}
	/*boxes*/
	.header_nav_container
	{
		background: #C10A28;
	}
	.home_title
   {
		display: inline-block;
		height: 54px;
		font-size: 36px;
		font-weight: 600;
		line-height: 54px;
		text-align: center;
		color: #FFFFFF;
		background: #C10A28;
		padding-left: 17px;
		padding-right: 19px;
    }
	.apple
	{
		width:100%;
		height:500px;
	}
/*.home1
{
	width: 100%;
	/*height: 382px;*/
}*/
/*.home1_container
{
	position: absolute;
	bottom: 79px;
	left: 0;
	width: 100%;
}*/
/*.home1_content
{

}*/
/*.home1_title
{
	display: inline-block;
	height: 54px;
	font-size: 36px;
	font-weight: 600;
	line-height: 54px;
	text-align: center;
	color: #FFFFFF;
	background: #32c69a;
	padding-left: 17px;
	padding-right: 19px;
}*/
	.background_image
			{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
			}
</style>
</head>
<body>