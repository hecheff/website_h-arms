<!doctype html>
<?php
	$rel_link = "..";
	$pageCategory = "Reviews";	/* Home | Reviews | Other | About */

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
		<section id="showcase">
			<div class="container">
			  <h1>WELCOME!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</section>

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
