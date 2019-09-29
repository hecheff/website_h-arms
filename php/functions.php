<?php
  // Contains functions used throughout site.
  session_start();

  //
  function SetOutputByLanguage($output_en, $output_jp, $output_cnt, $output_cns) {
    if(isset($_SESSION['lang'])) {
      switch($_SESSION['lang']) {
        case "en":  return $output_en;  break;
        case "jp":  return $output_jp;  break;
        case "cnt": return $output_cnt; break;
        case "cns": return $output_cns; break;
      }
    } else {
      return $output_en;
    }
  }

  // Set highlighted language based on
  function SetLanguageHeaderEntry($targetLang, $outputText) {
    if(isset($_SESSION['lang'])) {
      if($_SESSION['lang'] == $targetLang) { echo '<span class="highlight">'; }
      echo $outputText;
      if($_SESSION['lang'] == $targetLang) { echo '</span>'; }
    } else {
      $_SESSION['lang'] = "en";
    }
  }

  function GenerateHomeEntry($image_filename, $url = "", $date, $title, $textDesc, $category = "MISC.") {
    // Limit characters to certain number
    $maxLength = 40;
    if(mb_strlen($textDesc, "utf-8") > $maxLength) {
      $textDesc = mb_substr($textDesc, 0, $maxLength)."...";
    }

    echo "<div class='box'>
            <div class='box_image' style='background-image:url(\"./images/thumb/$image_filename\");'></div>
            <div class='text_container'>
              <span class='date'>$date</span>
              <h3>$title</h3>
              <p>
                $textDesc
              </p>
            </div>
            <a href='$url'><div class='readMore'>READ MORE&nbsp;&nbsp;▶</div></a>
          </div>
          ";
  }
?>
