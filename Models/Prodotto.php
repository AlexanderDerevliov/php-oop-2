<?php
require_once __DIR__ . '/Categoria.php';

class Prodotti
{

    public $titolo;
    public $prezzo;
    public $immagine;
    public $categoria;



    public function __construct($titolo, $prezzo, $immagine, $categoria)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}
