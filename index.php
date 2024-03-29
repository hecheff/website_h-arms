<!doctype html>
<?php
	$rel_link = ".";
	$pageCategory = "Home";	/* Home | Reviews | Misc | About */

	include($rel_link."/php/functions.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include ($rel_link."/php/meta_default.php") ?>
		<link rel="stylesheet" href="<?php echo $rel_link; ?>/css/style.css">
		<title>HobbyArms | <?php echo $pageCategory; ?></title>
	</head>

	<body>
		<?php include $rel_link."/php/header.php"; ?><!-- HEADER -->
		<?php /* CONTENT START */ ?>
		<!--
		<section id="showcase">
			<div class="container">
			  <h1>WELCOME!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</section>
		-->

		<!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
		<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:125.00,t:-125.00}},{b:11000,d:500,c:{x:-125.00,t:125.00}}],
              [{b:0,d:600,x:535,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:800,c:{x:-250.0,t:250.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1920;

            function ScaleSlider() {
                var containerElement 	= jssor_1_slider.$Elmt.parentNode;
                var containerWidth 		= containerElement.clientWidth;

                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}

        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
    </style>
		<div id="mainmenuSlide_container">
	    <div id="jssor_1" style="position:relative; margin:0 auto; top:0px; left:0px; width:auto; height:300px; overflow:hidden; visibility:hidden; ">
	        <!-- Loading Screen -->
	        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px; width:100%; height:100%; text-align:center;background-color:rgba(0,0,0,0.7);">
	            <img style="margin-top:-19px; position:relative; top:50%; width:38px; height:38px;" src="./img/spin.svg" />
	        </div>

	        <div data-u="slides" style="cursor:default; position:relative; top:0px; left:0px; width:1920px; height:380px; overflow:hidden; text-align:center;">
	            <div data-p="170">
	                <img data-u="image" src="img/001.jpg" style="" />
	                <!--<div data-t="0" style="position:absolute;top:320px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Mobile ready, touch swipe</div>-->
	            </div>
	            <div data-p="170">
	                <img data-u="image" src="img/002.jpg" />
	                <!--<div data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>-->
	            </div>
	            <div data-p="170">
	                <img data-u="image" src="img/003.jpg" />
	                <!--<div data-t="2" style="position:absolute;top:30px;left:-505px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Finger catchable right to left</div>-->
	            </div>
	        </div>

	        <!-- Bullet Navigator -->
	        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
	            <div data-u="prototype" class="i" style="width:16px;height:16px;">
	                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
	                </svg>
	            </div>
	        </div>
	        <!-- Arrow Navigator -->
	        <div data-u="arrowleft" class="jssora053" style="width:55px;height:100px;top:0px;left:25px; background-color:#333333AA;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
	            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
	            </svg>
	        </div>
	        <div data-u="arrowright" class="jssora053" style="width:55px;height:100px;top:0px;right:25px; background-color:#333333AA;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
	            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
	            </svg>
	        </div>
	    </div>
		</div>
		

		<section id="latestUpdates">
			  <div class="container"><h1><?php echo SetOutputByLanguage("LATEST UPDATES", "最新情報", "最新消息", "最新消息"); ?></h1></div>
		</section>

	  <div class="container">
			<section id="boxes">
				<?php
					// Implement loop here
					$homeEntryTitle	= SetOutputByLanguage("M4A1 Patriot Mod", "M4A1パトリオット　モッド", "M4A1 Patriot 加工", "M4A1 Patriot 加工");
					$homeEntryDesc 	= SetOutputByLanguage("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
																								"ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ",
																								"產因構見己到痛長的作足就應為？國角一活企自機難接進年選招原……非十前子病地文，極然我一簡定黑們大，活的斷不金是。",
																								"产因构见己到痛长的作足就应为？国角一活企自机难接进年选招原......非十前子病地文，极然我一简定黑们大，活的断不金是。");
					GenerateHomeEntry("20190804_0.jpg", "","2019/08/11", $homeEntryTitle, $homeEntryDesc);

					$homeEntryTitle	= SetOutputByLanguage("JG SIG551 + RAS Kit", "JG SIG551 + RAS キット", "JG SIG551 + RAS Kit", "JG SIG551 + RAS Kit");
					$homeEntryDesc 	= SetOutputByLanguage("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
																								"ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ",
																								"產因構見己到痛長的作足就應為？國角一活企自機難接進年選招原……非十前子病地文，極然我一簡定黑們大，活的斷不金是。",
																								"产因构见己到痛长的作足就应为？国角一活企自机难接进年选招原......非十前子病地文，极然我一简定黑们大，活的断不金是。");
					GenerateHomeEntry("20190804_1.jpg", "", "2019/08/11", $homeEntryTitle, $homeEntryDesc);

					$homeEntryTitle	= SetOutputByLanguage("Tokyo Marui P90-TR", "東京マルイ P90-TR", "東京MARUI P90-TR", "東京MARUI P90-TR");
					$homeEntryDesc 	= SetOutputByLanguage("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
																								"ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ　ネタ",
																								"產因構見己到痛長的作足就應為？國角一活企自機難接進年選招原……非十前子病地文，極然我一簡定黑們大，活的斷不金是。",
																								"产因构见己到痛长的作足就应为？国角一活企自机难接进年选招原......非十前子病地文，极然我一简定黑们大，活的断不金是。");
					GenerateHomeEntry("20190804_2.jpg", "", "2019/08/11", $homeEntryTitle, $homeEntryDesc);
				?>
			</section>
		</div>

		<?php /* CONTENT END */ ?>
		<?php include $rel_link."/php/footer.php"; ?>
	</body>
</html>
