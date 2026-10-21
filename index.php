<?php 
declare(strict_types=1);

class Pessoas{

    private string $nome;
    private int $cpf;
    private string $email;

    public function _construct(string $nome, int $cpf, string $email){

    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->email = $email;
    }
}

$Paulo = new Pessoas('paulo', 28102008910, 'paulohenriquemoraesmello@gmail.com');

class Produto{
    public string $produto;
    public int $preço;
    public string $categoria;

    public function _construct(string $produto, int $preço, string $categoria){

    $this->produto = $produto;
    $this->preço = $preço;
    $this->categoria = $categoria;
    }
    public function pegarNome(){
        return $this->nome;  
    }
    public function pegarPreço(){
        return $this->preço;
    }
    public function pegarCategoria(){
        return $this->categoria;
    }
    public function alterarValor(int $novoValor){
        return $this->preço = $novoValor;
    }
}
$arroz = new Produto('arroz', 30, 'alimentos');
$feijao = new Produto('feijao', 20, 'alimentos');
echo $feijao->pegarNome();
echo "<br>";
?>