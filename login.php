<?php include('server.php') ?>
<!DOCTYPE html>

<html>
<head>
<style type='text/css'>


h1, input::-webkit-input-placeholder, button, p {
  font-family: 'roboto', sans-serif;
  transition: all 0.3s ease-in-out;
}
.error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
  }
h1 {
  height: 50px;
  width: 100%;
  font-size: 24px;
  background: #1abc9c;
  color: white;
  line-height: 150%;
  border-radius: 3px 3px 0 0;
 /* box-shadow: 0 2px 5px 1px rgba(0,0,0,0.2); */
	text-align: center;
}
p, a{
	color: gray;
	text-align: center;
	font-size: 12px;
}

form {
  box-sizing: border-box;
  width: 260px;
  margin: 100px auto 0;
  box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.2);
  padding-bottom: 40px;
  border-radius: 3px;
  h1 {
    box-sizing: border-box;
    padding: 20px;
  }
}

input {
  margin: 40px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 10px 0;
  border-bottom: solid 1px #1abc9c;
  transition: all 0.3s cubic-bezier(.64,.09,.08,1);
  background: linear-gradient(to bottom, rgba(255,255,255,0) 96%, #1abc9c 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: darken(#1abc9c, 20%);
  &:focus, &:valid {
    box-shadow: none;
    outline: none;
    background-position: 0 0;
    &::-webkit-input-placeholder {
      color: #1abc9c;
      font-size: 11px;
      transform: translateY(-20px);
      visibility: visible !important;
    }
  }
}

button {
  border: none;
  background: #1abc9c;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 200px;
  color: white;
  margin-left: 25px;
  box-shadow: 0 3px 6px 0 rgba(0,0,0,0.2);
  &:hover { 
    transform: translateY(-3px);
    box-shadow: 0 6px 6px 0 rgba(0,0,0,0.2);
  }
}

.follow {
  width: 42px;
  height: 42px;
  border-radius: 50px;
  background: #03A9F4;
  display: inline-block;
  margin: 50px calc(50% - 21px);
  white-space: nowrap;
  padding: 13px;
  box-sizing: border-box;
  color: white;
  transition: all 0.2s ease;
  font-family: Roboto, sans-serif;
  text-decoration: none;
  box-shadow: 0 5px 6px 0 rgba(0,0,0,0.2);
  i {
    margin-right: 20px;
    transition: margin-right 0.2s ease;
  }
  &:hover {
    width: 134px;
    transform: translateX(-50px);
    i {
      margin-right: 10px;
    }
  }
}
</style>
</head>
<body>
<form method="post" action="login.php">
<h1>HYPE Bot</h1>
<?php include('errors.php'); ?>
<div class="input-group">

	<input placeholder="Username" type="text" name="username" >
</div>
<div class="input-group">

	<input placeholder ="Password" type="password" name="password">
</div>
<div class="input-group">
	<button type="submit" class="btn" name="login_user">Login</button>
</div>
<p>
	Not yet a member? <a href="register.php">Sign up</a>
</p>
</form>



<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
</body>
</html>