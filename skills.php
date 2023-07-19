<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my skills</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css"/>
	<style type="text/css">
     *{
            margin: 0px;
            padding: 0px;
        }
        .main{
            display:inline-block;
            height: auto;
            width: 98%;
            background-color:transparent;
            padding-top: 65px;

         }
        .card{
            float: left;
            width: 250px;
            height: 280px;
            background-color: #191970;
            margin-right: 20px;
            margin-left: 20px;
           /* margin:20px;*/
        
        }
        
        .pname{
            
            margin-top:2.5px;
            margin-bottom: 2.5px;
        }
        h3{
            background-color:#191970;
            color: white;
            text-align:center;
        }
        p{
            color:white;
            background-color:#191970;
            padding-left:2.5px;
            padding-right:2.5px;
        }



  </style>
</head>
<body>
	<header>
    <h1>chikondi chiomba</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="project.php">Project</a>
      <a href="services.php">services</a>
      <a href="skills.php">Skills</a>
      <a href="about.php">about</a>
      <a href="contact.php">Contacts</a>
    </nav>
  </header>
  <div class="main">
  <?php
      require_once 'connection.php';
      $db = mysqli_select_db($con,'portfolio');
      $query="select*from skills";
      $result = mysqli_query($con,$query);
      while ($row=mysqli_fetch_array($result)) {
        
      
    ?>
       <div class="card">
        <div class="ima">
        <!--<img src='uploads/".$row['images']."' >-->
        </div>
        <div class="pname">
            <h3>
            <?php echo  $row['skillname'];  ?>
            </h3>
        </div>
        <p>
        <?php echo  $row['description'];  ?>
          
        </p>
        </div>
        <?php 
        }
      ?>
      </div>
	
	<footer>
      
    </div>
        <div class="socialMedia-icons">
            <div class="Social-icons    float: left;">   
                <a href="www.facebook.com/chikondichiomba">           
                <div class="icon-img" title="Facebook">
                    <img src="images/fb4.png">
                </div>
                </a>

                <a href="www.twitter.com/chikondichiomba">    
                <div class="icon-img" title="Twitter">
                    <img src="images/twitter1.png">
                </div>
                </a>

                <a href="www.Instagram.com/chikondichiomba">    
                <div class="icon-img" title="Instagram">
                    <img src="images/insta.png">
                </div>
                </a>

                <a href="www.chikondichiomba@gmail.com">    
                <div class="icon-img" title="Email">
                    <img src="images/mail2.png">
                </div>
                </a>

                <a href="tel:+265882665723">    
                <div class="icon-img" title="Call">
                    <img src="images/call.png">
            
                </div>
                </a>

                <a href="www.LinkedIn.com/chikondichiomba">    
                <div class="icon-img" title="LinkedIn">
                    <img src="images/linkedin2.png">
                </div>
                </a>
            </div>
        </div>

        <p>chikondichiomba@2023</p>
    </footer>

</body>
</html>