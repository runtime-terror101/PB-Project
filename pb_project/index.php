

<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>  
        <style>
        .container {  
        max-width: 1350px;  
        width: 100%;  
        margin: 50px;  
        height: auto;  
        display: block;  
        }  
        
        body {  
        color: #8A2BE2;  
        font-size: 20px;  
        font-family: Verdana, Arial, Helvetica, monospace;  
        background-color: #F0E8A0;  
        }

        input[type=submit] {
        width: 20em;  height: 2em;
        }  
        
        h2 {  
        text-align: center;  
        }  
        
        .form_group {  
        padding: 10px;  
        ;    
        display: block;  
        } 

        .form_submit {  
        padding: 40px;  
        ;    
        display: block;  
        } 
        
        label {  
        float: left;  
        padding-right: 50px;  
        line-height: 10%;  
        display: block;  
        width: 208px;  
        }     
        </style>
         <link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
        <h2>Sign Up</h2>    
        <form name = "form1" action="insert.php" method = "get" enctype = "multipart/form-data" > 
        <form>
        <div class = "container">
            <div class = "container">    
                <div class = "form_group">    
                    <label>Name:</label>    
                    <input type = "text" name = "name" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Age:</label>    
                    <input type = "number" name = "age" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Email id:</label>    
                    <input type = "text" name = "email" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/>    
                </div>  
                <div class = "form_group">    
                    <label>Submit:</label>  
                    <input type = "submit" name = "submit" value = "" required/>    
                </div>
            </div>    
        </form>    
    </body>    
</html>    