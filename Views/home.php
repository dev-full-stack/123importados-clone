<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 style="font-family: 'Montserrat', sans-serif; font-size: 15pt; margin-top: 40px; margin-left: -30px;">BEM VINDO A 123IMPORTADOS.COM. APROVEITE AS NOSSAS OFERTAS:</h2>
			<div style="border-bottom: 1px solid #DCDCDC;"></div>
		</div>
	</div>
</div>
<div class="container" style="margin-top: 40px;">
	<div class="row">
		<div class="col-xs-3">
			<img style="width: 25%; position: absolute; height: 32%; margin-left: -1%;" src="<?php echo BASE_URL; ?>Assets/img/banner1.jpg">
		</div>
		<div class="col-xs-3">
			<img style="width: 25%; position: absolute; height: 32%; margin-left: 26.5%" src="<?php echo BASE_URL; ?>Assets/img/banner2.jpg">
			
		</div>
		<div class="col-xs-3">
			<img style="width: 25%; position: absolute; height: 32%; margin-left: 54%;" src="<?php echo BASE_URL; ?>Assets/img/banner3.jpg">
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 style="font-family: 'Montserrat', sans-serif; font-size: 15pt; margin-top: 300px; margin-left: -30px;">VITRINE</h2>
			<div style="border-bottom: 1px solid #DCDCDC;"></div>
		</div>
	</div>
	<div class="row flex" style="margin-top: 30px; font-family: 'Montserrat', sans-serif; font-size: 10pt;margin-bottom: 10px;">
		<?php foreach($produtos as $produto): ?>
            <?php if($produto['promo'] != 0): ?>
                <div style="max-width: 265px; text-align: center; margin-top: 20px;">
                    <div style="margin-left: 60%; background-color: #DA0080; color: white; padding: 5px; font-size: 9pt; width: 35%; font-family: 'Montserrat', sans-serif;">PROMOÇÃO</div>
                    <a class="produtos" href="<?php echo BASE_URL; ?>/produto/index/<?php echo $produto['numero']; ?>" title="<?php echo $produto['titulo']; ?>"><img style="width: 265px; height: auto;" src="<?php echo BASE_URL; ?>Assets/img/<?php echo $produto['foto']; ?>"><br></a>
                    <div style="width: 100%; margin-top: 20px;">
                        <a class="produtos" href="<?php echo BASE_URL; ?>produto/index/<?php echo $produto['numero']; ?>"><?php echo $produto['titulo']; ?></a>
                    
                    </div>
                    <div>
                        <br>
                        <s style="color: #8E8E8E;"><span style="color: #8E8E8E; font-size: 8pt;">R$ <?php echo number_format($produto['preco'], 2, ",", ""); ?></span></s>
                        <span style="font-size: 12pt; color: #465157; margin-top: 10px;">R$ <?php echo number_format($produto['promo'], 2, ",", ""); ?></span><br><br>
                    </div>
                    <p style="font-size: 9pt; color: #465157;">1X de R$<?php echo number_format($produto['promo'], 2, ",", ""); ?> no Boleto</p>
                    <?php if($produto['quantidade'] != 0): ?>
                        <a class="comprar" href=""><i class="fa fa-shopping-bag"></i>Comprar</a>
                    <?php else: ?>
                        <span style="color: #8E8E8E; font-size: 10pt; font-family: Oswald, sans-serif;">SEM ESTOQUE</span>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div style="max-width: 265px; text-align: center; margin-top: 10px;">
                    <a class="produtos" href="<?php echo BASE_URL; ?>/produto/index/<?php echo $produto['numero']; ?>" title="<?php echo $produto['titulo']; ?>"><img style="width: 265px; height: auto;" src="<?php echo BASE_URL; ?>Assets/img/<?php echo $produto['foto']; ?>"><br></a>
                    <div style="width: 100%; margin-top: 20px;">
                        <a class="produtos" href="<?php echo BASE_URL; ?>produto/index/<?php echo $produto['numero']; ?>"><?php echo $produto['titulo']; ?></a>
                    </div>
                    <p style="font-size: 12pt; color: #465157; margin-top: 10px;">R$ <?php echo number_format($produto['preco'], 2, ",", ""); ?><br></p>
                    <p style="font-size: 9pt; color: #465157;">1X de R$<?php echo number_format($produto['preco'], 2, ",", ""); ?> no Boleto</p>
                    <?php if($produto['quantidade'] != 0): ?>
                        <a class="comprar" href=""><i class="fa fa-shopping-bag"></i>Comprar</a>
                    <?php else: ?>
                        <span style="color: #8E8E8E; font-size: 10pt; font-family: Oswald, sans-serif;">SEM ESTOQUE</span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 style="font-family: 'Montserrat', sans-serif; font-size: 15pt; margin-top: 30px; margin-left: -30px;">SOCIAL</h2>
			<div style="border-bottom: 1px solid #DCDCDC;"></div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-xs-3">
			<a href="#"><img style="width: 25%; position: absolute; height: 32%; margin-left: -1%;" src="<?php echo BASE_URL; ?>Assets/img/youtube.jpg"></a>
		</div>
		<div class="col-xs-3">
			<a href="#"><img style="width: 25%; position: absolute; height: 32%; margin-left: 26.5%" src="<?php echo BASE_URL; ?>Assets/img/facebook.jpg"></a>
		</div>
		<div class="col-xs-3">
			<a href="#"><img style="width: 25%; position: absolute; height: 32%; margin-left: 54%;" src="<?php echo BASE_URL; ?>Assets/img/depoimentos-clientes.jpg"></a>
		</div>
	</div>
</div>
<div style="height: 350px;"></div>