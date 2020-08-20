<div class="topnav" id="myTopnav">
<nav class="navbar navbar-expand-md fixed-top navbar-dark" id="navbar">  <!-- para deixar transparente (bg-transparent) -->
  <!-- Botão que aparece quando a página está com o tamnho reduzido -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

    <!-- (mx-auto) centraliza o menu -->
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto"> 
      <li class="nav-item">
          <a href="#sobre" class="nav-link" id="scroll"><p id="fonte"> Sobre nós</p></a>
      </li>
      <li class="nav-item">
          <a href="#servicos" class="nav-link" id="scroll1" ><p id="fonte">Serviços</p></a>
      </li>
      <li class="nav-item">
        <a href="#home" class="nav-link" id="scroll2" ><img src="imagens/logo_sirius.gif" height="40"></a>
      </li>
        <li class="nav-item">
            <a href="#conceitos" class="nav-link" id="scroll3" ><p id="fonte">Conceitos</p></a>
      </li>
        <li class="nav-item">
            <a href="#contato" class="nav-link" id="scroll4" ><p id="fonte">Contato</p></a>
      </li>
    </ul>
  </div>  
    
    
    
</nav>
</div>


<style type="text/css"> 
    #fonte {
        font-size: 20px;
        color:#00d0c5;
    }
    
    
.mudaCor{
   background-color:#fff;

    }
</style>

<!-- script de rolagem -->
<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $("#scroll").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>


<!-- Script que muda a cor do menu de transparente para branco -->
<script type="text/javascript">
    var el = document.getElementById('navbar'); // elemento alvo
    var numPx = '250'; // Quantidade de pixels a contar do TOP até definir a cor

    window.addEventListener('scroll', function() {
        if (window.scrollY > numPx) {
            el.classList.add('mudaCor');// adiciona classe "mudaCor"
        } else {
          el.classList.remove('mudaCor'); // remove classe "mudaCor"
        }
    });
    </script>






