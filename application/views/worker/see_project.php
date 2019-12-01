<!DOCTYPE html>
<html>

<head>
  <title>My Webpage</title>
  
</head>
<style>
.content {
    background-color: #ddd;
    min-height: 500px;
    overflow: auto;
}
.footer {
  background-color: #ccc;
  min-height: 50px;
}
.header {
  background-color: #eee;
  min-height: 50px;
  text-align: center;
}
.logo img {
  width: 200px;
}
.menu ul {
  padding: 0;
}
.menu ul li {
  display: inline-block;
}
.menu ul li a {
  padding: 10px 20px;
  text-decoration: none;
}
.thumbnail {
    background-color: white;
    text-align: center;
    padding: 10px;
    width: 225px;
    margin: 10px;
    float: left;
}
.thumbnail img {
    width: 100%;
}


</style>
<body>
  
  <div class="container">
    <div class="header">
      <h1>Logo Produk</h1>
    </div>

    <div class="content">
      <h2>My Products</h2>

      <div class="thumbnail">
        <img src="http://via.placeholder.com/250x150">
        <h2>Product 1</h2>
        <p>Rp 200.000</p>
      </div>
      <div class="thumbnail">
        <img src="http://via.placeholder.com/250x150">
        <h2>Product 2</h2>
        <p>Rp 250.000</p>
      </div>
      <div class="thumbnail">
        <img src="http://via.placeholder.com/250x150">
        <h2>Product 3</h2>
        <p>Rp 300.000</p>
      </div>
      <div class="thumbnail">
        <img src="http://via.placeholder.com/250x150">
        <h2>Product 4</h2>
        <p>Rp 350.000</p>
      </div>
      <div class="thumbnail">
        <img src="http://via.placeholder.com/250x150">
        <h2>Product 5</h2>
        <p>Rp 400.000</p>
      </div>
      <div class="thumbnail">
        <img src="http://via.placeholder.com/250x150">
        <h2>Product 6</h2>
        <p>Rp 450.000</p>
      </div>
    </div>

    <div class="footer">
      <p>copyright 2018 My Page</p>
    </div>
  </div>
</body>

</html>