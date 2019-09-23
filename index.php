<?php

class Utente {

  use fullName;

  public $nome;
  public $cognome;
  public $indirizzo;

  public function __construct($nome, $cognome, $indirizzo) {

    $this -> nome = $nome;
    $this -> cognome = $cognome;
    $this -> indirizzo = $indirizzo;

  }

}

class Studente extends Utente {

  use fullName;

  public $programma;
  public $tasse;

  public function __construct($nome, $cognome, $indirizzo, $programma, $classe) {

    parent::__construct($nome, $cognome, $indirizzo);

    $this -> programma = $programma;
    $this -> classe = $classe;
  }

  public function toString() {
    return  'Nome: ' . $this -> nome .
            '<br>Cognome: ' . $this -> cognome .
            '<br>Indirizzo: ' . $this -> indirizzo .
            '<br>Programma: ' . $this -> programma .
            '<br>Classe: ' . $this -> classe . '<br><br>';

  }
}

class Professore extends Utente {

  use fullName;

  public $specializzazione;
  public $paga;

  public function __construct($nome, $cognome, $indirizzo, $specializzazione, $paga) {

    parent::__construct($nome, $cognome, $indirizzo);

    $this -> specializzazione = $specializzazione;
    $this -> paga = $paga;
  }

  public function toString2() {
    return  'Nome: ' . $this -> nome .
            '<br>Cognome: ' . $this -> cognome .
            '<br>Indirizzo: ' . $this -> indirizzo .
            '<br>Specializzazione: ' . $this -> specializzazione .
            '<br>Paga: ' . $this -> paga . '<br><br>';
  }

}

trait fullName {

  public function toStringFull() {
    return 'Nome completo: ' . $this -> nome . ' ' . $this -> cognome . '<br><br>';
  }
}

$utente1 = new Utente('Francesco', 'Rossi', 'via xxx');
$utente2 = new Utente('Francesca', 'Verdi', 'via xx xxx');
$utente3 = new Utente('Maria', 'Governatori', 'via xx xxx AA');
$utente4 = new Utente('Franco', 'DeGrossi', 'via AAbbaa');

$studente1 = new Studente('Francesco', 'Rossi', 'via xxx', 'programma', 'classe');
$studente2 = new Studente('Francesca', 'Verdi', 'via xx xxx', 'programma1', 'classe2');
$professore1 = new Professore('Maria', 'Governatori', 'via xx xxx AA', 'Storia Dell"Arte', 1599);
$professore2 = new Professore('Franco', 'DeGrossi', 'via AAbbaa', 'Matematica', 1600);



  echo '-- Full name --<br>' . $utente1 -> toStringFull();
  echo '-- Full name --<br>' . $utente2 -> toStringFull();
  echo '-- Full name --<br>' . $utente3 -> toStringFull();
  echo '-- Full name --<br>' . $utente4 -> toStringFull();

  echo '-- Dati Studente --<br>' . $studente1 -> toString();
  echo '-- Dati Studente --<br>' . $studente2 -> toString();

  echo '-- Dati Professore --<br>' . $professore1 -> toString2();
  echo '-- Dati Professore --<br>' . $professore2 -> toString2();

 ?>
