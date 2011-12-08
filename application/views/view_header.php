<!DOCTYPE html>
<title>Elysia's Website</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="/Elysia3/styles/elegant-press.css" type="text/css" />
<script src="/Elysia3/scripts/elegant-press.js" type="text/javascript"></script>
<!--[if IE]><style>#header h1 a:hover{font-size:75px;}</style><![endif]-->
</head>
<body>
<div class="main-container">
  <header>
  
    <h1><?php echo anchor('Blog/index','The Tourist')?></h1>
    <p id="tagline"><strong>Tempat-tempat wisata di dunia</strong></p>
  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Tel: 081231583996 | Mail: <a href="mailto:elysiacindy@rocketmail.com">elysiacindy@rocketmail.com</a></p></div>
    <div class="tagline_right">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search My Website&hellip;"   onfocus="if (this.value == 'Search Our Website&hellip;') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search Our Website&hellip;';}" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <li class="active"><?php echo anchor('Blog/index','HomePage');?></li>
      <li><?php echo anchor('Blog/asia','Asia');?></li>
      <li><?php echo anchor('Blog/australia','Australia');?></li>
	   <li><?php echo anchor('Blog/eropa','Eropa');?></li>
	  <li><?php echo anchor('Blog/projects','Projects');?></li>
      <li><?php echo anchor('Blog/aboutme','About Me');?></li>
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>