<?php

class BankAccount {
    private $saldo;

    public function __construct($saldoAwal = 0) {
        $this->saldo = $saldoAwal;
    }

    public function setor($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            return "Berhasil menyetor Rp. " . number_format($jumlah) . ". Saldo anda sekarang: Rp. " . number_format($this->saldo);
        } else {
            return "Jumlah setoran harus lebih dari 0";
        }
    }

    public function tarik($jumlah) {
        if ($jumlah <= 0) {
            return "Jumlah penarikan harus lebih dari 0";
        }
        
        if ($jumlah > $this->saldo) {
            return "Saldo tidak mencukupi. Saldo anda saat ini: Rp. " . number_format($this->saldo);
        }

        $this->saldo -= $jumlah;
        return "Berhasil menarik Rp. " . number_format($jumlah) . ". Sisa saldo: Rp. " . number_format($this->saldo);
    }

    public function getSaldo() {
        return $this->saldo;
    }
}


$akun = new BankAccount(1000000); 


echo $akun->setor(500000) . "<br>";
echo $akun->tarik(300000) . "<br>";
echo $akun->tarik(2000000) . "<br>"; 
echo "Saldo akhir: Rp. " . number_format($akun->getSaldo());

?>
