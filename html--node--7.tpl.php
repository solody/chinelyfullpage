<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */


$theme_path = '/sites/all/themes/chinelyfullpage/';
?><!DOCTYPE html>
<html>
<head lang="<?php print $language->language; ?>">
    <meta charset="UTF-8">
    <title><?php print $head_title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?=$theme_path?>vendor/fullPage/jquery.fullpage.css">
    <script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?=$theme_path?>vendor/fullPage/jquery.fullpage.js"></script>
    <!--[if lte IE 9]>
    <script>
    alert('您的ie浏览器版本已经严重过时！无法完成本页面的渲染！');
    </script>
    <![endif]-->
    <script>
        window.onload = function(){
            
        	$('#fullpage').fullpage({
                sectionsColor: ['#990033', '#388eb6','#FFFFFF', '#FFFFFF', '#FFFFFF','#FFFFFF','#FFFFFF'],
                scrollingSpeed: 1000,
                'navigation': true,
                'navigationPosition': 'right',
                'navigationTooltips': ['伊莱娅', '行业现状概况', '市场机会', '品牌定位','渠道定位','水性经典色系列16色','水性流行色系列10色','油性经典流行色系列20色','油性经典色系列30色'],
            });

        	$('body').mousemove(function(e){
                if (e.pageY < 88) {
                    $('#header').css({'opacity':'1','transition':'all 1s'});
                } else {
                    $('#header').css({'opacity':'0','transition':'all 1s'});
                }
            });

        	$('#loading_coverlayer').css('display','none');
        	$('#fullpage').css('display','block');
        };
    </script>
    <style type="text/css">
        /* Fixed header and footer.
* --------------------------------------- */
        #header, #footer{
            position:fixed;
            display:block;
            width: 100%;
            z-index:9;
        }

        #header{
            top:0px;
            background:#FFF;
        }
        #footer{
            color: #eee;
            text-shadow: #666;
            font-size: 10pt;
            line-height: 20px;
            padding-right: 20px;
            text-align: right;
            bottom:0px;
            font-family: arial, helvetica, sans-serif;
        }

        .ele {
        	
        	
        	
        	
            transition:all 0.5s;transition-delay: 0.3s;
        }

        /* Section 01 ====================================== */
        div.ele_01_photo,div.ele_01_title,div.ele_01_logo,
        div.ele_02_title {
            width: 10%; position: static;
        }
        div.ele_01_photo { transform: rotate(360deg)  translateY(0%); }
        .active div.ele_01_photo {
            width: 40%;  margin: 0 auto 0 20%; transform: rotate(10deg) translateY(30%);
            overflow: hidden; box-shadow: 0 0 25px #000; border: 10px solid #FFF;}
        .active div.ele_01_title {
            width: 35%; margin: 0 auto 0 20%; transform: translateY(40%);}
        .active div.ele_01_logo {
            width: 18%; margin: 0 auto 0 10%; transform: translateY(-220%) translateX(300%);}
        /*------------------------------------------------------*/


        /* Section 02 ======================================= */
        div.ele_02_text { width: 60%; margin: 5% auto 0 14%; font-size: 16px; line-height: 35pt; padding: 3%; background-color: RGBA(255,255,255,0.3);  text-indent:0em; color: #002638; font-family: "微软雅黑","黑体"; border-radius: 0px; opacity: 0;
            transform: rotate(360deg);
            transition:all 0.5s;transition-delay: 0.3s;}
        .active div.ele_02_title {
            width: 50%; margin: 0 auto 0 10%; }
        .active div.ele_02_text{
            opacity: 1; transform: rotate(0deg); transition:all 1s;transition-delay: 0.3s;
        }
        /*----------------------------------------------------*/


        /* Section 03 ======================================= */
        div.ele_03_lineB,div.ele_03_lineR {
            padding: 15px; color: #FFFFFF; margin: 10px 0; width: 40%;  font-family: "黑体";
            overflow: hidden; transform: translateY(600%) rotate(-90deg); opacity: 0;
        }
        div.ele_03_lineB { background-color: #00abeb;}
        div.ele_03_lineR { background-color: #e84292; }
        div.ele_03_lineB > span:first-child,div.ele_03_lineR > span:first-child {
            font-size: 30pt; float: left; padding-right: 20pt; padding-left: 10pt; font-family: Constantia,helvetica;
        }
        div.ele_03_lineB > span:last-child,div.ele_03_lineR > span:last-child {
            font-size: 10pt;
        }
        .active div.ele_03_lineB,
        .active div.ele_03_lineR {
              transition:all 1s; opacity: 1;
        }
        .active div.ele_03_lineB { transition-delay: 0.3s; transform: translateX(130%) translateY(0%) rotate(0deg); }
        .active div.ele_03_lineR { transition-delay: 0.6s; transform: translateX(124%) translateY(0%) rotate(0deg); }
        /*----------------------------------------------------*/


        /* Section 04 ======================================= */
        div.ele_04_left {width: 0%; height: 100%; float: left; background-color: #7dcdf4;}
        div.ele_04_right {width: 100%; height: 100%; float: left; background-color: #ffffff;}
        div.ele_04_house { position: relative;  top: 50%; transform:translateX(200%) translateY(-50%) rotate(180deg);opacity: 0; }
        div.ele_04_text { width: 60%; height: 40%; position: relative;  top: 50%; transform:translateX(0%) translateY(-50%) rotate(0deg);opacity: 0; font-family: "黑体"; font-size: 11pt;   }
        div.ele_04_text span { font-size: 15pt; color: #002638; display: block; padding-bottom: 5pt; }
        .active div.ele_04_house { transform:translateX(30%) translateY(-50%) rotate(0deg); box-shadow: 0 0 5px 2px #999;opacity: 1;}
        .active div.ele_04_text { transform:translateX(40%) translateY(-50%)  rotate(360deg);opacity: 1;  }
        .active div.ele_04_left {width: 30%;}
        .active div.ele_04_right {width: 70%;}
        /*----------------------------------------------------*/


        /* Section 05 ======================================= */
        div.ele_05_left {width: 30%; height: 100%; float: left; background-color: #ffffff;}
        div.ele_05_right {width: 70%; height: 100%; float: left; background-color: #ea639f; opacity: 0;}
        div.ele_05_girl1 {  transform:translateX(200%) translateY(30%) rotate(-250deg);opacity: 0; }
        div.ele_05_girl2 {  transform:translateX(200%) translateY(0%) rotate(-150deg);opacity: 0; }
        div.ele_05_text { width: 60%; height: 40%; position: relative;  top: 50%; transform:translateX(0%) translateY(-50%) rotate(0deg);opacity: 0; font-family: "黑体"; font-size: 11pt; color: #FFFFFF;   }
        div.ele_05_text span { font-size: 15pt; display: block; padding-bottom: 5pt; }
        .active div.ele_05_text { transform:translateX(40%) translateY(-50%)  rotate(360deg);opacity: 1;  }
        .active div.ele_05_girl1 { transform:translateX(90%) translateY(30%) rotate(25deg); box-shadow: 0 0 5px 2px #999;opacity: 1;}
        .active div.ele_05_girl2 {transform:translateX(50%) translateY(0%) rotate(-15deg); box-shadow: 0 0 5px 2px #999;opacity: 1;}
        .active div.ele_05_right { opacity: 1;}
        /*----------------------------------------------------*/
        
        
        /* Section 06 ======================================= */
        div.ele_06_top,div.ele_06_bottom { transition-delay: 0.7s }
        div.ele_06_top {height:60%; overflow: hidden;}
        div.ele_06_bottom {height:40%; background-color: #FFFFFF;}
        div.ele_06_top_left,div.ele_06_top_right,div.ele_06_bottom_left,div.ele_06_bottom_right{
	        float:left; height: 100%;
        }
        div.ele_06_top_left,div.ele_06_bottom_left {width:100%; }
        div.ele_06_top_right,div.ele_06_bottom_right {width:0%;}
        div.ele_06_top_left,div.ele_06_bottom_right {background-color:#FFFFFF; overflow: hidden;}
        div.ele_06_top_right,div.ele_06_bottom_left { background-color:#56bced ;}
        div.ele_06_top_right {background-image: url(<?=$theme_path?>images/06/bg1.png); background-size:auto 100%; background-repeat: no-repeat;}
        div.ele_06_bottle { transform:translateX(200%) translateY(10%) rotate(450deg);  opacity: 0;  }
        div.ele_06_text { height:100%; overflow:hidden; color:#FFF; transform:translateX(100%) translateY(-40%);  font-family: Constantia,helvetica,"黑体"; font-size: 15pt;}
        div.ele_06_text span {display:inline-block; padding-left: 3%; font-size:120%;}
        img.ele_06_bottles { transform:translateX(-100%) translateY(20%); }
        .active div.ele_06_top_left, .active div.ele_06_bottom_left {width:20%;  }
        .active div.ele_06_top_right, .active div.ele_06_bottom_right {width:80%;  transition-delay: 1s}
        .active div.ele_06_bottle { transform:translateX(45%) translateY(10%) rotate(0deg);  transition-delay: 1.3s;  opacity: 1;  }
        .active div.ele_06_text {transform:translateX(40%) translateY(-40%);  transition-delay: 1.7s;}
        .active img.ele_06_bottles { transform:translateX(48%) translateY(20%); transition-delay: 2.3s;}
        /*----------------------------------------------------*/
        
        /* Section 07 ======================================= */
        div.ele_07_top,div.ele_07_bottom { transition-delay: 0.7s }
        div.ele_07_top {height:60%; overflow: hidden;}
        div.ele_07_bottom {height:40%; background-color: #FFFFFF;}
        div.ele_07_top_left,
        div.ele_07_top_right,
        div.ele_07_bottom_left,
        div.ele_07_bottom_right{
	        float:left; height: 100%;
        }
        div.ele_07_top_left,div.ele_07_bottom_left {width:0%; }
        div.ele_07_top_right,div.ele_07_bottom_right {width:100%;}
        div.ele_07_top_left,div.ele_07_bottom_right {background-color:#FFFFFF;}
        div.ele_07_top_right,div.ele_07_bottom_left { background-color:#56bced; overflow: hidden;}
        div.ele_07_top_left {background-image: url(<?=$theme_path?>images/07/bg.png); background-size:auto 100%; background-position:30%; background-repeat: no-repeat;}
        div.ele_07_bottle { transform:translateX(-200%) translateY(10%) rotate(450deg);  opacity: 0;  }
        div.ele_07_text { height:50%; overflow:hidden; color:#632236; transform:translateX(65%) translateY(-100%);  font-family: Constantia,helvetica,"黑体"; font-size: 15pt;opacity: 0; }
        div.ele_07_text span {display:inline-block; padding-left: 3%; font-size:120%;}
        img.ele_07_textdot { transform:translateX(80%) translateY(-120%); }
        .active div.ele_07_bottom_left {width:80%;  transition-delay: 1.5s;}
        .active div.ele_07_bottom_right { width:20%; transition-delay: 1.5s; }
        .active div.ele_07_top_left { width:80%; transition-delay: 1s; }
        .active div.ele_07_top_right {  width:20%; transition-delay: 1s;  }
        .active div.ele_07_bottle { transform:translateX(65%) translateY(15%) rotate(0deg);  transition-delay: 1.3s;  opacity: 1;  }
        .active div.ele_07_text {transform:translateX(65%) translateY(-80%); opacity: 1;font-size: 15pt;  transition-delay: 1.7s;}
        .active img.ele_07_textdot { transform:translateX(80%) translateY(40%); transition-delay: 2.3s; }
        /*----------------------------------------------------*/
        
        /* Section 08 ======================================= */
        div.ele_08_top {height:60%; overflow:hidden;  background-image: url(<?=$theme_path?>images/08/product.png); background-size:auto 100%; background-position:30%; background-repeat: no-repeat;opacity: 0;}
        div.ele_08_bottom {height:40%; overflow: hidden; background-color:#56bced; }
        div.ele_08_text { margin:10% auto auto 55%; overflow:hidden; color:#632236; font-family: Constantia,helvetica,"黑体"; font-size: 15pt;opacity: 0; }
        div.ele_08_text span {display:inline-block; padding-left: 3%; font-size:120%;}
        div.ele_08_des { margin-top:5%;margin-left:35%; color:#FFFFFF;font-family: Constantia,helvetica,"黑体"; font-size: 13pt; opacity: 0;}
        div.ele_08_des span {display:inline-block; padding:0 1%; font-size:120%; color:red;}
        .active div.ele_08_top {opacity: 1;}
        .active div.ele_08_text {opacity: 1; transition-delay: 1s;}
        .active div.ele_08_des { margin-top:3%;opacity: 1;transition-delay: 1.5s;}
        /*----------------------------------------------------*/
        
        /* Section 09 ======================================= */
        div.ele_09_product { box-shadow: 0 0 5px 2px #999; border: 10px solid #FFF; transform:translateX(33%) translateY(20%) rotate(150deg);opacity: 0;}
        div.ele_09_top {height:60%; overflow: visible;}
        div.ele_09_bottom {height:40%; overflow: hidden; background-color:#56bced; }
        img.ele_09_bottles {transform:translateX(120%) translateY(250%);}
        div.ele_09_text { overflow:hidden; color:#632236; margin:-10% auto auto 55%; font-family: Constantia,helvetica,"黑体"; font-size: 15pt;opacity: 0; }
        div.ele_09_text span {display:inline-block; padding-left: 3%; font-size:120%;}
        .active div.ele_09_product { transform:translateX(33%) translateY(20%) rotate(-15deg);opacity: 1;}
        .active img.ele_09_bottles {transform:translateX(120%) translateY(20%); transition-delay: 1.3s;}
        .active div.ele_09_text {opacity: 1; transition-delay: 1s;}
        /*----------------------------------------------------*/
        
        /* Section 10 =======================================   */
        div.ele_10_top { height:30%; background-color: #FFF;}
        div.ele_10_bottom { height:70%; overflow:visible; text-align:center;}
        div.ele_10_bottom_left,div.ele_10_bottom_right{ width:50%; height:100%; float:left; overflow:visible; opacity: 0;}
        div.ele_10_bottom_left { background-color: #7dcdf4;}
        div.ele_10_bottom_right { background-color: #fff100;}
        div.ele_10_bottom_left img {margin-top:0%;opacity: 0;}
        div.ele_10_bottom_right img {margin-top:0%;opacity: 0;}
        div.ele_10_text_left {color:#FFF;}
        div.ele_10_text_right {color:#666; margin-top:-18%; margin-left:-30%;}
        div.ele_10_text_left, div.ele_10_text_right {  font-family: Constantia,helvetica,"黑体"; font-size: 15pt;opacity: 0;}
        .active div.ele_10_bottom_left img {margin-top:-18%;opacity: 1; transition-delay: 1s;}
        .active div.ele_10_bottom_right img {margin-top:-25%;opacity: 1; transition-delay: 1s; }
        .active div.ele_10_text_left, .active div.ele_10_text_right {opacity: 1; transition-delay: 1.5s;}
        .active div.ele_10_bottom_left, .active div.ele_10_bottom_right {opacity: 1;}
        /*----------------------------------------------------*/
        
        div.ele_11_bg { width:100%; height:100%; overflow: hidden; background-image: url(<?=$theme_path?>images/11/bg2.png); background-size:auto 100%;  background-repeat: repeat-x;}
        div.ele_11_bg_poster { float:left; width:80%; height:100%; background-image: url(<?=$theme_path?>images/11/bg.png); background-position:center right; background-size:auto 100%; background-repeat: no-repeat; }
        div.ele_11_bg_left,div.ele_11_bg_right { float: left; width:20%;height:100%;}
        div.ele_11_bg_left_top,div.ele_11_bg_right_bottom { height:67.45%; background-color: #fff100;}
        div.ele_11_bg_left_bottom,div.ele_11_bg_right_top { height:32.55%; background-color: #7dcef4;}
        div.ele_11_bg_right_top { height:67.45%; background-color: #fff100;}
        div.ele_11_bg_right_bottom { height:32.55%; background-color: #7dcef4;}
            body {margin:0; padding:0;}
            table {border-collapse: collap}
        	   tbody { border:0px; }
            .C_page { font-family:"微软雅黑";}
            
            .C_head { border-bottom:5px #222222 solid; background-color:#FFFFFF; font-size:1em;}
            .C_head table { width:960px; margin:20px auto 10px auto; }
            .C_head a { text-decoration:none; color:#2A2A2A; font-weight:bold; font-family:"微软雅黑";font-size:16px;}
            .C_head .C_head_td_logo { text-align:center;}
            .C_head .C_head_td_secondary_menu { text-align:right;}
            
        	td ul li { display:inline; margin:0; padding:0 8px;}
        	ul { margin:0; padding:0;}
    </style>
</head>
<body>
<div id="header">
<div class="C_head">
     <table>
            <tr>
                <td class="C_head_td_main_menu">
                    <ul>
                        <li><a href="/brand/laifemen">莱菲蔓</a></li>
                        <li><a href="/brand/yilaiya">伊莱娅</a></li>
                        <li><a href="/about">关于彩怒莉</a></li>
                    </ul>
                </td>
                <td class="C_head_td_logo">
                <a href="/" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img src="/sites/all/themes/chinelyfullpage/logo.png" alt="<?php print t('Home'); ?>" />
                </a>
              </td>
              <td class="C_head_td_secondary_menu">
                    <ul>
                        <li><a href="/news">资讯</a></li>
                        <li><a href="/contact">商务合作</a></li>
                        <li><a href="/join">人才招聘</a></li>
                    </ul>
              </td>
             </tr>
     </table>
</div>
</div>
<div id="footer">©&nbsp;广州彩怒莉化妆品有限公司</div>
<div id="loading_coverlayer" style="position: absolute; z-index:8; top:0px; left:0px; background-color: #666; color:#fff;display:table; font-size:18pt; text-align:center;  width:100%; height:100%;">
    <div style="  width:100%; height:100%; vertical-align:middle; display:table-cell;">正在加载动画。。。<!--[if lte IE 9]><span style="color:red;">您的浏览器无法支持此网页，请使用最新版的“360浏览器”或者“谷歌浏览器”，或者其他支持html5及css3的现代浏览器。</span><![endif]--></div>
</div>
<div id="fullpage" style="display:none;">
    <div class="section active">
        <div style="background-image: radial-gradient(#490119 10%, #650022 30%, #990033 60%);overflow: hidden;">
            <div class="ele ele_01_photo"><div style="background-color: #FFFFFF; background-image: url(<?=$theme_path?>images/01/girl.png); background-size: cover; background-position: top center; padding-bottom:60%;"></div></div>
            <div class="ele ele_01_title"><div style="background-image: url(<?=$theme_path?>images/01/title.png); background-size: cover; background-position: center center; padding-bottom:30%;"></div></div>
            <div class="ele ele_01_logo"><div style="background-image: url(<?=$theme_path?>images/01/logo.png); background-size: cover; background-position: center center; padding-bottom:40%;"></div></div>
        </div>
    </div>
    <div class="section">

            <div class="ele ele_02_title"><div style="background-image: url(<?=$theme_path?>images/02/title.png); background-size: cover; background-position: center center; padding-bottom:15%;"></div></div>
            <div class="ele ele_02_text">指甲油从诞生至今已经有两千年的历史，影响了全球一代又一代的爱美女性，经久不衰！<br>指甲的修饰乃是女性美容的重要内容，以显示纤纤玉手的魅力。<br>在欧美日韩，指甲油所赋予的“女性浓度”甚至在口红之上！</div>

    </div>

    <div class="section" style="background-image:url(<?=$theme_path?>images/03/bg.png); background-repeat: no-repeat; background-position: -20% bottom; background-size: 60%;">
        <div class="ele ele_03_lineB"><span>1</span><span>行业未形成主要品牌格局，随着生活水平和健康意识的提升，消费者追求健康安全的高品质产品；</span></div>
        <div class="ele ele_03_lineR"><span>2</span><span>流通产品主导市场，无区域保护、颜色多、瓶型多、品质良莠不齐，考验采购人员的专业度、采购成本高；</span></div>
        <div class="ele ele_03_lineB"><span>3</span><span>消费群体稳定且对甲油类产品有较强的需求，随着泛90后成为消费主力，消费人群有逐年增加趋势；</span></div>
        <div class="ele ele_03_lineR"><span>4</span><span>近几年，由于实体店受线上渠道的冲击且护肤、彩妆、个护等大类竞争剧烈，具有较强体验感的甲油产品越来越受关注；</span></div>
    </div>

    <div class="section">
        <div class="ele ele_04_left">
            <div class="ele ele_04_house" style="background-image: url(<?=$theme_path?>images/04/house.png); border-radius: 50%; border: 5px solid #FFFFFF; background-size: cover; background-position: center center; padding-bottom:100%;"></div>
        </div>
        <div class="ele ele_04_right">
            <div class="ele ele ele_04_text">
                <p><span>品牌定位</span>大众化指甲油品牌。</p>
                <p><span>品牌背景</span>为满足消费者对多样性和高性价比产品的追求、国内甲油品类专业厂商广州彩怒莉联合法国FIABILA、色彩权威机构美国潘通（Pantone）重新定义指尖色彩，精选经典、流行等最畅销色，满足不同消费者的需求。</p>
                <p><span>品牌风格</span>活力，俏皮，热情，动感。</p>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="ele ele_05_left">
            <div class="ele ele_05_girl1" style=" width:50%; background-image: url(<?=$theme_path?>images/05/girl1.png); border: 5px solid #FFFFFF; background-size: cover; background-position: center center; padding-bottom:70%;"></div>
            <div class="ele ele_05_girl2" style=" width:50%; background-image: url(<?=$theme_path?>images/05/girl2.png); border: 5px solid #FFFFFF; background-size: cover; background-position: center center; padding-bottom:70%; "></div>
        </div>
        <div class="ele ele_05_right">
            <div class="ele ele_05_text">
                <p><span>渠道定位</span>全国化妆品连锁渠道（百强连锁、知名饰品百货店）。</p>
                <p><span>品牌愿景</span>帮助连锁门店解决甲油产品采购问题、降低采购成本，有效提升该品类在门店的销售占比，让消费者买到高性价比的优质甲油产品。</p>
                <p><span>品牌广告语</span>玩出彩，秀出范！ </p>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="ele ele_06_top">
            <div class="ele ele_06_top_left"></div>
            <div class="ele ele_06_top_right">
                <div class="ele ele_06_bottle" style="width:33%; background-image: url(<?=$theme_path?>images/06/bottle.png); background-repeat:no-repeat; background-size: 98% 98%; background-position: center center; padding-bottom:28%;"></div>
                <div class="ele ele_06_text">
                    <p>CLASSIC COLOR</p>
                    <P>水性经典色系列<span>16色</span></P>
                </div>
            </div>
        </div>
        <div class="ele ele_06_bottom">
            <div class="ele ele_06_bottom_left"></div>
            <div class="ele ele_06_bottom_right">
                <img class="ele ele_06_bottles" src="<?=$theme_path?>images/06/bottles.png" style="width:40%;">
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="ele ele_07_top">
            <div class="ele ele_07_top_left">
                <div class="ele ele_07_bottle" style="width:33%; background-image: url(<?=$theme_path?>images/07/bottle.png); background-repeat:no-repeat; background-size: 35% auto; background-position: center center; padding-bottom:28%;"></div>
                <div class="ele ele_07_text">
                    <p>POPULAR COLOR</p>
                    <P>水性流行色系列<span>10色</span></P>
                </div>
            </div>
            <div class="ele ele_07_top_right"></div>
        </div>
        <div class="ele ele_07_bottom">
            <div class="ele ele_07_bottom_left">
                <img class="ele ele_07_textdot" src="<?=$theme_path?>images/07/text.png" style="width:40%;">
            </div>
            <div class="ele ele_07_bottom_right"></div>
        </div>
    </div>
    
    <div class="section">
        <div class="ele ele_08_top">
            <div class="ele ele_08_text">
                <p>POPULAR COLOR</p>
                <p>油性经典流行色系列<span>20色</span></p>
            </div>
        </div>
        <div class="ele ele_08_bottom">
            <div class="ele ele_08_des">
                <p>无甲醛，无甲苯，无DBP</p>
                <p>美国杜邦<span>600</span>根特制宽扁毛刷，上色均匀</p>
                <p>高亮度，高光泽，持久耐磨</p>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="ele ele_09_top">
            <div class="ele ele ele_09_product" style=" width:35%; background-color: #FFFFFF; background-image: url(<?=$theme_path?>images/09/product.png); background-size:100% auto; background-position: top center; padding-bottom:22%;"></div>
            <div class="ele ele_09_text">
                <p>CLASSIC COLOR</p>
                <p>油性经典色系列<span>30色</span></p>
            </div>
        </div>
        <div class="ele ele_09_bottom">
            <img class="ele ele_09_bottles" src="<?=$theme_path?>images/09/bottles.png" style="width:30%;">
        </div>
    </div>

    <div class="section">
        <div class="ele ele_10_top"></div>
        <div class="ele ele_10_bottom">
            <div class="ele ele_10_bottom_left">
                <img class="ele" src="<?=$theme_path?>images/10/product.png"  style="width:50%;">
                <div class="ele ele_10_text_left">
	                <p>NAIL SUPPLEMENTS</p>
	                <p>美甲辅助品</p>
                </div>
            </div>
            <div class="ele ele_10_bottom_right">
                <img class="ele" src="<?=$theme_path?>images/10/product2.png"  style="width:50%;">
                <div class="ele ele_10_text_right">
	                <p>IMAGE UNDER</p>
	                <p>形象展柜</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="ele ele_11_bg">
            <div class="ele_11_bg_poster"></div>
            <div class="ele_11_bg_right">
                <div class="ele_11_bg_right_top"></div>
                <div class="ele_11_bg_right_bottom"></div>
            </div>
        </div>
    </div>

</div>
</body>
</html>