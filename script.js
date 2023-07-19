/*this is a greeting function to generate dynamic greetings based on time*/
let container = document.querySelector(".greeting-container");
let timeNow = new Date().getHours();
let greeting =
  timeNow >= 5 && timeNow < 12
    ? "Good Morning"
    : timeNow >= 12 && timeNow < 18
    ? "Good Afternoon"
    : "Good evening";
container.innerHTML = `<h4>${greeting}</h4>`;
/*form validation function in javascript*/

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
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