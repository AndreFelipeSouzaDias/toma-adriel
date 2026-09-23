<?php

require_once ("../modelo/Casa.php");
require_once ("../modelo/Carro.php");
require_once ("../modelo/Moto.php");
require_once ("../modelo/Camioneta.php");
require_once ("../modelo/Caminhao.php");
require_once ("../modelo/Oficina.php");
require_once ("../modelo/BarResenha.php");
require_once ("../modelo/PostoResenha.php");

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
    3 - Ja ta bom de cadastrar, vamos jogar";

    $escolha = readline();

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
                    $Veiculos[] = new Moto();

                    break;
                
                default:
                    # code...
                    break;
            }
            break;
        
        default:
            # code...
            break;
    }
} while ($escolha == 0);