<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>login</title>
    <style>
    	body{
    	   margin: 0px;
           padding: 0px;
           background-image: url("img/background-kartu-pelajar-kosong-5.webp");
           background-size: cover;
           background-repeat: no-repeat;
        }
        .main{
        	padding: 2%;
        }
        h1{
        	font-weight: bold;
            font-size: 4vw;
        	background-color: white;
            color: grey;
            border-bottom: 1vw solid yellow;
            border-top: 1vw solid yellow;
        }
        .field{
        	margin: 0px;
            color: white;
            font-family: courier new;
            margin-top: 4vw;
            margin-left: 20vw;
            margin-right: 20vw;
            padding-bottom: 1vw;
            background-color: green;
            border: 1vw solid yellow;
            border-radius: 5vw;
            overflow: hiden;
        }
        .field input{
        	padding: 1vh;
            width: 20vw;
            font-size: 1vw;
        	background-color: white;
            border: 2px solid yellow;
            border-radius: 5vw;
        }
        .field button{
        	margin: 2vw;
            font-size: 2vw;
            font-family: courier;
            background-color: #0059A0;
            border: 5px solid yellow;
            border-radius: 10px;
        }
        .field a{
        	margin: 2vw;
            font-size: 2vw;
            font-family: courier;
            background-color: #0059A0;
            border: 5px solid yellow;
            border-radius: 10px;
            text-decoration: none;
            color: black;
        }
        .field label{
        	font-size: 2vw;
        }
    </style>
  </head>
  <body>
  	<form action="validasi.php" method="post">
  	<div class="main" align="center">
  	   <div class="field">
  	      <h1>login</h1>
        	<label>user</label><br>
            <input type="text" name="user" placeholder="user name! "><br>
            <label>password</label><br>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit">login</button>
            <a href="user_galeri.php">Back</a>
         </div>
       </div>
  	</form>
  </body>
</html>