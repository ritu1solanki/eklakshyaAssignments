<!DOCTYPE html>
<html lang="en">

	<title>Review</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<head>

	<script>
        function val(){
            name= document.myform.name.value;
            email= document.myform.email.value;
            pass= document.myform.pass.value;
            confirmpass= document.myform.pass.value;
            phone=document.myform.phone.value;
            gender= document.myform.gender.value;
            
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
            function valPhone(phone){
                if (phone==''){
                    alert('enter a phone number');
                    document.myform.phone.focus();
                    return false;
                    
                }
                else if((isNaN(phone))){
                    alert('enter only digits in phone number')
                    return false;
                }
                else if(phone.length!=10){
                    alert('enter  10 digits in phone number')
                    return false;
                }
                else{
                    return true;
                }
            }
            function valPass(pass,confirmpass)
            {
                if (pass==''){
                    alert('enter a password');
                    document.myform.pass.focus();
                    return false;
                    
                }
                else  if(!(pass.match(lowerCaseLetters))) {
                    alert('enter atleast 1 lowercase in password')
                    return false;
                }
                else  if(!(pass.match(upperCaseLetters))) {
                    alert('enter atleast 1 uppercase in password')
                    return false;
                }
                else  if(!(pass.match(numbers))) {
                    alert('enter atleast 1 number in password')
                    return false;
                }
                else  if(!(pass.match(special))) {
                    alert('enter atleast 1 special charater in password')
                    return false;
                }
               else if (pass.length<3 ){
                    alert('enter a passsword with length greater than 3');
                    document.myform.pass.focus();
                    return false;
                }
                else if(pass != confirmpass){
                    alert("enter same password in confirm password");
                    document.myform.confirmpass.focus();
                    return false;
                }
                else{
                    return true;
                }
            
            }
function valGen(gender){
    if(gender==''){
        alert("select a gender");
                    document.myform.gender[0].clicked();
                    return false;
    }
    else {
    
        return true;
    }
}

            if(valName(name)&& valEmail(email) && valPass(pass,confirmpass)&& valPhone(phone)&&valGen(gender)&&valBranch(branch))
            alert("you have successfully registered");
            
            
        }
    </script>

		<script src="jquery/jquery.min.js"></script>
		<!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!---- boostrap.min link local ----->
		
		<link rel="stylesheet" href="css/style.css">
		<!---- boostrap.min link local ----->

		<script src="js/bootstrap.min.js"></script>
		<!---- Boostrap js link local ----->
		
		<link rel="icon" href="images/icon.png" type="image/x-icon" />
		<!---- Icon link local ----->
		
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!---- Font awesom link local ----->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="css/style.css">
    </head>
	<body>


    
 
	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">Welcome All</h2>
            <hr>
			<div class="row">
				<div class="col-md-5">
 					<form role="form" name="myform" method="post" action="signupdb.php">
						<fieldset>							
							<p class="text-uppercase pull-center"> SIGN UP!</p>	
 							<div class="form-group">
								<input type="text" name="name" id="name" required class="form-control input-lg" placeholder="Username">
							</div>

							<div class="form-group">
								<input type="email"required name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                            </div>

							<div class="form-group">
								<input type="tel" required name="phone" id="phone" class="form-control input-lg" placeholder="Phone Number">
							</div>

					<div class="form-group">
								<input type="password" required name="pass" id="pass" class="form-control input-lg" placeholder="Password">
							</div>
							<div class="form-group">
							Gender:
							<input type="radio" name="gender" value="male"> Male
        					<input type="radio" name="gender" value="female">  Female<br>
							</div>
	
							<div class="form-check">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  By clicking register you're agree to our policy & terms
								</label>
							</div>
                             <br>
                            <div>
							<input type="submit" class="btn btn-md btn-success"  onclick=val() value="Register">
 							</div>
						</fieldset>
					</form>
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				<div class="col-md-5">
 				 		<form role="form" method="post" action="index.html"> 
						<fieldset>							
							<p class="text-uppercase"> Login using your account: </p>	
 								
							<div class="form-group">
								<input type="email"  required name="username" id="username" class="form-control input-lg" placeholder="username">
							</div>
							<div class="form-group">
								<input type="password" required name="pass" id="pass" class="form-control input-lg" placeholder="Password">
							</div>
							<div>
								<input type="submit" class="btn btn-md btn-success" onclick=val() value="Sign In">
							</div>
								 
 						</fieldset>
				</form>	
				</div>
			</div>
		</div>
        
        
    </div>
    <footer>
        <a href="pr.php"><h1 style="color: blue;">back 2 home</h1></a>
    </footer>
        
    
	</body>
</html>