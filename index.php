<?php


/* 

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza 
che abbiamo visto stamattina e create un file index.php in cui:

- è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza
 => all’interno della classe è definito un costruttore
 => all’interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’
 e stampati a schermo i valori delle relative proprietà

Bonus 1: 
- Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
- Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.


*/


/* class Movie  {

    public $id;
    public $title; 
    public $originalTitle;
    public $image;
    public $language;
    public $vote;

    function __construct($title, $id)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function getInfo() {
        return $this->id;
        return $this->title;
     
    }


}

$film1 = new Movie("Titolo");

echo $film1 -> getInfo(); */




//Creo una classe Movie che conterrà un serie di variabili/Obj
// Di Default tutte le istanze sono pubbliche
class Movie
{
    //varibile titolo
    public $title;
    //variabile titolo originale
    public $originalTitle;

    //Funzione __construct con il quale assegno un valore alla variabile dicendo 
    //di prendere il valore seguente ($this->title))
    function __construct($title, $originalTitle)
    {
        $this->title = $title;
        $this->originalTitle = $originalTitle;
    }
    //Creo una funzione con multi echo
    /* function get_info(){
        echo $this->title;
        echo $this->originalTitle;
    } */
    //Creo un metodo per farmi ritonare il valore assegnato alla variabile
    function get_title()
    {
        return $this->title;
    }

    //Creo un metodo per farmi ritonare il valore assegnato alla variabile
    function get_original()
    {
        return $this->originalTitle;
    }
}

class Strawberry extends Movie
{
    public function message()
    {
        echo "{$this->title} <--> Titolo? ";
    }
}


//Fuori dalla classe
//Creo una variabile del singolo obj dal quale prendero le seguenti info
// con l'aiuto dei metodi scritti in precedenza
$film1 = new Movie("Titolo", "Original_Title");

//Ho utilizzato il nome Strawberry per dire un nome a caso XD
$film2 = new Strawberry("Titolo", "Original_Title");

//Echo stampa a schermo
echo ' <div class="container">
<div class="row">
    <div class="col">
        <div class="card">
            <h3> <?php echo $film1->get_title() ?> </h3>
            <h5>original_title</h5>
            <p>vote</p>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h3></h3>
            <h5></h5>
            <p></p>
        </div>
    </div>
</div>
</div>';
echo $film1->get_title();
echo '<br>';
echo $film1->get_original();
echo '<br>';
echo $film2->message();
echo '<br>';
echo '<br>';
echo '<br>';



//Echo stampa a schermo
echo $film2->get_title();
echo '<br>';
echo $film2->get_original();
echo '<br>';
echo $film2->message();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<div class="container">
<div class="row">
    <div class="col">
        <div class="card">
            <h3><?php echo $film1->get_title() ?></h3>
            <p><?php echo $film1->get_original() ?></p>
            <h5><?php echo $film2->message() ?></h5>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h3></h3>
            <h5></h5>
            <p></p>
        </div>
    </div>
</div>
</div>

</body>

</html>