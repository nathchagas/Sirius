 <!-- script de rolagem -->

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $(".scroll").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>
 <!-- fim do script de rolagem -->

<section class="home">
    <center>
      <div id="servicos">
        <div class="titulo1" ><br/><br/>Nossos Serviços</div>
        <br/><br/>
        <div class="row">
          <div class="column1">
            <div class="card">
                <div class="containeservicos">
                  <img src="imagens/web.png" width="50px" height="50px">
                  <p class="title">Criação de Sistemas Web</p>
                  <p class="cont">Sistemas web são soluções que podem ser desenvolvidas para tornar processos manuais mais simples, rápidos e eficazes. Nesse caso, falamos de atividades como cadastro de clientes, gestão de documentos ou de estoque, por exemplo.</p>
                </div>
             </div>
          </div>

          <div class="column1">
            <div class="card">
                <div class="containeservicos1">
                  <img src="imagens/servidor.png" width="50px" height="50px">
                  <p class="title">Admnistração de Servidores</p>
                  <p class="cont">O objetivo da administração de servidores é instalar e manter serviços de rede aos usuários de uma instituição de forma transparente. Exemplos de serviços de rede que podem ser providos aos usuários: controle de login na rede e mais.</p>
                </div>
            </div>
          </div>
            
        <div class="column1">
          <div class="card">
            <div class="containeservicos">
             <img src="imagens/manutencao.png" width="50px" height="50px">
             <p class="title">Manutenção de Sites</p>
             <p class="cont">Sistemas web são soluções que podem ser desenvolvidas para tornar processos manuais mais simples, rápidos e eficazes. Nesse caso, falamos de atividades como cadastro de clientes, gestão de documentos ou de estoque, por exemplo.      </p>
            </div>
          </div>
        </div>
     </div> <!-- fecha a div "row" -->
    </div> <!-- fecha a div "id serviços" -->
  </center>
</section>
        
<style type="text/css">
    
.home{
  height: 100vh;
  background: url(imagens/slide.gif) no-repeat center center fixed; 
  background-size: cover;
  color:#00d0c5;
}
    
    


</style>

