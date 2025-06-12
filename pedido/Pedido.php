<?php
class Pedido
{
    private $nomeProduto;
    private $quantidade;
    private $precoUnitario;
    private $premium;
    private $desconto = 0;
    private $imposto = 0;

    public function __construct($nomeProduto, $quantidade, $precoUnitario, $premium)
    {
        $this->nomeProduto = $nomeProduto;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
        $this->premium = $premium;
    }

    public function getResumo()
    {
        return "Produto: {$this->nomeProduto}, <br> Quantidade: {$this->quantidade}";
    }

    private function calcularDescontoImposto()
    {
        $totalBruto = $this->quantidade * $this->precoUnitario;
        if ($this->premium) {
            $this->desconto = $totalBruto * 0.10; // 10% para premium
        } else {
            $this->desconto = 0;
        }
        $this->imposto = ($totalBruto - $this->desconto) * 0.08;
        return $totalBruto;
    }
    

    public function exibirDetalhes()
    {
        $totalBruto = $this->calcularDescontoImposto();
        $totalFinal = $totalBruto - $this->desconto + $this->imposto;

        return "<ul>
            <li>{$this->getResumo()}</li>
            <li>Cliente Premium: " . ($this->premium ? 'Sim' : 'Não') . "</li>
            <li>Total Bruto: R$ " . number_format($totalBruto, 2, ',', '.') . "</li>
            <li>Desconto: R$ " . number_format($this->desconto, 2, ',', '.') . "</li>
            <li>Imposto cobrado: R$ " . number_format($this->imposto, 2, ',', '.') . "</li>
            <li><strong>Total Final: R$ " . number_format($totalFinal, 2, ',', '.') . "</strong></li>
        </ul>";
    }
}