<? php


	$ assunto         = $ _POST [ 'assunto' ];
	$ corpo  			= "
		Nome: " . $ _POST [ 'nome' ]. "
		Email: " . $ _POST [ 'email' ]. "
		Mensagem: " . $ _POST [ 'mensagem' ]. "
	" ;

  mail ( 'felippeipb@gmail.com' , $ assunto , $ corpo , 'De: no-reply@flupynho.com.br' );


	echo  'Seus dados foram enviados com sucesso!' ;
?>
