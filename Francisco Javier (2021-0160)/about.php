<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda de computadoras</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		footer {
			position: absolute;
			bottom: 0;
			width: 100%;}

			.cont {
    width: 100%;
    display: flex;
    max-width: 1400px;
    align-items: stretch;
    margin-left: 70px;
    flex-wrap: nowrap;
    justify-content: space-evenly;
    margin-top: 100px;
}
		.card{
			width: 100%;
			margin: 20px;

			border-radius: 1px;
			overflow: hidden;
  			background: #fff;
  			box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
  			cursor: default;
  			transition: all 400ms ease;
			}
.card:hover{
  box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
  transform: translate(-3%);
}
.card img{
  width: 100%;
  height: 210px;
}
.card .contenido{
  padding: 15px;
  text-align: center;
}
.card .contenido p{
  line-height: 1.5;
  color: #6a6a6a;

}
.card .contenido h3{
  font-weight: 400;
  margin-bottom: 15px;

}
.card .contenido a{
  text-decoration: none;
  display: 10px;
  margin-top: 10px;
  color: #2fb4cc;
  border: 1px solid #2fb4cc;
  border-radius: 4px;
  transition: all  400ms ease;
}
		
	</style>
</head>
<body>
	<!-- Header -->
	<?php include('partials/header.php'); ?>

	<div class="cont">
  <div class="card">
    <figure>
    <div class="contenido">
      <h3>Francisco Ogando</h3>
    	<p>Matricula: 20210160</p>
      <p>Fecha: 30/11/2022</p>
      <p>Programación 1</p>
    </div>
    </figure>
    </div>
  </div>
    
	<!-- Footer -->
	<?php include('partials/footer.php'); ?>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>