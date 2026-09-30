<?php

require_once("./modelo/Casa.php");
require_once("./modelo/Carro.php");
require_once("./modelo/Moto.php");
require_once("./modelo/Camioneta.php");
require_once("./modelo/Caminhao.php");
require_once("./modelo/Oficina.php");
require_once("./modelo/BarResenha.php");
require_once("./modelo/PostoResenha.php");

echo "    ____        __            __              ______                   
   / __ \____  / /__     ____/ /___  _____   / ____/___ __________ ______
  / /_/ / __ \/ / _ \   / __  / __ \/ ___/  / /   / __ `/ ___/ __ `/ ___/
 / _, _/ /_/ / /  __/  / /_/ / /_/ (__  )  / /___/ /_/ / /  / /_/ (__  ) 
/_/ |_|\____/_/\___/   \__,_/\____/____/   \____/\__,_/_/   \__,_/____/  \n";

$Veiculos = array();
$Motos = array();
$Camionetas = array();
$Caminhaos = array();
$Carros = array();

$Estabelecimento = array();
$Bares = array();
$Casas = array();
$Oficinas = array();
$Postos = array();

$escolha = 0;
do {
    echo "Oq voce deseja fazer?
    1 - Cadastrar Veiculo
    2 - Cadastrar Estabelecimento
    0 - Ja ta bom de cadastrar, vamos jogar\n";

    $escolha = readline();

    system('clear');

    switch ($escolha) {
        case '1':
            echo "Qual veiculo deseja cadastrar?\n";
            echo "1 - Carro \n";
            echo "2 - Moto \n";
            echo "3 - Camioneta \n";
            echo "4 - Caminhao \n";

            $escolha = readline();

            switch ($escolha) {
                case '1':
                    $carro = new Carro();
                    $carro->setCor(readline("Cor: "));
                    $carro->setModelo(readline("Modelo: "));
                    $carro->setQntPortas(readline("Quantidade de portas: "));
                    $carro->setVelMaxima(readline("Velocidade máxima: "));
                    $carro->setPeso(readline("Peso: "));
                    $Carros[] = $carro;
                    echo "Carro cadastrado com sucesso!";

                    break;

                case '2':
                    $moto = new Moto();
                    $moto->setCor(readline("Cor: "));
                    $moto->setModelo(readline("Modelo: "));
                    $moto->setVelMaxima(readline("Velocidade máxima: "));
                    $moto->setMaestria(readline("Sua maestria com a moto: "));
                    $Motos[] = $moto;
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
                    $Camionetas[] = $camioneta;
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
                    $Caminhaos[] = $caminhao;
                    echo "Caminhão cadastrado com sucesso!";

                    break;

                default:
                    echo "tente cadastrar um veiculo valido";
                    break;
            }
            break;

        case '2':
            echo "Qual estabelecimento deseja cadastrar?\n";
            echo "1 - Bar \n";
            echo "2 - Casa \n";
            echo "3 - Posto de Gasolina \n";
            echo "4 - Oficina Mecanica \n";

            $escolha = readline();

            switch ($escolha) {
                case '1':
                    $bar = new Bar();
                    $bar->setNome(Readline("Qual é o nome do bar: "));
                    $bar->setDono(Readline("Qual é o dono do bar: "));
                    $bar->setEndereco(Readline("Qual é o endereço do bar: "));
                    $bar->setHorarioFunc(Readline("Qual é o horario de funcionamento do bar: "));
                    $Bares[] = $bar;
                    echo "Bar cadastrado com sucesso!";

                    break;

                case '2':
                    $casa = new Casa();
                    $casa->setNome(Readline("Qual é o nome da casa: "));
                    $casa->setEndereco(Readline("Qual é o endereço da casa: "));
                    $casa->setQtdComodos(Readline("Qual é a quantidade de comodos da casa: "));
                    $Casas[] = $casa;
                    echo "Casa cadastrada com sucesso!";

                    break;

                case '3':
                    $posto = new Posto();
                    $posto->setNome(Readline("Qual é o nome do posto: "));
                    $posto->setEndereco(Readline("Qual é o endereço do posto: "));
                    $posto->setQtdBomba(Readline("Qual é a quantidade de bombas do posto: "));
                    $posto->setDono(Readline("Qual é o dono do posto: "));
                    $posto->setHorarioFunc(Readline("Qual é o horario de funcionamento do posto: "));
                    $Postos[] = $posto;
                    echo "Posto cadastrado com sucesso!";

                    break;

                case '4':
                    $oficina = new Oficina();
                    $oficina->setNome(Readline("Qual é o nome da oficina: "));
                    $oficina->setEndereco(Readline("Qual é o endereço da oficina: "));
                    $oficina->setqtdElevador(Readline("Qual é a quantidade de elevadores da oficina: "));
                    $oficina->setDono(Readline("Qual é o dono da oficina: "));
                    $oficina->setHorarioFunc(Readline("Qual é o horario de funcionamento da oficina: "));
                    $Oficinas[] = $oficina;
                    echo "Oficina cadastrada com sucesso!";

                    break;

                default:
                    echo "tente cadastrar um estabelecimento valido";
                    break;
            }
            break;

        case '0':
            break;
            

        default:
            echo "po mano tu tinha 3 opção e conseguiu marca a que nem existe";
            break;
    }
} while ($escolha != 0);

$continuar = true;

$Veiculos[0] = $Carros;
$Veiculos[1] = $Motos;
$Veiculos[2] = $Camionetas;
$Veiculos[3] = $Caminhaos;
$VeiculoEscolhido = null;
$TipoVeiculo = null;

$Estabelecimento[0] = $Bares;
$Estabelecimento[1] = $Casas;
$Estabelecimento[2] = $Postos;
$Estabelecimento[3] = $Oficinas;
$EstabelecimentoEscolhido = null;
$TipoEstabelecimento = null;

do {
    echo "Voce acorda de manhã e percebe que teve um sonho muito louco, onde a resenha te chamava, voce sente que deve fazer um role sem os caras, mas antes de sair de casa voce precisa escolher um veiculo para ir, qual voce vai escolher?\n";

    do {
        echo "1 - Carro ". "\n";
        echo "2 - Moto ". "\n";
        echo "3 - Camioneta ". "\n";
        echo "4 - Caminhao ". "\n";

        $escolha = readline();

        switch ($escolha) {
            case '1':
                if (count($Carros) > 0) {
                    echo "Escolha um carro para ir: ";
                    foreach ($Carros as $index => $carro) {
                        echo ($index + 1) . " - " . $carro->getModelo() . "\n";
                    }
                    $escolhaCarro = readline();
                    if ($Carros[$escolhaCarro - 1] != null) {
                        $VeiculoEscolhido = $Carros[$escolhaCarro - 1];
                        echo "Você escolheu o carro: " . $VeiculoEscolhido->getModelo() . "\n";
                        $TipoVeiculo = "1";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há carros cadastrados.\n";
                }

                break;

            case '2':
                if (count($Motos) > 0) {
                    echo "Escolha uma moto para ir: ";
                    foreach ($Motos as $index => $moto) {
                        echo ($index + 1) . " - " . $moto->getModelo() . "\n";
                    }
                    $escolhaMoto = readline();
                    if ($Motos[$escolhaMoto - 1] != null) {
                        $VeiculoEscolhido = $Motos[$escolhaMoto - 1];
                        echo "Você escolheu a moto: " . $VeiculoEscolhido->getModelo() . "\n";
                        $TipoVeiculo = "2";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há motos cadastradas.\n";
                }

                break;

            case '3':
                if (count($Camionetas) > 0) {
                    echo "Escolha uma camioneta para ir: ";
                    foreach ($Camionetas as $index => $camioneta) {
                        echo ($index + 1) . " - " . $camioneta->getModelo() . "\n";
                    }
                    $escolhaCamioneta = readline();
                    if ($Camionetas[$escolhaCamioneta - 1] != null) {
                        $VeiculoEscolhido = $Camionetas[$escolhaCamioneta - 1];
                        echo "Você escolheu a camioneta: " . $VeiculoEscolhido->getModelo() . "\n";
                        $TipoVeiculo = "3";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há camionetas cadastradas.\n";
                }

                break;
            case '4':
                if (count($Caminhaos) > 0) {
                    echo "Escolha um caminhão para ir: ";
                    foreach ($Caminhaos as $index => $caminhao) {
                        echo ($index + 1) . " - " . $caminhao->getModelo() . "\n";
                    }
                    $escolhaCaminhao = readline();
                    if ($Caminhaos[$escolhaCaminhao - 1] != null) {
                        $VeiculoEscolhido = $Caminhaos[$escolhaCaminhao - 1];
                        echo "Você escolheu o caminhão: " . $VeiculoEscolhido->getModelo() . "\n";
                        $TipoVeiculo = "4";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há caminhões cadastrados.\n";
                }
                break;

            default:
                echo "Escolha inválida.\n";
                break;
        }
    } while ($VeiculoEscolhido == null);

    system('clear');

    echo "Agora que voce ja escolheu seu veiculo, voce precisa escolher um estabelecimento para ir, qual voce vai escolher?\n";

    do {
        echo "1 - Bar \n";
        echo "2 - Casa \n";
        echo "3 - Posto de Gasolina \n";
        echo "4 - Oficina Mecanica \n";

        $escolha = readline();

        switch ($escolha) {
            case '1':
                if (count($Bares) > 0) {
                    echo "Escolha um bar para ir: ";
                    foreach ($Bares as $index => $bar) {
                        echo ($index + 1) . " - " . $bar->getNome() . "\n";
                    }
                    $escolhaBar = readline();
                    if ($Bares[$escolhaBar - 1] != null) {
                        $EstabelecimentoEscolhido = $Bares[$escolhaBar - 1];
                        echo "Você escolheu o bar: " . $EstabelecimentoEscolhido->getNome() . "\n";
                        $TipoEstabelecimento = "1";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há bares cadastrados.\n";
                }

                break;

            case '2':
                if (count($Casas) > 0) {
                    echo "Escolha uma casa para ir: ";
                    foreach ($Casas as $index => $casa) {
                        echo ($index + 1) . " - " . $casa->getNome() . "\n";
                    }
                    $escolhaCasa = readline();
                    if ($Casas[$escolhaCasa - 1] != null) {
                        $EstabelecimentoEscolhido = $Casas[$escolhaCasa - 1];
                        echo "Você escolheu a casa: " . $EstabelecimentoEscolhido->getNome() . "\n";
                        $TipoEstabelecimento = "2";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há casas cadastradas.\n";
                }

                break;

            case '3':
                if (count($Postos) > 0) {
                    echo "Escolha um posto de gasolina para ir: ";
                    foreach ($Postos as $index => $posto) {
                        echo ($index + 1) . " - " . $posto->getNome() . "\n";
                    }
                    $escolhaPosto = readline();
                    if ($Postos[$escolhaPosto - 1] != null) {
                        $EstabelecimentoEscolhido = $Postos[$escolhaPosto - 1];
                        echo "Você escolheu o posto de gasolina: " . $EstabelecimentoEscolhido->getNome() . "\n";
                        $TipoEstabelecimento = "3";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há postos de gasolina cadastrados.\n";
                }
                break;

            case '4':
                if (count($Oficinas) > 0) {
                    echo "Escolha uma oficina mecânica para ir: ";
                    foreach ($Oficinas as $index => $oficina) {
                        echo ($index + 1) . " - " . $oficina->getNome() . "\n";
                    }
                    $escolhaOficina = readline();
                    if ($Oficinas[$escolhaOficina - 1] != null) {
                        $EstabelecimentoEscolhido = $Oficinas[$escolhaOficina - 1];
                        echo "Você escolheu a oficina mecânica: " . $EstabelecimentoEscolhido->getNome() . "\n";
                        $TipoEstabelecimento = "4";
                    } else {
                        echo "Escolha inválida.\n";
                    }
                } else {
                    echo "Não há oficinas mecânicas cadastradas.\n";
                }
                break;
        }
    } while ($EstabelecimentoEscolhido == null);

    system('clear');

    switch ($TipoVeiculo) {
        case '1':
            switch ($TipoEstabelecimento) {
                case '1':
                    echo "Voce chegou no " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas o bar estava fechado, voce decide ir embora e voltar para casa\n";
                    echo "Fim de jogo final 1/16\n";
                    break;
                case '2':
                    echo "Voce chegou na " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas estava rolando uma resenha na qual voce nao foi convidado, voce decide ir embora e voltar a dormir\n";
                    echo "Fim de jogo final 2/16\n";
                    break;
                case '3':
                    echo "Voce estava indo para o " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a gasolina do seu carro acabou, voce vai de a pé para o " . $EstabelecimentoEscolhido->getNome() . ", mas quando voce chega la, a resenha ja tinha acabado, mas pelo menos voce conseguiu chegar la e coletar gasolina para o seu carro\n";
                    echo "Fim de jogo final 3/16\n";
                    break;
                case '4':
                    echo "Voce estava indo para a " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a galera da oficina mecanica te viu e te chamou para uma resenha, voce decide ir com eles\n";
                    echo "Fim de jogo final 4/16\n";
                    break;
            }
            break;
        case '2':
            switch ($TipoEstabelecimento) {
                case '1':
                    echo "Voce chegou no " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", mas como tu furou 5 semafaros e a policia te viu, voce foi preso e nao conseguiu chegar na resenha\n";
                    echo "Fim de jogo final 5/16\n";
                    break;
                case '2':
                    echo "Voce chegou na " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", mas como tu furou 5 semafaros e a policia não te viu, voce chegou na resenha na hora certa e conseguiu se divertir com os caras\n";
                    echo "Fim de jogo final 6/16\n";
                    break;

                case '3':
                    echo "Voce estava indo para o " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a gasolina da sua " . $VeiculoEscolhido->getModelo() . " acabou, voce empurrou a " . $VeiculoEscolhido->getModelo() . " ate o posto de gasolina, mas quando voce chegou la, os guri tavam jogando bola e tu vai jogar bola com eles, mas apos cabeciar uma bola, voce bateu a cabeça e desmaiou, quando voce acordou, a resenha ja tinha acabado";
                    echo "Fim de jogo final 7/16\n";
                    break;
                case '4':
                    echo "Voce estava indo para a " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, um caminhão resenha acabou não te vendo e te atropelou, voce acordou no hospital e percebeu que perdeu a resenha, mas pelo menos voce sobreviveu";
                    echo "Fim de jogo final 8/16\n";
                    break;
            }
            break;
             case '3':
            switch ($TipoEstabelecimento) {
                case '1':
                    echo "Voce chegou no " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", você acabou chegando com respeito, mas so esqueceu de apertar o freio de mão do " . $VeiculoEscolhido->getModelo() . " e ele acabou descendo a ladeira e atropelando todos os guri da resenha, voce foi preso e nao conseguiu chegar na resenha\n";
                    echo "Fim de jogo final 9/16\n";
                    break;
                case '2':
                    echo "Voce chegou na " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", mas a resenha ja tava muito louca e quando você percebeu levaram seu " . $VeiculoEscolhido->getModelo() . " embora, voce ficou triste e voltou para casa\n";
                    echo "Fim de jogo final 10/16\n";
                    break;
                case '3':
                    echo "Voce estava indo para o " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a gasolina da sua " . $VeiculoEscolhido->getModelo() . " acabou, voce empurou a " . $VeiculoEscolhido->getModelo() . " ate o posto de gasolina, mas quando voce chegou la, os guri ja tavam te esperando para resenhar com você, logo a resenha se formou e voce conseguiu se divertir com os caras\n";
                    echo "Fim de jogo final 11/16\n";
                    break;
                case '4':
                    echo "Voce estava indo para a " . $EstabelecimentoEscolhido->getNome() . " com sua " . $VeiculoEscolhido->getModelo() . ", mas quando antes de voce chegar la, a galera da oficina mecanica te viu e te chamou pra uma resenha, mas você não entendia nada  de mecânica, então você acabou estragando a resenha, você ficou triste e voltou para casa\n";
                    echo "Fim de jogo final 12/16\n";
                    break;
            }
            break;
        case '4':
            switch ($TipoEstabelecimento) {
                case '1':
                    echo "Voce chegou no " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas como tu tava com um " . $VeiculoEscolhido->getModelo() . ", você acabou fechando a rua e a resenha acabou ficando resenhuda, voce foi o dono do role e resenhou com os caras\n";
                    echo "Fim de jogo final 13/16\n";
                    break;
                case '2':
                    echo "Voce chegou na " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas o " . $VeiculoEscolhido->getModelo() . " acabou não cabendo na garagem da resenha e isso fez com que a resenha acabasse, voce ficou triste e voltou para casa\n";
                    echo "Fim de jogo final 14/16\n";
                    break;
                case '3':
                    echo "Voce estava indo para o " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas o " . $VeiculoEscolhido->getModelo() . " ficou sem freio e você acabou explodindo o posto de gasolina, voce foi preso e nao conseguiu chegar na resenha\n";
                    echo "Fim de jogo final 15/16\n";
                    break;
                case '4':
                    echo "Voce estava indo para a " . $EstabelecimentoEscolhido->getNome() . " com seu " . $VeiculoEscolhido->getModelo() . ", mas quando você chegou la os mecanicos não te deixaram entrar na resenha, voce ficou triste e voltou para casa\n";
                    echo "Fim de jogo final 16/16\n";
                    break;
            }
    }
    $escolha = readline("Deseja jogar novamente? (s/n): ");
    if ($escolha != 's') {
        $continuar = false;
    }
} while ($continuar);