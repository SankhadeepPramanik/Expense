<h1>Registration Page </h1> 

<br>  
<form action="users" method="POST">  

  @csrf

<label> UserId</label>         
<input type="text" name="uid" size="15"/> <br> <br>  

<label> Name </label>         
<input type="text" name="firstname" size="15"/> <br> <br>  
<label>   
Phone :  
</label>  
 
<input type="number" name="phone" size="10"/> <br> <br>  
Address  
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>  
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> <br>  
<input type="button" value="Submit"/>  
</form>  