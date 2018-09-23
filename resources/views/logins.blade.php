<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .images{
            margin-top:30px;
            margin-left:160px;
        }
        h2{
            font-size:40px;
            color:#454545;
            
        }
        .form-control{
            margin-top:20px;
            border-radius:0px;
            border:0px;
        }
        .mast{
            background: #14b4ac;
            margin-left:45%;
            color:white;
        }
        .col-md-5{
            background: white;
            box-shadow:1px -9px 40px -12px rgba(0,0,0,0.75);
            margin-top:100px;
            height:460px;
        }
        .forgot{
            font-size:15px;
            color:#454545;
            margin-top:15px;
            margin-left: 39%;
        }
    </style>
    <body>
       <div class="container">
           <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-5">
               <img src="{{URL::asset('user.png')}}" height="200" width="200">
                   <h2 class="text-center">Login</h2>
                           
                               <input type="email" class="form-control" placeholder="Enter Email">
                           
                    
                               <input type="password" class="form-control" name="password" placeholder="Enter Password">
                           
                         <br>
                           <button type="submit" class="btn mast">Login</button><br>
                   <p class="forgot">Forgot Password?</p>
                    
               </div>
               <div class="col-md-4"></div>
           </div>
        </div>
       
        
    </body>
</html>