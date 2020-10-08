<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="margin-top: 5px; margin-bottom: 20px;">
				<a style="color: #9D9EA0;" href="/" title="Ir p/ Página Inicial"><svg class="bi bi-house-door" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
					<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
				</svg></a><span style="color: #9D9EA0; font-family: 'Montserrat', sans-serif; font-size: 10pt;">&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;CELULARES</span>
			</div>
		</div>
	</div>
	<div class="row" style="color: #777777; font-family: 'Montserrat', sans-serif; font-size: 9pt;">
		<div class="col-md-12">
			Ordem:&nbsp;&nbsp;<select style="outline:none; border: 1px solid #E4E4E4; color: #777789; padding: 10px;" name="ordem" id="ordem">
				<option selected>Relevância</option>>
				<option>Nome</option>
				<option>Preço</option>
			</select>
				<span style="font-size: 15pt; color: #000;"><svg class="bi bi-arrow-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  		<path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z"/>
		  		<path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8 3.707 5.354 6.354a.5.5 0 1 1-.708-.708l3-3z"/>
			</svg></span>
		</div>
	</div>
    <div class="row flex">
        <?php foreach($produtos as $produto): ?>
            <?php if($produto['promo'] != 0): ?>
                <div style="max-width: 265px; text-align: center; margin-top: 10px;">
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
    <div class="row" style="border-top: 1px solid #F1F1F1; margin-top: 40px;">
		<div class="col-xs-6" style="margin-top: 20px;">
			Exibir: <select style="outline:none; border: 1px solid #E4E4E4; color: #777789; padding: 7px;">
				<option selected>12</option>
				<option>24</option>
				<option>36</option>
			</select>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 40px;">
	<div class="row">
		<div class="col-xs-3">
			<img style="width: 25%; position: absolute; height: 32%; margin-left: -1%;" src="<?php echo BASE_URL;?>Assets/img/banner1.jpg">
		</div>
		<div class="col-xs-3">
			<img style="width: 25%; position: absolute; height: 32%; margin-left: 26.5%" src="<?php echo BASE_URL;?>Assets/img/banner2.jpg">
			
		</div>
		<div class="col-xs-3">
			<img style="width: 25%; position: absolute; height: 32%; margin-left: 54%;" src="<?php echo BASE_URL;?>Assets/img/banner3.jpg">
		</div>
	</div>
</div>
<div style="height: 330px;"></div>