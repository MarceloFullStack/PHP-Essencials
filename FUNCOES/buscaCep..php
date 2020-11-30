<?php   
/* 
 *  Função de busca de Endereço pelo CEP 
 *  -   Desenvolvido Marcelo Guimarães para a Copam 
 *  -   Utilizando WebService de CEP da viacep.com.br 
 */  
function busca_cep($cep){  
    $resultado = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json/unicode/');  
    if(!$resultado){  
        $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";  
    }  
    $retorno = json_decode($resultado);
    header('Content-Type: application/json');
    return ($retorno);  
}  
$resultado_busca = busca_cep('44003470'); 

//retorna um objeto

print($resultado_busca->cep);