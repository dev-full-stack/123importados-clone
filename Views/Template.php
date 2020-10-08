<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>HOME</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>Assets/css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<div class="text-white" id="topo">
				<div class="container" id="top">
					<div class="row">
						<div class="col-xs-6" id="left">
						</div>
						<div class="col-xs-6" id="right">
							<?php
							if (isset($_SESSION['logged'])) {
								if ($_SESSION['sexo'] == "M") {
									echo "BEM VINDO, ".strtoupper($_SESSION['nome'])."&nbsp;".strtoupper($_SESSION['sn'])."!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
								}else{
									echo "BEM VINDA, ".strtoupper($_SESSION['nome'])."!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
								}
								
								echo '<a href="'.BASE_URL.'user">MINHA CONTA</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
								echo '<a href="/login/logout">SAIR</a>';
							}elseif(isset($_SESSION['adm-logged'])){
								echo '<a href="/admin/logout">SAIR</a>';
                            }else{
							?>
							<a href="<?php echo BASE_URL; ?>user">MINHA CONTA</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/login">ENTRAR</a>
							<?php
							}
							?>
						</div>
					</div>
				</div>	
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<a href="<?php echo BASE_URL; ?>"><img style="margin-top: 15px; width: 216px;" src="<?php echo BASE_URL; ?>Assets/img/123importados.png"></a>
						</div>	
						<div class="col-xs-4">
							<div class="form-group">
								<input class="ask" type="text" name="ask" autocomplete="off" placeholder="Procurar...">
								<select class="cat" name="cat">
									<option selected="">Todos os Produtos</option>
									<option>OFERTAS DA SEMANA</option>
									<option>TELEVISORES</option>
									<option>GELADEIRAS</option>
									<option>LAVADORAS</option>
									<option>FOGÃO</option>
									<option>NOTEBOOKS</option>
									<option>CELULARES</option>
								</select>
								<button class="search" type="submit">
								<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/><path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg>
							</button>
							</div>
						</div>
						<div class="col-xs-4">
							<img style="margin-top: 10px; margin-left: 75px;" src="<?php echo BASE_URL; ?>Assets/img/telefone.png">

							<span style="font-family: 'Montserrat', sans-serif; font-size: 8.5pt; position: absolute; margin-top: 19px; font-weight: bold">Central de Atendimento<br></span>

							<p style="position: absolute; margin-left: 122px; font-size: 15pt;
								font-weight: bold; margin-top: -25px; font-family: 'Montserrat', sans-serif;">0800 042 0511</p>

							<img style="position: absolute; margin-left: 230px; margin-top: 10px;" src="<?php echo BASE_URL; ?>Assets/img/cart.png">
						</div>
					</div>
				</div>
				<div style="background-color: #009CDE;">
					<div class="container" style="margin-top: 15px;">
						<div class="row">
							<div class="col-md-12">
								<ul>
									<li><a href="<?php echo BASE_URL; ?>">HOME</a></li>
									<li><a href="<?php echo BASE_URL; ?>ofertas">OFERTAS DA SEMANA</a></li>
									<li><a href="<?php echo BASE_URL; ?>categorias/ver/televisores">TELEVISORES</a></li>
									<li><a href="<?php echo BASE_URL; ?>categorias/ver/geladeiras">GELADEIRAS</a></li>
									<li><a href="<?php echo BASE_URL; ?>categorias/ver/games">GAMES</a></li>
									<li>
                                        <div class="dropdown">
                                          <button style="background-color: transparent; border: none; font-family: 'Montserrat', sans-serif; text-decoration: none; font-size: 9pt;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            SMARTPHONES
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>/categorias/ver/celulares">SAMSUNG GALAXY</a>
                                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>/categorias/ver/celulares">IPHONE</a>
                                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>/categorias/ver/celulares">MOTOROlA</a>
                                          </div>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo BASE_URL; ?>categorias/ver/xiaomi">XIAOMI</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>categorias/ver/ipad">IPAD</a></li>
									<li><a href="<?php echo BASE_URL; ?>categorias/ver/notebooks">NOTEBOOKS</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<img style="width: 1173px;height: 83px; border-bottom: 1px solid #000;" src="<?php echo BASE_URL; ?>Assets/img/barra.png">
						</div>
					</div>
				</div>
			</div>
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		</header>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

		<footer style="clear: both; background-color: #000; color: white;">
			<div style="height: 70px; background-color: #000;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-3" style="font-family: 'Montserrat', sans-serif;">
						<h1 style="font-size: 12pt; margin-bottom: 20px;">INFORMAÇÕES</h1>
						<p style="font-size: 9pt;">ENDEREÇO<br>
							ONLINE INTERMEDIAÇÕES LTDA<br>
							CNPJ: 35.912.902/0001-89<br>
							Av. Paulista, 1079<br>
							8° Andar - Sala 816<br>
							Edifício Torre João Salém<br>
							Jardim Paulista, São Paulo - SP</p>
						
						<p style="font-size: 9pt;">CENTRAL DE ATENDIMENTO<br>
							0800 042 0511
						</p>

						<p style="font-size: 9pt;">E-MAIL<br>
						sac@123importados.com</p>

						<p style="font-size: 9pt;">ATENDIMENTO<br>
						Seg - Sáb: 8:00 - 20:00</p>
					</div>
					<div class="col-md-3" style="font-family: 'Montserrat', sans-serif;">
						<h1 style="font-size: 12pt; margin-bottom: 20px;">MINHA CONTA</h1>
						<p style="font-size: 9pt;" style="margin-top: 0px">
							<div style="margin-bottom: 10px;font-size: 9pt;" style="margin-top: 0px"><a href="#">Minha Conta</a><br/></div>
							<div style="margin-bottom: 10px;font-size: 9pt;" style="margin-top: 0px"><a href="#">Minhas Compras</a><br/></div>
							<div style="margin-bottom: 10px;font-size: 9pt;" style="margin-top: 0px"><a href="#">Entar</a><br/></div>
						</p>
					</div>
					<div class="col-md-6" style="font-family: 'Montserrat', sans-serif; padding-left: 50px;">
						<h1 style="font-size: 12pt; margin-bottom: 20px;">TERMOS E CONDIÇÕES</h1>
						<p style="font-size: 9pt;" style="margin-top: 0px">
						<div style="margin-bottom: 10px;font-size: 9pt;" style="margin-top: 0px"><a href="#">Termos e Condições</a><br></div>
						<div style="margin-bottom: 10px;font-size: 9pt;" style="margin-top: 0px"><a href="#">Prazo de Entrega</a><br></div>
						<div style="margin-bottom: 10px;font-size: 9pt;" style="margin-top: 0px"><a href="#">Trocas e Devoluções</a><br></div>
						<div style="margin-bottom: 10px;font-size: 9pt;" style="margin-top: 0px"><a href="#">Originalidade dos Produtos</a><br></div></p>
						<div>
							<img style="height: 70px; width: 120px;" src="<?php echo BASE_URL;?>Assets/img/icone-boleto.png"><br>
						</div>
						<div style="display: inline-block; margin-top: 20px;">
							<a href="#"><img src="<?php echo BASE_URL;?>Assets/img/facebook.png"></a>
							<a href="#"><img style="margin-top: -5px;" src="<?php echo BASE_URL;?>Assets/img/youtube.png"></a>
						</div>
					</div>
				</div>
				<div style="margin-top:30px; border-bottom: 1px solid #3D3D38; margin-bottom: 20px;"></div>
				<img style="margin-bottom: 15px;" src="<?php echo BASE_URL; ?>Assets/img/123importados.png">
            </div>


            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>Assets/js/ajax.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>Assets/js/Scripts.js"></script>
		</footer>
	</body>
</html>