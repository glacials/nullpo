<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <b:include data='blog' name='all-head-content'></b:include>
    <title><?php print $blog['pageTitle']; ?></title>
    <style>/*

/* **************************
Name: Emplode
Blogger by: http://blogandweb.com/
Distributed by: http://btemplates.com/
Designer: http://templates.arcsin.se/
Date: Dec 08
***************************** 

*//* Definicion de variables
   ====================
   <Variable name="textocolor" description="Text Color"
             type="color" default="#5A5A50" value="#5A5A50">
   <Variable name="enlacecolor" description="Link Color"
             type="color" default="#554433" value="#554433">
   <Variable name="colorenlaceencima" description="Hover Link Color"
             type="color" default="#CC4400" value="#CC4400">
   <Variable name="colortituloblog" description="Blog Title Color"
             type="color" default="#FFFFFF" value="#FFFFFF">
   <Variable name="descripcioncolor" description="Blog Description Color"
             type="color" default="#999988" value="#999988">
   <Variable name="colormenu" description="Menu Color"
             type="color" default="#554433" value="#554433">
 <Variable name="dateHeaderColor" description="Date Header Color"
           type="color" default="#777777" value="#777777">
   <Variable name="colortituloslateral" description="Sidebar Title Color"
             type="color" default="#666655" value="#666655">
   <Variable name="colortextolateral" description="Sidebar Text Color"
             type="color" default="#666655" value="#666655">
*/

#navbar-iframe{height:0;visibility:hidden;display:none;}
/*-- (Generales) --*/html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent;}
body{line-height:1;}
ol,ul{list-style:none;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
:focus{outline:0;}
ins{text-decoration:none;}
del{text-decoration:line-through;}
table{border-collapse:collapse;border-spacing:0;}
html{font-size:62.5%;/* reset 1em to 10px */height:100%;}
body{background:#353530;color:#5A5A50;font:normal 1.3em Georgia,sans-serif;height:100%;padding-bottom:1px;/* force scrollbars */}
/* 
   Typography 
------------------------------------------------------------------- */p{line-height:1.4em;padding:.2em 0 1.2em;}
h1{font:normal 3em Georgia,sans-serif;}
h2{font:normal 2.2em Georgia,sans-serif;}
h3{font:normal 2em Georgia,sans-serif;}
h4{font:normal 1.8em Georgia,sans-serif;}
h5{font:normal 1.6em Georgia,sans-serif;}
h6{font:bold 1.2em Georgia,sans-serif;}
h1,h2,h3,h4,h5,h6{margin-bottom:.2em;}
blockquote{background:#F6F6F2 url(http://2.bp.blogspot.com/_73i0fjAB_Hw/SUW944O_ClI/AAAAAAAAAo4/dXfH0dDRYvs/s1600/backgrounds.gif) no-repeat 0 -414px;border-bottom:1px solid #E0E0D4;border-top:1px solid #E0E0D4;color:#332;display:block;margin:.6em 0 1.6em;padding:.8em 1em .2em 46px;}
/* 
   Tables
------------------------------------------------------------------- */table.data_table{border:1px solid #CCB;margin-bottom:2em;width:100%;}
table.data_table th{background:url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW95q11aJI/AAAAAAAAApI/hl-yfnnb_yc/s1600/grain_dark.gif);border:1px solid #CCB;color:#555;text-align:left;}
table.data_table tr{border-bottom:1px solid #DDD;}
table.data_table td,table th{padding:10px;}
table.data_table td{background:url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW951YkZyI/AAAAAAAAApQ/WTCfKOQtoyg/s1600/grain_light.gif);border:1px solid #DDC;}
/* 
   Lists
------------------------------------------------------------------- */dl{margin-bottom:2em;}
dt,dd{padding:8px 10px;}
dt{background:url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW95q11aJI/AAAAAAAAApI/hl-yfnnb_yc/s1600/grain_dark.gif);border-bottom:1px solid #CCB;color:#555;font-weight:700;}
dd{background:url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW951YkZyI/AAAAAAAAApQ/WTCfKOQtoyg/s1600/grain_light.gif);border-bottom:1px solid #DDC;padding-left:16px;}
/* 
   Links 
------------------------------------------------------------------- */ a{color:#554433;}
a:hover{color:#CC4400;text-decoration:underline;}
/* 
   Forms 
------------------------------------------------------------------- */fieldset{border-left:1px solid #CCB;border-right:1px solid #CCB;margin:1em 0 1.2em;}
input,textarea,select{background-color:#FFF;border-color:#777 #CCC #CCC #777;border-style:solid;border-width:1px;font:normal 1em Verdana,sans-serif;padding:4px;}
input.button{background:#E9E8E8 url(http://2.bp.blogspot.com/_73i0fjAB_Hw/SUW944O_ClI/AAAAAAAAAo4/dXfH0dDRYvs/s1600/backgrounds.gif) repeat-x 0 -366px;border:1px solid #888;border-color:#BBB #888 #888 #CCC;color:#444;cursor:pointer;font:normal 1em Verdana,sans-serif;margin-top:5px;padding:6px;width:auto;}
input:focus,input:active,textarea:focus,textarea:active,select:focus,select:active,input.button:hover,input.button:focus{background:#FFFFF5;}
input.button:hover,input.button:focus{color:#123;cursor:pointer;}
textarea{overflow:auto;}
input.image{border:0;padding:0;}
img.bordered{background-color:#FFF;border:1px solid #DDD;padding:3px;}
img.left{margin:0 15px 12px 0;}
img.right{margin:0 0 15px 12px;}
/* 
   Floats
------------------------------------------------------------------- */.left{float:left;}
.right{float:right;}
.clear,.clearer{clear:both;}
.clearer{display:block;font-size:0;line-height:0;}
#main-wrapper{overflow:hidden;}
.clear{clear:both;}
#blog-pager-newer-link{float:left;}
#blog-pager-older-link{float:right;}
#blog-pager{text-align:center;}
/*-- (Cabecera) --*/.center_wrapper{margin:0 auto;width:855px;}
#header-wrapper{background:#35322B url(http://2.bp.blogspot.com/_73i0fjAB_Hw/SUW944O_ClI/AAAAAAAAAo4/dXfH0dDRYvs/s1600/backgrounds.gif) repeat-x 0 0;padding-top:8px;}
#header-inner{padding:0 0 16px;}
#header-wrapper h1{color:#FFFFFF;}
#header-wrapper h1 a{color:#FFFFFF;text-decoration:none;}
#header-wrapper h1 a:hover{color:#FFB;}
#header-wrapper p{color:#999988;}
#toplinks{background:#353530 url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW95zqcjDI/AAAAAAAAApg/pNWpgxKRTAk/s1600/toplinks.gif) no-repeat left top;color:#554;float:right;font-size:.9em;height:27px;width:230px;}
#toplinks_inner{padding-top:3px;text-align:center;}
#toplinks a{color:#887;}
#toplinks a:hover{color:#DDC;}
/*-- (Menu) --*/#navigation ul,#navigation li{display:inline;}
#navigation li{display:inline;}
#navigation,#navigation a{background:#958573 url(http://2.bp.blogspot.com/_73i0fjAB_Hw/SUW944O_ClI/AAAAAAAAAo4/dXfH0dDRYvs/s1600/backgrounds.gif) repeat-x 0 -222px;}
#navigation a{border-right:1px solid #AFA69C;color:#654;float:left;font:bold 1em Georgia,Tahoma,sans-serif;margin-right:1px;padding:10px 12px;text-align:center;text-decoration:none;}
#navigation li:first-child a{border-left:1px solid #AFA69C;}
#navigation a:hover,#navigation li.current_page_item a{background-position:0 -294px;color:#554433;}
/*-- (Contenedor) --*/#main_wrapper_outer{background:url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW95RwSauI/AAAAAAAAApA/5GUeLD8dOYU/s1600/grain.gif);}
#main_wrapper_inner{background:url(http://2.bp.blogspot.com/_73i0fjAB_Hw/SUW95xbfl2I/AAAAAAAAApY/A5K1xC8kSjQ/s1600/main_wrapper_inner.gif) repeat-x left top;line-height:1.4em;padding:24px 0;}
/*-- (Principal) --*/#main-wrapper{font:normal .9em Verdana,sans-serif;width:540px;}
#main ol,#main ul{margin:0 0 1.2em 1.6em;}
#main ul li{list-style:disc;}
#main ol li{list-style:decimal;}
#main li{padding:2px 0;}
.post{margin-bottom:24px;}
.post-title a,.post-header-line-1 a{text-decoration:none;}
.post-header-line-1 a:hover,.post-footer a:hover{text-decoration:underline;}
.post-header-line-1{color:#777777;margin-bottom:14px;}
.post-header-line-1 a{color:#444;}
.post-footer{background:url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW951YkZyI/AAAAAAAAApQ/WTCfKOQtoyg/s1600/grain_light.gif);border:1px solid #E5E5D5;color:#776;font-size:.9em;padding:8px 10px;}
.post-footer a{color:#665;}
.post-footer a:hover{color:#001;}
/*-- (Lateral) --*/#sidebar-wrapper{color:#665;width:286px;border-left:1px solid #CCB;}
#sidebar{padding-left:25px;}
#sidebar a{color:#666655;}
#sidebar a:hover{color:#C40;}
#sidebar-wrapper li{border-top:1px solid #DDC;padding:4px 6px;}
#sidebar-wrapper li:first-child{border-top:none;}
#sidebar-wrapper h2{background:url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW95q11aJI/AAAAAAAAApI/hl-yfnnb_yc/s1600/grain_dark.gif);color:#666655;font-weight:700;padding:5px 8px;line-height:1.4em;font-size:100%;}
.sidebar .widget-content{padding:8px 0;}
.sidebar .widget{margin-bottom:1.5em;}
/*-- (Pie de pagina) --*/#footer-wrapper{color:#AA9;padding:12px 0;}
#footer-wrapper a{color:#BBA;}
#footer-wrapper .right,#footer-wrapper .right a{color:#777;text-decoration:none;}
#footer-wrapper a:hover{color:#CCB;}
/*-- (Comentarios) --*/#comments h4{font-family:Georgia,sans-serif;font-size:2em;border-bottom:1px solid #D6D6C6;display:block;}
#comments dd{background:none;}
#comments dt{font-weight:400;border:0;}
.comment-author{padding-top:10px;display:block;}
p.comment-footer{text-align:center;}
dd.comment-footer,dd.comment-body{margin:0;padding:0;border:0;}
.comment-timestamp{padding-bottom:1.2em;font-size:.9em;display:block;border-bottom:1px solid #D6D6C6;}
.comment-timestamp a{color:#665;text-decoration:none;}
.comment-form{border:1px solid #CCB;margin:1em 0 1.2em;display:block;width:537px!important;max-width:537px!important;}
#comment-editor{margin:0 10px!important;}
#comments #comment-post-message{padding:8px 18px 6px;background:transparent url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW95q11aJI/AAAAAAAAApI/hl-yfnnb_yc/s1600/grain_dark.gif) repeat scroll 0 0;border-bottom:1px solid #CCB;display:block;}
.feed-links{padding:7px 0;}
.status-msg-wrap{width:98% important;}
/* Dashboard */#dashboard{background:#DDD url(http://3.bp.blogspot.com/_73i0fjAB_Hw/SUW95q11aJI/AAAAAAAAApI/hl-yfnnb_yc/s1600/grain_dark.gif);border-top:1px dashed #C0C0B0;}
#dashboard_content{padding:16px 0 22px;}
#dashboard h2{font-size:1.8em;font-family:Georgia,sans-serif;}
#dashboard .col3{width:255px;}
#dashboard .col3mid{width:337px;}
#dashboard .col3mid .col3_content{border-left:1px solid #CCB;border-right:1px solid #CCB;padding:0 20px;margin:0 20px;}
#dashboard li{color:#887;padding:5px 0;}
#dashboard li{border-top:1px dashed #C6C6B6;}
#dashboard li a{color:#606050;text-decoration:none;}
#dashboard li a:hover{color:#332;text-decoration:underline;}
body#layout #content-wrapper{margin:0;}
body#layout #footer-wrapper p.links,body#layout #menu,body#layout #search{display:none;}

</style>
<?php print $blog['rss_link']; ?>
<?php print $blog['js_link']; ?>
</head>

  <body>
  <div id='outer-wrapper'><div id='wrap2'>

    <!-- links para navegadores de texto -->
    <span id='skiplinks' style='display:none;'>
      <a href='#main'>ir a principal </a> |
      <a href='#sidebar'>Ir a lateral</a>
    </span>

<!-- (Cabecera) -->
    <div id='header-wrapper'>
<div class='center_wrapper'>

<div id='toplinks'>
<div id='toplinks_inner'>
	<a href="<?php print $blog['homepageUrl']; ?>">Home</a> | 
	<a href='http://www.blogger.com'>Login</a> | 
	<a expr:href='data:blog.homepageUrl + &quot;feeds/posts/default&quot;'>RSS</a>
</div>
</div>

<div class='clearer'></div>

      <div id="header" class="section header">

<div id="Header1" class="widget Header">
<?php function _c22bcbb8c54811b522a7f43bc123496() { global $blog, $top; ?>

  <div class='descriptionwrapper'>
    <p class='description'><span><?php print $blog['description']; ?></span></p>
  </div>

<?php }; ?>
<?php function db12eb794be7d34bf1541c4baf234b23() { global $blog, $top; ?>

  <?php if ($blog['url'] == $blog['homepageUrl']): ?>
    <?php print $blog['title']; ?>
  <?php else: ?>
    <a href="<?php print $blog['homepageUrl']; ?>"><?php print $blog['title']; ?></a>
  <?php endif; ?>

<?php }; ?>


  <?php if ($useImage): ?>
    <?php if ($imagePlacement == "REPLACE"): ?>
      <!--Show just the image, no text-->
      <div id='header-inner'>
        <a href="<?php print $blog['homepageUrl']; ?>" style="display: block">
          <img alt="<?php print $blog['title']; ?>" height="<?php print $height; ?>" id="<?php print $widget['instanceId'] . "_headerimg"; ?>" src="<?php print $sourceUrl; ?>" width="<?php print $width; ?>" style="display: block">
        </a>
      </div>
    <?php else: ?>
      <!--
      Show image as background to text. You can't really calculate the width
      reliably in JS because margins are not taken into account by any of
      clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
      width if the user is using shrink to fit.
      This results in a margin-width's worth of pixels being cropped. If the
      user is not using shrink to fit then we expand the header.
      -->
      <div style="<?php print "background-image: url(\"" . $sourceUrl . "\"); "                      . "background-position: "                      . $backgroundPositionStyleStr . "; "                      . $widthStyleStr                      . "min-height: " . $height . "px;"                      . "_height: " . $height . "px;"                      . "background-repeat: no-repeat; "; ?>" id="header-inner">
        <div class='titlewrapper' style='background: transparent'>
          <h1 class='title' style='background: transparent; border-width: 0px'>
            <?php db12eb794be7d34bf1541c4baf234b23(); ?>
          </h1>
        </div>
        <?php _c22bcbb8c54811b522a7f43bc123496(); ?>
      </div>
    <?php endif; ?>
  <?php else: ?>
    <!--No header image -->
    <div id='header-inner'>
      <div class='titlewrapper'>
        <h1 class='title'>
          <?php db12eb794be7d34bf1541c4baf234b23(); ?>
        </h1>
      </div>
      <?php _c22bcbb8c54811b522a7f43bc123496(); ?>
    </div>
  <?php endif; ?>


</div>

</div>
</div>
    </div>


<div id='navigation'>
<div class='center_wrapper'>
<ul>
	<li class='current_page_item'><a href="<?php print $blog['homepageUrl']; ?>">Home</a></li>
	<li><a expr:href='data:blog.homepageUrl + &quot;feeds/posts/default&quot;'>Posts RSS</a></li>
	<li><a expr:href='data:blog.homepageUrl + &quot;feeds/comments/default&quot;'>Comments RSS</a></li>
	<li><a href='#'>Edit</a></li>	
</ul>
<div class='clearer'>&#160;</div>
</div>
</div>

<!-- (Principal) -->
<div id='main_wrapper_outer'>
<div id='main_wrapper_inner'>
<div class='center_wrapper'>

      <div class='left' id='main-wrapper'>
        <div id="main" class="section main">

<div id="Blog1" class="widget Blog">
<?php function _beae4c877d3effdf0d0d4781ca0c($post) { global $blog, $top; ?>

  <div class='comments' id='comments'>
    <a name='comments'></a>
    <?php if ($post['allowComments']): ?>
      <h4>
        <?php if ($post['numComments'] == 1): ?>
          1 <?php print $commentLabel; ?>:
        <?php else: ?>
          <?php print $post['numComments']; ?> <?php print $commentLabelPlural; ?>:
        <?php endif; ?>
      </h4>

      <?php if ($post['commentPagingRequired']): ?>
        <span class='paging-control-container'>
          <a class="<?php print $post['oldLinkClass']; ?>" href="<?php print $post['oldestLinkUrl']; ?>"><?php print $post['oldestLinkText']; ?></a>
          &#160;
          <a class="<?php print $post['oldLinkClass']; ?>" href="<?php print $post['olderLinkUrl']; ?>"><?php print $post['olderLinkText']; ?></a>
          &#160;
          <?php print $post['commentRangeText']; ?>
          &#160;
          <a class="<?php print $post['newLinkClass']; ?>" href="<?php print $post['newerLinkUrl']; ?>"><?php print $post['newerLinkText']; ?></a>
          &#160;
          <a class="<?php print $post['newLinkClass']; ?>" href="<?php print $post['newestLinkUrl']; ?>"><?php print $post['newestLinkText']; ?></a>
        </span>
      <?php endif; ?>

      <dl id='comments-block'>
        <?php foreach ($post['comments'] as $comment): ?>
          <dt class="<?php print "comment-author " . $comment['authorClass']; ?>" id="<?php print $comment['anchorName']; ?>">
            <a name="<?php print $comment['anchorName']; ?>">
            <?php if ($comment['authorUrl']): ?>
              <a href="<?php print $comment['authorUrl']; ?>" rel="nofollow"><?php print $comment['author']; ?></a>
            <?php else: ?>
              <?php print $comment['author']; ?>
            <?php endif; ?>
            <?php print $commentPostedByMsg; ?>
          </dt>
          <dd class='comment-body'>
            <?php if ($comment['isDeleted']): ?>
              <span class='deleted-comment'><?php print $comment['body']; ?></span>
            <?php else: ?>
              <p><?php print $comment['body']; ?></p>
            <?php endif; ?>
          </dd>
          <dd class='comment-footer'>
            <span class='comment-timestamp'>
              <a href="<?php print $comment['url']; ?>" title="comment permalink">
                <?php print $comment['timestamp']; ?>
              </a>
              <?php _fdfd7e43ef236b74329945621bbefad($comment); ?>
            </span>
          </dd>
        <?php endforeach; ?>
      </dl>

      <?php if ($post['commentPagingRequired']): ?>
        <span class='paging-control-container'>
          <a class="<?php print $post['oldLinkClass']; ?>" href="<?php print $post['oldestLinkUrl']; ?>">
            <?php print $post['oldestLinkText']; ?>
          </a>
          <a class="<?php print $post['oldLinkClass']; ?>" href="<?php print $post['olderLinkUrl']; ?>">
            <?php print $post['olderLinkText']; ?>
          </a>
          &#160;
          <?php print $post['commentRangeText']; ?>
          &#160;
          <a class="<?php print $post['newLinkClass']; ?>" href="<?php print $post['newerLinkUrl']; ?>">
            <?php print $post['newerLinkText']; ?>
          </a>
          <a class="<?php print $post['newLinkClass']; ?>" href="<?php print $post['newestLinkUrl']; ?>">
            <?php print $post['newestLinkText']; ?>
          </a>
        </span>
      <?php endif; ?>

      <p class='comment-footer'>

        <?php if ($post['embedCommentForm']): ?>
          <?php _fced57ae0dfb9753a77b24aa212d731($post); ?>
        <?php else: ?>
          <?php if ($post['allowComments']): ?>
            <a href="<?php print $post['addCommentUrl']; ?>" onclick="<?php print $post['addCommentOnclick']; ?>"><?php print $postCommentMsg; ?></a>
          <?php endif; ?>
        <?php endif; ?>

      </p>
    <?php endif; ?>

    <div id='backlinks-container'>
    <div id="<?php print $widget['instanceId'] . "_backlinks-container"; ?>">
       <?php if ($post['showBacklinks']): ?>
         <?php _ad6de64cbf11b4a38b824d881fd($post); ?>
       <?php endif; ?>
    </div>
    </div>
  </div>

<?php }; ?>
<?php function _fb645933567188659ad7f38d14a0516($post) { global $blog, $top; ?>

  <?php if ($post['editUrl']): ?>
    <span class="<?php print "item-control " . $post['adminClass']; ?>">
      <a href="<?php print $post['editUrl']; ?>" title="<?php print $top['editPostMsg']; ?>">
        <img alt='' class='icon-action' height='18' src='http://www.blogger.com/img/icon18_edit_allbkg.gif' width='18'/>
      </a>
    </span>
  <?php endif; ?>

<?php }; ?>
<?php function _e0763989c60df4df35e97aa43911562($links) { global $blog, $top; ?>

  <div class='feed-links'>
  <?php print $feedLinksMsg; ?>
  <?php foreach ($links as $f): ?>
     <a class="feed-link" href="<?php print $f['url']; ?>" type="<?php print $f['mimeType']; ?>" target="_blank"><?php print $f['name']; ?> (<?php print $f['feedType']; ?>)</a>
  <?php endforeach; ?>
  </div>

<?php }; ?>
<?php function _b5933fe9a87aadbdca247a0105488b0($backlink) { global $blog, $top; ?>

  <span class="<?php print "item-control " . $backlink['adminClass']; ?>">
    <a href="<?php print $backlink['deleteUrl']; ?>" title="<?php print $top['deleteBacklinkMsg']; ?>">
      <img src='http://www.blogger.com/img/icon_delete13.gif'/>
    </a>
  </span>

<?php }; ?>
<?php function _fced57ae0dfb9753a77b24aa212d731($post) { global $blog, $top; ?>

  <div class='comment-form'>
    <a name='comment-form'></a>
    <h4 id='comment-post-message'><?php print $postCommentMsg; ?></h4>
    <p><?php print $blogCommentMessage; ?></p>
    <?php print $blogTeamBlogMessage; ?>
    <a href="<?php print $post['commentFormIframeSrc']; ?>" id="comment-editor-src">
    <iframe allowtransparency='true' class='blogger-iframe-colorize' frameborder='0' height='275' id='comment-editor' scrolling='no' src='' width='100%'></iframe>
    <?php print $post['iframeColorizer']; ?>
  </div>

<?php }; ?>
<?php function _a6b9c6c81da17f1ca8ef615c632b() { global $blog, $top; ?>

  <?php if ($blog['pageType'] != "item"): ?> <!-- Blog feed links -->
    <?php if ($feedLinks): ?>
      <div class='blog-feeds'>
        <?php _e0763989c60df4df35e97aa43911562($feedLinks); ?>
      </div>
    <?php endif; ?>

    <?php else: ?> <!--Post feed links -->
    <div class='post-feeds'>
      <?php foreach ($posts as $post): ?>
        <?php if ($post['allowComments']): ?>
          <?php if ($post['feedLinks']): ?>
            <?php _e0763989c60df4df35e97aa43911562($post['feedLinks']); ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

<?php }; ?>
<?php function e13c8786296c30ea609aaed855d16c85() { global $blog, $top; ?>

  <?php if ($navMessage): ?>
  <div class='status-msg-wrap'>
    <div class='status-msg-body'>
      <?php print $navMessage; ?>
    </div>
    <div class='status-msg-border'>
      <div class='status-msg-bg'>
        <div class='status-msg-hidden'><?php print $navMessage; ?></div>
      </div>
    </div>
  </div>
  <div style='clear: both;'></div>
  <?php endif; ?>

<?php }; ?>
<?php function _fdfd7e43ef236b74329945621bbefad($comment) { global $blog, $top; ?>

  <span class="<?php print "item-control " . $comment['adminClass']; ?>">
    <a href="<?php print $comment['deleteUrl']; ?>" title="<?php print $top['deleteCommentMsg']; ?>">
      <img src='http://www.blogger.com/img/icon_delete13.gif'/>
    </a>
  </span>

<?php }; ?>
<?php function _df021fdbeb5afd9221a0bfd56($post) { global $blog, $top; ?>

  <div class='post hentry uncustomized-post-template'>
    <a name="<?php print $post['id']; ?>">
    <?php if ($post['title']): ?>
      <h2 class='post-title entry-title'>
     <?php if ($post['link']): ?>
       <a href="<?php print $post['link']; ?>"><?php print $post['title']; ?></a>
     <?php else: ?>
        <?php if ($post['url']): ?>
          <a href="<?php print $post['url']; ?>"><?php print $post['title']; ?></a>
        <?php else: ?>
          <?php print $post['title']; ?>
        <?php endif; ?>
     <?php endif; ?>
      </h2>
    <?php endif; ?>

    <div class='post-header-line-1'>

      <span class='post-author vcard'>
        <?php if ($top['showAuthor']): ?>
          <?php print $top['authorLabel']; ?>
          <span class='fn'><?php print $post['author']; ?></span>
        <?php endif; ?>
      </span>

      <span class='post-timestamp'>
        <?php if ($top['showTimestamp']): ?>
          <?php print $top['timestampLabel']; ?>
        <?php if ($post['url']): ?>
          <a class="timestamp-link" href="<?php print $post['url']; ?>" rel="bookmark" title="permanent link"><abbr class="published" title="<?php print $post['timestampISO8601']; ?>"><?php print $post['timestamp']; ?></abbr></a>
        <?php endif; ?>
        <?php endif; ?>
      </span>

      <?php if ($post['dateHeader']): ?>
        <span class='date-header'><?php print $post['dateHeader']; ?></span>
      <?php endif; ?>

    </div>

    <div class='post-body entry-content'>
      <?php print $post['body']; ?>
      <div style='clear: both;'></div> <!-- clear for photos floats -->
    </div>

    <div class='post-footer'>
    <div class='post-footer-line post-footer-line-1'>
  
      <span class='reaction-buttons'>
        <?php if ($top['showReactions']): ?>
          <table border='0' cellpadding='0' cellspacing='0' width='100%'><tr>
            <td class='reactions-label-cell' nowrap='nowrap' valign='top' width='1%'>
              <span class='reactions-label'>
              <?php print $top['reactionsLabel']; ?></span>&#160;</td>
            <td><iframe allowtransparency="true" class="reactions-iframe" src="<?php print $post['reactionsUrl']; ?>" frameborder="0" name="reactions" scrolling="no"></td>
           </tr></table>
        <?php endif; ?>
      </span>

      <span class='star-ratings'>
        <?php if ($top['showStars']): ?>
           <div g:background-color="<?php print $backgroundColor; ?>" g:text-color="<?php print $textColor; ?>" g:url="<?php print $post['absoluteUrl']; ?>" g:height="42" g:type="RatingPanel" g:width="280">
        <?php endif; ?>
      </span>

      <span class='post-comment-link'>
        <?php if ($blog['pageType'] != "item"): ?>
          <?php if ($post['allowComments']): ?>
            <a class="comment-link" href="<?php print $post['addCommentUrl']; ?>" onclick="<?php print $post['addCommentOnclick']; ?>"><?php if ($post['numComments'] == 1): ?>1 <?php print $top['commentLabel']; ?><?php else: ?><?php print $post['numComments']; ?> <?php print $top['commentLabelPlural']; ?><?php endif; ?></a>
          <?php endif; ?>
        <?php endif; ?>
      </span>

       <!-- backlinks -->
       <span class='post-backlinks post-comment-link'>
         <?php if ($blog['pageType'] != "item"): ?>
           <?php if ($post['showBacklinks']): ?>
             <a class="comment-link" href="<?php print $post['url'] . "#links"; ?>"><?php print $top['backlinkLabel']; ?></a>
           <?php endif; ?>
         <?php endif; ?>
       </span>

      <span class='post-labels'>
        <?php if ($post['labels']): ?>
          <?php print $postLabelsLabel; ?>
          <?php foreach ($post['labels'] as $label): ?>
            <a href="<?php print $label['url']; ?>" rel="tag"><?php print $label['name']; ?></a><?php if ($label['isLast'] != "true"): ?>,<?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </span>

      <span class='post-icons'>
        <!-- email post links -->
        <?php if ($post['emailPostUrl']): ?>
          <span class='item-action'>
          <a href="<?php print $post['emailPostUrl']; ?>" title="<?php print $top['emailPostMsg']; ?>">
              <img alt='' class='icon-action' height='13' src='http://www.blogger.com/img/icon18_email.gif' width='18'/>
          </a>
          </span>
        <?php endif; ?>

        <!-- quickedit pencil -->
        <?php _fb645933567188659ad7f38d14a0516($post); ?>
      </span>
      </div>

      <div class='post-footer-line post-footer-line-2'></div>

      <div class='post-footer-line post-footer-line-3'>
      <span class='post-location'>
        <?php if ($top['showLocation']): ?>
          <?php if ($post['location']): ?>
            <?php print $postLocationLabel; ?>
            <a href="<?php print $post; ?>" target="_blank"><?php print $post; ?></a>
          <?php endif; ?>
        <?php endif; ?>
      </span>
      </div>
    </div>
  </div>

<?php }; ?>
<?php function _ad6de64cbf11b4a38b824d881fd($post) { global $blog, $top; ?>

  <a name='links'></a><h4><?php print $post['backlinksLabel']; ?></h4>
  <?php if ($post['numBacklinks'] != 0): ?>
    <dl class='comments-block' id='comments-block'>
      <?php foreach ($post['backlinks'] as $backlink): ?>
        <div class='collapsed-backlink backlink-control'>
          <dt class='comment-title'>
            <span class='backlink-toggle-zippy'>&#160;</span>
            <a href="<?php print $backlink['url']; ?>" rel="nofollow"><?php print $backlink['title']; ?></a>
            <?php _b5933fe9a87aadbdca247a0105488b0($backlink); ?>
          </dt>
          <dd class='comment-body collapseable'>
            <?php print $backlink['snippet']; ?>
          </dd>
          <dd class='comment-footer collapseable'>
            <span class='comment-author'><?php print $post['authorLabel']; ?> <?php print $backlink['author']; ?></span>
            <span class='comment-timestamp'><?php print $post['timestampLabel']; ?> <?php print $backlink['timestamp']; ?></span>
          </dd>
        </div>
      <?php endforeach; ?>
    </dl>
  <?php endif; ?>
  <p class='comment-footer'>
    <a class="comment-link" href="<?php print $post['createLinkUrl']; ?>" id="<?php print $widget['instanceId'] . "_backlinks-create-link"; ?>" target="_blank"><?php print $post['createLinkLabel']; ?></a>
  </p>

<?php }; ?>
<?php function e60f8014b021b5916d164be21a54f245() { global $blog, $top; ?>

  <div class='blog-pager' id='blog-pager'>
    <?php if ($blog['newerPageUrl']): ?>
      <span id='blog-pager-newer-link'>
      <a class="blog-pager-newer-link" href="<?php print $blog['newerPageUrl']; ?>" id="<?php print $widget['instanceId'] . "_blog-pager-newer-link"; ?>" title="<?php print $blog['newerPageTitle']; ?>"><?php print $blog['newerPageTitle']; ?></a>
      </span>
    <?php endif; ?>

    <?php if ($blog['olderPageUrl']): ?>
      <span id='blog-pager-older-link'>
      <a class="blog-pager-older-link" href="<?php print $blog['olderPageUrl']; ?>" id="<?php print $widget['instanceId'] . "_blog-pager-older-link"; ?>" title="<?php print $blog['olderPageTitle']; ?>"><?php print $blog['olderPageTitle']; ?></a>
      </span>
    <?php endif; ?>

    <?php if ($blog['homepageUrl'] != $blog['url']): ?>
      <a class="home-link" href="<?php print $blog['homepageUrl']; ?>"><?php print $blog['homeMsg']; ?></a>
      <?php else: ?>
      <?php if ($blog['newerPageUrl']): ?>
        <a class="home-link" href="<?php print $blog['homepageUrl']; ?>"><?php print $blog['homeMsg']; ?></a>
      <?php endif; ?>
    <?php endif; ?>

  </div>
  <div class='clear'></div>

<?php }; ?>

  <!-- posts -->
  <div class='blog-posts hfeed'>

    <?php e13c8786296c30ea609aaed855d16c85($top); ?>

    <?php print $adStart; ?>
    <?php foreach ($posts as $post): ?>
      <?php _df021fdbeb5afd9221a0bfd56($post); ?>
      <?php if ($blog['pageType'] == "item"): ?>
        <?php _beae4c877d3effdf0d0d4781ca0c($post); ?>
      <?php endif; ?>
      <?php if ($post['includeAd']): ?>
        <?php print $adEnd; ?>
        <?php print $adCode; ?>
        <?php print $adStart; ?>
      <?php endif; ?>
    <?php endforeach; ?>
    <?php print $adEnd; ?>
  </div>

  <!-- navigation -->
  <?php e60f8014b021b5916d164be21a54f245(); ?>

  <!-- feed links -->
  <?php _a6b9c6c81da17f1ca8ef615c632b(); ?>
  
  <?php if ($top['showStars']): ?>
    <script src='http://www.google.com/jsapi' type='text/javascript'/>
    <script type='text/javascript'>
      google.load(&quot;annotations&quot;, &quot;1&quot;, {&quot;locale&quot;: &quot;<?php print $top['languageCode']; ?>&quot;});
      function initialize() {
        google.annotations.setApplicationId(<?php print $top['blogspotReviews']; ?>);
        google.annotations.createAll();
        google.annotations.fetch();
      }
      google.setOnLoadCallback(initialize);
    </script>
  <?php endif; ?>



</div>

</div>
      </div>

<!-- (Lateral) -->
      <div class='right' id='sidebar-wrapper'>
	<div id="sidebar" class="section sidebar">



<div id="Label1" class="widget Label">

  <?php if ("Categories"): ?>
    <h2>Categories</h2>
  <?php endif; ?>
  <div class='widget-content'>
    <ul>
    <?php foreach ($labels as $label): ?>
      <li>
        <?php if ($blog['url'] == $label['url']): ?>
          <span dir="<?php print $blog['languageDirection']; ?>">
            <?php print $label['name']; ?>
          </span>
        <?php else: ?>
          <a dir="<?php print $blog['languageDirection']; ?>" href="<?php print $label['url']; ?>">
            <?php print $label['name']; ?>
          </a>
        <?php endif; ?>
        <span dir='ltr'>(<?php print $label['count']; ?>)</span>
      </li>
    <?php endforeach; ?>
    </ul>

    <b:include name='quickedit'></b:include>
  </div>


</div>

<div id="Label4" class="widget Label">

  <?php if ("Blogroll"): ?>
    <h2>Blogroll</h2>
  <?php endif; ?>
  <div class='widget-content'>
    <ul>
    <?php foreach ($blog['blogroll'] as $blogroll_item): ?>
      <li>
        <a href="<?php print $blogroll_item['url']; ?>"><?php print $blogroll_item['title']; ?></a>
      </li>
    <?php endforeach; ?>
    </ul>

    <b:include name='quickedit'></b:include>
  </div>


</div>

</div>
      </div>

<div class='clearer'> </div>

</div>
</div>
</div>

<div id='dashboard'>
<div id='dashboard_content'>
<div class='center_wrapper'>

<div class='col3 left'>
	<div id="dashboard1" class="section col3_content">

    <div id="Label4" class="widget Label">

      <?php if ("Blogroll"): ?>
        <h2>Blogroll</h2>
      <?php endif; ?>
      <div class='widget-content'>
        <ul>
        <?php foreach ($blog['blogroll'] as $blogroll_item): ?>
          <li>
            <a href="<?php print $blogroll_item['url']; ?>"><?php print $blogroll_item['title']; ?></a>
          </li>
        <?php endforeach; ?>
        </ul>

        <b:include name='quickedit'></b:include>
      </div>


    </div>

</div>
</div>

<div class='col3mid left'>
	<div id="dashboard2" class="section col3_content">



</div>
</div>

<div class='col3 right'>
	<div id="dashboard3" class="section col3_content">

<div id="Label2" class="widget Label">

  <?php if ("Categories"): ?>
    <h2>Categories</h2>
  <?php endif; ?>
  <div class='widget-content'>
    <ul>
    <?php foreach ($labels as $label): ?>
      <li>
        <?php if ($blog['url'] == $label['url']): ?>
          <span dir="<?php print $blog['languageDirection']; ?>">
            <?php print $label['name']; ?>
          </span>
        <?php else: ?>
          <a dir="<?php print $blog['languageDirection']; ?>" href="<?php print $label['url']; ?>">
            <?php print $label['name']; ?>
          </a>
        <?php endif; ?>
        <span dir='ltr'>(<?php print $label['count']; ?>)</span>
      </li>
    <?php endforeach; ?>
    </ul>

    <b:include name='quickedit'></b:include>
  </div>


</div>

</div>
</div>

<div class='clearer'>&#160;</div>
</div>
</div>
</div>

<!-- (Pie de pagina) -->
    <div id='footer-wrapper'>
<div class='center_wrapper'>
<!-- 

Este es un incentivo al trabajo en disenar y adaptar esta plantilla, llega a ti de forma muy facil y sin costo, tampoco cuesta nada dejes los link, gracias y que te sea util!

This is an incentive to work in design and adapt this template, comes to you in a very easy and without cost, not cost anything let the link, thank you and this work is useful.

Dies ist ein Anreiz zur Arbeit in Design und Anpassung dieser Vorlage, kommt zu Ihnen in einem sehr einfach und ohne Kosten, nichts kosten lassen Sie den Link, ich danke Ihnen, und diese Arbeit sinnvoll ist.

 -->
<p class='links left'> Copyright &#169; 2008 <a href="<?php print $blog['homepageUrl']; ?>" style="text-decoration: none;"><?php print $blog['title']; ?></a></p>

<p class='right'>Design by <a href="http://arcsin.se/">Arcsin</a> <a href='http://templates.arcsin.se/'>Web Templates</a> | <a href='http://btemplates.com/' title='BTemplates'>Blogger Templates</a> by <a href='http://blogandweb.com/' title='Blog and Web'>Blog and Web</a></p>
    </div></div>

  </div></div> <!-- fin de capa outer-wrapper -->
  
  <!-- Start of StatCounter Code -->
  <script type="text/javascript">
  var sc_project=5828030; 
  var sc_invisible=1; 
  var sc_partition=61; 
  var sc_click_stat=1; 
  var sc_security="320fc175"; 
  </script>

  <script type="text/javascript"
  src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
  class="statcounter"><a title="site stats"
  href="http://www.statcounter.com/" target="_blank"><img
  class="statcounter"
  src="http://c.statcounter.com/5828030/0/320fc175/1/"
  alt="site stats" ></a></div></noscript>
  <!-- End of StatCounter Code -->
</body>
</html>