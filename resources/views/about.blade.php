<!DOCTYPE html>
<html>

<head>

<title>About ITLY</title>

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
max-width:1400px;
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

/* ABOUT */

.section{
padding:100px 0;
}

.grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:70px;
align-items:center;
}

.about-image img{
width:100%;
border-radius:30px;
box-shadow:0 15px 40px rgba(0,0,0,0.08);
}

.about-content h2{
font-size:52px;
margin-bottom:25px;
}

.about-content p{
font-size:17px;
line-height:2;
color:#475569;
margin-bottom:20px;
}

/* CARDS */

.cards{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
margin-top:70px;
}

.card{
background:white;
padding:40px;
border-radius:28px;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
transition:0.4s;
}

.card:hover{
transform:translateY(-10px);
}

.card h3{
font-size:28px;
margin-bottom:20px;
}

.card p{
line-height:1.9;
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

.grid,
.cards{
grid-template-columns:1fr;
}

.hero h1{
font-size:48px;
}

.about-content h2{
font-size:38px;
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
About ITLY
</h1>

<p>
Enterprise Infrastructure & AI Technology Company
</p>

</div>

</section>

<!-- ABOUT -->

<section class="section">

<div class="container">

<div class="grid">

<div class="about-image">

<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1400&auto=format&fit=crop">

</div>

<div class="about-content">

<h2>
Trusted Enterprise Technology Partner
</h2>

<p>
Araadhyam Manufactures Pvt. Ltd. delivers enterprise-grade
IT infrastructure, AI solutions, cloud services,
networking and cybersecurity systems.
</p>

<p>
We specialize in scalable enterprise technologies,
corporate procurement, AI infrastructure,
cloud architecture and business intelligence solutions.
</p>

<p>
Our mission is to provide modern businesses
with secure, scalable and future-ready technology ecosystems.
</p>

</div>

</div>

<!-- CARDS -->

<div class="cards">

<div class="card">

<h3>
Innovation
</h3>

<p>
Modern enterprise technologies and AI-powered systems
for future-ready businesses.
</p>

</div>

<div class="card">

<h3>
Scalability
</h3>

<p>
Cloud-ready infrastructure and enterprise deployment
solutions for rapid growth.
</p>

</div>

<div class="card">

<h3>
Security
</h3>

<p>
Advanced cybersecurity and enterprise protection
for critical business systems.
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
