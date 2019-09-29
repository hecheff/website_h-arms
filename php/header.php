<header>
  <div id="kCom"></div>
  <script type="text/javascript" src="<?php echo $rel_link; ?>/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo $rel_link; ?>/js/k_command.js" ></script>

  <link rel="icon" type="image/png" href="<?php echo $rel_link; ?>/favicon.png">

  <div class="container">
    <!-- Logos/Branding -->
    <div id="branding">
      <div id="header_icon"></div>
      <div id="header_text">
          <h1><span class="highlight">H</span>OBBY <span class="highlight">ARMS</span></h1>
          <?php if(isset($_SESSION['lang'])) { if($_SESSION['lang'] == 'jp') { echo "<b>ホビーアームズ</b>"; } } ?>
      </div>
    </div>

    <div id = "topBar">
      <!-- Language Bar -->
      <div id="langBar">
          <ul id="lang_long">
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=en"> <?php SetLanguageHeaderEntry("en",  "English");     ?></a></li>
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=jp"> <?php SetLanguageHeaderEntry("jp",  "日本語");       ?></a></li>
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=cnt"><?php SetLanguageHeaderEntry("cnt", "繁体字中文");   ?></a></li>
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=cns"><?php SetLanguageHeaderEntry("cns", "簡体字中文");   ?></a></li>
          </ul>
          <ul id="lang_short">
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=en"> <?php SetLanguageHeaderEntry("en",  "ENG");     ?></a></li>
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=jp"> <?php SetLanguageHeaderEntry("jp",  "日本語");     ?></a></li>
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=cnt"><?php SetLanguageHeaderEntry("cnt", "繁中文");   ?></a></li>
            <li><a href="<?php echo $rel_link; ?>/php/setLang.php?lang=cns"><?php SetLanguageHeaderEntry("cns", "簡中文");   ?></a></li>
          </ul>
      </div>
      <!-- Navigation Bar -->
      <div class="divider"></div>
      <div id="navBar">
          <ul>
            <li><a href="<?php echo $rel_link; ?>/">
              <?php
                if(mb_strtolower($pageCategory) == "home") { echo "<span class='highlight'>"; }
                echo SetOutputByLanguage("HOME", "ホーム", "主頁", "主页");
                if(mb_strtolower($pageCategory) == "home") { echo "</span>"; }
              ?>
            </a></li>
            <li><a href="<?php echo $rel_link; ?>/reviews/">
              <?php
                if(mb_strtolower($pageCategory) == "reviews") { echo "<span class='highlight'>"; }
                echo SetOutputByLanguage("REVIEWS", "レビュー", "評論", "评论");
                if(mb_strtolower($pageCategory) == "home") { echo "</span>"; }
              ?>
            </a></li>
            <li><a href="<?php echo $rel_link; ?>/other/">
              <?php
                if(mb_strtolower($pageCategory) == "other") { echo "<span class='highlight'>"; }
                echo SetOutputByLanguage("OTHER", "その他", "其他", "其他");
                if(mb_strtolower($pageCategory) == "home") { echo "</span>"; }
              ?>
            </a></li>
            <li><a href="<?php echo $rel_link; ?>/about/">
              <?php
                if(mb_strtolower($pageCategory) == "about") { echo "<span class='highlight'>"; }
                echo SetOutputByLanguage("ABOUT US", "自己紹介", "關於我們", "关于我们");
                if(mb_strtolower($pageCategory) == "home") { echo "</span>"; }
              ?>
            </a></li>
          </ul>
      </div>
    </div>
  </div>
</header>
