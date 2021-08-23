<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Resultado</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h1>
        <?php
            $pag = $_POST['cmbPag'];
            $compra = $_POST['txtValorCompra'];
            if($pag == "deposito")
            {
                $por = "10%";
            }
            else
            {
                if($pag == "cartaoCredito")
                {
                    $por = "Sem Desconto";
                }
            else
            {
                $por = "8%";
            }   
        } 
        ?>
        <?php
        echo "Promoção de mês de aniversário!<br>";
        echo " ".$_POST['txtNome']."!!<br>";
        echo "Valor da Compra sem Desconto: R$ ".$_POST['txtValorCompra']."<br>";
        echo "Forma de Pagamento Escolhida: ".$_POST['cmbPag']."<br>";
        echo "Desconto de: ".$por."<br>";
        echo "Você Economizou: R$ ".($por * $compra / 100)."<br>";
        echo "Valor à pagar: R$ ".($compra - $por * $compra / 100)."<br>";
        ?>
        </h1>
    </div>
</body>
</html>