<?php
class Aluno
{
    private string $nome;
    private string $disciplina;
    private float $nota1;
    private float $nota2;
    private float $nota3;

    public function __construct($nome, $disciplina, $nota1, $nota2, $nota3)
    {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function getResumo()
    {
        return "Aluno: {$this->nome}, <br> disciplina: {$this->disciplina}";
    }

    public function calcularMedia()
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function exibirDetalhes() {
        $media = $this->calcularMedia();

        return "
        <ul>
            <li>{$this->getResumo()}</li>
            <li>Nota 1: " . number_format($this->nota1, 2, ',', '.') . "</li>
            <li>Nota 2: " . number_format($this->nota2, 2, ',', '.') . "</li>
            <li>Nota 3: " . number_format($this->nota3, 2, ',', '.') . "</li>
            <li><strong>Média Final: " . number_format($media, 2, ',', '.') . "</strong></li>
        </ul>
        ";
    }
}