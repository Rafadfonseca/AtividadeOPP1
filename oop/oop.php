<?php

include_once './Classes/Gato.class.php';

$objGato = new Gato("Nigiri", 2, "Macho", 4, "amarelo", "curto");
echo $objGato->exibirGato();
exit();
include_once './Classes/Animal.class.php';
$animal = new Animal();
$animal->nome = 'Shoyu';
$animal->especie = 'Mamifero';
$animal->idade = 7;
$animal->sexo = 'Macho';
$animal->peso = '5';
$animal->cor = 'preto';
$animal->status = 'Não adotado';
$animal->chipado = 'nao';
echo "atividade 1 <br><br>" .$animal->exibirFicha();
echo $animal->atualizarPeso(6);
echo $animal->alterarStatus("Adotado");
echo $animal->verificarIdade()."<br>";
echo $animal->marcarComoChipado(). "<br>";
echo $animal->verificarCor();
echo $animal->verificarSexo(). "<br>";
echo $animal->resumoAnimal();

include_once './Classes/Cachorro.class.php';
$cachorro = new Cachorro();
$cachorro->nome = 'Ice';
$cachorro->raca = 'Bulldog Francês';
$cachorro->porte = 'Médio';
$cachorro->nivelEnergia = '5';
$cachorro->vacinado = 'Sim';
$cachorro->vermifugado = 'Sim';
$cachorro->sociavel = 'Sim';
$cachorro->adestrado = 'Não';
echo "atividade 2 <br><br>" .$cachorro->exibirCachorro();
echo $cachorro->vacinar(). "<br>";
echo $cachorro->verificarAdestramento(). "<br>";
echo $cachorro->atualizarNivelEnergia();
echo $cachorro->indicarPorte();
echo $cachorro->socializar(). "<br> <br>";
echo $cachorro->resumoCachorro();


/*/
include_once './Classes/Gato.class.php';
$gato = new Gato();
$gato->nome = 'Nigiri';
$gato->pelagem = 'amarela';
$gato->castrado = 'sim';
$gato->independente = '3';
$gato->vacinado = 'sim';
$gato->curioso = 'sim';
$gato->contatoHumano = 'sim';
$gato->usaCaixaAreia = 'sim';
echo "atividade 3 <br><br>" .$gato->exibirGato();
echo $gato->castrar(). "<br>";
echo $gato->verificarPelagem(). "<br>";
echo $gato->atualizarIndependencia(). "<br>";
echo $gato->vacinar(). "<br>";
echo $gato-> ensinarCaixaAreia(). "<br>" ;
echo $gato->verificarContato(). "<br>". "<br>";
echo $gato->resumoGato();
/*/

include_once './Classes/Adotante.class.php';
$adotante = new Adotante();
$adotante->nome = 'Rafaela';
$adotante->telefone = '51980221363';
$adotante->email = 'rafaeladf2007@gmail.com';
$adotante->endereco = 'Rua marcos moreira 80';
$adotante->temOutrosAnimais = 'sim';
$adotante->experienciaComPets = 'sim';
$adotante->animalAdotado = '-';
echo "atividade 4 <br><br>" .$adotante->exibirAdotante();
echo $adotante->adotarAnimal(). "<br>";
echo $adotante->verificarIdade(). "<br>";
echo $adotante->temExperiencia(). "<br>";
echo $adotante->listarContato(). "<br>";
echo $adotante->verificarOutrosAnimais(). "<br>" ;
echo $adotante->cancelarAdocao(). "<br>";
echo $adotante->resumoAdotante();

?>

