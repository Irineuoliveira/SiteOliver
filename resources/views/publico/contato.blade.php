@extends('basepublica')

@section('js')    

<script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeypress = function(){
		mascara( this, mtel );
	}
}

function IsEmail(email){
    var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
    var check=/@[\w\-]+\./;
    var checkend=/\.[a-zA-Z]{2,3}$/;
	if(email != "")
	{
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){
		alert("Endereço de email incorreto!");
		return false;
		}else {			
		return true;
		}
	}else{
		return true;
	}
		
}



</script>


@endsection

@section('content')    
<div class="article">
          <font size="+2"><span>Formulário de contato</span></font>
          <div class="clr"></div>
          <p>Utilize o formulário de contato para deixar um recado ou um pedido de orçamento. Preencha os campos a baixo e assim que eu receber o recado, já entro em contato.</p>
        </div>

@if ($errors->any())
       <ul class="alert alert-warning">
@foreach($errors->all() as $error)
      <li>{{ $error }}</li>
@endforeach
    </ul>
@endif




        
             <div class="article">
          <h2><span>Envie seu recado</span></h2>
          <div class="clr"></div>
          
              {!! Form::open(array('url' => '/gravar', 'id'=>'sendemail')) !!}
            <ol>
              <li>
                <label for="name">Nome</label>
                {!! Form::text('nome', null, array('class' => 'text', 'id' => 'nome', 'required'=> 'required' )); !!}
              
              </li>
              <li>
                <label for="email">Endereço de e-mail</label>
                {!! Form::text('e-mail', null, array('class' => 'text', 'id' => 'email', 'required'=> 'required' )); !!}
                
              </li>
              <li>
                <label for="website">Telefone</label>
                {!! Form::text('fone', null, array('class' => 'text', 'id' => 'telefone' )); !!}
                
                
              </li>
              <li>
                <label for="message">Recado</label>
                {!! Form::textarea('texto', null, array('id' => 'message', 'rows' => '8', 'cols' => '50', 'required'=> 'required')); !!}
                
              </li>
              <li>
              
                    
                <input type="image" name="imageField" id="imageField" src="images/enviar.gif" class="send" onclick="return IsEmail(document.getElementById('email').value)" />
                <div class="clr"></div>
              </li>
            </ol>
         {!! Form::close() !!}
          
          
        </div>
        <?php
		 if(isset($_GET['r']))
		 {
			 if($_GET['r'] == 1){				 
			         
        echo("<font size='+2' color='#FF0000'><b>Contato envidado com sucesso!</b></font><br />
       <font size='3'><b>Obrigado pelo contato! Eu te retornarei o mais breve possível.</b></font>");
			 }
			 else{
				echo("<font size='+2' color='#FF0000'><b>O contato não foi envidado</b></font><br />
       <font size='3'><b>Deve ter ocorrido algum erro na hora de gravar o seu contato. Por favor, tente novamente!</b></font>"); 
			 }
	   
	   unset($r);
		 }
       ?>
@endsection