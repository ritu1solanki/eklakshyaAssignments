<!doctype html>
<html lang="en">
  <head>
    <title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	
	<script>
        function val(){
            name= document.myform.user.value;
            email= document.myform.email.value;
			msg= document.myform.concern.value;
           
            
            usernames=['Ritu','Amit','Kirtishil','Ganesh'];
            var lowerCaseLetters = /[a-z]/g;
            var upperCaseLetters = /[A-Z]/g;
            var numbers = /[0-9]/g;
            var special=  /^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
            function valName(name){
                if (name==''){
                    alert('enter a name');
                    document.myform.name.focus();
                    return false;
                    
                }
               else if (name.length<3 ){
                    alert('enter a name with length greater than 3');
                    document.myform.name.focus();
                    return false;
                }
                 else if (name.length> 15){
                    alert('enter a name with length less than 15');
                    document.myform.name.focus();
                    return false;
                }
                else if (!validateUser(name)){
                    return false;
                }
                else{
                    return true;
                }
            }
            flag=0;
        function validateUser(name){
			usernames=['Ritu','Amit','Kirtishil','Ganesh'];
        for(key in usernames){
        if (name==usernames[key]){
            flag=1;}}
            if (flag==1){
           alert('name already exist');
           return false;
            
                   }
                   else{
        return true;
        
    }
        
        }
            function valEmail(email){
                if (email==''){
                    alert('enter a email');
                    document.myform.email.focus();
                    return false;
                    
                }
                else{
                    return true;
                }
            }
			
			function valConcern(msg){
                if (email==''){
                    alert('enter your message');
                    document.myform.concern.focus();
                    return false;
                    
                }
                else{
                    return true;
                }
            }
            
            


            if(valName(name)&& valEmail(email)&& valConcern(msg))
            alert("Your Message Submitted !");
            
            
        }
    </script>

	
  </head>
  <body>
  
  <!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Team 1</h1>
    <hr>
    <p>Kirtishil Patil</p>
    <p>Ganesh </p>
    <p>Ritu</p>
    <p>Amit</p>
  </div>
</div> -->

<!-- <img src="images/bg2.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> -->
<!-- <div class="p"></div> -->
<div class="w-50 m-auto">
  Contact Us
  <br><hr>
  <form  name="myform" action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" required autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" required  autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Concern</label>
      <textarea name="concern" required class="form-control"></textarea>
    </div>
    <button type="submit" onClick="val()" class="btn btn-success">Submit</button>
  </form>
</div>

<footer class="py-2 m-5 bg-dark text-white text-center">
    <a href="pr.php"><h1>back 2 home</h1></a>
</footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>