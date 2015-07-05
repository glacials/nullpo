<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">--><html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <b:include data='blog' name='all-head-content'></b:include>
    <title><?php print $blog['pageTitle']; ?></title>
    <style>/*
-----------------------------------------------
Name:        	Andreas04
URL:         	http://www.geckandfly.com
Updated by:  	http://www.blogcrowds.com
Distributed by: http://www.eblogtemplates.com
----------------------------------------------- */


/* Variables
   ====================
   
	<Variable name="bgcolor" description="Blog Background Color"
             type="color" default="#fff" value="#ffffff">	
	<Variable name="insidebgcolor" description="Inside Background Color"
             type="color" default="#F0F0F0" value="#F0F0F0">	
	<Variable name="headerbgcolor" description="Header Background Color"
             type="color" default="#666666" value="#666666">
	<Variable name="menubgcolor" description="Menu Color"
             type="color" default="#CCCCCC" value="#CCCCCC">
	<Variable name="linkcolor" description="Link Color"
             type="color" default="#269" value="#269">			 
    <Variable name="titlecolor" description="Blog Title Color"
             type="color" default="#FE7003" value="#FE7003">
	<Variable name="blogfont" description="Blog Font"
             type="font"
             default="normal normal 76% Arial, Helvetica, sans-serif" value="normal normal 76% Arial, Helvetica, sans-serif">
		 
*/



#navbar-iframe {
	height:0px;
	visibility:hidden;
	display:none;
    margin-top: 0px;
}

body{
	margin:0;
	padding:0;
	background:#e6e6e6;
	color:#333;
	text-align:center;
	background-color: #ffffff;
	font:normal normal 76% Arial, Helvetica, sans-serif;
}


a{
text-decoration:none;
color:#269;
font-weight:bold;
}

a:hover{
text-decoration:underline;
}

p{
	line-height:1.5em;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 15px;
	margin-left: 25px;
}

h1,h2,h3,h4{
margin:0;
padding:0;
font-weight:normal;
}

h1{
	font-size:3.2em;
	letter-spacing:-3px;
	margin:12px 0px 5px 20px;
	color: #FE7003;
}

h1 a:hover{
text-decoration:none;
}

h2{
font-size:1.8em;
letter-spacing:-1px;
margin:-10px 0 10px 0px;
color:#888;
}

h3{
color: #555;
font-size:1.1em;
margin:1em 0 1.5em 0em;
}

h4{
font-size:1.2em;
font-weight:bold;
}

#container{
	width:880px;
	padding:0 10px;
	margin:0 auto;
	background:#F0F0F0;
	color:#333;
	text-align:left;
	border-left:1px solid #eef;
	border-right:1px solid #eef;
	float: center;
}

#header{
background-color: #666666;
}

#sitetitle{
	float:left;
	height:110px;
	width: auto;
	color: #333;
	background-color: #666666;
	margin: 0px -5px 0px 0px;
}

#sitetitle a{
color:#FE7003;
font-weight:normal;
background-color: #666666;
}

#sitetitle a:hover{
color:#FE7003;
background-color: #666666;
}

#toptabs2{
	height:75px !important;
	height:110px;
	padding-top:35px !important;
	padding-top:0px;
	text-align: right;
	background-color: #666666;
}

#menu{

}

#menu a{
margin:0;
height:100px;
padding:34px 6px 41px 6px;
font-size:1.6em;
font-weight:normal;
letter-spacing:-1px;
color: #CCCCCC;
background-color: #666666;
}

#menu a:hover{
	color:#FE7003;
	text-decoration:none;
	padding:34px 5px 41px 5px;
	border-left: 1px solid #eee;
	border-right: 1px solid #eee;
	background-color: #CCCCCC;
}

#ad-unit{
	margin-bottom:-20px;
	padding:10px 0px 0px 0px;
	width:100%;
	clear:both;
}

#content{
	margin-top:30px;
	width:100%;
	clear:both;
}

#content h2{
	color:#555;
	border-bottom:2px solid #abb;
	margin-top: 0px;
}

#content h2 a{
color:#555;
font-weight:normal;
}

#content h2 a:hover{
color:#269;
text-decoration:none;
background:none;
}

#content p{
margin:0.5em 1em 0.8em 1em;
}

#left{
width:500px;
float:left;
}

#right{
margin-left:62% !important;
margin-left:60%;
margin-top:0px;
}

#sidebar, .profile-datablock, .profile-data, .widget-item-control, .item-control blog-admin{
margin:0px;
padding:0px;
}

.widget {
  margin-bottom: 1em;
}

.widget-content {
  margin: 0 5px;
}

#right h2{
	width:98%;
	font-size:1.6em;
	top: 0px;
	margin-top: 0px;
	margin-right: 0;
	margin-bottom: 5px;
	margin-left: 0;
	padding-top: 15px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}

#right li, #right ul{
  list-style:none;
  margin:3px 0;
  padding:3px;
}

#right li a:hover{
color:#48b;
text-decoration:none;
}

#footer{
clear:both;
padding:10px 0 12px 24px;
text-align:left;
color:#888;
}

#footer a{
color:#888;
font-weight:normal;
}

#footer span{
color:#aaa;
font-size:2em;
letter-spacing:-2px;
}

.entry{
	position:relative;
	border:2px solid #fff;
	background:#ffffff;
	color:#333;
	width: 480px;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 20px;
	padding: 15px;
}

.entry a:hover, .intro a:hover{
text-decoration:none;
padding-bottom:2px;
}

.link{
color:#269;
display:block;
margin:4px 0 0 0;
padding:2px 1em;
}

.link:hover{
color:#48b;
text-decoration:none;
}
.meta{
	clear:both;
	border-top: 0px solid #ccc;
	padding: 5px 1px 0 0;
	text-align:right;
	font-size:0.9em;
	color: #567;
	margin-bottom: 30px;
}

.pagenav{
color: #888;
text-align:center;
}

.entry img{
position:relative;
}

.subcontainer {
	width:98%;
	margin-top: 25px;border:
}

.rightsub{
float:left;
width:140px;
vertical-align: text-top;
}

.rightsub2{
	margin-left:50%;
	width:160px;
	margin: 0px 2px 0px 0px;
	overflow: hidden;
	padding: 0px px 0px 0px;
	float:right;
}

.date{
float:left;
font-weight:bold;
}

.right{
text-align:right;
}

.center{
text-align:center;
}

.clear{
clear:both;
}

.hide{
display:none;
}
.style3 {color: #fe7003}
.style1 {color: #FFFFFF}
.style4 {color: #CCCCCC}
blockquote{margin:20px 0;padding:0 20px 0 50px;background:url('http://photos1.blogger.com/blogger/7994/1253/1600/quote.jpg') 10px top no-repeat;border:none}

/** Page structure tweaks for layout editor wireframe */
body#layout #sidebar, body#layout #main,
body#layout #main-wrapper,
body#layout #outer-wrapper,
body#layout #right {
padding: 0;
margin:0px;
}

body#layout #container {
width: 740px;
margin-left: auto;
margin-right: auto;
}

body#layout #right {
width: 325px;
float:right;
margin-left: auto !important;
margin-right: auto;
}

body#layout #rightsub {
width: 150px;
margin-left: auto;
margin-right: auto;
}

body#layout #rightsub2 {
width: 150px;
margin-left: auto;
margin-right: auto;
float:right;
}

body#layout #left {
width: 380px;
margin-left: auto;
margin-right: auto;
}

body#layout #sitetitle {
width: 740px;
margin-left: auto;
margin-right: auto;
height:auto;
}

body#layout #toptabs2 {
width: 740px;
height:auto !important;
padding-top:0px !important;
margin-left: auto;
margin-right: auto;
float:left;
}

body#layout #toptabs2 a {
height:auto !important;
}

body#layout #ad-unit {
display:none;
}


</style>
<?php print $blog['js_link']; ?>
<?php print $blog['rss_link']; ?>
</head>

  <body>
  <div id='container'>

    <!-- skip links for text browsers -->
    <span id='skiplinks' style='display:none;'>
      <a href='#main'>skip to main </a> |
      <a href='#sidebar'>skip to sidebar</a>
    </span>

    <div id='header'>
    <div id='sitetitle'>
      <div id="header" class="section header">

<div id="Header1" class="widget Header">

  	  <h1>
      <?php if ($blog['url'] == $blog['homepageUrl']): ?>
        <?php print $blog['title']; ?>
      <?php else: ?>
        <a class="style3" href="<?php print $blog['homepageUrl']; ?>"><?php print $blog['title']; ?></a>
      <?php endif; ?>
         </h1>
      <p class='description style4'><strong><?php print $blog['description']; ?></strong></p>


</div>

</div>
    </div>
	
<div id="toptabs2" class="section toptabs2">
	
	

</div>	

    </div>
	

    <div id='content'>

		<div class='entry' id='left'>
        <div id="main" class="section main">

<div id="Blog1" class="widget Blog">
<?php function _beae4c877d3effdf0d0d4781ca0c($post) { global $blog, $top; ?>

  <span class='style1'></span>
  <a name='comments'></a>
  <?php if ($post['allowComments']): ?>
    <h2 id='comments'><span>
      <?php if ($post['numComments'] == 1): ?>
        1 <?php print $commentLabel; ?>:
      <?php else: ?>
        <?php print $post['numComments']; ?> <?php print $commentLabelPlural; ?>:
      <?php endif; ?>
    </span></h2>

    <?php foreach ($post['comments'] as $comment): ?>
      <a name="<?php print "comment-" . $comment['id']; ?>">
      <div class='commentposts'>
        <?php if ($comment['isDeleted']): ?>
          <span class='deleted-comment'><?php print $comment['body']; ?></span>
        <?php else: ?>
          <p><?php print $comment['body']; ?></p>
        <?php endif; ?>
      </div>

      <div class='commentspostinfo'>
        <?php if ($comment['authorUrl']): ?>
          <a href="<?php print $comment['authorUrl']; ?>" rel="nofollow"><?php print $comment['author']; ?></a>
        <?php else: ?>
          <?php print $comment['author']; ?>
        <?php endif; ?>
        <?php print $commentPostedByMsg; ?>
      </div>

      <a href="<?php print "#comment-" . $comment['id']; ?>" title="comment permalink">
        <?php print $comment['timestamp']; ?>
      </a>
      <?php _fdfd7e43ef236b74329945621bbefad($comment); ?>
    <?php endforeach; ?>

		<p id='newcomments'>
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

	  <a name="<?php print $post['id']; ?>">
    <?php if ($post['title']): ?>
     <h2>
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

    <div class='post-header-line-1'></div>

    <h3><span><?php print $post['dateHeader']; ?></span></h3>

    <div class='posts'>
      <p><?php print $post['body']; ?></p>
      <div style='clear: both;'></div> <!-- clear for photos floats -->
    </div>

    <div class='meta'>

      <?php if ($top['showAuthor']): ?>
			  <?php print $top['authorLabel']; ?> <?php print $post['author']; ?>
      <?php endif; ?>

			<?php if ($top['showTimestamp']): ?>
        <?php print $top['timestampLabel']; ?>
      <?php if ($post['url']): ?>
        <a class="timestamp-link" href="<?php print $post['url']; ?>" title="permanent link"><?php print $post['timestamp']; ?></a>
      <?php endif; ?>
      <?php endif; ?>

			<?php if ($blog['pageType'] != "item"): ?>
      <?php if ($post['allowComments']): ?>
        <a class="comment-link" href="<?php print $post['addCommentUrl']; ?>" onclick="<?php print $post['addCommentOnclick']; ?>"><?php if ($post['numComments'] == 1): ?>1 <?php print $top['commentLabel']; ?><?php else: ?><?php print $post['numComments']; ?> <?php print $top['commentLabelPlural']; ?><?php endif; ?></a>
      <?php endif; ?>
      <?php endif; ?>

	     <?php if ($blog['pageType'] != "item"): ?>
       <?php if ($post['showBacklinks']): ?>
         <a class="comment-link" href="<?php print $post['url'] . "#links"; ?>"><?php print $top['backlinkLabel']; ?></a>
       <?php endif; ?>
       <?php endif; ?>

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

       <p class='post-footer-line post-footer-line-3'></p>

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

  <?php e13c8786296c30ea609aaed855d16c85($top); ?>
  
   <?php print $adStart; ?>
  <?php foreach ($posts as $post): ?>
	  <?php _df021fdbeb5afd9221a0bfd56($post); ?>
	  
	  <?php if ($post['includeAd']): ?>
        <?php print $adEnd; ?>
        <?php print $adCode; ?>
		<br></br><br></br>
        <?php print $adStart; ?>
      <?php endif; ?>
	  
    <?php if ($blog['pageType'] == "item"): ?>
      <?php _beae4c877d3effdf0d0d4781ca0c($post); ?>
    <?php endif; ?>
  <?php endforeach; ?>
	<?php print $adEnd; ?>
  
  <!-- navigation -->
  <?php e60f8014b021b5916d164be21a54f245(); ?>

  <!-- feed links -->
  <?php _a6b9c6c81da17f1ca8ef615c632b(); ?>


</div>

</div>
      </div>




<div id='right'>
        <div id="sidebar" class="section sidebar">



</div>


<div class='subcontainer'>
<div id="rightsub" class="section rightsub">

<div id="Label1" class="widget Label">

  <?php if ("Categories"): ?>
    <h2>Categories</h2>
  <?php endif; ?>
  <div class='widget-content'>
    <ul>
    <?php foreach ($labels as $label): ?>
      <li>
        <?php if ($blog['url'] == $label['url']): ?>
          <?php print $label['name']; ?>
        <?php else: ?>
          <a href="<?php print $label['url']; ?>"><?php print $label['name']; ?></a>
        <?php endif; ?>
        (<?php print $label['count']; ?>)
      </li>
    <?php endforeach; ?>
    </ul>

    <b:include name='quickedit'></b:include>
  </div>


</div>


	





</div>

<div id="rightsub2" class="section rightsub2">







</div>

</div>
      </div>

      <!-- spacer for skins that want sidebar and main to be the same height-->

    </div> <!-- end content-wrapper -->


    <div id='footer'>

      <div align='center'>Copyright 2008 | Converted by <a href='http://www.geckoandfly.com/make-money-online/'>GeckoandFly</a> and <a href='http://www.blogcrowds.com/'>Blogcrowds</a> | Design by <a href='http://www.andreasviklund.com' target='_blank'>Andreas Viklund</a><br></br>
			<a href='http://www.eblogtemplates.com/andreas04-blogger/'>Andreas04 Blogger Template</a> enhanced by eblogtemplates.com
      </div>

    </div>

  </div> <!-- end outer-wrapper -->
</body>
</html>