<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Banco</title>
</head>
<body>
    <pre>
    <?php 
        require_once "ContaBanco.php";

        $p1 = new ContaBanco(); //Joao
        $p2 = new ContaBanco(); // Maria

        $p1->abrirConta("CC");
        $p1->setDono("Joao");
        $p1->setnumConta(16318);

        $p2->abrirConta("CP");
        $p2->setDono("Maria");
        $p2->setnumConta(3715);

        //colocando dinheiro na conta:

        $p1->depositar(300);
        $p2->depositar(500);

        //Maria precisa comprar um sapato de R$100,00
        $p2->sacar(100);
        //os dois pagando mensalidade . fica:

        $p1->pagarMensal();
        $p2->pagarMensal();

        //sacando o saldo da conta para poder fechar

        $p1->sacar(338);
        $p2->sacar(530);

        //fechando as duas contas , fica:

        $p1->fecharConta();
        $p2->fecharConta(); // vai informar que nao pode porque tem saldo!

        print_r($p1);
        print_r($p2);

    ?>
    </pre>
</body>
</html>