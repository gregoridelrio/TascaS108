<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Llibreria.php';

class LlibreriaTest extends TestCase
{
  public function testAfegirLlibreCorrectament()
  {
    $llibreria = new Llibreria();
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $this->assertTrue($llibreria->afegirLlibre($llibre));
  }

  public function testBorrarLlibreCorrectament()
  {
    $llibreria = new Llibreria();
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $llibreria->afegirLlibre($llibre);
    $this->assertTrue($llibreria->borrarLlibre($llibre));
  }

  public function testBorrarLlibreIncorrectament()
  {
    $llibreria = new Llibreria();
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $this->assertFalse($llibreria->borrarLlibre($llibre));
  }

  public function testBuscarLlibrePerTitolCorrectament()
  {
    $llibreria = new Llibreria();
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $llibreria->afegirLlibre($llibre);
    $llibreTrobat = $llibreria->buscarLlibreTitol($llibre->getTitol());
    $this->assertIsObject($llibreTrobat);
    $this->assertSame("Señor de los Anillos", $llibreTrobat->getTitol());
  }

  public function testBuscarLlibrePerTitolIncorrectament()
  {
    $llibreria = new Llibreria();
    $this->assertFalse($llibreria->buscarLlibreTitol("El señor de los Anillos"));
  }

  public function testBuscarLlibrePerGenereCorrectament()
  {
    $llibreria = new Llibreria();
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $llibreria->afegirLlibre($llibre);
    $arrayGenere = $llibreria->buscarLlibresGenere(Genere::FANTASTIC);
    $this->assertIsArray($arrayGenere);
    $this->assertSame(Genere::FANTASTIC, $arrayGenere[0]->getGenere());
  }

  public function testBuscarLlibrePerISBNCorrectament()
  {
    $llibreria = new Llibreria();
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $llibreria->afegirLlibre($llibre);
    $arrayISBN = $llibreria->buscarLlibresISBN("1234");
    $this->assertIsArray($arrayISBN);
    $this->assertSame("1234", $arrayISBN[0]->getISBN());
  }
  public function testBuscarLlibrePerAutorCorrectament()
  {
    $llibreria = new Llibreria();
    $llibre = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $llibreria->afegirLlibre($llibre);
    $arrayAutor = $llibreria->buscarLlibresAutor("Tolkien");
    $this->assertIsArray($arrayAutor);
    $this->assertSame("Tolkien", $arrayAutor[0]->getAutor());
  }
  public function testRetornarLlibresGransCorrectament()
  {
    $llibreria = new Llibreria();
    $llibre1 = new Llibre("Señor de los Anillos", "Tolkien", "1234", Genere::FANTASTIC, 501);
    $llibre2 = new Llibre("1984", "Orwell", "1235", Genere::CIENCIA_FICCIO, 501);
    $llibreria->afegirLlibre($llibre1);
    $llibreria->afegirLlibre($llibre2);
    $arrayGrans = $llibreria->retornarLlibresGrans();
    $this->assertIsArray($arrayGrans);
    $this->assertCount(2, $arrayGrans);
    $this->assertGreaterThan(500, $arrayGrans[0]->getPagines());
    $this->assertSame("Señor de los Anillos", $arrayGrans[0]->getTitol());
  }
}
