<!-- Modal -->
<div class="modal fade" id="modalDesafio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Criando desafio</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<div class="select">
					<div>
						<img src="../assets/images/icons/icDesafioExpress.svg">
						<img src="../assets/images/logoExpress.svg">
						<span>30 dias</span>
						<button id="btnComecar">Começar</button>
					</div>

					<div>
						<img src="../assets/images/icons/icDesafioCavernoso.svg">
						<img src="../assets/images/logoCavernoso.svg">
						<span>60 dias</span>
						<button id="btnComecar">Começar</button>
					</div>
				</div>
				<!--  -->
				<div class="desafioOptions" style="display:none">
					<span>Me comprometo a abdicar de:</span>
					<div class="formItem">
						<input type="text" id="inputAbdicar" class="form-control" placeholder="Adicionar">
						<button id="btnAdicionarAbdicar">Adicionar</button>
					</div>
					<div class="itensAdicionadosAbdicar">
						<span>Itens Adicionados</span>
						<ul></ul>
					</div>
					<small>Clique nas sugestões abaixo e adicione à sua lista caso faça sentido.</small>
					<div class="sugestoesAbdicar">
						<ul>
							<li>Pornografia</li>
							<li>Álcool</li>
							<li>Drogas</li>
							<li>Jogos de Aposta</li>
							<li>Festas</li>
							<li>FastFood</li>
							<li>Viagens</li>
							<li>Video Game</li>
						</ul>
					</div>
					<hr>
					<span>Não posso falhar::</span>
					<div class="formItem">
						<input type="text" id="inputFalhar" class="form-control" placeholder="Adicionar">
						<button id="btnAdicionarFalhar">Adicionar</button>
					</div>
					<div class="itensAdicionadosFalhas">
						<span>Itens Adicionados</span>
						<ul></ul>
					</div>
					<small>Clique nas sugestões abaixo e adicione à sua lista caso faça sentido.</small>
					<div class="sugestoesFalhas">
						<ul>
							<li>Ritual Matinal</li>
							<li>Ritual Noturno</li>
							<li>30min de Atividade Física</li>
							<li>Jogos de Aposta</li>
							<li>2h Flow Produtividade</li>
							<li>1h Flow Estudos</li>
							<li>Devocional</li>
						</ul>
					</div>

					<textarea placeholder="Escreva sua mensagem..." class="form-control"></textarea>
					<input class="form-control" type="file" id="formFile">
					<button class="success">Começar desafio</button>
				</div>
			</div>
		</div>
	</div>
</div>