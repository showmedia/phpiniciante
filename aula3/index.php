<?php 

//criando uma variável e adicionando o valor a ela;
$nota = 7;
$media = 6;


//estrutura condicional
// > MAIOR
// < MENOR
// == IGUAL
// <= MENOR OU IGUAL
// >= MAIOR OU IGUAL

if($nota > $media /* && $nota < $media */){
    echo 'Aprovado';
}else if($nota == $media){
    echo 'Na Média';
}else{
    echo 'Repovado';
}

?>
<br><br>
<?php 

//estrutura de repetição
for($i=0;$i<10;$i++){
    echo 'Pedro Neres - '. $i . '<br>';
}

echo 'acabou';
?>