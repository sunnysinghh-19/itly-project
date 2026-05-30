<!DOCTYPE html>
<html>

<head>

<title>Clients - ITLY</title>

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

/* CLIENTS */

.clients{
padding:100px 0;
}

.section-title{
text-align:center;
margin-bottom:70px;
}

.section-title h2{
font-size:58px;
margin-bottom:20px;
}

.section-title p{
font-size:18px;
color:#64748b;
}

.grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:30px;
}

.card{
background:white;
padding:45px;
border-radius:30px;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
transition:0.4s;
text-align:center;
}

.card:hover{
transform:translateY(-10px);
}

.logo-box{
height:90px;
display:flex;
align-items:center;
justify-content:center;
margin-bottom:25px;
}

.logo-box img{
max-width:140px;
max-height:70px;
object-fit:contain;
}

.card h3{
font-size:26px;
margin-bottom:18px;
}

.card p{
line-height:1.9;
color:#64748b;
}

/* TESTIMONIALS */

.testimonials{
padding:100px 0;
background:#07152f;
color:white;
}

.testimonial-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:35px;
}

.testimonial{
background:rgba(255,255,255,0.08);
padding:40px;
border-radius:30px;
}

.testimonial p{
line-height:2;
margin-bottom:25px;
color:#dbeafe;
}

.user{
display:flex;
align-items:center;
gap:15px;
}

.user img{
width:60px;
height:60px;
border-radius:50%;
object-fit:cover;
}

.user h4{
font-size:20px;
margin-bottom:5px;
}

.user span{
font-size:14px;
opacity:0.8;
}

/* FOOTER */

footer{
background:#020617;
color:white;
padding:70px 0;
text-align:center;
}

/* RESPONSIVE */

@media(max-width:992px){

.grid,
.testimonial-grid{
grid-template-columns:1fr;
}

.hero h1{
font-size:48px;
}

.section-title h2{
font-size:40px;
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
Our Clients
</h1>

<p>
Trusted by enterprises, startups and institutions
</p>

</div>

</section>

<!-- CLIENTS -->

<section class="clients">

<div class="container">

<div class="section-title">

<h2>
Trusted Partnerships
</h2>

<p>
We collaborate with leading brands and enterprise customers.
</p>

</div>

<div class="grid">

<div class="card">

<div class="logo-box">

<img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Lenovo_Logo.svg">

</div>

<h3>
Lenovo
</h3>

<p>
Enterprise laptops, workstations and infrastructure systems.
</p>

</div>

<div class="card">

<div class="logo-box">

<img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Dell_Logo.svg">

</div>

<h3>
Dell
</h3>

<p>
Professional enterprise desktops and server infrastructure.
</p>

</div>

<div class="card">

<div class="logo-box">

<img src="https://upload.wikimedia.org/wikipedia/commons/2/29/HP_New_Logo_2D.svg">

</div>

<h3>
HP
</h3>

<p>
Business technology and enterprise hardware deployment.
</p>

</div>

<div class="card">

<div class="logo-box">

<img src="https://upload.wikimedia.org/wikipedia/commons/7/76/Zebronics_logo.png">

</div>

<h3>
Zebronics
</h3>

<p>
Professional electronics and distribution partnership.
</p>

</div>

</div>

</div>

</section>

<!-- TESTIMONIALS -->

<section class="testimonials">

<div class="container">

<div class="section-title">

<h2 style="color:white;">
Client Testimonials
</h2>

<p style="color:#cbd5e1;">
What our enterprise clients say
</p>

</div>

<div class="testimonial-grid">

<div class="testimonial">

<p>
ITLY delivered excellent enterprise infrastructure and
professional deployment support for our organization.
</p>

<div class="user">

<img src="https://randomuser.me/api/portraits/men/32.jpg">

<div>

<h4>
Rahul Sharma
</h4>

<span>
Enterprise Client
</span>

</div>

</div>

</div>

<div class="testimonial">

<p>
Outstanding AI infrastructure and cloud implementation services
with reliable support and consultation.
</p>

<div class="user">

<img src="https://randomuser.me/api/portraits/women/44.jpg">

<div>

<h4>
Priya Mehta
</h4>

<span>
Technology Director
</span>

</div>

</div>

</div>

<div class="testimonial">

<p>
Professional networking and cybersecurity solutions
for our business operations and infrastructure systems.
</p>

<div class="user">

<img src="https://randomuser.me/api/portraits/men/55.jpg">

<div>

<h4>
Amit Verma
</h4>

<span>
Corporate Partner
</span>

</div>

</div>

</div>

</div>

</div>

</section>

<footer>

© 2026 ITLY Enterprise Solutions

</footer>

</body>

</html>
