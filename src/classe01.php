
<?php

class Animal{
    const TIPO = "Animal";

    public static function identificar(): string{
        // return self::TIPO;
        return static::TIPO;
    }

    public function emitirSom(){
        echo "Som Animal<br>"
    }
}

class Cachorro extends Animal{
    const TIPO = "Cachorro";

    public function emitirSom(){
        parent::emitirSom();
        echo "Au Au<br>"
    }
}


class Produto {
    const float IMPOSTO = 0.05;

    private float $preco;
    private static int $total = 0;

    public function __construct(
        public string $nome,
        float $preco,
        public int $estoque = 0,
    ) {
        $this->setPreco($preco);
        self::$total++;
    }

    public function aplicarDesconto(float $pcnt): float {
        return $this->preco * (1 - $pcnt / 100);
    }

    public function setPreco(float $preco): void {
        if ($preco < 0) {
            throw new InvalidArgumentException("Preço inválido");
        }

        $this->preco = $preco;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public static function quantidade(): int {
        return self::$total;
    }
}

$produtos = [
    new Produto('Criança', 69.69),
    new Produto('Calça', 100.00),
    new Produto('Camisa', 15.00),
];

$produtos[0]->setPreco(50);

foreach ($produtos as $p) {
    echo $p->nome . " R$" . number_format($p->getPreco(), 2, ',', '.') . "<br>";
}

echo Produto::quantidade() . "<br>";
echo Produto::IMPOSTO . "<br>";

echo Cachorro::identificar();

?>
