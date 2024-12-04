<?php
session_start();
if(!empty($_SESSION['u_name'])){
// echo $_SESSION['u_name'];
function checkuser()
{
    if (empty($_SESSION['u_name'])) {
        throw new Exception("<b class='errormessage'>you can select your accaunt</b>");
        
    }
    return true;
}
try {
    checkuser();
    echo'Hellow:&nbsp;'.$_SESSION['u_name'];
} catch ( Exception $th) {
   echo"Message is:" .$th->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index2.css">
</head>
<body>
<div class="all-container" id="allcont">
    <div class="one-division">
      <div class="container-for-one-division-header">
         <!-- <div class="container-for-company-name">
              <div class="container-for-image-logo">
                  <img src="photo/Dominos-Pizza_logo_PNG1.png" alt="isonic" srcset="" height="50px" width="80px">
              </div>
              <div class="container-for-name">
                <span>I</span><span>sonic</span>
              </div>
          </div> -->
        </div>
            <div class="container-for-word">
                  <span class="contphp"><span class="php"> <i>php</i></span><span class="i-so"> <i>I</i><span><i>SONIC </i> </span><span class="admin"> <i>admin</i> </span></span></span>
            </div>
              <div class="link-two-container">
                  <ul>
                      <li><a href="" title="Home">H</a></li>
                      <li><a href="phpinfo/index.php" title="Php info">Php</a></li>
                      <li><a href="" title="Document">Doc</a></li>
                      <li><a href="" title="Refresh">Ref</a></li>
                  </ul>
              </div>
              <div class="fordb"><i class="downarrow"></i>&nbsp;Databases
                         <ul>
                        <?php
                        include'actionphp/create.php';
                        namedb();
                        ?>
                         </ul>
                       </div>
    </div>
    <div class="two-division">
           <div class="two-division-header-cont">
             <div class="container-for-localhost-name">
                <span><span>Server IP</span><span>:127.0.0.1</span></span>
             </div>
                <div class="link-container" >
                  <ul>
                     <li onclick="mydt()" id="li1"><a href="#">Database</a></li>
                     <li><a href="#">Sql</a></li>
                     <li><a href="#">Tables</a></li>
                     <li><a href="#">Import</a></li>
                     <li><a href="#">Export</a></li>
                     <li><a href="#">Tracking</a></li>
                     <li><a href="#">setting</a></li>
                     <li><a href="#">Design</a></li>
                   </ul>
            </div>
        </div>
       <div class="two-division-for-body">
       <div class="container-appearence-setting" >
                 <div class="header-for-appearence-setting" id="headersetti">
                   <span>Appearence setting</span> 
                  </div>
                  <form action="" method="post">
                      <div class="container-for-appearence-setting">

                          <label for="for laguage">Language</label>
                          <select name="" id="">
                              
            <!-- Is current one active ?  -->
        <option value="ar"                        >
        &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; - Arabic        </option>
            <!-- Is current one active ?  -->
        <option value="hy"                        >
        Հայերէն - Armenian        </option>
            <!-- Is current one active ?  -->
        <option value="az"                        >
        Az&#601;rbaycanca - Azerbaijani        </option>
            <!-- Is current one active ?  -->
        <option value="bn"                        >
        বাংলা - Bangla        </option>
            <!-- Is current one active ?  -->
        <option value="be"                        >
        &#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1082;&#1072;&#1103; - Belarusian        </option>
            <!-- Is current one active ?  -->
        <option value="pt_br"                        >
        Portugu&ecirc;s - Brazilian Portuguese        </option>
            <!-- Is current one active ?  -->
        <option value="bg"                        >
        &#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; - Bulgarian        </option>
            <!-- Is current one active ?  -->
        <option value="ca"                        >
        Catal&agrave; - Catalan        </option>
            <!-- Is current one active ?  -->
        <option value="zh_cn"                        >
        &#20013;&#25991; - Chinese simplified        </option>
            <!-- Is current one active ?  -->
        <option value="zh_tw"                        >
        &#20013;&#25991; - Chinese traditional        </option>
            <!-- Is current one active ?  -->
        <option value="cs"                        >
        Čeština - Czech        </option>
            <!-- Is current one active ?  -->
        <option value="da"                        >
        Dansk - Danish        </option>
            <!-- Is current one active ?  -->
        <option value="nl"                        >
        Nederlands - Dutch        </option>
            <!-- Is current one active ?  -->
        <option value="en"                                selected="selected"
                        >
        English        </option>
            <!-- Is current one active ?  -->
        <option value="en_gb"                        >
        English (United Kingdom)        </option>
            <!-- Is current one active ?  -->
        <option value="et"                        >
        Eesti - Estonian        </option>
            <!-- Is current one active ?  -->
        <option value="fi"                        >
        Suomi - Finnish        </option>
            <!-- Is current one active ?  -->
        <option value="fr"                        >
        Fran&ccedil;ais - French        </option>
            <!-- Is current one active ?  -->
        <option value="gl"                        >
        Galego - Galician        </option>
            <!-- Is current one active ?  -->
        <option value="de"                        >
        Deutsch - German        </option>
            <!-- Is current one active ?  -->
        <option value="el"                        >
        &Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940; - Greek        </option>
            <!-- Is current one active ?  -->
        <option value="hu"                        >
        Magyar - Hungarian        </option>
            <!-- Is current one active ?  -->
        <option value="id"                        >
        Bahasa Indonesia - Indonesian        </option>
            <!-- Is current one active ?  -->
        <option value="ia"                        >
        Interlingua        </option>
            <!-- Is current one active ?  -->
        <option value="it"                        >
        Italiano - Italian        </option>
            <!-- Is current one active ?  -->
        <option value="ja"                        >
        &#26085;&#26412;&#35486; - Japanese        </option>
            <!-- Is current one active ?  -->
        <option value="ko"                        >
        &#54620;&#44397;&#50612; - Korean        </option>
            <!-- Is current one active ?  -->
        <option value="lt"                        >
        Lietuvi&#371; - Lithuanian        </option>
            <!-- Is current one active ?  -->
        <option value="nb"                        >
        Norsk - Norwegian        </option>
            <!-- Is current one active ?  -->
        <option value="pl"                        >
        Polski - Polish        </option>
            <!-- Is current one active ?  -->
        <option value="pt"                        >
        Portugu&ecirc;s - Portuguese        </option>
            <!-- Is current one active ?  -->
        <option value="ro"                        >
        Rom&acirc;n&#259; - Romanian        </option>
            <!-- Is current one active ?  -->
        <option value="ru"                        >
        &#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; - Russian        </option>
            <!-- Is current one active ?  -->
        <option value="sr@latin"                        >
        Srpski - Serbian (latin)        </option>
            <!-- Is current one active ?  -->
        <option value="si"                        >
        &#3523;&#3538;&#3458;&#3524;&#3517; - Sinhala        </option>
            <!-- Is current one active ?  -->
        <option value="sq"                        >
        Shqip - Slbanian        </option>
            <!-- Is current one active ?  -->
        <option value="sk"                        >
        Sloven&#269;ina - Slovak        </option>
            <!-- Is current one active ?  -->
        <option value="sl"                        >
        Sloven&scaron;&#269;ina - Slovenian        </option>
            <!-- Is current one active ?  -->
        <option value="es"                        >
        Espa&ntilde;ol - Spanish        </option>
            <!-- Is current one active ?  -->
        <option value="sv"                        >
        Svenska - Swedish        </option>
            <!-- Is current one active ?  -->
        <option value="tr"                        >
        T&uuml;rk&ccedil;e - Turkish        </option>
            <!-- Is current one active ?  -->
        <option value="uk"                        >
        &#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; - Ukrainian        </option>
            <!-- Is current one active ?  -->
        <option value="vi"                        >
        Tiếng Việt - Vietnamese        </option>
                          </select>
                      </div>
                      <div class="container-for-them">
                          <label for="them">Theme</label>
                          <select name="" id="">
                              <option value="">Original</option>
                              <option value="">Pmahomme</option>
                          </select>
                      </div>
                      <div class="container-for-font-size">
                          <label for="font size">font size</label>
                          <script>
                              function changeFont(str) {
                                  switch (str) {
                                      case "32%" :
                                           document.getElementById("allcont").style.fontSize = "8px";
                                          break;
                                          case "42%" :
                                           document.getElementById("allcont").style.fontSize = "12px";
                                          break;
                                          case "52%" :
                                           document.getElementById("allcont").style.fontSize = "13px";
                                          break;
                                          case "62%" :
                                           document.getElementById("allcont").style.fontSize = "14px";
                                          break;
                                          case "72%" :
                                           document.getElementById("allcont").style.fontSize = "15px";
                                          break;
                                          case "77%" :
                                           document.getElementById("allcont").style.fontSize = "16px";
                                          break;
                                          case "78%" :
                                           document.getElementById("allcont").style.fontSize = "17px";
                                          break;
                                          case "80%" :
                                           document.getElementById("allcont").style.fontSize = "18px";
                                          break;
                                          case "81%" :
                                           document.getElementById("allcont").style.fontSize = "19px";
                                          break;
                                          case "83%" :
                                           document.getElementById("allcont").style.fontSize = "20px";
                                          break;
                                          case "84%" :
                                           document.getElementById("allcont").style.fontSize = "21px";
                                          break;
                                          case "85%" :
                                           document.getElementById("allcont").style.fontSize = "22px";
                                          break;
                                      default:
                                          break;
                                  }
                                  
                              }
                              

                          </script>
                          <select name="" id="fontSize" onclick="changeFont(this.value)" >
<option value="32%">32%</option>
<option value="42%">42%</option>
<option value="52%">52%</option>
<option value="62%">62%</option>
<option value="72%">72%</option>
<option value="77%">77%</option>
<option value="78%">78%</option>
<option value="79%">79%</option>
<option value="80%">80%</option>
<option value="81%">81%</option>
<option value="82%" selected="selected">82%</option>
<option value="83%">83%</option>
<option value="84%">84%</option>
<option value="85%">85%</option>
<option value="86%">86%</option>
<option value="87%">87%</option>
<option value="92%">92%</option>
<option value="100%">100%</option>
<option value="102%">102%</option>
<option value="112%">112%</option>
<option value="122%">122%</option>
<option value="132%">132%</option>
                          </select>
                      </div>
                  </form>
                 </div>
                 <div class="container-for-gener-setting">
                     <div class="header-for-generar-setting" id="headersetti">
                        <span> General Settting</span>
                     </div>
                     <form action="" method="post">
                      <div class="container-for-the-sever-collation">
                         Server Connection Collation 
                         <select>   
<optgroup label="utf32" title="UTF-32 Unicode">
<option value="utf32_bin" title="Unicode, binary">utf32_bin</option>
<option value="utf32_croatian_ci" title="Croatian, case-insensitive">utf32_croatian_ci</option>
<option value="utf32_croatian_mysql561_ci" title="Croatian (MySQL 5.6.1), case-insensitive">utf32_croatian_mysql561_ci</option>
<option value="utf32_czech_ci" title="Czech, case-insensitive">utf32_czech_ci</option>
<option value="utf32_danish_ci" title="Danish, case-insensitive">utf32_danish_ci</option>
<option value="utf32_esperanto_ci" title="Esperanto, case-insensitive">utf32_esperanto_ci</option>
<option value="utf32_estonian_ci" title="Estonian, case-insensitive">utf32_estonian_ci</option>
<option value="utf32_general_ci" title="Unicode, case-insensitive">utf32_general_ci</option>
<option value="utf32_german2_ci" title="German (phone book order), case-insensitive">utf32_german2_ci</option>
<option value="utf32_hungarian_ci" title="Hungarian, case-insensitive">utf32_hungarian_ci</option>
<option value="utf32_icelandic_ci" title="Icelandic, case-insensitive">utf32_icelandic_ci</option>
<option value="utf32_latvian_ci" title="Latvian, case-insensitive">utf32_latvian_ci</option>
<option value="utf32_lithuanian_ci" title="Lithuanian, case-insensitive">utf32_lithuanian_ci</option>
<option value="utf32_myanmar_ci" title="Burmese, case-insensitive">utf32_myanmar_ci</option>
<option value="utf32_persian_ci" title="Persian, case-insensitive">utf32_persian_ci</option>
<option value="utf32_polish_ci" title="Polish, case-insensitive">utf32_polish_ci</option>
<option value="utf32_roman_ci" title="West European, case-insensitive">utf32_roman_ci</option>
<option value="utf32_romanian_ci" title="Romanian, case-insensitive">utf32_romanian_ci</option>
<option value="utf32_sinhala_ci" title="Sinhalese, case-insensitive">utf32_sinhala_ci</option>
<option value="utf32_slovak_ci" title="Slovak, case-insensitive">utf32_slovak_ci</option>
<option value="utf32_slovenian_ci" title="Slovenian, case-insensitive">utf32_slovenian_ci</option>
<option value="utf32_spanish2_ci" title="Spanish (traditional), case-insensitive">utf32_spanish2_ci</option>
<option value="utf32_spanish_ci" title="Spanish (modern), case-insensitive">utf32_spanish_ci</option>
<option value="utf32_swedish_ci" title="Swedish, case-insensitive">utf32_swedish_ci</option>
<option value="utf32_thai_520_w2" title="Thai (UCA 5.2.0), multi-level">utf32_thai_520_w2</option>
<option value="utf32_turkish_ci" title="Turkish, case-insensitive">utf32_turkish_ci</option>
<option value="utf32_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">utf32_unicode_520_ci</option>
<option value="utf32_unicode_ci" title="Unicode, case-insensitive">utf32_unicode_ci</option>
<option value="utf32_vietnamese_ci" title="Vietnamese, case-insensitive">utf32_vietnamese_ci</option>
</optgroup>
<optgroup label="utf8" title="UTF-8 Unicode">
<option value="utf8_bin" title="Unicode, binary">utf8_bin</option>
<option value="utf8_croatian_ci" title="Croatian, case-insensitive">utf8_croatian_ci</option>
<option value="utf8_croatian_mysql561_ci" title="Croatian (MySQL 5.6.1), case-insensitive">utf8_croatian_mysql561_ci</option>
<option value="utf8_czech_ci" title="Czech, case-insensitive">utf8_czech_ci</option>
<option value="utf8_danish_ci" title="Danish, case-insensitive">utf8_danish_ci</option>
<option value="utf8_esperanto_ci" title="Esperanto, case-insensitive">utf8_esperanto_ci</option>
<option value="utf8_estonian_ci" title="Estonian, case-insensitive">utf8_estonian_ci</option>
<option value="utf8_general_ci" title="Unicode, case-insensitive">utf8_general_ci</option>
<option value="utf8_general_mysql500_ci" title="Unicode (MySQL 5.0.0), case-insensitive">utf8_general_mysql500_ci</option>
<option value="utf8_german2_ci" title="German (phone book order), case-insensitive">utf8_german2_ci</option>
<option value="utf8_hungarian_ci" title="Hungarian, case-insensitive">utf8_hungarian_ci</option>
<option value="utf8_icelandic_ci" title="Icelandic, case-insensitive">utf8_icelandic_ci</option>
<option value="utf8_latvian_ci" title="Latvian, case-insensitive">utf8_latvian_ci</option>
<option value="utf8_lithuanian_ci" title="Lithuanian, case-insensitive">utf8_lithuanian_ci</option>
<option value="utf8_myanmar_ci" title="Burmese, case-insensitive">utf8_myanmar_ci</option>
<option value="utf8_persian_ci" title="Persian, case-insensitive">utf8_persian_ci</option>
<option value="utf8_polish_ci" title="Polish, case-insensitive">utf8_polish_ci</option>
<option value="utf8_roman_ci" title="West European, case-insensitive">utf8_roman_ci</option>
<option value="utf8_romanian_ci" title="Romanian, case-insensitive">utf8_romanian_ci</option>
<option value="utf8_sinhala_ci" title="Sinhalese, case-insensitive">utf8_sinhala_ci</option>
<option value="utf8_slovak_ci" title="Slovak, case-insensitive">utf8_slovak_ci</option>
<option value="utf8_slovenian_ci" title="Slovenian, case-insensitive">utf8_slovenian_ci</option>
<option value="utf8_spanish2_ci" title="Spanish (traditional), case-insensitive">utf8_spanish2_ci</option>
<option value="utf8_spanish_ci" title="Spanish (modern), case-insensitive">utf8_spanish_ci</option>
<option value="utf8_swedish_ci" title="Swedish, case-insensitive">utf8_swedish_ci</option>
<option value="utf8_thai_520_w2" title="Thai (UCA 5.2.0), multi-level">utf8_thai_520_w2</option>
<option value="utf8_turkish_ci" title="Turkish, case-insensitive">utf8_turkish_ci</option>
<option value="utf8_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">utf8_unicode_520_ci</option>
<option value="utf8_unicode_ci" title="Unicode, case-insensitive">utf8_unicode_ci</option>
<option value="utf8_vietnamese_ci" title="Vietnamese, case-insensitive">utf8_vietnamese_ci</option>
</optgroup>
<optgroup label="utf8mb4" title="UTF-8 Unicode">
<option value="utf8mb4_bin" title="Unicode (UCA 4.0.0), binary">utf8mb4_bin</option>
<option value="utf8mb4_croatian_ci" title="Croatian (UCA 4.0.0), case-insensitive">utf8mb4_croatian_ci</option>
<option value="utf8mb4_croatian_mysql561_ci" title="Croatian (MySQL 5.6.1), case-insensitive">utf8mb4_croatian_mysql561_ci</option>
<option value="utf8mb4_czech_ci" title="Czech (UCA 4.0.0), case-insensitive">utf8mb4_czech_ci</option>
<option value="utf8mb4_danish_ci" title="Danish (UCA 4.0.0), case-insensitive">utf8mb4_danish_ci</option>
<option value="utf8mb4_esperanto_ci" title="Esperanto (UCA 4.0.0), case-insensitive">utf8mb4_esperanto_ci</option>
<option value="utf8mb4_estonian_ci" title="Estonian (UCA 4.0.0), case-insensitive">utf8mb4_estonian_ci</option>
<option value="utf8mb4_general_ci" title="Unicode (UCA 4.0.0), case-insensitive">utf8mb4_general_ci</option>
<option value="utf8mb4_german2_ci" title="German (phone book order) (UCA 4.0.0), case-insensitive">utf8mb4_german2_ci</option>
<option value="utf8mb4_hungarian_ci" title="Hungarian (UCA 4.0.0), case-insensitive">utf8mb4_hungarian_ci</option>
<option value="utf8mb4_icelandic_ci" title="Icelandic (UCA 4.0.0), case-insensitive">utf8mb4_icelandic_ci</option>
<option value="utf8mb4_latvian_ci" title="Latvian (UCA 4.0.0), case-insensitive">utf8mb4_latvian_ci</option>
<option value="utf8mb4_lithuanian_ci" title="Lithuanian (UCA 4.0.0), case-insensitive">utf8mb4_lithuanian_ci</option>
<option value="utf8mb4_myanmar_ci" title="Burmese (UCA 4.0.0), case-insensitive">utf8mb4_myanmar_ci</option>
<option value="utf8mb4_persian_ci" title="Persian (UCA 4.0.0), case-insensitive">utf8mb4_persian_ci</option>
<option value="utf8mb4_polish_ci" title="Polish (UCA 4.0.0), case-insensitive">utf8mb4_polish_ci</option>
<option value="utf8mb4_roman_ci" title="West European (UCA 4.0.0), case-insensitive">utf8mb4_roman_ci</option>
<option value="utf8mb4_romanian_ci" title="Romanian (UCA 4.0.0), case-insensitive">utf8mb4_romanian_ci</option>
<option value="utf8mb4_sinhala_ci" title="Sinhalese (UCA 4.0.0), case-insensitive">utf8mb4_sinhala_ci</option>
<option value="utf8mb4_slovak_ci" title="Slovak (UCA 4.0.0), case-insensitive">utf8mb4_slovak_ci</option>
<option value="utf8mb4_slovenian_ci" title="Slovenian (UCA 4.0.0), case-insensitive">utf8mb4_slovenian_ci</option>
<option value="utf8mb4_spanish2_ci" title="Spanish (traditional) (UCA 4.0.0), case-insensitive">utf8mb4_spanish2_ci</option>
<option value="utf8mb4_spanish_ci" title="Spanish (modern) (UCA 4.0.0), case-insensitive">utf8mb4_spanish_ci</option>
<option value="utf8mb4_swedish_ci" title="Swedish (UCA 4.0.0), case-insensitive">utf8mb4_swedish_ci</option>
<option value="utf8mb4_thai_520_w2" title="Thai (UCA 5.2.0), multi-level">utf8mb4_thai_520_w2</option>
<option value="utf8mb4_turkish_ci" title="Turkish (UCA 4.0.0), case-insensitive">utf8mb4_turkish_ci</option>
<option value="utf8mb4_unicode_520_ci" title="Unicode (UCA 5.2.0), case-insensitive">utf8mb4_unicode_520_ci</option>
<option value="utf8mb4_unicode_ci" title="Unicode (UCA 4.0.0), case-insensitive" selected="selected">utf8mb4_unicode_ci</option>
<option value="utf8mb4_vietnamese_ci" title="Vietnamese (UCA 4.0.0), case-insensitive">utf8mb4_vietnamese_ci</option>
</optgroup>
                         </select>
                        </div>
                     </form>
                 </div>
                 <div class="container-for-database-server">
                   <div class="header-for-generar-setting" id="headersetti">
                        <span> Database server</span>
                     </div>
                     <div class="container-for-list-db-server">
                         <ul>
                             <li>server:127.0.0.1 via TCP/IP</li>
                             <li>server type:Mysql</li>
                             <li>server version 5.55 32 mysql community server(gpl)</li>
                             <li>protocol verision:10</li>
                             <li>user:root@localhost</li>
                             <li>server charset:UTF-8 Unicode</li>
                         </ul>
                     </div>
                </div>
                <div class="container-for-logiout-button">
                    <form action="<?php $_PHP_SELF ?>" method="post" class='form-for-logout'>
                    <a href='createacc/'><input type="button" value="Create Account" class='button-3'> </a>
                        <input type="submit" name='outad' value="log out" class='button-2'>
                        
                    </form>
                </div>
                <div class="container-for-action">
                <span class="userselect"><a href="users/">view user</a></span>
                </div>
                

       </div>
    </div>
</div>
</body>
</html>
<script src="js/index.js"></script>
<?php

if (isset($_POST['outad'])) {
   $detrory= session_destroy();
   if ($detrory==true) {
    echo"<script>
    window.location='login/';
    </script>"; 
   }
   
      
//    session_destroy()

    // if (session_unset(($_SESSION['u_name'])&&($_SESSION['u_pass']))==true) {
    //     echo"<script>
    //     window.location='login/';
    //      </script>"; 
    // }
    // else{
    // session_unset(($_SESSION['u_name'])&&($_SESSION['u_pass'])); 
    // echo"<script>
    // window.location='login/';
    //  </script>";
    // }
    
    
}
}else
{
    header('location:login/index.php');
}

?>