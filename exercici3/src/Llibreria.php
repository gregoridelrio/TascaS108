<?php
require_once "Llibre.php";

class Llibreria
{
  private array $llibres = [];

  public function afegirLlibre(Llibre $llibre): bool
  {
    $this->llibres[] = $llibre;
    return true;
  }

  public function borrarLlibre(Llibre $llibreBorrar): bool
  {
    foreach ($this->llibres as $key => $llibre) {
      if ($llibreBorrar->getTitol() == $llibre->getTitol()) {
        unset($this->llibres[$key]);
        $this->llibres = array_values($this->llibres);
        return true;
      }
    }
    return false;
  }

  public function buscarLlibreTitol(string $titol): Llibre|false
  {
    foreach ($this->llibres as $llibre) {
      if ($titol == $llibre->getTitol()) {
        return $llibre;
      }
    }
    return false;
  }

  public function buscarLlibresGenere(Genere $genere): array
  {
    $llibresGenere = [];
    foreach ($this->llibres as $llibre) {
      if ($llibre->getGenere() == $genere) {
        $llibresGenere[] = $llibre;
      }
    }
    return $llibresGenere;
  }
  public function buscarLlibresAutor(string $autor): array
  {
    $llibresAutor = [];
    foreach ($this->llibres as $llibre) {
      if ($llibre->getAutor() == $autor) {
        $llibresAutor[] = $llibre;
      }
    }
    return $llibresAutor;
  }

  public function buscarLlibresISBN(string $ISBN): array
  {
    $llibresISBN = [];
    foreach ($this->llibres as $llibre) {
      if ($llibre->getISBN() == $ISBN) {
        $llibresISBN[] = $llibre;
      }
    }
    return $llibresISBN;
  }

  public function retornarLlibresGrans(): array
  {
    $llibresGrans = [];
    foreach ($this->llibres as $llibre) {
      if ($llibre->getPagines() > 500) {
        $llibresGrans[] = $llibre;
      }
    }
    return $llibresGrans;
  }
}
