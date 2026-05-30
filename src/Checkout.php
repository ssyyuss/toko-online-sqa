<?php
namespace App;

class Checkout {
    private $productFile;
    private $orderFile;

    public function __construct($productFile, $orderFile) {
        $this->productFile = $productFile;
        $this->orderFile = $orderFile;
    }

    public function prosesCheckout($email, $alamat, $keranjang) {
        $products = json_decode(file_get_contents($this->productFile), true);
        
        foreach ($keranjang as $id => $qty) {
            if (isset($products[$id]) && $products[$id]['stok'] >= $qty) {
                $products[$id]['stok'] -= $qty;
            } else {
                throw new \Exception("Stok tidak mencukupi");
            }
        }
        file_put_contents($this->productFile, json_encode($products));
    }
}