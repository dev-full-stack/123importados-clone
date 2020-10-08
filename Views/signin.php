<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="title" style="margin-left: 0px; font-size: 17pt;">CRIAR CONTA</h1>
		</div>
		<form method="POST" id="form-cadastro" style="width: 100%;">
			<div class="col-md-12" style="font-family:'Montserrat', sans-serif;border-top: 5px solid #009CDE; border-left: 3px solid #ECECEC; border-bottom: 3px solid #ECECEC; border-right: 3px solid #ECECEC; padding-left: 20px;">
				<h1 class="title" style="font-size: 14pt; margin-top: 30px; margin-bottom: 30px;">INFORMAÇÕES DE CONTA</h1>
				<input type="radio" name="Pessoa" id="PF" value="PF" style="margin-left: 5px;color: #009CDE;" checked><label style="color:#777777; margin-left: 10px; font-family: 'Montserrat', sans-serif; font-size: 11pt;" for="PF">Pessoa Física</label><br>
				<input type="radio" name="Pessoa" id="PJ" value="PJ" style="margin-left: 5px;color: #009CDE;"><label style="color:#777777; margin-left: 10px; font-family: 'Montserrat', sans-serif; font-size: 11pt;" for="PJ">Pessoa Jurídica</label><br>
				<label style="color:#777777; font-size: 10pt;" for="nome">Nome <span style="color: red;">*</span></label><br>
				<input style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 5px;" type="text" name="nome" id="nome" required="true" autocomplete="off">
				<label style="color:#777777; font-size: 10pt;" for="sn">Sobrenome <span style="color: red;">*</span></label><br>
				<input style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" type="text" name="sn" id="sn" required="true" autocomplete="off">
				<label style="color:#777777; font-size: 10pt;" for="email">Email <span style="color: red;">*</span></label><br>
				<input style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 20px;" type="email" name="email" id="email" required="true" autocomplete="off">
				<h1 class="title" style="font-size: 14pt; margin-top: 30px; margin-bottom: 20px;">DADOS DE ACESSO</h1>
				<label style="color:#777777; font-size: 10pt;" for="senha">Senha <span style="color: red;">*</span></label><br>
				<input style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" type="password" name="senha" id="senha" min="8" max="64" minlength="8" maxlength="64">
				<label style="color:#777777; font-size: 10pt;" for="csenha">Confirmar Senha <span style="color: red;">*</span></label><br>
				<input style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 20px;" type="password" name="csenha" id="csenha" min="8" max="64" minlength="8" maxlength="64">
				<h1 class="title" style="font-size: 14pt; margin-top: 30px; margin-bottom: 20px;">DADOS PESSOAIS</h1>
				<label style="color:#777777; font-size: 10pt;" for="cpf">CPF <span style="color: red;">*</span></label><br>
				<input style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" type="number" name="cpf" id="cpf" required="true" autocomplete="off">
				<label style="color:#777777; font-size: 10pt;" for="rg">*RG</label><br>
				<input style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" type="number" name="rg" id="rg" required="true" autocomplete="off">
				<label style="color:#777777; font-size: 10pt;" for="rg">Data de nascimento</label><br>
				<select style="outline:none; border: 1px solid #CCCCCC; width: 25%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" name="dia" id="dia">
					<option selected>Dia</option>
					<?php
						for ($i=1; $i < 32; $i++) { 
							echo "<option>".str_pad($i, 2, 0, STR_PAD_LEFT)."</option>";
						}
					?>
				</select>
				<select style="outline:none; border: 1px solid #CCCCCC; width: 25%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" name="mes" id="mes">
					<option selected>Mês</option>
					<option value="01">Janeiro</option>
					<option value="02">Fevereiro</option>
					<option value="03">Março</option>
					<option value="04">Abril</option>
					<option value="05">Maio</option>
					<option value="06">Junho</option>
					<option value="07">Julho</option>
					<option value="08">Agosto</option>
					<option value="09">Setembro</option>
					<option value="10">Outubro</option>
					<option value="11">Novembro</option>
					<option value="12">Dezembro</option>
				</select>
				<select style="outline:none; border: 1px solid #CCCCCC; width: 45%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" name="ano" id="ano">
					<option selected>Ano</option>
					<?php
						for ($i = date("Y"); $i > 1919; $i--) { 
							echo "<option>".$i."</option>";
						}
					?>
				</select><br>
				<label style="color:#777777; font-size: 10pt; margin-top: 10px;" for="sexo">Sexo</label><br>
				<select style="outline:none; border: 1px solid #CCCCCC; width: 100%; font-family: 'Montserrat', sans-serif; color: #8D7777; font-size: 10pt; height: 35px; padding-left: 10px; margin-bottom: 10px;" name="sexo" id="sexo">
					<option selected></option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select><br><br>
                
                <div class="return"></div>

				<input style="background-color: #009CDE; margin-top: 10px; margin-left: 5px;" type="checkbox" name="ofertas" id="ofertas" value="SIM">&nbsp;<label style="color:#777777; font-size: 10pt;" for="ofertas">Desejo receber ofertas por email</label><br><br>
				<span style="color: red; font-size: 9pt; margin-left: 87%;">* campos obrigatórios</span><br>
				<button style="background-color: transparent; border:none; outline: none; color: #4ABBED;" onclick="javascript:history.back()"><small><< Voltar</small></button>
				<button type="submit" class="button-form" style="margin-top: 5px; margin-left: 83%;">Enviar</button>
				<div style="margin-bottom: 50px;"></div>
			</div>
		</form>
	</div>
</div>
<div style="margin-bottom: 40px;"></div>
