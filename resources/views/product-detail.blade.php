<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Products - ITLY</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Poppins',sans-serif;
background:#f1f5f9;
color:#0f172a;
overflow-x:hidden;
}

/* =========================
HEADER
========================= */

header{
position:sticky;
top:0;
background:rgba(255,255,255,0.95);
backdrop-filter:blur(20px);
z-index:1000;
box-shadow:0 5px 20px rgba(0,0,0,0.05);
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
}

nav ul li a{
text-decoration:none;
color:#0f172a;
font-weight:600;
font-size:15px;
transition:.3s;
}

nav ul li a:hover{
color:#2563eb;
}

/* =========================
HERO
========================= */

.hero{
background:linear-gradient(135deg,#020617,#2563eb);
padding:100px 0 130px;
text-align:center;
color:white;
}

.hero h1{
font-size:70px;
font-weight:800;
margin-bottom:20px;
}

.hero p{
font-size:20px;
max-width:800px;
margin:auto;
line-height:1.8;
opacity:.9;
}

/* =========================
SEARCH
========================= */

.search-section{
margin-top:-45px;
margin-bottom:60px;
}

.search-box{
background:white;
padding:18px 30px;
border-radius:18px;
box-shadow:0 20px 50px rgba(0,0,0,0.08);
}

.search-box input{
width:100%;
border:none;
outline:none;
font-size:18px;
font-family:'Poppins',sans-serif;
}

/* =========================
PRODUCT GRID
========================= */

.products-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:35px;
padding-bottom:100px;
}

.product-card{
background:white;
border-radius:30px;
overflow:hidden;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
transition:.4s;
display:block;
}

.product-card:hover{
transform:translateY(-10px);
box-shadow:0 25px 60px rgba(0,0,0,0.12);
}

.product-image{
height:280px;
background:#f8fafc;
display:flex;
align-items:center;
justify-content:center;
padding:30px;
overflow:hidden;
}

.product-image img{
width:100%;
height:100%;
object-fit:contain;
transition:.4s;
}

.product-card:hover img{
transform:scale(1.05);
}

.product-content{
padding:30px;
}

.brand{
font-size:13px;
font-weight:700;
letter-spacing:1px;
color:#2563eb;
text-transform:uppercase;
margin-bottom:12px;
}

.product-title{
font-size:34px;
font-weight:800;
line-height:1.2;
margin-bottom:18px;
}

.category{
display:inline-block;
padding:8px 18px;
background:#eff6ff;
color:#2563eb;
border-radius:100px;
font-size:13px;
font-weight:600;
margin-bottom:20px;
}

.specs{
font-size:15px;
line-height:1.9;
color:#64748b;
height:90px;
overflow:hidden;
margin-bottom:25px;
}

.price{
font-size:40px;
font-weight:800;
margin-bottom:25px;
}

.product-btn{
display:block;
text-align:center;
padding:16px;
background:#2563eb;
color:white;
text-decoration:none;
border-radius:14px;
font-weight:700;
transition:.3s;
}

.product-btn:hover{
background:#1d4ed8;
}

/* =========================
FOOTER
========================= */

footer{
background:#020617;
padding:80px 0;
color:white;
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

.footer-grid p,
.footer-grid a{
color:#cbd5e1;
text-decoration:none;
line-height:2;
display:block;
}

.footer-grid a:hover{
color:white;
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:1200px){

.products-grid{
grid-template-columns:repeat(3,1fr);
}

}

@media(max-width:900px){

.products-grid{
grid-template-columns:repeat(2,1fr);
}

.hero h1{
font-size:50px;
}

}

@media(max-width:650px){

.products-grid{
grid-template-columns:1fr;
}

.hero h1{
font-size:40px;
}

nav{
display:none;
}

.product-title{
font-size:28px;
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

<div class="container">

<h1>
Enterprise IT Products
</h1>

<p>
Explore premium laptops, desktops, servers, printers,
networking and enterprise technology solutions.
</p>

</div>

</section>

<!-- SEARCH -->

<section class="search-section">

<div class="container">

<div class="search-box">

<input
type="text"
id="searchInput"
placeholder="Search Products, Brands, Categories..."
>

</div>

</div>

</section>

<!-- PRODUCTS -->

<section>

<div class="container">

<div class="products-grid">

@foreach($products as $product)

<div class="product-card searchable">

<div class="product-image">

<img
src="{{ $product->image }}"
alt="{{ $product->product_name }}"
loading="lazy"
onerror="this.src='https://placehold.co/600x600/f8fafc/0f172a?text=ITLY';"
>

</div>

<div class="product-content">

<div class="brand">
{{ $product->brand }}
</div>

<div class="product-title">
{{ $product->product_name }}
</div>

<div class="category">
{{ $product->category }}
</div>

<div class="specs">
{{ $product->specs }}
</div>

<div class="price">
₹ {{ $product->price }}
</div>

<a
href="/product/{{ $product->id }}"
class="product-btn"
>
View Details
</a>

</div>

</div>

@endforeach

</div>

</div>

</section>

<!-- FOOTER -->

<footer>

<div class="container">

<div class="footer-grid">

<div>

<h3>ITLY</h3>

<p>
Enterprise IT infrastructure and AI solutions provider.
</p>

</div>

<div>

<h3>Quick Links</h3>

<a href="/">Home</a>
<a href="/products">Products</a>
<a href="/services">Services</a>

</div>

<div>

<h3>Solutions</h3>

<a href="#">AI Infrastructure</a>
<a href="#">Networking</a>
<a href="#">Cloud Solutions</a>

</div>

<div>

<h3>Contact</h3>

<p>+91 8851074936</p>

<p>araadhyamindia@gmail.com</p>

<p>Delhi, India</p>

</div>

</div>

</div>

</footer>

<!-- SEARCH SCRIPT -->

<script>

const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('keyup', function(){

let filter = this.value.toLowerCase();

let cards = document.querySelectorAll('.searchable');

cards.forEach(card => {

let text = card.innerText.toLowerCase();

if(text.includes(filter)){

card.style.display = 'block';

}else{

card.style.display = 'none';

}

});

});

</script>

</body>
</html>
