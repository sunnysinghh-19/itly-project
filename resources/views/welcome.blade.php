<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>
ITLY Enterprise Solutions
</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">

<style>

/* =========================
GLOBAL
========================= */

*{
margin:0;
padding:0;
box-sizing:border-box;
scroll-behavior:smooth;
}

body{
font-family:'Poppins',sans-serif;
background:#f4f8fc;
color:#07152f;
overflow-x:hidden;
}

.container{
width:90%;
max-width:1450px;
margin:auto;
}

section{
padding:120px 0;
}

/* =========================
HEADER
========================= */

header{
position:fixed;
top:0;
left:0;
width:100%;
background:rgba(255,255,255,0.92);
backdrop-filter:blur(20px);
z-index:1000;
box-shadow:0 5px 20px rgba(0,0,0,0.05);
}

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:22px 0;
}

.logo{
font-size:42px;
font-weight:800;
color:#2563eb;
}

nav ul{
display:flex;
gap:28px;
list-style:none;
align-items:center;
}

nav ul li a{
text-decoration:none;
color:#07152f;
font-weight:600;
font-size:15px;
transition:0.3s;
}

nav ul li a:hover{
color:#2563eb;
}

/* =========================
HERO
========================= */

.hero{
min-height:100vh;
display:flex;
align-items:center;
background:
linear-gradient(
135deg,
#07152f 0%,
#0f172a 35%,
#2563eb 100%
);
color:white;
padding-top:120px;
overflow:hidden;
position:relative;
}

.hero::before{
content:'';
position:absolute;
top:-120px;
right:-120px;
width:500px;
height:500px;
background:rgba(255,255,255,0.08);
border-radius:50%;
filter:blur(80px);
}

.hero-wrapper{
display:grid;
grid-template-columns:1.1fr 1fr;
gap:80px;
align-items:center;
position:relative;
z-index:2;
}

.hero-content span{
display:inline-block;
padding:10px 20px;
background:rgba(255,255,255,0.12);
border-radius:100px;
font-size:14px;
font-weight:700;
margin-bottom:25px;
backdrop-filter:blur(10px);
}

.hero-content h1{
font-size:84px;
line-height:1.05;
font-weight:800;
margin-bottom:30px;
letter-spacing:-3px;
}

.hero-content p{
font-size:20px;
line-height:2;
opacity:0.92;
margin-bottom:40px;
max-width:650px;
}

.btn-group{
display:flex;
gap:20px;
flex-wrap:wrap;
}

.btn{
padding:18px 35px;
border-radius:14px;
text-decoration:none;
font-weight:700;
transition:0.4s;
display:inline-block;
}

.btn-primary{
background:white;
color:#07152f;
}

.btn-primary:hover{
transform:translateY(-5px);
}

.btn-secondary{
border:2px solid rgba(255,255,255,0.4);
color:white;
}

.btn-secondary:hover{
background:white;
color:#07152f;
}

.hero-image img{
width:100%;
border-radius:35px;
box-shadow:0 30px 70px rgba(0,0,0,0.3);
}

/* =========================
SECTION TITLE
========================= */

.section-title{
text-align:center;
margin-bottom:70px;
}

.section-title span{
display:inline-block;
padding:8px 18px;
background:#dbeafe;
color:#2563eb;
border-radius:100px;
font-size:13px;
font-weight:700;
margin-bottom:20px;
}

.section-title h2{
font-size:58px;
font-weight:800;
margin-bottom:20px;
}

.section-title p{
font-size:18px;
color:#64748b;
max-width:700px;
margin:auto;
line-height:1.9;
}

/* =========================
ABOUT
========================= */

.about-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:70px;
align-items:center;
}

.about-image img{
width:100%;
border-radius:35px;
box-shadow:0 15px 40px rgba(0,0,0,0.08);
}

.about-content h2{
font-size:54px;
margin-bottom:25px;
}

.about-content p{
font-size:17px;
line-height:2;
color:#475569;
margin-bottom:20px;
}

/* =========================
PRODUCTS
========================= */

.products{
background:#f8fbff;
}

.grid-4{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:30px;
}

.product-card{
background:white;
border-radius:30px;
overflow:hidden;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
transition:0.4s;
display:flex;
flex-direction:column;
height:100%;
}

.product-card:hover{
transform:translateY(-10px);
}

.product-image{
height:260px;
overflow:hidden;
background:#f8fafc;
}

.product-image img{
width:100%;
height:100%;
object-fit:cover;
transition:0.5s;
}

.product-card:hover img{
transform:scale(1.08);
}

.product-content{
padding:30px;
display:flex;
flex-direction:column;
height:100%;
}

.product-brand{
color:#2563eb;
font-size:13px;
font-weight:700;
letter-spacing:1px;
text-transform:uppercase;
margin-bottom:12px;
}

.product-title{
font-size:28px;
font-weight:700;
line-height:1.4;
height:90px;
overflow:hidden;
margin-bottom:18px;
}

.product-category{
display:inline-block;
padding:8px 15px;
background:#eff6ff;
color:#2563eb;
font-size:13px;
font-weight:600;
border-radius:100px;
margin-bottom:18px;
width:max-content;
}

.product-specs{
font-size:14px;
line-height:1.9;
color:#64748b;
height:120px;
overflow:hidden;
margin-bottom:25px;
}

.product-price{
font-size:38px;
font-weight:800;
margin-top:auto;
margin-bottom:25px;
}

.product-btn{
display:block;
padding:16px;
text-align:center;
background:#2563eb;
color:white;
border-radius:14px;
font-weight:700;
text-decoration:none;
transition:0.3s;
}

.product-btn:hover{
background:#1d4ed8;
}

/* =========================
SERVICES
========================= */

.services{
background:#07152f;
color:white;
}

.services-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}

.service-card{
background:rgba(255,255,255,0.06);
padding:40px;
border-radius:30px;
transition:0.4s;
}

.service-card:hover{
transform:translateY(-10px);
background:rgba(255,255,255,0.1);
}

.service-icon{
font-size:55px;
margin-bottom:25px;
}

.service-card h3{
font-size:30px;
margin-bottom:20px;
}

.service-card p{
line-height:2;
color:#cbd5e1;
}

/* =========================
STATS
========================= */

.stats{
background:linear-gradient(135deg,#2563eb,#1d4ed8);
color:white;
}

.stats-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:40px;
text-align:center;
}

.stat-box h2{
font-size:72px;
font-weight:800;
margin-bottom:10px;
}

.stat-box p{
font-size:18px;
}

/* =========================
CTA
========================= */

.cta{
background:#07152f;
color:white;
text-align:center;
}

.cta h2{
font-size:64px;
margin-bottom:25px;
}

.cta p{
font-size:20px;
line-height:2;
max-width:800px;
margin:auto;
margin-bottom:40px;
color:#cbd5e1;
}

/* =========================
FOOTER
========================= */

footer{
background:#020617;
color:white;
padding:80px 0;
}

.footer-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:40px;
}

.footer-grid h3{
margin-bottom:20px;
font-size:24px;
}

.footer-grid a,
.footer-grid p{
display:block;
text-decoration:none;
color:#cbd5e1;
margin-bottom:14px;
line-height:1.8;
}

.footer-grid a:hover{
color:white;
}

/* =========================
WHATSAPP
========================= */

.whatsapp{
position:fixed;
right:25px;
bottom:25px;
background:#25d366;
color:white;
padding:18px 30px;
border-radius:100px;
text-decoration:none;
font-weight:700;
z-index:999;
box-shadow:0 15px 40px rgba(0,0,0,0.2);
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:1200px){

.grid-4{
grid-template-columns:repeat(2,1fr);
}

.services-grid{
grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:992px){

.hero-wrapper,
.about-grid,
.grid-4,
.services-grid,
.stats-grid,
.footer-grid{
grid-template-columns:1fr;
}

.hero-content h1{
font-size:52px;
}

.section-title h2{
font-size:40px;
}

.cta h2{
font-size:42px;
}

nav{
display:none;
}

section{
padding:90px 0;
}

}

</style>

</head>

<body>

<!-- HEADER -->

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

<div class="container hero-wrapper">

<div class="hero-content">

<span>
Enterprise Technology Solutions
</span>

<h1>
Modern IT Infrastructure & AI Systems
</h1>

<p>
ITLY delivers enterprise-grade technology infrastructure,
AI solutions, cloud services, networking,
cybersecurity and procurement systems for businesses,
institutions and modern enterprises.
</p>

<div class="btn-group">

<a href="/products"
class="btn btn-primary">

Explore Products

</a>

<a href="/contact"
class="btn btn-secondary">

Contact Sales

</a>

</div>

</div>

<div class="hero-image">

<img src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1400&auto=format&fit=crop">

</div>

</div>

</section>

<!-- ABOUT -->

<section>

<div class="container">

<div class="section-title">

<span>
About ITLY
</span>

<h2>
Trusted Enterprise Technology Partner
</h2>

<p>
Professional enterprise infrastructure and business technology solutions.
</p>

</div>

<div class="about-grid">

<div class="about-image">

<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1400&auto=format&fit=crop">

</div>

<div class="about-content">

<h2>
Future-Ready Enterprise Solutions
</h2>

<p>
Araadhyam Manufactures Pvt. Ltd. specializes in enterprise-grade
technology systems including AI infrastructure,
cloud deployment, servers, networking,
cybersecurity and corporate procurement.
</p>

<p>
We help businesses scale with modern infrastructure,
secure ecosystems and professional technology consultation.
</p>

<a href="/about"
class="btn btn-primary">

Read More

</a>

</div>

</div>

</div>

</section>

<!-- PRODUCTS -->

<section class="products">

<div class="container">

<div class="section-title">

<span>
Enterprise Products
</span>

<h2>
Featured Products
</h2>

<p>
Professional laptops, desktops, servers and infrastructure solutions.
</p>

</div>

<div class="grid-4">

@foreach($products as $product)

<a href="/product/{{ $product->id }}"
style="text-decoration:none;color:inherit;">

<div class="product-card">

<div class="product-image">

<img
src="{{ $product->image }}"
alt="{{ $product->product_name }}"
onerror="this.src='https://images.unsplash.com/photo-1517336714739-489689fd1ca8?q=80&w=1200&auto=format&fit=crop';"
>

</div>

<div class="product-content">

<div class="product-brand">
{{ $product->brand }}
</div>

<div class="product-title">
{{ $product->product_name }}
</div>

<div class="product-category">
{{ $product->category }}
</div>

<div class="product-specs">
{{ $product->specs }}
</div>

<div class="product-price">
₹ {{ $product->price }}
</div>

<div class="product-btn">
View Details
</div>

</div>

</div>

</a>

@endforeach

</div>

</div>

</section>

<!-- SERVICES -->

<section class="services">

<div class="container">

<div class="section-title">

<span style="background:rgba(255,255,255,0.1);color:white;">
Services
</span>

<h2 style="color:white;">
Enterprise Services
</h2>

<p style="color:#cbd5e1;">
Scalable IT infrastructure and business technology solutions.
</p>

</div>

<div class="services-grid">

<div class="service-card">

<div class="service-icon">
💻
</div>

<h3>
IT Infrastructure
</h3>

<p>
Enterprise-grade servers,
storage systems and infrastructure deployment.
</p>

</div>

<div class="service-card">

<div class="service-icon">
☁️
</div>

<h3>
Cloud Solutions
</h3>

<p>
Cloud migration, virtualization
and scalable enterprise deployment.
</p>

</div>

<div class="service-card">

<div class="service-icon">
🤖
</div>

<h3>
AI Solutions
</h3>

<p>
AI automation, machine learning
and GPU infrastructure systems.
</p>

</div>

</div>

</div>

</section>

<!-- STATS -->

<section class="stats">

<div class="container">

<div class="stats-grid">

<div class="stat-box">

<h2>
500+
</h2>

<p>
Clients
</p>

</div>

<div class="stat-box">

<h2>
1200+
</h2>

<p>
Projects
</p>

</div>

<div class="stat-box">

<h2>
50+
</h2>

<p>
Experts
</p>

</div>

<div class="stat-box">

<h2>
24/7
</h2>

<p>
Support
</p>

</div>

</div>

</div>

</section>

<!-- CTA -->

<section class="cta">

<div class="container">

<h2>
Transform Your Business Infrastructure
</h2>

<p>
Partner with ITLY for enterprise-grade infrastructure,
AI systems and scalable technology solutions.
</p>

<a href="/contact"
class="btn btn-primary">

Get Started

</a>

</div>

</section>

<!-- FOOTER -->

<footer>

<div class="container">

<div class="footer-grid">

<div>

<h3>
ITLY
</h3>

<p>
Enterprise infrastructure and AI solutions provider.
</p>

</div>

<div>

<h3>
Quick Links
</h3>

<a href="/">Home</a>
<a href="/about">About</a>
<a href="/products">Products</a>
<a href="/services">Services</a>

</div>

<div>

<h3>
Services
</h3>

<a href="/services">Cloud Solutions</a>
<a href="/services">AI Infrastructure</a>
<a href="/services">Networking</a>
<a href="/services">Cybersecurity</a>

</div>

<div>

<h3>
Contact
</h3>

<p>
+91 8851074936
</p>

<p>
araadhyamindia@gmail.com
</p>

<p>
Delhi, India
</p>

</div>

</div>

</div>

</footer>

<!-- WHATSAPP -->

<a href="https://wa.me/918851074936"
class="whatsapp">

WhatsApp

</a>

</body>

</html>
