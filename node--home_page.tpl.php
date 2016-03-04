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
      print render($content['field_slider_photo']);
	  ?>
	  <script type="text/javascript">
	  jQuery('div.flexslider ul.slides li:last').css('background-color','#990033');
	  </script>
        <div class="C_incinfo">
             <div class="C_incinfo_text"><div class="section">
                  <div style="height:530px; overflow:hidden;"><img src="sites/all/themes/chinelyfullpage/image/ad.jpg"></div>
                  <div>
                     <h3>莱菲蔓可剥型水性指甲油</h3>
                     <p>天然，零刺激</p>
                 </div>
             
             </div></div>
             <div class="C_incinfo_qna"><div class="section">
                 <h3>顾客服务</h3>
                 <p>若您在使用产品的过程中遇到任何问题</p>
                 <p>请致电我们的顾客服务中心</p>
                 <a href="/qna">联络我们</a>
             </div></div>
             <div class="C_incinfo_video"><div class="section">
             <a href="sites/all/themes/chinelyfullpage/video/video_1_1.flv" style="display:block;width:480px; height:270px" id="player2">
			  <img src="sites/all/themes/chinelyfullpage/video/video.jpg"/>
             </a>
                 <!--div id="player2" style="width:480px; height:270px"></div-->
                 <div>
                     <h3>莱菲蔓可剥型水性指甲油使用过程</h3>
                     <p>涂用方便，随心随时换色，健康无害</p>
                 </div>
             </div></div>
        </div>
        
        <div class="C_product">
             <div class="C_product_box" style="margin-left:0px;">
                  <img src="sites/all/themes/chinelyfullpage/image/product_1.png"/>
                   <div>
                       <h3>莱菲蔓西班牙甜橙水性指甲油</h3>
                       <p>清新的西班牙阳光鲜香</p>
                   </div>
             </div>
             <div class="C_product_box">
                  <img src="sites/all/themes/chinelyfullpage/image/product_2.png"/>
                   <div>
                       <h3>莱菲蔓英伦玫瑰水性指甲油</h3>
                       <p>迷人的英伦玫瑰花香</p>
                   </div>
             </div>
             <div class="C_product_box">
                  <img src="sites/all/themes/chinelyfullpage/image/product_3.png"/>
                   <div>
                       <h3>莱菲蔓花语水性指甲亮油</h3>
                       <p>堪称指甲的CC霜，保护、滋润、美化指甲</p>
                   </div>
             </div>
        </div>
        <div class="C_product" style="display: none;">
        <img src="sites/all/themes/chinelyfullpage/image/product_eliya.png"/>
        </div>
	<?php
	  print render($content['body']);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
<script type="text/javascript">
flowplayer("player2", 
		"sites/all/themes/chinelyfullpage/flowplayer/flowplayer-3.2.7.swf")
</script>