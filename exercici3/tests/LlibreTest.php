<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Llibre.php';

class LlibreTest extends TestCase
{
  public function testModificarAutorLlibreCorrectament()
  {
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $autorEsperat = "Orwell";
    $llibre->setAutor("Orwell");
    $autorActual = $llibre->getAutor();
    $this->assertEquals($autorEsperat, $autorActual);
  }
  public function testModificarISBNLlibreCorrectament()
  {
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $isbnEsperat = "4444";
    $llibre->setISBN("4444");
    $isbnActual = $llibre->getISBN();
    $this->assertEquals($isbnEsperat, $isbnActual);
  }
  public function testModificarGenereLlibreCorrectament()
  {
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $genereEsperat = Genere::AVENTURES;
    $llibre->setGenere(Genere::AVENTURES);
    $genereActual = $llibre->getGenere();
    $this->assertEquals($genereEsperat, $genereActual);
  }
  public function testModificarPaginesLlibreCorrectament()
  {
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $paginesEsperat = 800;
    $llibre->setPagines(800);
    $paginesActual = $llibre->getPagines();
    $this->assertEquals($paginesEsperat, $paginesActual);
  }
}
