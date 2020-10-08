<section id="carrinho" class="container">
    <h1>Carrinho de compras</h1>
    <div>
        <?php if(!empty($carrinho)): ?>
            <table border="1">
                <thead style="text-align: center;">
                    <tr>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php $total = 0; ?>
                    <?php for($c = 0; $c < count($carrinho); $c++): ?>
                        <tr>
                            <td><img style="width: 100px; height: 100px;" src="<?php echo BASE_URL; ?>assets/img/<?php echo $produtos[$c]['foto']?>" /><?php echo $produtos[$c]['titulo']; ?></td>
                            <?php if($produtos[$c]['promo'] != 0): ?>
                                <td style="text-align: center; padding: 10px;"><?php echo number_format($produtos[$c]['promo'], 2, ",", ""); ?></td>
                            <?php else: ?>
                                <td style="text-align: center; padding: 10px;"><?php echo number_format($produtos[$c]['preco'], 2, ",", ""); ?></td>
                            <?php endif; ?>
                            <td style="text-align: center;"><?php echo $carrinho[$c]['quantidade']; ?></td>
                            <?php if($produtos[$c]['promo'] != 0): ?>
                                <td style="text-align: center; padding: 10px;"><?php $calc = $carrinho[$c]['quantidade'] * $produtos[$c]['promo']; echo number_format($calc, 2, ",", ""); ?></td>
                                <?php $total += $calc; ?>
                            <?php else: ?>
                                <td style="text-align: center; padding: 10px;"><?php $calc = $carrinho[$c]['quantidade'] * $produtos[$c]['preco']; echo number_format($calc, 2, ",", ""); ?></td>
                                <?php $total += $calc; ?>
                            <?php endif; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <p style="float: right;">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($total, 2, ",", ""); ?>&nbsp;&nbsp;&nbsp;</p>
        <?php else: ?>
            O carrinho está vazio.
        <?php endif; ?>
    </div>
</section>