<div id="faixa-home" class="container-fluid container-off-padding hidden-xs">
 <div class="container container-off-padding"><p class="text-center">Aproveite esta oportunidade em reformar ou iniciar sua obra de forma inteligente e econômica</p></div>
</div>

<div id="home" class="container-fluid container-off-padding">
  <div class="container container-off-padding">

      <div class="col-xs-12 col-sm-12 col-md-8 home container-off-padding">
        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/home.png" alt="">
      </div>  

      <div class="col-xs-12 col-sm-12 col-md-4 pull-right form">
        <form method="post" role="form" action="http://www.spicycomm.com.br/formEmail/construct/contato">
          <div class="tel-header">Ligue agora: <span>3045-4530</span></div>  
          <span class="tt-form"><img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/tt-orcamento.png" alt=""></span>
          
          <div class="group-form">
            <div class="form-group">
              <label for="nome">Nome*</label>
              <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
            </div>

            <div class="form-group">
              <label for="email">Email*</label>
              <input id="email" type="email" class="email form-control" name="email" required="required"/>
            </div>

            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input id="telefone" class="phone form-control" type="tel" name="phone"/>
            </div>

            <div class="form-group">
              <label for="form-mensagem">Mensagem</label></br>
              <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
            </div>  

            <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
          </div>
        </form>

      </div> 
    </div> 

  </div>
</div>

<div id="banner-bonus" class="container-fluid container-off-padding">
  <div class="container container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/banner-desconto.png" alt="">
  </div>
</div>
<div class="container-fluid container-off-padding">
  <div class="container container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/banner-qualidades.png" alt="">
  </div>
</div>

<div class="container container-off-padding"><p class="text-center tt-servicos">Conheça nossos serviços</p></div>

<div class="container container-off-padding servicos">
  <blockquote>
    <p><i>REFORMAS RESIDENCIAIS e COMERCIAIS</i></p>
  </blockquote>

  <div class="row row-off-margin">

    <div class="col-xs-12 col-sm-6 col-md-6 container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/servico01.png" alt="">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/REFORMAS.png" alt="">
    </div>

  </div>

</div>

<div class="container container-off-padding servicos">
  <blockquote>
    <p class="text-right"><i>MANUTENÇÃO PREDIAL</i></p>
  </blockquote>

  <div class="row row-off-margin">

    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-push-6 col-md-push-6 container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/servico02.png" alt="MANUTENÇÃO PREDIAL">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6 container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/manutencao.png" alt="MANUTENÇÃO PREDIAL">
    </div>

  </div>

</div>

<div class="container container-off-padding servicos">
  <blockquote>
    <p><i>MANUTENÇÃO PREDIAL - FACHADAS</i></p>
  </blockquote>

  <div class="row row-off-margin">

    <div class="col-xs-12 col-sm-6 col-md-6 container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/servico03.png" alt="MANUTENÇÃO PREDIAL - FACHADAS">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 container-off-padding">
      <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/FACHADAS.png" alt="MANUTENÇÃO PREDIAL - FACHADAS">
    </div>

  </div>

</div>

<div class="container container-off-padding"><p class="text-left tt-banner-bonus">conheça também</p></div>
<div id="banner-bonus" class="container-fluid container-off-padding">
  <div class="container container-off-padding">
      <a href="http://www.outletcomprouganhou.com.br/" target="_blank"><img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/outlet.png" alt="MAIS DE 2.000 OPÇÕES DE IMÓVEIS PARA COMPRA E LOCAÇÃO."></a>
  </div>
</div>

<?php 
if(isset($email_enviado))
    echo $email_enviado;
?>

<!-- Código do Google para tag de remarketing -->
<!--
As tags de remarketing não podem ser associadas a informações pessoais de identificação nem inseridas em páginas relacionadas a categorias de confidencialidade. Veja mais informações e instruções sobre como configurar a tag em: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 874085612;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/874085612/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>