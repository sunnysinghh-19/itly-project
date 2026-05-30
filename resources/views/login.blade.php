<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>
ITLY Admin Login
</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Poppins',sans-serif;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#07152f,#2563eb);
}

.login-box{
width:420px;
background:white;
padding:50px;
border-radius:30px;
box-shadow:0 25px 60px rgba(0,0,0,0.2);
text-align:center;
}

.logo{
font-size:48px;
font-weight:800;
color:#2563eb;
margin-bottom:20px;
}

h2{
font-size:38px;
margin-bottom:10px;
}

p{
color:#64748b;
margin-bottom:30px;
}

input{
width:100%;
padding:16px;
margin-bottom:18px;
border:none;
background:#f1f5f9;
border-radius:12px;
font-size:16px;
outline:none;
}

button{
width:100%;
padding:16px;
background:#2563eb;
color:white;
border:none;
border-radius:12px;
font-size:16px;
font-weight:700;
cursor:pointer;
}

button:hover{
background:#1d4ed8;
}

</style>

</head>

<body>

<div class="login-box">

<div class="logo">
ITLY
</div>

<h2>
Admin Login
</h2>

<p>
Secure enterprise administration panel access
</p>

<form action="/itly-admin-panel">

<input
type="text"
placeholder="Username"
required
>

<input
type="password"
placeholder="Password"
required
>

<button type="submit">

Login

</button>

</form>

</div>

</body>

</html>
