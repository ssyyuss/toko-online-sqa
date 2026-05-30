<?php
namespace App;

class Catalog {
    private $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function searchProduct($keyword) {
        $data = json_decode(file_get_contents($this->file), true);
        if (empty($keyword)) return $data;
        
        $result = [];
        foreach ($data as $id => $item) {
            if (stripos($item['nama'], $keyword) !== false) {
                $result[$id] = $item;
            }
        }
        return $result;
    }
}