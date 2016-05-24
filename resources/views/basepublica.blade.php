<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DJ Oliver Jr</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/coin-slider.css')}}" />
<link rel="stylesheet" media="all" type="text/css" href="{{asset('css/slide_show.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/galery.css')}}" />


<link rel="stylesheet" type="text/css" href="{{asset('/css/coin-slider.css')}}" />
<script type="text/javascript" src="{{asset('/js/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/droid_sans_400-droid_sans_700.font.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery-1.4.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/coin-slider.min.js')}}"></script>

@yield('js')  



</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <!-- Conteúdo do topo  --> 
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="/images/slide1.jpg" width="920" height="329" alt="" /> </a> <a href="#"><img src="/images/slide2.jpg" width="920" height="329" alt="" /> </a> <a href="#"><img src="/images/slide3.jpg" width="920" height="329" alt="" /> </a> <a href="#"><img src="/images/slide4.jpg" width="920" height="329" alt="" /> </a> <a href="#"><img src="/images/slide5.jpg" width="920" height="329" alt="" /> </a> <a href="#"><img src="/images/slide6.jpg" width="920" height="329" alt="" /> </a></div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
          
        @yield('content')  
          
        
          
      </div>
      <div class="sidebar">
        
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star">Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="/" target="_self"><b>Principal</b></a></li>
            <li><a href="/dj" target="_self"><b>Sobre o DJ</b></a></li>
            <li><a href="/estruturas" target="_self"><b>Estruturas</b></a></li>
            <li><a href="/depoimentos" target="_self"><b>Depoimentos</a></b></li>
            <li><a href="/contato" target="_self"><b>Contato</a></b></li>
           
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Dicas</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="/dica2" target="_self">Festa de casamento</a><br />
              Dicas para preparar sua festa.</li>
            <li><a href="/dica4" target="_self">Contratar um bom DJ</a><br />
              Como contratar um bom serviço de DJ.</li>
            <li><a href="/dica3" target="_self">Não dance na escolha do DJ</a><br />
              5 erros comuns cometidos pelos clientes.</li>
              <li><a href="/dica1" target="_self">Organizar aniversário de 15 anos</a><br />
              15 dicas para não errar na organização.</li>
            
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Galeria de </span> fotos</h2>
        <a href="/fotos" target="_self"><img src="/images/gal1.jpg" width="75" height="75" alt="" class="gal" />
        </a> <a href="/foto" target="_self"><img src="/images/gal2.jpg" width="75" height="75" alt="" class="gal" />
        </a> <a href="/foto" target="_self"><img src="/images/gal3.jpg" width="75" height="75" alt="" class="gal" />
        </a> <a href="/foto" target="_self"><img src="/images/gal4.jpg" width="75" height="75" alt="" class="gal" />
        </a> <a href="/foto" target="_self"><img src="/images/gal5.jpg" width="75" height="75" alt="" class="gal" />
        </a> <a href="/foto" target="_self"><img src="/images/gal6.jpg" width="75" height="75" alt="" class="gal" />
        </a> </div>
      <div class="col c2">
        <h2><img src="/images/imagem1.jpg" width="290" height="220" /> </h2>
      </div>
      <div class="col c3">
        <h2><span>Contatos</span></h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Facebook</span> <a href="http://facebook.com/Oliverjrmusic/" target="_blank"> facebook.com/Oliverjrmusic</a><br />
          <span>Telefone1:</span> (14) 9 9608-1233<br />
          <span>Telefone2:</span> (14) 9 9797-0603<br />
          
          <span>E-mail:</span> dj_oliverjr@hotmail.com </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf"></p>
      <p class="rf"></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>

