

<html>    
    <head>    
        <title>SignIn</title>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
    </head>    
    <body>  
        <!-- <style>
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
        
        h2 {  
        text-align: center;  
        }  
        
        .form_group {  
        padding: 10px;  
        ;    
        display: block;  
        } 

        input[type=submit] {
        width: 12em;  height: 2em;
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
        </style>  -->
        <h2>Login</h2>    
        <form name = "form2" action="insert_login.php" method = "get" enctype = "multipart/form-data" > 
        <form>
        <div class = "container">
            <div class = "container">    
                <div class = "form_group">    
                    <label>Email:</label>    
                    <input type = "text" name = "email" value = "" required/>    
                </div>         
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/>    
                </div>  
                <div class = "form_group">    
                    <!-- <label>Submit:</label>   -->
                    <input type = "submit" name = "submit" value = "SUBMIT" required/>    
                </div>
            </div>    
        </form>    
    </body>   
    <?php 
    if( isset($_GET['message'])) {
        echo "Wrong password, please enter again";
    }
    
    ?> 
</html>    