
<?php

class Cliente {
    private float $saldo = 0;
    private string $email;

    public function __construct(
        public string $nome,
        string $email,
        float $saldo
    ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("E-mail inválido!");
        }

        $this->email = $email;
        $this->depositar($saldo);
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function depositar(float $valor): void {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor inválido");
        }

        $this->saldo += $valor;
    }

    public function sacar(float $valor): float {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor inválido");
        }

        if ($this->saldo < $valor) {
            throw new InvalidArgumentException("Saldo insuficiente");
        }

        $this->saldo -= $valor;

        return $this->saldo;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }
}

$c = new Cliente("Jubileo", "jubileo@gmail.com", 50);

echo "Nome: " . $c->nome . ", email: " . $c->getEmail() . ", Saldo: R$" . $c->getSaldo();
echo "<br>";
$c->sacar(25);

echo "Nome: " . $c->nome . ", email: " . $c->getEmail() . ", Saldo: R$" . $c->getSaldo();

?>
