<?php
require_once "Llibre.php";
require_once "Llibreria.php";

$llibreria = new Llibreria();
$llibre1 = new Llibre("El señor de los Anillos", "Tolkien", "1234", Genere::AVENTURES, 501);
$llibre2 = new Llibre("1984", "Orwell", "4444", Genere::CONTE, 502);
$llibreria->afegirLlibre($llibre1);
$llibreria->afegirLlibre($llibre2);

echo $llibreria->buscarLlibreTitol("1984");
echo $llibreria->buscarLlibresGenere(Genere::AVENTURES)[0];
echo $llibreria->buscarLlibresAutor("Tolkien")[0];
echo $llibreria->buscarLlibresISBN("1234")[0];


$llibresGrans = $llibreria->retornarLlibresGrans();
foreach ($llibresGrans as $llibre) {
  echo $llibre;
}

$llibre1->setTitol("nou nom");
$llibre1->setAutor("nou autor");
$llibre1->setGenere(Genere::PARANORMAL);
$llibre1->setISBN("444");
$llibre1->setPagines(2);
echo $llibre1;
