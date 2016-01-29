<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<link rel="stylesheet" type="text/css" href="/sites/all/themes/chinelyfullpage/animate/animate.css" media="screen" />
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
	  ?>

<div style=" width:960px; margin:0px auto;">
<img src="/sites/all/themes/chinelyfullpage/image/brand_page/start_to_exp.png">
</div>

<div style="background:#174060; height:600px; color:#FFFFFF;" class="animated zoomInLeft">
     <div style="width:460px; padding-left:500px; height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/brand_sence_bg.png);">
         <br><br>
         <h1 style="font-weight:normal;">品牌背景</h1>
         <p style="text-indent:2em; line-height:30px;" class="animated zoomInLeft">秉承着对高品质生活方式的追求，国内首屈一指的专业甲油品类生产十六年的浙江东方秀集团联合法国菲拉比拉集团研究中心，历时两年，研究出以纯水为基料、天然植物精华、环保树脂、色浆等为原料，并采用纳米技术精制而成的颠覆传统油基指甲油的革命性产品——“天然、零刺激”的水基甲油配方，为时尚爱美女子提供100%健康安全的产品，使她们能尽情享受指尖的魅力、玩弄色彩的愉悦，却不再受任何有害物质的伤害。</p>
         <h1 style="font-weight:normal;">品牌理念</h1>
         <p style="text-indent:2em; line-height:30px;" class="animated zoomInLeft">以“天然、零刺激”为产品核心，倡导“早上涂、晚上卸”的正确消费观念，鼓励新时代时尚爱美女子勇于展现自己，表达每天不同更精彩的生活态度！</p>
     </div>
</div>

<div style=" height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/product_attr.png);">
         <br><br>
     </div>
</div>

<div style="background-color:#ff3c00; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/4_breakthroughs.png);">
         <br><br>
     </div>
</div>


<div style=" height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/brand_products.png);">
         <br><br>
     </div>
</div>

<div style="background-color:#000; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/12starsB-1.png);">
         <br><br>
     </div>
</div>

<div style="background-color:#000; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/12starsB-3.png);">
         <br><br>
     </div>
</div>

<div style="background-color:#000; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/12starsB-2.png);">
         <br><br>
     </div>
</div>

<div style="background-color:#FFF; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/10fashion_color.png);">
         <br><br>
     </div>
</div>


<div style="background-color:#000; height:60px;"></div>

<div style="background-color:#e4007f; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/8bflm_color.png);">
         <br><br>
     </div>
</div>

<div style="background-color:#0d2d46; height:60px;"></div>

<div style="background-color:#000; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/star_bright_color.png);">
         <br><br>
     </div>
</div>

<div style="background-color:#0d2d46; height:60px;"></div>

<div style="background-color:#fff000; height:600px;">
     <div style="width:960px;height:100%; margin:0px auto; background-image:url(/sites/all/themes/chinelyfullpage/image/brand_page/6huayuly.png);">
         <br><br>
     </div>
</div>

<!--div style="background-color:#0d2d46; height:600px;">
8缤纷浪漫色
</div>

<div style=" height:600px;">
6璀璨星空色
</div-->

<div style="text-align:center;">
	<?php
	  print render($content['body']);
    ?>
</div>
    </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
<script type="text/javascript">
flowplayer("player2", 
		"sites/all/themes/chinely/flowplayer/flowplayer-3.2.7.swf")
</script>