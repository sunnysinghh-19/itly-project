<!DOCTYPE html>
<html>

<head>

<title>Services - ITLY</title>

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

/* SERVICES */

.services{
padding:100px 0;
}

.grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:35px;
}

.card{
background:white;
padding:45px;
border-radius:30px;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
transition:0.4s;
}

.card:hover{
transform:translateY(-12px);
}

.icon{
font-size:55px;
margin-bottom:25px;
}

.card h2{
font-size:30px;
margin-bottom:20px;
}

.card p{
font-size:16px;
line-height:2;
color:#64748b;
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

.grid{
grid-template-columns:1fr;
}

.hero h1{
font-size:48px;
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
Enterprise Services
</h1>

<p>
Scalable IT Infrastructure & Business Technology Solutions
</p>

</div>

</section>

<!-- SERVICES -->

<section class="services">

<div class="container">

<div class="grid">

<div class="card">

<div class="icon">
💻
</div>

<h2>
IT Infrastructure
</h2>

<p>
Enterprise-grade infrastructure deployment,
servers, storage systems and business technology integration.
</p>

</div>

<div class="card">

<div class="icon">
☁️
</div>

<h2>
Cloud Solutions
</h2>

<p>
Cloud architecture, virtualization,
migration and scalable enterprise deployment services.
</p>

</div>

<div class="card">

<div class="icon">
🤖
</div>

<h2>
AI / ML Solutions
</h2>

<p>
Artificial intelligence automation,
GPU infrastructure and machine learning deployment systems.
</p>

</div>

<div class="card">

<div class="icon">
🔐
</div>

<h2>
Cybersecurity
</h2>

<p>
Enterprise protection, security audits,
surveillance and digital risk management solutions.
</p>

</div>

<div class="card">

<div class="icon">
📊
</div>

<h2>
Analytics & BI
</h2>

<p>
Business intelligence dashboards,
data analytics and enterprise reporting systems.
</p>

</div>

<div class="card">

<div class="icon">
🧾
</div>

<h2>
Compliance & Audit
</h2>

<p>
Professional compliance management,
IT audits and enterprise governance systems.
</p>

</div>

</div>

</div>

</section>

<footer>

© 2026 ITLY Enterprise Solutions

</footer>

</body>

</html>
