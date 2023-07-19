
<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/style.css"/>
        <style type="text/css">
            .contact-section{
                width: 100%;
                height: 350px;
                margin-bottom: 25px;
                padding-top: 30px;
                display: inline-block;
            }
            #Address{
                padding-top: 80px;
                text-align: center;
                float:left;
                width: 50%;
               min-height: 250px;
                background-color: transparent;

            }

            #social-about{
                padding-top: 80px;
                text-align: center;
                float: left;
                width: 45%;
                min-height: 250px;
                background-color: transparent;

            }


            .header{
                background-color: #191970;
                min-height: 60px;
                width: 100%;
                position: fixed;
                z-index: 1;
                margin-bottom: 10px;
            }
        #form-container{
            width: 100%;
            min-height: 300px;
            background-color: transparent;
            padding-left: 10px;
        }
        .text {
            width: 100%;
            height: 32px;
            background-color: white;
            border: 2px solid #191970;                
            border-radius: 5px;
        }
        input{
            padding-left: 20px;
        }
        .textarea{
            width: 100%;
            border: 2px solid #191970;
            border-radius: 5px;
        }
        .button{
            padding-left: 15px;
            padding-right: 15px;
            width: 100px;
            background-color: #191970;
            border-radius: 5px;
            color: whitesmoke;
            text-align: center;
            line-height: 50px

        }
        .label{
            color: #191970;
            margin: 5px;
        
        }
        h3{
            color: #191970;
            text-align: center;
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
        <div class="contact-section">
                <div id="Address">
                    <h2 align="center">Find us at</h2>
                    <ul > 
                        <div class="c-icons">
                        <img src="icons/home.png"/>
                        </div>
                <li>Address: mzuzu university , in Luwinga</li>
                </div>
                                
                <div id="social-about">
                
                <h2>you can contact us on</h2>
                    <ul>
                        <div class="c-icons">
                            <a href="mailto:chikondichiomba@gmail.com"><img src="icons/gmail.png"></a>
                        </div>
                        <div class="c-icons">
                            <a href="https://www.Instagram.com/chikondichiomba"><img src="icons/instagram.png"></a>
                        </div>
                        <div class="c-icons">
                            <a href="https://www.twitter.com/chikondichiomba"><img src="icons/twitter.png"></a>
                        </div>
                        <div class="c-icons">
                            <a href="https://www.facebook.com/chikondichiomba"><img src="icons/fb.png"></a>
                        </div>
                    
                    
                </ul>

            </ul>
        </div>
        </div>
        <div id="form-container">
            <h3>For feedback</h3>
             <form name="myform" method="post" action="" onsubmit="return validateform()" >  
               

                <label class="label">Name</label><br>
                <input type="text" class="text"name="name" placeholder="your name"><br><br>
                <label class="label">phone</label><br>
                <input type="text"class="text" name="phone" id="phone"
                placeholder="your phone number"><br><br>
                <label class="label">Email</label><br>
                <input type="text" class="text"  name="email" placeholder="your email ld"><br><br>
                <label class="label">Feedback</label><br>
                <textarea name="message" class="textarea" cols="30" rows="10" placeholder="enter your message ...">
                </textarea><br>
                <input type="submit" class="button" name="send" value="Send"/><br>
            </form>

<?php
//we are adding the connection to the database for query executions;
 require 'connection.php';
 //if a user clicks the 
 if(isset($_POST['send'])){
    $fullname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //we create a sql query to insert data into the database;
    $query ="insert into contact(name,phone,email,feedback) values('$fullname','$phone','$email','$message')";
    //checking if the query was successful or not
    if(mysqli_query($con,$query)){
        echo "feedback was sent successfully";
    }else{
        echo "feedback was not sent successfully". $sql . "
" . mysqli_error($con);

    }
//closing the connection
mysqli_close($con);
 }




?>
        </div>

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

                <a href="www.facebook.com/chikondichiomba">    
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
    <script>
        //function declaration
        function validateform(){  
            var name=document.myform.name.value;  
            var email=document.myform.email.value;  
            var phone=document.myform.phone.value;  
            var message=document.myform.message.value;  

            var email=document.myform.email.value;  
            var atposition=email.indexOf("@");  
            var dotposition=email.lastIndexOf(".");  
            

            if (name==null || name==""){  
              alert("Name can't be blank");  
              return false;  
            }else if(phone==null || phone==""){  
              alert("Phone cant be blank");  
              return false;  
            }else if(email==null || email==""){  
                alert("Email cant be blank");  
               
                return false;  
            }else if(message==null || message==""){  
              alert("Message cant be blank");  
              return false;  
            } 

            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
                alert("Please enter a valid e-mail address");  
                return false;  
            } 
        }  
    </script>
    <script type="text/javascript" src="script.js"></script>
    </body>
</html>