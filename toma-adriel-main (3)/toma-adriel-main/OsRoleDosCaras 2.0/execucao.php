<?php

require_once("../modelo/Casa.php");
require_once("../modelo/Carro.php");
require_once("../modelo/Moto.php");
require_once("../modelo/Camioneta.php");
require_once("../modelo/Caminhao.php");
require_once("../modelo/Oficina.php");
require_once("../modelo/BarResenha.php");
require_once("../modelo/PostoResenha.php");

echo "    ____        __            __              ______                   
   / __ \____  / /__     ____/ /___  _____   / ____/___ __________ ______
  / /_/ / __ \/ / _ \   / __  / __ \/ ___/  / /   / __ `/ ___/ __ `/ ___/
 / _, _/ /_/ / /  __/  / /_/ / /_/ (__  )  / /___/ /_/ / /  / /_/ (__  ) 
/_/ |_|\____/_/\___/   \__,_/\____/____/   \____/\__,_/_/   \__,_/____/  ";

$Veiculos = array();
$Estabelecimento = array();
$escolha = 0;
do {
    echo "Oq voce deseja fazer?
    1 - Cadastrar Veiculo
    2 - Cadastrar Estabelecimento
    0 - Ja ta bom de cadastrar, vamos jogar";

    $escolha = readline();

    system('clear');

    switch ($escolha) {
        case '1':
            echo "Qual veiculo deseja cadastrar?
            1 - Carro
            2 - Moto
            3 - Camioneta
            4 - Caminhao";

            $escolha = readline();

            switch ($escolha) {
                case '1':
                    $carro = new Carro();
                    $carro->setCor(readline("Cor: "));
                    $carro->setModelo(readline("Modelo: "));
                    $carro->setQntPortas(readline("Quantidade de portas: "));
                    $carro->setVelMaxima(readline("Velocidade máxima: "));
                    $carro->setPeso(readline("Peso: "));
                    $Veiculos[] = $carro;
                    echo "Carro cadastrado com sucesso!";

                    break;

                case '2':
                    $moto = new Moto();
                    $moto->setCor(readline("Cor: "));
                    $moto->setModelo(readline("Modelo: "));
                    $moto->setVelMaxima(readline("Velocidade máxima: "));
                    $moto->setMaestria(readline("Sua maestria com a moto: "));
                    $Veiculos[] = $moto;
                    echo "Moto cadastrada com sucesso!";

                    break;

                case '3':
                    $camioneta = new Camioneta();
                    $camioneta->setCor(readline("Cor: "));
                    $camioneta->setModelo(readline("Modelo: "));
                    $camioneta->setVelMaxima(readline("Velocidade máxima: "));
                    $camioneta->setPeso(readline("Peso: "));
                    $camioneta->setQntPortas(readline("Quantidade de portas: "));
                    $camioneta->setCapacidadeCarga(readline("Capacidade de carga: "));
                    $Veiculos[] = $camioneta;
                    echo "Camioneta cadastrada com sucesso!";

                    break;

                case '4':
                    $caminhao = new Caminhao();
                    $caminhao->setCor(readline("Cor: "));
                    $caminhao->setModelo(readline("Modelo: "));
                    $caminhao->setVelMaxima(readline("Velocidade máxima: "));
                    $caminhao->setPeso(readline("Peso: "));
                    $caminhao->setQntPortas(readline("Quantidade de portas: "));
                    $caminhao->setCapacidadeCarga(readline("Capacidade de carga: "));
                    $caminhao->setQntEixos(readline("Quantidade de eixos: "));
                    $Veiculos[] = $caminhao;
                    echo "Caminhão cadastrado com sucesso!";

                    break;

                default:
                    echo "tente cadastrar um veiculo valido";
                    break;
            }
            break;

        case '2':
            echo "Qual estabelecimento deseja cadastrar?
            1 - Bar
            2 - Casa
            3 - Posto de Gasolina
            4 - Oficina Mecanica";

            $escolha = readline();

            switch ($escolha) {
                case '1':
                    $bar = new Bar();
                    $bar->setNome(Readline("Qual é o nome do bar: "));
                    $bar->setDono(Readline("Qual é o dono do bar: "));
                    $bar->setEndereco(Readline("Qual é o endereço do bar: "));
                    $bar->setHorarioFunc(Readline("Qual é o horario de funcionamento do bar: "));
                    $Estabelecimento[] = $bar;

                    break;

                case '2':
                    $casa = new Casa();
                    $casa->setNome(Readline("Qual é o nome da casa: "));
                    $casa->setEndereco(Readline("Qual é o endereço da casa: "));
                    $casa->setQtdComodos(Readline("Qual é a quantidade de comodos da casa: "));
                    $Estabelecimento[] = $casa;

                    break;

                case '3':
                    $posto = new Posto();
                    $posto->setNome(Readline("Qual é o nome do posto: "));
                    $posto->setEndereco(Readline("Qual é o endereço do posto: "));
                    $posto->setQtdBomba(Readline("Qual é a quantidade de bombas do posto: "));
                    $posto->setDono(Readline("Qual é o dono do posto: "));
                    $posto->setHorarioFunc(Readline("Qual é o horario de funcionamento do posto: "));
                    $Estabelecimento[] = $posto;

                    break;

                case '4':
                    $oficina = new Oficina();
                    $oficina->setNome(Readline("Qual é o nome da oficina: "));
                    $oficina->setEndereco(Readline("Qual é o endereço da oficina: "));
                    $oficina->setqtdElevador(Readline("Qual é a quantidade de elevadores da oficina: "));
                    $oficina->setDono(Readline("Qual é o dono da oficina: "));
                    $oficina->setHorarioFunc(Readline("Qual é o horario de funcionamento da oficina: "));
                    $Estabelecimento[] = $oficina;

                    break;

                default:
                    echo "tente cadastrar um estabelecimento valido";
                    break;
            }
            break;

        default:
            echo "po mano tu tinha 3 opção e conseguiu marca a que nem existe";
            break;
    }
} while ($escolha != 0);

$continuar = true;

do {
    echo "Voce acorda de manhã e percebe que teve um sonho muito louco, onde a resenha te chamava, voce sente que deve fazer um role sem os caras, mas antes de sair de casa voce precisa escolher um veiculo para ir, qual voce vai escolher?";
    
} while ($continuar);
