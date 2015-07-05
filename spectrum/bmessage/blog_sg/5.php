<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <b:include data='blog' name='all-head-content'></b:include>
<title><?php print $blog['pageTitle']; ?></title>

    <style>/*
----------------------------------------------------------------------
Blogger Template Style
Name:     San Francisco Skyline 
Designer: Isnaini
URL:      www.blogspottemplate.com
Date:     August 07, 2008
----------------------------------------------------------------------
*/

/* Variable definitions
   ====================
<Variable name="bgColor" description="Page Background Color"
           type="color" default="#333333" value="#363636">
 <Variable name="bodyFont" description="Text Font"
           type="font" default="normal normal 73% Verdana, Arial, Sans-serif;" value="normal normal 80% Arial, sans-serif">
 <Variable name="textColor" description="Text Color"
           type="color" default="#ffcc66" value="#000000">
<Variable name="linkColor" description="Link Color"
           type="color" default="#ffffff" value="#2D6E89">
 <Variable name="HoverlinkColor" description="Hover Link Color"
           type="color" default="#ffff66" value="#0066CC">
 <Variable name="postImgBdColor" description="Post Images Border Color"
           type="color" default="#804000" value="#e6e6e6">
 <Variable name="PostTitleFont" description="Post Title Font"
           type="font" default="normal normal 100% 'Trebuchet MS', Arial, Sans-serif;" value="normal bold 165% 'Trebuchet MS', Geneva, Arial, Helvetica, sans-serif;">
 <Variable name="titleFont" description="Blog Title Font"
           type="font" default="normal normal 210% 'Trebuchet MS', Arial, Sans-serif;" value="normal bold 200% 'Trebuchet MS', Arial, Sans-serif;">
 <Variable name="titleTextColor" description="Blog Title Text Color"
           type="color" default="#ffff66" value="#ffffff"> 
 <Variable name="PostTitleHoverlinkColor" description="Post Title Hover link Color"
           type="color" default="#ffff66" value="#0066CC">
 <Variable name="dateHeaderColor" description="Date Header Color"
           type="color" default="#825227" value="#999999">
<Variable name="postTitleTxtColor" description="Post Title Text Color"
           type="color" default="#ffcc66" value="#000000">
<Variable name="SBbgColor" description="Sidebar Background Color"
           type="color" default="#825227" value="#ffffff">
 <Variable name="SBbdColor" description="Sidebar Border Color"
           type="color" default="#825227" value="#ffffff">
 <Variable name="SBFontSize" description="Sidebar Font Size"
           type="font" default="normal normal 85% Arial, sans-serif" value="normal normal 76% Arial, sans-serif">
 <Variable name="sidebarTitleBgColor" description="Sidebar Title Background Color"
           type="color" default="#6f3c1b" value="#cccccc">
 <Variable name="sidebarTitleTextColor" description="Sidebar Title Text Color"
           type="color" default="#b47b10" value="#000000">
 <Variable name="SBtextColor" description="Sidebar Text Color"
           type="color" default="#ffcc66" value="#4c4c4c">
<Variable name="SBTitleFont" description="Sidebar Title Font"
           type="font" default="normal bold 125% Trebuchet, Trebuchet MS, Arial, sans-serif;" value="normal bold 184% Trebuchet, Trebuchet MS, Arial, sans-serif">
<Variable name="SBLinkColor" description="Sidebar Link Color"
           type="color" default="#ffe6b3" value="#0066CC">
 <Variable name="footrTextcolor" description="Footer Text Color"
           type="color" default="#ffcc66" value="#333333">
 <Variable name="AltLinkColor1" description="Alternative Link Color 1"
           type="color" default="#e1771e" value="#0066CC">

*/
body {
	font: normal normal 80% Arial, sans-serif;
	text-align: center;
	margin: 0px;
	padding: 0px;
        color: #000000;
        background: #363636;
	}

#page {
	text-align: left;
	width: 780px;
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	background-image: url(http://i36.tinypic.com/im3zv5.jpg);
	background-repeat: repeat-y;
	}

#header {
	height: 180px;
	margin: 0px;
	padding: 0px;
	background-image: url(http://i33.tinypic.com/2cwu8sh.jpg);
	background-repeat: no-repeat;
	}
.narrowcolumn {
	width: 520px;
	float: left;
	padding-left: 10px;
word-wrap: break-word; 
overflow: hidden; 
	}
#sidebar{
 font: normal normal 76% Arial, sans-serif;
	width: 220px;
	position: static;
	top: 0px;
        color: #4c4c4c;
        background-color: #ffffff;
	border: 1px solid #ffffff;
	padding-top: 0px;
	padding-right: 4px;
	padding-bottom: 0px;
	padding-left: 4px;
	margin-left: 530px;
}
#sidebar a {
        color: #0066CC;
}
#sidebar .widget { 
	margin-bottom: 1em;
word-wrap: break-word; 
overflow: hidden; 
}

#sidebar .widget-content {
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 5px;
	margin-left: 0px;
word-wrap: break-word;
overflow: hidden; 
}
#sidebar h2{
	font-size: 12px;
	font-weight: bold;
	color: #000000;
        font: normal bold 184% Trebuchet, Trebuchet MS, Arial, sans-serif;
        background-color: #cccccc;
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 5px;
	margin-left: 0px;
        padding: 4px 5px;
}
#kotakkanan{
	margin: 0px;
}
#kotakkanan1{
	margin: 0px;
}
#footer {
	padding: 0px;
	width: 780px;
	clear: both;
	height: 115px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	color: #333333;
	background-image: url(http://i36.tinypic.com/4hw5rm.jpg);
	}
#footer a {
  color: #333333;
}

#footer .widget {
  margin: 0px;
  padding-left: 20px;
  font-size: 10px;
  text-align: center;
}
/* Posts
----------------------------------------------- */
.date-header {
  margin: 1.5em 0 0;
  font-weight: normal;
  color: #999999;
  font-size: 100%;
}
.post {
padding: 5px;
	text-align: justify;
	margin: 5px;
	}
.post-title {
  margin: 0;
  padding: 0;
  font: normal bold 165% 'Trebuchet MS', Geneva, Arial, Helvetica, sans-serif;;
  line-height: 1.1em;
  padding-top: 4px;
  padding-bottom: 4px;
  text-align: left;
}
.post-title a, .post-title a:visited, .post-title strong {
  text-decoration: none;
  color: #000000;
  font-weight: bold;
}
.post-title a:hover {
  text-decoration: none;
  color: #0066CC;
}
.post div {
  margin: 0 0 .75em;
  line-height: 1.3em;
}
p.post-footer {
  margin: -.25em 0 0;
  font-size: 10px;
}
.post-labels {
  font-size: 10px;
}
.post-labels a {
  color: #0066CC;
  text-decoration: none;

}
.post-footer .span {
  margin-right: .3em;
  font-size: 10px;
}
.post-footer {
  font-size: 10px;
}

.comment-link {
  margin-left: .3em;
}

.post blockquote {
  margin: 1em 20px;
  font-style: italic;
}
}
.post blockquote p {
  margin: .75em 0;
}
.post img {
	margin-top: 4px;
	margin-right: 5px;
	margin-bottom: 0px;
	margin-left: 4px;
  padding: 6px;
  border: 1px solid #e6e6e6;
	display: inline;
}
.post .pic{
	float: right;
  border: 1px solid #e6e6e6;
	text-align: center;
	margin-top: 5px;
	margin-right: 15px;
	margin-bottom: 0px;
	margin-left: 0px;
	width: 180px;
	font-size: 9px;
	padding: 6px;
	font-family: Arial, Helvetica, sans-serif;
	display: inline;
}


/* Comments
----------------------------------------------- */
#comments h4 {
  margin: 1em 0;
  color: #999999;
}
#comments h4 strong {
  font-size: 90%;
}
#comments-block {
  margin: 1em 0 1.5em;
  line-height: 1.3em;
}
#comments-block dt {
  margin: .5em 0;
}
#comments-block dd {
  margin: .25em 0 0;
}
#comments-block dd.comment-footer {
  margin: -.25em 0 2em;
  line-height: 1.4em;
  font-size: 78%;
}
#comments-block dd p {
  margin: 0 0 .75em;
}

.deleted-comment {
  font-style:italic;
  color:gray;
}

.feed-links {
  clear: both;
  line-height: 2.5em;
}

#blog-pager-newer-link {
  float: left;
 }

#blog-pager-older-link {
  float: right;
 }
 
#blog-pager {   
  text-align: center; 
 }

small {
	font-family: Arial, Verdana, sans-serif;
	font-size: 9px;
	line-height: 11px;
	}

h1, h2, h3 {
	font-family: "Trebuchet MS", Geneva, Arial, Helvetica, sans-serif;
	}

h1, h1 a, h1 a:hover, h1 a:visited, .description {
	text-decoration: none;
	}

h2, h2 a, h2 a:visited, h3, h3 a, h3 a:visited {
	}

h2, h2 a, h2 a:hover, h2 a:visited, h3, h3 a, h3 a:hover, h3 a:visited, #leftsidebar h2, #rightsidebar h2, #wp-calendar caption, cite {
	text-decoration: none;
	}

acronym, abbr, span.caps
{
	font-size: 0.9em;
	letter-spacing: .07em;
	}

a, h2 a:hover, h3 a:hover {
        color: #2D6E89;
	text-decoration: none;

	}

a:hover {
        color: #0066CC;
	text-decoration: underline;
	}



.widecolumn .post {
	margin: 0;
	}

.narrowcolumn .postmetadata {
	padding-top: 5px;
	}

.widecolumn .postmetadata {
	margin: 30px 0;
	}
	
h2 {
	margin-top: 20px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	}
h3 {
	padding: 0px;
	margin-top: 20px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	}

h3.comments {
	padding: 0;
	margin: 40px auto 20px ;
	}
/* End Headers */



/* Begin Images */
p img {
	padding: 0;
	max-width: 100%;
	}

/*	Using 'class="alignright"' on an image will (who would've
	thought?!) align the image to the right. And using 'class="centered',
	will of course center the image. This is much better than using
	align="center", being much more futureproof (and valid) */
	
img.centered {
	display: block;
	margin-left: auto;
	margin-right: auto;
	}
	
img.alignright {
	padding: 4px;
	margin: 0 0 2px 7px;
	display: inline;
	}

img.alignleft {
	padding: 4px;
	margin: 0 7px 2px 0;
	display: inline;
	}

.alignright {
	float: right;
	}
	
.alignleft {
	float: left
	}
/* End Images */

/* lain
----------------------------------------------- */
.title h1{
	color:  #ffffff;
	font-size: 18px;
	text-align: center;
     font: normal bold 200% 'Trebuchet MS', Arial, Sans-serif;;
	}
.title h1 a{
	color: #ffffff;
	}
.title{
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 20px;
	padding-top: 20px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	margin-top: 0px;
	color:  #ffffff;
}
.description {
	font-size: 12px;
	font-weight: bold;
	margin-left: 45px;
	margin-top: 10px;
	margin-right: 260px;
color:  #ffffff;
	}
 .kosong 
 {
	clear: both;
 }

/* Begin Lists

	Special stylized non-IE bullets
	Do not work in Internet Explorer, which merely default to normal bullets. */
html>body .entry ul {

	} 

html>body .entry li {
	list-style-type: square;
	padding: 0px;
	margin-left: 10px;
	}

#sidebar ul, #sidebar ul ol, #sidebar ul {
	padding-left: 10px;
	margin-left: 10px;
	}

#sidebar ul li {
	margin-bottom: 2px;
	}

#sidebar ul p, #sidebar ul select {
	margin: 5px 0 8px;
	}

#sidebar ul ul, #sidebar ul ol{
	margin: 5px 0 0 5px;
	}

#sidebar ul ul ul, #sidebar ul ol {
	margin: 0 0 0 10px;
	}

ol li, #sidebar ul ol li  {
	list-style: decimal outside;
	}

#sidebar ul ul li, #sidebar ul ol li {
	margin: 3px 0px 0px;
	padding: 0px;
	}
/* End Entry Lists */

.entry form {
	text-align:center;
  background-color: #ffffff; 
	}

select {
	width: 130px;
	}

/* Begin Various Tags & Classes */
acronym, abbr, span.caps {
	cursor: help;
	}

acronym, abbr {
border: 1px solid #ffffff;
	}

blockquote {
	margin: 15px 30px 0 10px;
	padding-left: 25px;
	font-family: Arial, Verdana, sans-serif;
	background-image: url(images/quote.gif);
	background-repeat: no-repeat;
	background-position: left top;
	}

blockquote cite {
	margin: 5px 0 0;
	display: block;
	}

.center {
	text-align: center;
	}

hr {
	display: none;
	}

a img {
	border: none;
	}

input, textarea, select, button {
border: 1px solid #ffffff;
  background-color: #ffffff; 
	font-size: 11px;
	padding-right: 2px;
	padding-left: 2px;
}

form .button {
border: 1px solid #ffffff;
  background-color: #ffffff; 
}
input, textarea, select, button {
border: 1px solid #ffffff;
  background-color: #ffffff; 
 color: #000000;
	font-size: 11px;
	padding-right: 2px;
	padding-left: 2px;
}
#blog-pager-newer-link a, #blog-pager-older-link a, #home-link a {
	font-weight: bold;
	text-decoration: none;
	padding-right: 4px;
	padding-left: 4px;
border: 1px solid #ffffff;
  background-color: #ffffff; 
}
#blog-pager-newer-link a:hover, #blog-pager-older-link a:hover, #home-link a:hover {
	font-weight: bold;
	text-decoration: none;
	padding-right: 4px;
	padding-left: 4px;
border: 1px solid #ffffff;
  background-color: #ffffff; 
}
#powered {
  color: #2D6E89;
  text-align: center; 
  padding: 4px; 
  font-size: 10px
}
#powered a {
  color: #2D6E89;
}
</style>
    <?php print $blog['rss_link']; ?>
	<?php print $blog['js_link']; ?>
</head>

  <body>
  <div id='page'>

      <div id="header" class="section header">

<div id="Header1" class="widget Header">
<?php function _c22bcbb8c54811b522a7f43bc123496() { global $blog, $top; ?>

  <div class='descriptionwrapper'>
    <p class='description'><span><?php print $blog['description']; ?></span></p>
  </div>

<?php }; ?>
<?php function db12eb794be7d34bf1541c4baf234b23() { global $blog, $top; ?>

<div class='title'>
  <?php if ($blog['url'] == $blog['homepageUrl']): ?>
    <?php print $blog['title']; ?>
  <?php else: ?>
    <a href="<?php print $blog['homepageUrl']; ?>"><?php print $blog['title']; ?></a>
  <?php endif; ?>
</div>

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
      width. This results in a margin-width's worth of pixels being cropped,
      which is probably better than having them overflow out of the div.  
      -->
      <?php if ($blog['languageDirection'] == "rtl"): ?>
        <div style="<?php print "background-image: url(\"" . $sourceUrl . "\"); "                        . "background-position: right; "                        . "min-height: " . $height . "px;"                        . "_height: " . $height . "px;"                        . "background-repeat: no-repeat; "; ?>" id="header-inner">
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <?php db12eb794be7d34bf1541c4baf234b23(); ?>
            </h1>
          </div>
          <?php _c22bcbb8c54811b522a7f43bc123496(); ?>
        </div>
      <?php else: ?>
        <div style="<?php print "background-image: url(\"" . $sourceUrl . "\"); "                        . "background-position: left; "                        . "min-height: " . $height . "px;"                        . "_height: " . $height . "px;"                        . "background-repeat: no-repeat; "; ?>" id="header-inner">
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <?php db12eb794be7d34bf1541c4baf234b23(); ?>
            </h1>
          </div>
          <?php _c22bcbb8c54811b522a7f43bc123496(); ?>
        </div>
      <?php endif; ?>
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


    <div class='narrowcolumn'>

        <div id="main" class="section post">

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

      <p class='comment-footer'>
        <a href="<?php print $post['addCommentUrl']; ?>" onclick="<?php print $post['addCommentOnclick']; ?>"><?php print $postCommentMsg; ?></a>
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
      <a href="<?php print $post['editUrl']; ?>" title="Edit Post">
        <span class='quick-edit-icon'>&#160;</span>
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
    <a href="<?php print $backlink['deleteUrl']; ?>" title="Delete Backlink">
      <span class='delete-comment-icon'>&#160;</span>
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
    <a href="<?php print $comment['deleteUrl']; ?>" title="Delete Comment">
      <span class='delete-comment-icon'>&#160;</span>
    </a>
  </span>

<?php }; ?>
<?php function _df021fdbeb5afd9221a0bfd56($post) { global $blog, $top; ?>

  <div class='post uncustomized-post-template'>
    <a name="<?php print $post['id']; ?>">
    <?php if ($post['title']): ?>
      <h3 class='post-title'>
     <?php if ($post['link']): ?>
       <a href="<?php print $post['link']; ?>"><?php print $post['title']; ?></a>
     <?php else: ?>
        <?php if ($post['url']): ?>
          <a href="<?php print $post['url']; ?>"><?php print $post['title']; ?></a>
        <?php else: ?>
          <?php print $post['title']; ?>
        <?php endif; ?>
     <?php endif; ?>
      </h3>
    <?php endif; ?>

    <div class='post-header-line-1'></div>

    <div class='post-body'>

<p><?php print $post['body']; ?></p>

      <div style='clear: both;'></div> <!-- clear for photos floats -->
    </div>
    <div class='post-footer'>
          <p class='post-footer-line post-footer-line-2'>
      <span class='post-labels'>
        <?php if ($post['labels']): ?>
          <?php print $postLabelsLabel; ?>
          <?php foreach ($post['labels'] as $label): ?>
            <a href="<?php print $label['url']; ?>" rel="tag"><?php print $label['name']; ?></a><?php if ($label['isLast'] != "true"): ?>,<?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </span>
      </p>

<p class='post-footer-line post-footer-line-1'>
      <span class='post-author'>
        <?php if ($top['showAuthor']): ?>
          <?php print $top['authorLabel']; ?> <?php print $post['author']; ?>
        <?php endif; ?>
      </span>

      <span class='post-timestamp'>
        <?php if ($top['showTimestamp']): ?>
          <?php print $top['timestampLabel']; ?>
        <?php if ($post['url']): ?>
          <a class="timestamp-link" href="<?php print $post['url']; ?>" title="permanent link"><?php print $post['timestamp']; ?></a>
        <?php endif; ?>
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

      <span class='post-icons'>
        <!-- email post links -->
        <?php if ($post['emailPostUrl']): ?>
          <span class='item-action'>
          <a href="<?php print $post['emailPostUrl']; ?>" title="Email Post">
            <span class='email-post-icon'>&#160;</span>
          </a>
          </span>
        <?php endif; ?>

        <!-- quickedit pencil -->
        <?php _fb645933567188659ad7f38d14a0516($post); ?>
      </span>
      </p>

      <p class='post-footer-line post-footer-line-3'></p>
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
<span id='home-link'>
      <a class="home-link" href="<?php print $blog['homepageUrl']; ?>"><?php print $blog['homeMsg']; ?></a>
</span>

<?php else: ?>
      <?php if ($blog['newerPageUrl']): ?>
<span id='home-link'>
        <a class="home-link" href="<?php print $blog['homepageUrl']; ?>"><?php print $blog['homeMsg']; ?></a>
</span>
      <?php endif; ?>
    <?php endif; ?>

  </div>
  <div class='kosong'></div>

<?php }; ?>

  <!-- posts -->
  <div class='blog-posts hfeed'>

    <?php e13c8786296c30ea609aaed855d16c85($top); ?>

    <?php print $adStart; ?>
    <?php foreach ($posts as $post): ?>
      <?php if ($post['dateHeader']): ?>
        <h2 class='date-header'><?php print $post['dateHeader']; ?></h2>
      <?php endif; ?>
      <?php _df021fdbeb5afd9221a0bfd56($post); ?>
      <?php if ($blog['pageType'] == "item"): ?>
        <?php _beae4c877d3effdf0d0d4781ca0c($post); ?>
      <?php endif; ?>
      <?php if ($post['includeAd']): ?>
        <?php print $adEnd; ?>
        <?php print $adCode; ?>
        <?php print $adStart; ?>
      <?php endif; ?>
      <?php if ($post['trackLatency']): ?>
        <?php print $post['latencyJs']; ?>
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


      <div id='sidebar'>

<div id="kotakkanan1" class="section kotakkanan">



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

<div id="Label2" class="widget Label">

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
<hr></hr>


        <div id="footer" class="section "></div>

  </div> 

<DIV id='powered'>
<A href='http://www.blogspottemplate.com'>Free Blogger Templates</A> by <A href='http://www.isnaini.com'>Isnaini Dot Com</A> and <a href='http://www.archithings.com'>Architecture</a>. Powered by <A href='http://www.blogger.com'>Blogger</A>
</DIV>

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