<?php
enum Genere: string
{
  case AVENTURES = 'Aventures';
  case CIENCIA_FICCIO = 'Ciencia Ficcio';
  case CONTE = 'Conte';
  case NOVELA_POLICIAL = 'Novela Policial';
  case PARANORMAL = 'Paranormal';
  case DISTOPIA = 'Distopia';
  case FANTASTIC = 'Fantastic';
}
class Llibre
{
  private string $titol;
  private string $autor;
  private string $ISBN;
  private Genere $genere;
  private int $pagines;

  public function __construct(string $titol, string $autor, string $ISBN, Genere $genere, int $pagines)
  {
    $this->titol = $titol;
    $this->autor = $autor;
    $this->ISBN = $ISBN;
    $this->genere = $genere;
    $this->pagines = $pagines;
  }

  public function getTitol(): string
  {
    return $this->titol;
  }

  public function getGenere(): Genere
  {
    return $this->genere;
  }

  public function getAutor(): string
  {
    return $this->autor;
  }

  public function getISBN(): string
  {
    return $this->ISBN;
  }

  public function getPagines(): int
  {
    return $this->pagines;
  }

  public function setTitol(string $titol): void
  {
    $this->titol = $titol;
  }
  public function setGenere(Genere $genere): void
  {
    $this->genere = $genere;
  }
  public function setAutor(string $autor): void
  {
    $this->autor = $autor;
  }
  public function setISBN(string $ISBN): void
  {
    $this->ISBN = $ISBN;
  }
  public function setPagines(int $pagines): void
  {
    $this->pagines = $pagines;
  }

  public function __toString(): string
  {
    return "Titol: " . $this->titol . "<br>" .
      "Autor: " . $this->autor . "<br>" .
      "ISBN: " . $this->ISBN . "<br>" .
      "Genere: " . $this->genere->value . "<br>" .
      "Pagines: " . $this->pagines . "<br>";
  }
}
