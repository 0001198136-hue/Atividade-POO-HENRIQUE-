<?php

class produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function exibir_Dados() {
        echo "Produto: " . $this->nome . "\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ",", ".") . "\n";
        echo "Quantidade: " . $this->quantidade . "\n";
        echo "\n";
    }

    public function valor_estoque() {
        return $this->preco * $this->quantidade;
    }

    public function adicionar_Estoque($nova_quantidade) {
        if ($nova_quantidade > 0) {
            $this->quantidade += $nova_quantidade;
            echo "Estoque atualizado para o produto: " . $this->nome . ". Foram adicionadas " . $nova_quantidade . " unidades.\n";
        } else {
            echo "Quantidade inválida para adicionar ao produto: " . $this->nome . "\n";
        }
    }

    public function remover_Estoque($quantidade_retirada) {
        if ($quantidade_retirada > 0 && $this->quantidade >= $quantidade_retirada) {
            $this->quantidade -= $quantidade_retirada;
            echo "Estoque atualizado para o produto: " . $this->nome . ". Foram removidas " . $quantidade_retirada . " unidades.\n";
        } else {
            echo "Quantidade inválida ou insuficiente em estoque para o produto: " . $this->nome . "\n";
        }
    }
}

$produto1 = new produto("Glock-17", 11200.00, 13);
$produto2 = new produto("Tiguer 7", 1250000.00, 7);
$produto3 = new produto("AK-47", 110800.00, 15);

$produto1->exibir_Dados();
echo "\n";
echo "Valor total em estoque produto Glock-17: R$ " . number_format($produto1->valor_estoque(), 2, ",", ".") . " Contendo " . $produto1->quantidade . " unidades.\n";
echo "\n";

$produto2->exibir_Dados();
echo "\n";
echo "Valor total em estoque produto Tiguer 7: R$ " . number_format($produto2->valor_estoque(), 2, ",", ".") . " Contendo " . $produto2->quantidade . " unidades.\n";
echo "\n";
$produto3->exibir_Dados();
echo "\n";
echo "Valor total em estoque produto AK-47: R$ " . number_format($produto3->valor_estoque(), 2, ",", ".") . " Contendo " . $produto3->quantidade . " unidades. \n";
echo "\n";

$produto2->adicionar_Estoque(1);
echo "\n";
$produto2->exibir_Dados();
echo "\n";

echo "Valor total em estoque produto Tiguer 7: R$ " . number_format($produto2->valor_estoque(), 2, ",", ".") . " Contendo " . $produto2->quantidade . " unidades." . "\n";
echo "\n";

$produto2->remover_Estoque(20);
echo "\n";
$produto2->remover_Estoque(2);
echo "\n";
$produto2->exibir_Dados();
echo "\n";
echo "Valor total em estoque produto Tiguer 7: R$ " . number_format($produto2->valor_estoque(), 2, ",", ".") . " Contendo " . $produto2->quantidade . " unidades." . "\n";

