 <!-- script de rolagem -->

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $(".scroll").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>
 <!-- fim do script de rolagem -->


<section id="home">
<div class="home">
        <div class="centralizador">
            <img class="centromeio" src="imagens/onglogo.png">
        </div>
            <br />
            <center><a href="#sobre" class="scroll" id="buttonp">CONHEÇA</a></center>
        </div>
    </section>



<style type="text/css">
    
.home{
  height: 100vh;
  background: url(imagens/slide.gif) no-repeat center center fixed; 
  background-size: cover;
  color:#00d0c5;
}

    .centralizador{
  text-align: center;

}

    img.centromeio {
  height: 50%;
  width: 50%;
  margin-top: 15%;
}
    
</style>
