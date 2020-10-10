<footer class="container-fluid">
	<section class="row">
		<article class="col-12" id="contato-footer">
			<h3 class="col-12 col-md-4 offset-md-4">Entre em Contato</h3>
			<form action="https://costureira-de-cenografia.com.br/obrigada.php" class="col-md-4 offset-md-4 col12" id="cotacao" method="POST" name="cotacao">
				<label class="col-12" for="nome">Nome*<br /><input id="nome" name="nome" placeholder=" nome" required></label>
				<br />
				<label class="col-12" for="email">email*<br /><input type="email" id="email" name="email" placeholder=" email" required></label>
				<br />
				<label class="col-12" for="tel">telefone<br /><input type="number" id="tel" name="tel" placeholder=" telefone (com DDD)"></label>
				<br />
				<label class="col-12" for="tipo-de-projeto">
					Tipo de projeto desejado<br />
					<input type="checkbox" id="cenario" name="cenario" value="cenario"> Cenário<br />
					<input type="checkbox" id="figurino" name="figurino" value="figurino"> Figurino<br />
					<input type="checkbox" id="outro" name="outro" value="outro"> Outro<br />
				</label>
				<br />
				<label class="col-12" for="mensagem">Mensagem<br /><textarea id="mensagem" name="mensagem" rows="6"></textarea></label>
				<br />
				<input type="submit" value="Enviar" class="solicitarOrcamento">
				<input type="reset" value="Limpar" class="verMais">
			</form>
		</article>
	</section>
</footer>
<script async defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
<script async defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"></script>
<script async defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
<script async defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script>
	const menu = document.querySelector('nav');
	window.onscroll = function() {
		menuRolagem()
	};
	function menuRolagem() {
		if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
			menu.style = 'background-color: rgba(0,0,0,0.75) !important; height: 60px;';
		} else {
			menu.style = 'background-color: rgba(0,0,0,0.0) !important; height: 71px;';
		}
	}
	const cases = document.querySelectorAll('li[class*="card"]')
	const filtroCenarios = document.querySelector('#filtroCenarios');
	const cenarios = document.querySelectorAll('.cardCenario');
	const filtroFigurinos = document.querySelector('#filtroFigurinos');
	const figurinos = document.querySelectorAll('.cardFigurino');

	function apenasCenarios() {
		for (i = 0; i < cases.length; i++) {
			if (cases[i].classList.contains('cardFigurino') && !cases[i].classList.contains('cardCenario')) {
				cases[i].style.display = 'none';
			} else {
				cases[i].style.display = 'block';
			}
		}
	}
	function apenasFigurinos() {
		for (i = 0; i < cases.length; i++) {
			if (cases[i].classList.contains('cardCenario') && !cases[i].classList.contains('cardFigurino')) {
				cases[i].style.display = 'none';
			} else {
				cases[i].style.display = 'block';
			}
		}
	}
	function todosCases() {
		for (i = 0; i < cases.length; i++) {
			cases[i].style.display = 'block';
		}
	}
</script>