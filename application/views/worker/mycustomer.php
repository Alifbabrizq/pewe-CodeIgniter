<style>
	.content {
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
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<div style="position:absolute;" class="container-fluid mt--7">


	<div class="content">

<?php foreach ($project as $p) : ?>
		<div class="thumbnail">
			<img src="http://via.placeholder.com/250x150">
			<h2><?=$p->nama_costumer ?></h2>
            <p><?=$p->nama_project ?></p>
			<p><?=$p->harga ?></p>
		</div>
<?php endforeach; ?>
	</div>
</div>
