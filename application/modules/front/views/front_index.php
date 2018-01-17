<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mading MNC Vision</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/gradient/gradient.css') ?>" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
  
  <script>document.createElement("myBanner")</script>
  <style>
  myBanner {
      display: block;
      background-color: #dddddd;
      padding: 100px;
      font-size: 30px;
  } 
  </style>
</head>
<body class="gradient1" >

 <!--nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brandeeeexxx" 
	  href="#">
        <img class="img-fluid" src="./assets/images/company-logo.png" alt="">
	  </a>
    </div>
	
     <!--ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul--> 
	
    <!--ul class="nav navbar-nav navbar-right">
      <!--li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li-->
      <!--li><a href="http://192.168.168.188/mading/index.php/auth"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav--> 

<div class="container gradient1 ">
  <br/>
  <img class="img-fluid" src="./assets/images/company-logo.png" alt="">
  <h1><font color="#ffffff">PT.MNC Sky Vision Tbk</font></h1>
  <h2><i><font color="#ffffff">Bukan yang lain</font></i></h2>
  <br/>
  <br/>
  <div class="row">
  
  
	<div class="col-sm-8">
	
	<div class="thumbnail">
	<a href="#">
    <video width="100%" height="auto" autoplay loop>
	  <source src="./assets/videos/live_streaming.mp4" type="video/mp4">
	  <!--source src="movie.ogg" type="video/ogg"--> 
	  Your browser does not support the video tag.
	</video>
    </a>
	</div>
	
	
  
  <?php foreach($tbl_mcontent as $konten=>$val ){?>

  <div class="col-md-4">
  
  <h1><?php echo $val->mtittle;?></h1>
  
    <div class="thumbnail">
	
	<?php 
	if($val->mimage)
	$gambar = '<a href="'.base_url('./assets/images/'.$val->mimage).'" target="_blank"><img src="'.base_url('./assets/images/'.$val->mimage).'" class="img-responsive" style="max-height:100px "  /></a>';
	else
	$gambar = '(No photo)'; 
	echo ($gambar);
	?>
									
	<div class="caption">
            <p>
			<?php echo $val->mcontent;?>
			</p>
    </div>
	</div>
	
  </div>
  <?php }?>
  
</div>

<!--banner kanan-->	
<div class="col-sm-4">
<div class="thumbnail">

<article>
 <header>
  <h2><a href="https://herbert.io">Short note on wearing shorts</a></h2>
   <p>Posted on Wednesday, 10 February 2016 by Patrick Lauke.
   <a href="https://herbert.io/short-note/#comments">6 comments</a></p>
 </header>
 <aside>
	<p>Your content goes here.</p>
 </aside>
 <details>
	
			<summary>This is the default content.</summary>
            
            <p>This is the main content, which will be shown.</p>
    
</details>
        
 <p>Click on the arrow to show and hide content</p>
 
 <marquee direction="up" height="200" scrolldelay="500" >
 <p>
 A fellow traveller posed an interesting question: Why do you wear shorts rather than
 longs? The person was wearing culottes as the time, so I considered the question equivocal in nature,
 but I attempted to provide an honest answer despite the dubiousness of the questioner’s dress.
 </p>
 </marquee>
 
 <br/>
 <marquee loop="100">
  <p>The short answer is that I enjoy wearing shorts, the long answer is...</p>
 </marquee>

 
 <p><a href="https://herbert.io/short-note/">Continue reading: Short note on
 wearing shorts</a></p>
</article>	
</div>
</div>

<div class="col-sm-4">
<div class="thumbnail">

<article>
 <header>
  <h2><a href="https://herbert.io">Short note on wearing shorts</a></h2>
   <p>Posted on Wednesday, 10 February 2016 by Patrick Lauke.
   <a href="https://herbert.io/short-note/#comments">6 comments</a></p>
 </header>
 <aside>
	<p>Your content goes here.</p>
 </aside>
 <details>
	
			<summary>This is the default content.</summary>
            
            <p>This is the main content, which will be shown.</p>
    
</details>
        
 <p>Click on the arrow to show and hide content</p>
 
 <marquee direction="up" height="200" scrolldelay="500" >
 <p>
 A fellow traveller posed an interesting question: Why do you wear shorts rather than
 longs? The person was wearing culottes as the time, so I considered the question equivocal in nature,
 but I attempted to provide an honest answer despite the dubiousness of the questioner’s dress.
 </p>
 </marquee>
 
 <br/>
 <marquee loop="100">
  <p>The short answer is that I enjoy wearing shorts, the long answer is...</p>
 </marquee>

 
 <p><a href="https://herbert.io/short-note/">Continue reading: Short note on
 wearing shorts</a></p>
</article>	
</div>
</div>
<!--end banner kanan-->		



</div>
  
</div>

</body>
</html>



