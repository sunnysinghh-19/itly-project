<!DOCTYPE html>
<html>

<head>

<title>Contact - ITLY</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Poppins',sans-serif;
background:#f4f8fc;
color:#07152f;
}

/* HEADER */

header{
background:white;
box-shadow:0 5px 20px rgba(0,0,0,0.05);
padding:20px 0;
position:sticky;
top:0;
z-index:1000;
}

.container{
width:90%;
max-width:1450px;
margin:auto;
}

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
}

.logo{
font-size:38px;
font-weight:800;
color:#2563eb;
}

nav ul{
display:flex;
gap:25px;
list-style:none;
}

nav ul li a{
text-decoration:none;
color:#07152f;
font-weight:600;
}

/* HERO */

.hero{
padding:140px 0;
background:linear-gradient(135deg,#07152f,#2563eb);
color:white;
text-align:center;
}

.hero h1{
font-size:72px;
margin-bottom:20px;
}

.hero p{
font-size:20px;
opacity:0.9;
}

/* CONTACT */

.contact-section{
padding:100px 0;
}

.contact-wrapper{
display:grid;
grid-template-columns:1fr 1fr;
gap:60px;
align-items:start;
}

.contact-info{
background:white;
padding:45px;
border-radius:30px;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
}

.contact-info h2{
font-size:42px;
margin-bottom:30px;
}

.info-box{
margin-bottom:30px;
}

.info-box h3{
font-size:22px;
margin-bottom:10px;
color:#2563eb;
}

.info-box p{
line-height:2;
color:#64748b;
font-size:16px;
}

.contact-form{
background:white;
padding:45px;
border-radius:30px;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
}

.contact-form h2{
font-size:42px;
margin-bottom:30px;
}

.contact-form input,
.contact-form textarea{
width:100%;
padding:18px 22px;
border:1px solid #dbeafe;
border-radius:14px;
margin-bottom:22px;
font-family:inherit;
font-size:15px;
background:#f8fbff;
}

.contact-form textarea{
height:180px;
resize:none;
}

.contact-form button{
width:100%;
padding:18px;
border:none;
border-radius:14px;
background:#2563eb;
color:white;
font-size:16px;
font-weight:700;
cursor:pointer;
transition:0.3s;
}

.contact-form button:hover{
background:#1d4ed8;
}

/* MAP */

.map{
margin-top:80px;
border-radius:30px;
overflow:hidden;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
}

iframe{
width:100%;
height:450px;
border:none;
}

/* FOOTER */

footer{
background:#020617;
color:white;
padding:70px 0;
text-align:center;
margin-top:100px;
}

/* RESPONSIVE */

@media(max-width:992px){

.contact-wrapper{
grid-template-columns:1fr;
}

.hero h1{
font-size:48px;
}

.contact-info h2,
.contact-form h2{
font-size:34px;
}

}

</style>

</head>

<body>

<header>

<div class="container navbar">

<div class="logo">
ITLY
</div>

<nav>

<ul>

<li><a href="/">Home</a></li>

<li><a href="/about">About</a></li>

<li><a href="/products">Products</a></li>

<li><a href="/services">Services</a></li>

<li><a href="/clients">Clients</a></li>

<li><a href="/contact">Contact</a></li>

</ul>

</nav>

</div>

</header>

<!-- HERO -->

<section class="hero">

<div class="container">

<h1>
Contact ITLY
</h1>

<p>
Get enterprise technology solutions for your business
</p>

</div>

</section>

<!-- CONTACT -->

<section class="contact-section">

<div class="container">

<div class="contact-wrapper">

<!-- LEFT -->

<div class="contact-info">

<h2>
Contact Information
</h2>

<div class="info-box">

<h3>
Office Address
</h3>

<p>
616 Hemkunt Chamber 89,<br>
Nehru Place,<br>
Delhi - 110019
</p>

</div>

<div class="info-box">

<h3>
Phone
</h3>

<p>
+91 8851074936
</p>

</div>

<div class="info-box">

<h3>
Email
</h3>

<p>
araadhyamindia@gmail.com
</p>

</div>

<div class="info-box">

<h3>
Business Hours
</h3>

<p>
Monday - Saturday<br>
10:00 AM - 7:00 PM
</p>

</div>

<div class="info-box">

<h3>
WhatsApp
</h3>

<p>
<a
href="https://wa.me/918851074936"
style="color:#25d366;text-decoration:none;font-weight:700;"
>
Chat on WhatsApp
</a>
</p>

</div>

</div>

<!-- RIGHT -->

<div class="contact-form">

<h2>
Send Inquiry
</h2>

<form method="POST" action="/submit-inquiry">

@csrf

<input
type="text"
name="name"
placeholder="Your Name"
required
>

<input
type="email"
name="email"
placeholder="Your Email"
required
>

<input
type="text"
name="phone"
placeholder="Phone Number"
required
>

<textarea
name="requirement"
placeholder="Your Requirement"
required
></textarea>

<button type="submit">
Submit Inquiry
</button>

</form>

</div>

</div>

<!-- MAP -->

<div class="map">

<iframe
src="https://www.google.com/maps?q=Nehru%20Place%20Delhi&output=embed">
</iframe>

</div>

</div>

</section>

<footer>

© 2026 ITLY Enterprise Solutions

</footer>

</body>

</html>
