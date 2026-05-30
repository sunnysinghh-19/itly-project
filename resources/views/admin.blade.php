<!DOCTYPE html>
<html>

<head>

<title>ITLY Admin Panel</title>

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

/* SIDEBAR */

.sidebar{
position:fixed;
left:0;
top:0;
width:280px;
height:100vh;
background:#07152f;
padding:40px 25px;
overflow:auto;
}

.logo{
font-size:42px;
font-weight:800;
color:white;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
background:rgba(255,255,255,0.06);
border-radius:14px;
text-decoration:none;
color:white;
font-weight:600;
transition:0.3s;
}

.menu a:hover{
background:#2563eb;
}

/* MAIN */

.main{
margin-left:280px;
padding:40px;
}

/* TOP */

.topbar{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:40px;
}

.topbar h1{
font-size:42px;
}

.logout{
padding:14px 25px;
background:#dc2626;
color:white;
text-decoration:none;
border-radius:14px;
font-weight:700;
}

/* STATS */

.stats{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
margin-bottom:50px;
}

.stat-card{
background:white;
padding:35px;
border-radius:25px;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
}

.stat-card h2{
font-size:50px;
margin-bottom:10px;
}

.stat-card p{
color:#64748b;
}

/* SECTIONS */

.section{
background:white;
padding:35px;
border-radius:30px;
box-shadow:0 15px 40px rgba(0,0,0,0.06);
margin-bottom:40px;
}

.section-title{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;
}

.section-title h2{
font-size:34px;
}

/* TABLE */

table{
width:100%;
border-collapse:collapse;
}

table th{
background:#07152f;
color:white;
padding:18px;
text-align:left;
font-size:14px;
}

table td{
padding:18px;
border-bottom:1px solid #e2e8f0;
vertical-align:middle;
}

table img{
width:80px;
height:80px;
object-fit:cover;
border-radius:14px;
}

/* BUTTONS */

.btn{
padding:10px 18px;
border-radius:12px;
text-decoration:none;
font-size:14px;
font-weight:700;
display:inline-block;
}

.edit{
background:#2563eb;
color:white;
}

.delete{
background:#dc2626;
color:white;
}

/* FORM */

.upload-form{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
}

.upload-form input{
padding:16px;
border:1px solid #dbeafe;
border-radius:14px;
font-family:inherit;
}

.upload-form button{
padding:18px;
border:none;
border-radius:14px;
background:#2563eb;
color:white;
font-weight:700;
cursor:pointer;
grid-column:span 2;
}

/* RESPONSIVE */

@media(max-width:1200px){

.stats{
grid-template-columns:1fr;
}

.upload-form{
grid-template-columns:1fr;
}

.upload-form button{
grid-column:span 1;
}

}

@media(max-width:992px){

.sidebar{
position:relative;
width:100%;
height:auto;
}

.main{
margin-left:0;
}

.topbar{
flex-direction:column;
gap:20px;
align-items:flex-start;
}

table{
display:block;
overflow:auto;
}

}

</style>

</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar">

<div class="logo">
ITLY
</div>

<div class="menu">

<a href="/itly-admin-panel">
Dashboard
</a>

<a href="#products">
Products
</a>

<a href="#leads">
Leads
</a>

<a href="/">
Website
</a>

<a href="/logout" class="logout-btn">
    Logout
</a>

</div>

</div>

<!-- MAIN -->

<div class="main">

<!-- TOP -->

<div class="topbar">

<h1>
Admin Dashboard
</h1>

<a href="/logout" class="logout">
Logout
</a>

</div>

<!-- STATS -->

<div class="stats">

<div class="stat-card">

<h2>
{{ $products->count() }}
</h2>

<p>
Total Products
</p>

</div>

<div class="stat-card">

<h2>
{{ $leads->count() }}
</h2>

<p>
Total Leads
</p>

</div>

<div class="stat-card">

<h2>
24/7
</h2>

<p>
System Status
</p>

</div>

</div>

<!-- PRODUCT UPLOAD -->

<div class="section">

<div class="section-title">

<h2>
Add Product
</h2>

</div>

<form
class="upload-form"
method="POST"
action="/add-product"
enctype="multipart/form-data"
>

@csrf

<input
type="text"
name="product_name"
placeholder="Product Name"
required
>

<input
type="text"
name="brand"
placeholder="Brand"
required
>

<input
type="text"
name="category"
placeholder="Category"
required
>

<input
type="text"
name="specs"
placeholder="Specifications"
required
>

<input
type="text"
name="price"
placeholder="Price"
required
>

<input
type="file"
name="image"
required
>

<button type="submit">

Upload Product

</button>

</form>

</div>

<!-- PRODUCTS -->

<div class="section" id="products">

<div class="section-title">

<h2>
Manage Products
</h2>

</div>

<table>

<tr>

<th>
Image
</th>

<th>
Name
</th>

<th>
Brand
</th>

<th>
Price
</th>

<th>
Edit
</th>

<th>
Delete
</th>

</tr>

@foreach($products as $product)

<tr>

<td>

<img
src="{{ $product->image }}"
>

</td>

<td>
{{ $product->product_name }}
</td>

<td>
{{ $product->brand }}
</td>

<td>
₹ {{ $product->price }}
</td>

<td>

<a
href="/edit-product/{{ $product->id }}"
class="btn edit"
>

Edit

</a>

</td>

<td>

<a
href="/delete-product/{{ $product->id }}"
class="btn delete"
>

Delete

</a>

</td>

</tr>

@endforeach

</table>

</div>

<!-- LEADS -->

<div class="section" id="leads">

<div class="section-title">

<h2>
Customer Leads
</h2>

</div>

<table>

<tr>

<th>
Name
</th>

<th>
Email
</th>

<th>
Phone
</th>

<th>
Requirement
</th>

</tr>

@foreach($leads as $lead)

<tr>

<td>
{{ $lead->name }}
</td>

<td>
{{ $lead->email }}
</td>

<td>
{{ $lead->phone }}
</td>

<td>
{{ $lead->requirement }}
</td>

</tr>

@endforeach

</table>

</div>

</div>

</body>

</html>
