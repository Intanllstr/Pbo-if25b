<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php"');

Use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;

    public function payment($tipe){

        return match($tipe) {
            "virtual" => 'Virtual Acoount',
            "qris" => 'QRIS',
            default => 'hanya bisa pembayaran va dan qris'
        };

    }

}