<?php
require_once 'connection.php';
$query = "select*from homepage";
$result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>myportfolio</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css"/>
	<link rel="stylesheet" type="text/css" href="icons/css/all.css"/>

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

		<!--header section of the page-->
	
		<!--the section of the page-->
	<section class="middle-section">
		<?php
			
			while($row=mysqli_fetch_array($result)){

			
		?>
		<div class="intro">
		<?php echo "<img src='uploads/".$row['images']."' >";?>
		</div>
		<div class="bio">
			<p>
		<?php echo  $row['biography'];  ?>
			</p>
		</div>
		<?php
			}
		?>
		
	</section>
	<div class="greeting-container">
		<h4></h4>
	</div>

	<section class="projects">
		<h2>featured projects</h2>
		<div class="featured">
		<div class="slideshow-container">

  <div class="mySlides fade">
    <img src="images/slider1.png" alt="myphoto" style="width:100%">
    <div class="text">project</div>
  </div>

  <div class="mySlides fade">
    <img src="images/slider2.png" alt="myphoto" style="width:100%">
    <div class="text">project</div>
  </div>

  <div class="mySlides fade">
    <img src="images/slide3.png" alt="myphoto" style="width:100%">
    <div class="text">project</div>
  </div>

</div>
<br>

<script type="text/javascript" src="file.js"></script>
		</div>

	</section>
			<div class="description">
			<p>My Portfolio website project using HTML, CSS, JavaScript, PHP and MYSQL.</p>
			<a id="pro" href="index.html">My Portfolio project</a>
		</div>
		        <div id="form-container10">
            <h3>Contact</h3>
             <form name="myform" method="post" action="" onsubmit="return validateform()" >  
               

                <label>Name</label><br>
                <input type="text" class="text"name="name" placeholder="your name"><br><br>
                <label>phone</label><br>
                <input type="text"class="text" name="phone" id="phone"
                placeholder="your phone number"><br><br>
                <label>Email</label><br>
                <input type="text" class="text"  name="email" placeholder="your email ld"><br><br>
                <label>Feedback</label><br>
                <textarea name="message" class="textarea" cols="30" rows="10" placeholder="enter your message ...">
                </textarea><br>
                <input type="submit" name="submit" class="button" value="Send"/><br>
            </form>
			<?php
//we are adding the connection to the database for query executions;
 require 'connection.php';
 //if a user clicks the 
 if(isset($_POST['submit'])){
    $fullname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //we create a sql query to insert data into the database;
    $query ="insert into contact(name,phone,email,feedback) values('$fullname','$phone','$email','$message')";
    $dbselect=mysqli_select_db($con, "portfolio");
	$result = mysqli_query($con,$query);
	//checking if the query was successful or not
		if($result){
        echo "feedback was sent successfully";
		}else{
			echo "feedback was not sent successfully".mysqli_error($con);
		
		}
//closing the connection
mysqli_close($con);
 } 

?>
        </div>
		

	<section class="bottom-section">
		<div class="skills">
			<h2>Skills</h2>
			<?php
			require_once 'connection.php';
			$query="select*from skills";
			$result = mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result)){
				
				?>
			
					<ul>
						<li>
						<?php echo  $row['skillname'];  ?>
						</li>

					</ul>
				<?php
			}
			?>
		</div>
		<div class="skills">
		
			<h2>Tools</h2>
			<?php
			require_once 'connection.php';
			$query="select*from tools";
			$result = mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result)){
				
				?>
			<ul>
				<li>
				<?php echo  $row['toolist'];  ?>
				</li>
				
			</ul>
			<?php
			}
			?>
		</div>
		<div class="skills">
			<h2>Technologies</h2>
			<?php
			require_once 'connection.php';
			$query="select*from technology";
			$result = mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result)){
				
				?>
			
			<ul>
				<li>
					<?php echo $row['techlist']; ?>
				</li>

			</ul>
			<?php
			}
			?>
		</div>
	</section>

		<!--the footer section of the page-->
	<footer>
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

                <a href="+265882665723">    
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
	<script type="text/javascript" src="script.js"></script>	

</body>
</html>