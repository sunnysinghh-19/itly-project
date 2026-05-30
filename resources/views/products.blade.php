<!DOCTYPE html>
<html>

<head>

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
padding:100px 0;
text-align:center;
background:linear-gradient(135deg,#07152f,#2563eb);
color:white;
}

.hero h1{
font-size:72px;
margin-bottom:20px;
}

.hero p{
font-size:20px;
opacity:0.9;
}

/* PRODUCTS */

.products{
padding:100px 0;
}

.grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:30px;
}

.card{
background:white;
border-radius:28px;
overflow:hidden;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
transition:0.4s;
height:100%;
display:flex;
flex-direction:column;
}

.card:hover{
transform:translateY(-10px);
}

.card-image{
height:260px;
overflow:hidden;
background:#f8fafc;
}

.card-image img{
width:100%;
height:100%;
object-fit:cover;
transition:0.5s;
}

.card:hover img{
transform:scale(1.08);
}

.card-content{
padding:30px;
display:flex;
flex-direction:column;
height:100%;
}

.brand{
color:#2563eb;
font-size:13px;
font-weight:700;
margin-bottom:12px;
text-transform:uppercase;
letter-spacing:1px;
}

.title{
font-size:28px;
font-weight:700;
line-height:1.4;
height:90px;
overflow:hidden;
margin-bottom:15px;
}

.category{
display:inline-block;
padding:8px 15px;
background:#eff6ff;
color:#2563eb;
font-size:13px;
font-weight:600;
border-radius:100px;
margin-bottom:20px;
width:max-content;
}

.specs{
font-size:14px;
line-height:1.9;
color:#64748b;
height:130px;
overflow:hidden;
margin-bottom:25px;
}

.price{
font-size:38px;
font-weight:800;
margin-top:auto;
margin-bottom:25px;
}

.btn{
display:block;
padding:16px;
text-align:center;
background:#2563eb;
color:white;
text-decoration:none;
border-radius:14px;
font-weight:700;
transition:0.3s;
}

.btn:hover{
background:#1d4ed8;
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

@media(max-width:1200px){

.grid{
grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:768px){

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

<li><a href="/admin-login">Admin</a></li>

</ul>

</nav>

</div>

</header>

<!-- HERO -->

<section class="hero">

<div class="container">

<h1>
Enterprise Products
</h1>

<p>
Professional IT Infrastructure & Technology Solutions
</p>

</div>

</section>

<!-- PRODUCTS -->

<section class="products">

<div class="container">

<div class="grid">

@foreach($products as $product)

<a
href="/product/{{ $product->id }}"
style="text-decoration:none;color:inherit;"
>

<div class="card">

<div class="card-image">

<img
src="{{ $product->image }}"
alt="{{ $product->product_name }}"
onerror="this.src='https://images.unsplash.com/photo-1517336714739-489689fd1ca8?q=80&w=1200&auto=format&fit=crop';"
>

</div>

<div class="card-content">

<div class="brand">
{{ $product->brand }}
</div>

<div class="title">
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

<div class="btn">
View Details
</div>

</div>

</div>

</a>

@endforeach

</div>

</div>

</section>

<footer>

© 2026 ITLY Enterprise Solutions

</footer>

</body>

</html>
