<div class="container">
	<div class="row">
    <?php foreach($produto as $dado): ?>
        <div class="col-md-12">
			<div style="margin-top: 5px; margin-bottom: 20px;">
				<a style="color: #9D9EA0;" href="/" title="Ir p/ Página Inicial"><svg class="bi bi-house-door" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
					<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
				</svg></a><span style="color: #9D9EA0; font-family: 'Montserrat', sans-serif; font-size: 10pt; text-transform: uppercase;">&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;<?php echo $dado['categoria']?></span>
                <span style="color: #9D9EA0; font-family: 'Montserrat', sans-serif; font-size: 10pt;">&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;<?php echo $dado['titulo']; ?></span>
			</div>
		</div>
        <div class="col-md-12 container-prod">
            <div class="img">
                <img src="<?php echo BASE_URL; ?>Assets/img/<?php echo $dado['foto']; ?>" />
            </div>
            
            <div class="config">
                <h1><?php echo $dado['titulo']; ?></h1>
                <p>Original com Garantia de 1 Ano<br/>
                Condição: Novo<br/>
                Entrega 100% Garantida<br/>
                Frete Grátis<br/></p>
                
                <h2>
                    <?php if($dado['promo']): ?>
                    <s style="color: #8E8E8E;"><span style="color: #8E8E8E; font-size: 9pt;">R$ <?php echo number_format($dado['preco'], 2, ",", ""); ?></span></s>
                        R$<?php echo number_format($dado['promo'], 2, ",", ""); ?>
                    <?php else: ?>
                        R$<?php echo number_format($dado['preco'], 2, ",", ""); ?>
                    <?php endif; ?>
                </h2>
                <small>1X de <?php echo number_format($dado['preco'], 2, ",", ""); ?> no Boleto</small>
                <form method="POST">
                    <div class="comprar">
                        <div id="menos">-</div>
                        <input type="number" name="qt" id="qt" value="1" min="0" max="20"/>
                        <div id="mais">+</div>
                        <button style="background-color: transparent; border: none;" type="submit"><i class="fa fa-shopping-bag"></i>Comprar</button>
                    </div>
                </form>
            </div>
            <div class="desc">
                
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>