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
          
          <div id="box_servicos">
                <div class="row">
        <!-- div desenvolvedor (João) -->
                  <div class="column">
                    <div class="card">
                    <img src="imagens/web.png" width="50px" height="50px">
                      <div class="container">
                       <p class="title">Criação de Sistemas Web</p>
                  <p class="cont">Sistemas web são soluções que podem ser desenvolvidas para tornar processos manuais mais simples, rápidos e eficazes. Nesse caso, falamos de atividades como cadastro de clientes, gestão de documentos ou de estoque, por exemplo.</p>
                      </div>
                    </div>
                  </div>
                    
                  
        <!-- div desenvolvedor (Nathalia) -->
                  <div class="column">
                    <div class="card">
                  <img src="imagens/servidor.png" width="50px" height="50px">
                      <div class="containern">
                       <p class="title">Admnistração de Servidores</p>
                  <p class="cont">O objetivo da administração de servidores é instalar e manter serviços de rede aos usuários de uma instituição de forma transparente. Exemplos de serviços de rede que podem ser providos aos usuários: controle de login na rede e mais.</p>
                      </div>
                    </div>
                  </div>

        <!-- div desenvolvedor (Mariana) -->
                  <div class="column">
                    <div class="card">
                      <img src="imagens/marianaquadro.png" alt="Mariana" style="width:100%">
                      <div class="container">
                        <p class="title">Web Designer</p>
                        <p class="cont">Responsável pela identidade visual da empresa e front-end.</p>
                      </div>
                    </div>
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
    
    
 .container {
  padding: 16px;
  background-color: #00e4bf;
    }
    
    .containern{ /* container que deixa a caixa da nathalia diferente */
  padding: 16px;
  background-color: #00acd0;
      }
    

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}   

.title {
  color: rgb(255, 255, 255);
  font-family: 'Lato', sans-serif;
}

.cont{
  color: rgb(255, 255, 255);
  font-family: 'Lato', sans-serif;
}
    
    .column1 {
  float: left;
  width: 28%;  
  padding: 0 8px;
  align-items: center;
}

    #servicos{
  align-items: center;
  justify-content: center;
  width:130vh;
  height:130vh;
  
}

    .titulo1{
  font-family: 'Lato', sans-serif;
  font-weight: bold;
  color:#00d0c5;
  font-size:5vh;
  text-align:center;
  
}
    
   @media screen and (max-width: 600px) {
   
   
           
           .column1{
               width: 50%;
               margin-left: 25%;
            margin-right: 25%;
           }
            
    
}    
    
</style>

