<?php
require 'loader/autoloader.php';
$checker = new Session();
$checker->mainchecker('/tms/login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	    <meta char  set="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	                <title>TUCEE - Edit Bookings </title>title>
	                    <link rel="icon" type="image/x-icon" href="/tms/common-assets/img/favicon.ico"/>
	                        <link href="/tms/assets/css/loader.css" rel="stylesheet" type="text/css" />
	                            <script src="/tms/assets/js/loader.js"></script>script>
	                                <!-- Common Styles Starts -->
	                                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
	                                        <link href="/tms/common-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	                                            <link href="/tms/assets/css/main.css" rel="stylesheet" type="text/css" />
	                                                <link href="/tms/assets/css/structure.css" rel="stylesheet" type="text/css" />
	                                                    <link href="/tms/common-assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
	                                                        <link href="/tms/common-assets/plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css" />
	                                                            <!-- Common Styles Ends -->
	                                                                <!-- Common Icon Starts -->
	                                                                    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	                                                                        <!-- Common Icon Ends -->
	                                                                            <!-- Page Level Plugin/Style Starts -->
	                                                                                <link rel="stylesheet" type="text/css" href="/tms/common-assets/plugins/select2/select2.min.css">
	                                                                                    <link href="/tms/assets/css/forms/form-widgets.css" rel="stylesheet" type="text/css">
	                                                                                        <script src="/tms/common-assets/plugins/sweetalerts/promise-polyfill.js"></script>script>
	                                                                                            <link href="/tms/common-assets/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
	                                                                                                <link href="/tms/common-assets/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
	                                                                                                    <link href="/tms/assets/css/basic-ui/custom_sweetalert.css" rel="stylesheet" type="text/css" />
	                                                                                                        <!-- <link href="assets/css/forms/selectize.min.css" rel="stylesheet" type="text/css"> -->
	                                                                                                            <!-- Page Level Plugin/Style Ends -->
	                                                                                                        </head>head>
	                                                                                                        <body>
	                                                                                                        	    <!-- Loader Starts -->
	                                                                                                        	        <div id="load_screen"> 
	                                                                                                        	        	        <div class="boxes">
	                                                                                                        	        	        	            <div class="box">
	                                                                                                        	        	        	            	                <div></div>div><div></div>div><div></div>div><div></div>div>
	                                                                                                        	        	        	            	                            </div>div>
	                                                                                                        	        	        	            	                                        <div class="box">
	                                                                                                        	        	        	            	                                        	                <div></div>div><div></div>div><div></div>div><div></div>div>
	                                                                                                        	        	        	            	                                        	                            </div>div>
	                                                                                                        	        	        	            	                                        	                                        <div class="box">
	                                                                                                        	        	        	            	                                        	                                        	                <div></div>div><div></div>div><div></div>div><div></div>div>
	                                                                                                        	        	        	            	                                        	                                        	                            </div>div>
	                                                                                                        	        	        	            	                                        	                                        	                                        <div class="box">
	                                                                                                        	        	        	            	                                        	                                        	                                        	                <div></div>div><div></div>div><div></div>div><div></div>div>
	                                                                                                        	        	        	            	                                        	                                        	                                        	                            </div>div>
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                    </div>div>
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                        </div>div>
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                            <!--  Loader Ends -->
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                                <!--  Main Container Starts  -->
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                                    <div class="main-container" id="container">
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                                    	        <!-- Logo area (Larger Screen) Starts -->
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                                    	                <?php include 'logo.php';?> 
	                                                                                                        	        	        	            	                                        	                                        	                                        	                                                    	                