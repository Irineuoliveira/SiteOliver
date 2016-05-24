@extends('basepublica')

@section('js')

<script language="JavaScript">
var foto=1
total=34 <!-- DIGITE AQUI O TOTAL DE FOTOS -->
function backward(){
if (foto>1){
window.status='Carregando...';
foto--;
document.images.photoslider.alt="Carregando...";
document.images.photoslider.src="";
document.images.photoslider.src="galeria/"+foto+".jpg";
fim.style.visibility='hidden';
window.status='';
document.rotater.numero.value=foto;
}
}
function forward(){
if (foto<total){
window.status='Carregando...';
foto++;
document.images.photoslider.alt="Carregando...";
document.images.photoslider.src="";
document.images.photoslider.src="galeria/"+foto+".jpg";
window.status='';
document.rotater.numero.value=foto;
}
if (foto==total)
{
fim.style.width='100%';
fim.style.height='20px';
fim.style.visibility='visible';
window.status='Final das fotos';
}
}
function mudar(valor)
{
foto=valor;
document.images.photoslider.alt="Carregando...";
document.images.photoslider.src="";
document.images.photoslider.src="galeria/"+valor+".jpg";
document.rotater.numero.value=foto;;
}

function combo(n)
{
n=total;
ni=1;
document.write("<select size='1' class='botao' onChange='location = options[selectedIndex].value'>");
   while(ni<=n)
   {
   document.write("<option value='Javascript:mudar("+ni+")'>"+ni+"</option>");
   ni++;
   }
document.write("</select>");
}
</script>

<style type="text/css"> 
.botao {
background-color:#ffffff;
font-family:Verdana, Arial, Helvetica, sans-serif;
color:#FF0000;
font-size:9pt;
border:1px solid #ff0000;
} 
</style>
@endsection

@section('content')
<div class="article">
          <h2><span>Galeria de fotos</span></h2>
        </div>        
       <input type="button" value="&lt;&lt;Anterior" class="botao" name="B2" onClick="backward()">
<input type="button" value="Próxima&gt;&gt;" class="botao" name="B1" onClick="forward()">
<input type="button" value="Início" class="botao" onClick="foto=2;backward();return false">
<table border="0" cellpadding="0">
  <tr>
    <td width="100%"><img src="galeria/1.jpg" name="photoslider">
    </td>
  </tr>
  <tr>
    <td width="100%"><form method="POST" name="rotater">
<div id="fim" align="center" style="visibility:hidden; width:1px; height:1px; z-index:1;"><b>FINAL DAS FOTOS</b></div>
<b><font color=#ff0000>Foto <input type="text" name="numero" size="1" value="1"class="botao"> de 

<!-- DIGITE AQUI TAMBÉM O TOTAL DE FOTOS -->34

 - Vá para foto: </font></b><script>Javascript:combo()</script></p>
</form>
 </td>
  </tr>
</table>

@endsection
