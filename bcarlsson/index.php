<?php

$age = floor((time() - mktime(0, 0, 0, 8, 21, 1990, 1)) / 60 / 60 / 24 / 365);
$uri = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

  <title>Ben Carlsson</title>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Language" content="en-us" />
  
  <meta name="author" content="Ben Carlsson" />
  
  <script src="javascript/jquery-1.2.1.pack.js" type="text/javascript"></script>
  <script src="javascript/jquery-easing.1.2.pack.js" type="text/javascript"></script>
  <script src="javascript/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
  <script src="javascript/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
  
  <style type="text/css">
    
    * { margin: 0; padding: 0 }
    /* I've used a hard CSS reset above, but you should consider a more sophisticated reset, such as this one: http://meyerweb.com/eric/thoughts/2007/05/01/reset-reloaded/ */
    
    p {
      text-align: left;
      margin: 15px 0px 0px 30px;
    }
    
    p, ul {
      font-size: 13px;
      line-height: 1.4em;
    }
    
    p a, li a { color: #39c; text-decoration: none }
    
    noscript p, noscript ol { color: #a00; font-size: 13px; line-height: 1.4em; text-align: left }
    noscript a { color: #a00; text-decoration: underline }
    noscript ol { margin-left: 25px; }
    
    img { border: 0 }
    
    body {
      font-family: Arial, Verdana;
      color: #000;
      width: 100%;
      margin: auto;
      text-align: center;
      padding-bottom: 20px;
      overflow: hidden;
    }
    
    .stripViewer .panelContainer .panel ul {
      text-align: left;
      margin: 0 15px 0 30px;
    }

    /* These 2 lines specify style applied while slider is loading */
    .csw {width: 100%; height: 100%; background: #fff; overflow: scroll}
    .csw .loading {margin: 200px 0 300px 0; text-align: center}

    .stripViewer { /* This is the viewing window */
      position: relative;
      overflow: hidden;
      margin: auto;
      width: 100%;
      height: 100%;
      clear: both;
      background: #fff;
    }
    
    .stripViewer .panelContainer { /* This is the big long container used to house your end-to-end divs. Width is calculated and specified by the JS  */
      position: relative;
      left: 0; top: 0;
      width: 100%;
      list-style-type: none;
      /* -moz-user-select: none; // This breaks CSS validation but stops accidental (and intentional - beware) panel highlighting in Firefox. Some people might find this useful, crazy fools. */
    }
    
    .stripViewer .panelContainer .panel { /* Each panel is arranged end-to-end */
      float: left;
      height: 100%;
      position: relative;
      width: 1500px; /* Also specified in  .stripViewer  above */
    }
    
    .stripViewer .panelContainer .panel .wrapper { /* Wrapper to give some padding in the panels, without messing with existing panel width */
      padding: 10px;
    }
    
    .wrapper {
      width: 800px;
      text-align: left;
    }
    
    .content_wrapper {
      border-left: 5px solid #000;
      margin-left: 20px;
      padding-bottom: 15px;
      padding-top: 5px;
      min-height: 30px;
    }
    
    .stripNavL, .stripNavR {
      text-indent: -9000em;
    }
    
    a.cross-link, .cross-notlink {
      font-family: arial;
      font-size: 12px;
      margin-left: 5px;
      padding: 4px;
      padding-left: 13px;
      padding-right: 13px;
      text-decoration: none;
    }

    a.cross-link {
      background: #fff;
      color: #000;
    }

    a:hover.cross-link, .cross-notlink {
      background: #000;
      color: #fff;
    }
    
    span.phead {
      font-size: 18px;
    }
    
    b {
      font-size: 15px;
      font-weight: 400;
      border-bottom: 1px dashed #aaa;
    }
    
    span.projectsub, p.footer {
      color: #999;
      font-family: arial;
      font-size: 12px;
    }
    
    p.footer {
      margin-right: 20px;
      text-align: right;
    }
    
    a.projectsub, a:visited.projectsub, a.footer, a:visited.footer {
      border-bottom: 1px dashed #999;
      color: #999;
      text-decoration: none;
    }
    
    a:hover.projectsub, a:hover.footer {
      border-bottom: 1px solid #999;
      color: #444;
      text-decoration: none;
    }
    
    p.project {
      position: relative;
      left: 60px;
    }
    
    p.projectlogo {
      position: relative;
      left: 40px;
    }
    
    span.project {
      position: relative;
      left: 20px;
    }
    
    .blog_title {
      font-family: arial;
      font-size: 22px;
      letter-spacing: -2px;
    }
    
    a:link.bloghome, a:visited.bloghome {
      position: relative;
      top: -20px;
      color: #222;
    }
    
    a:hover.bloghome {
      color: #666;
    }

  </style>
  
  <!-- Initialize each slider on the page. Each slider must have a unique id -->
  <script type="text/javascript">
    jQuery(window).bind("load", function() {
      jQuery("div#slider1").codaSlider()
      // jQuery("div#slider2").codaSlider()
      // etc, etc. Beware of cross-linking difficulties if using multiple sliders on one page.
    });
  </script>
    
</head>

<body>

<noscript>
  <p>Unfortunately your browser does not hava JavaScript capabilities, which are required to exploit full functionality of this site. This could be the result of two possible scenarios:</p>
  <ol>
    <li>You are using an old web browser, in which case you should probably upgrade it to a newer version. I recommend <a href="http://www.mozilla.com/en-US/firefox/">Mozilla Firefox</a> or <a href="http://www.google.com/chrome">Google Chrome</a>.</li>
    <li>You have disabled JavaScript in you browser, in which case you will have to enable it to properly use this site. <a href="http://www.google.com/support/bin/answer.py?answer=23852">Information on enabling JavaScript</a>.</li>
  </ol>
</noscript>

<div class="slider-wrap">
  <div id="slider1" class="csw">
    <div class="panelContainer">
    
      <div class="panel">
        <div class="wrapper">
          <img src="images/bencarlsson.png" alt="ben carlsson"/><img src="images/about.png" alt="about"/><br />
          <span class="cross-notlink">about</span><a href="#2" class="cross-link">portfolio</a> <a href="#3" class="cross-link">contact</a>
          <br/><br/>
          <div class="content_wrapper">
            <p><span class="phead">Hello.</span> My name is Ben Carlsson. I'm <?php print($age); ?> years old and I'm currently a student at <a href="http://www.csuchico.edu/">California State University, Chico</a>. I'm majoring in Computer Science, and I'm a gamer in my free time. I dislike not only long walks and beaches, but also situations in which the former takes place on the latter.</p>
            <p><b>Things I'm awesome at</b> include fixing your computer problems and correcting your written English, which, I admit, is sometimes more obession than skill.</p>
            <p><b>Things I'm pretty good at</b> include PHP, C++, HTML, CSS, SQL, and leaving an abundance of soda cans on my desk.</p>
            <p><b>Things I'm okay at</b> include Java, cosmetic website design, and coming up with lists of things I'm okay at.</p>
          </div>
        </div>
      </div>

      <div class="panel">
        <div class="wrapper">
          <img src="images/bencarlsson.png" alt="ben carlsson"/><img src="images/portfolio.png" alt="portfolio"/><br />
          <a href="#1" class="cross-link">about</a> <span class="cross-notlink">portfolio</span> <a href="#3" class="cross-link">contact</a>
          <br/><br/>
          <div class="content_wrapper">
            <p><img src="images/myprojects.png" alt="my projects"/></p>
            <p class="projectlogo"><img src="images/kure.png" alt="kure" style="padding-right: 8px;"/> <span class="projectsub">flat-file php blogging engine / <a href="http://findthekure.net/" class="projectsub">website</a></span><br />
            <span class="project">Kure is my PHP brainchild. I started it as a fantasy project in 2004. I worked on it consistently for a week or two and, for one reason or another, stopped after that.</span></p>
            <p class="project">In Fall of 2006, I discovered some misplaced backups and decided to finish it off after realizing how much work I had put into it and how close it was to completion.</p>
            <p class="project">Kure is a free, open-source blogging engine written in PHP that runs on a very simple flat-file database system. It is extendable via plugins and skinnable via templates.</p>
          </div>
        </div>
      </div>

      <div class="panel">
        <div class="wrapper">
          <img src="images/bencarlsson.png" alt="ben carlsson"/><img src="images/contact.png" alt="contact"/><br />
          <a href="#1" class="cross-link">about</a> <a href="#2" class="cross-link">portfolio</a>  <span class="cross-notlink">contact</span>
          <br/><br/>
          <div class="content_wrapper">
            <p>If you need to get a hold of me, feel free to email me at <img src="images/email.png" alt="email" style="position: relative; top: 4px;"/>.</p>
          </div>
        </div>
      </div>
      
    </div><!-- .panelContainer -->
    <p class="footer">
      w3c <a href="http://validator.w3.org/check?uri=<?php print($uri); ?>" class="footer">xhtml</a> / <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php print($uri); ?>" class="footer">css</a><br/>
      &copy; 2008 - <?php print(date("Y")); ?> ben carlsson<br/>
      props to niall doherty's <a href="http://www.ndoherty.biz/tag/coda-slider/" class="footer">coda-slider</a><br/>
    </p>
  </div><!-- #slider1 -->
</div><!-- .slider-wrap -->

</body>

</html>
