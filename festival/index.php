

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SISTEM INFORMASI LABORATORIUM KESEHATAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://localhost/silab/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://www.datatables.net/media/blog/bootstrap_2/DT_bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

	  #data{
		font-size:11px;
	  }
      /* Custom container */ 
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner { 
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      } 
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="http://localhost/silab//assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/ahttp://localhost/silab/ssets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/silab//assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/silab//assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/silab//assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://localhost/silab//assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://localhost/silab//assets/ico/favicon.png">
  </head>

  <body>

   


          
          
        </form>

<div class="container">

      <div class="masthead">
        <h3 class="muted"><img src="http://localhost/silab/assets/img/banner.jpg"/></h3>
        <div class="navbar"> 
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                

        <li class="active"><a href="http://localhost/myLect/php/festival/">Beranda</a></li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pendaftaran <b class="caret"></b></a>
                <ul class="dropdown-menu">
        <li><a href="index.php?page=kegiatan">Kegiatan </a></li> <br/>
        <li><a href="index.php?page=lomba">Lomba</a></li> <br/>
        </ul>                     
				<li><a href="index.php?page=tampil">Tampil Data</a></li>
      
                  

                   </ul>
              </li>
                 
                </li>
                
                <form class="navbar-form pull-right" method="POST" action="http://localhost/silab/main/login">
              <input class="span2" type="text" placeholder="Username" name="uname" required>
              <input class="span2" type="password" placeholder="Password" name="upass" required>
              <button type="submit" class="btn">Sign in</button>
            </form>
            </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

    <div class="hero-unit">

    <?php
      if(isset($_GET['page']))
      {
    			include($_GET['page'].'.php');
        
      }
      else {

    			include("default.php");
      }
    ?>
  
    </div> <!-- /container -->
  <footer style="font-size:10px;">
        <p style="font-size:10px" > <center> &copy; Dian Nuswantoro Company 2013 All Rights Reserved <br> 
 </center> </p>
      </footer>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://localhost/silab/assets/js/jquery.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-transition.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-alert.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-modal.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-scrollspy.js"></script
    <script src="http://localhost/silab/assets/js/bootstrap-tab.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-popover.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-button.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-collapse.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-carousel.js"></script>
    <script src="http://localhost/silab/assets/js/bootstrap-typeahead.js"></script>
    <script src="http://www.datatables.net/release-datatables/media/js/jquery.dataTables.js"></script>
    <script src="http://www.datatables.net/release-datatables/media/js/jquery.js"></script>
    <script src="http://www.datatables.net/media/blog/bootstrap_2/DT_bootstrap.js"></script>
	<script>
		function getTerm(str)
		{
			var x = document.getElementById("term");
			if(str==1)
			{
				x.innerHTML='<input type="text" name="term" placeholder="Masukkan nama Alat"/>';
			}
			else if(str==2)
			{
				x.innerHTML='<input type="text" name="term" placeholder="Masukkan nama Dosen"/>';
			}
			else if(str==3)
			{
				x.innerHTML='<input type="text" name="term" placeholder="Masukkan nama Larutan"/>';
			}
			else if(str==4)
			{
				x.innerHTML='<input type="text" name="term" placeholder="Masukkan Nama Mhs"/>';
			}
			else if(str==5)
			{
				x.innerHTML='<input type="text" name="term" placeholder="Masukkan Nama Praktikum"/>';
			}
			else if(str==6)
			{
				x.innerHTML='<input type="text" name="term" placeholder="Masukkan nama Reagen"/>';
			}
		}
	</script>

  </body>
</html>
