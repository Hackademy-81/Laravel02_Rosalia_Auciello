<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $tours=[
        ["id"=>1, "name"=>"Londra", "notti"=>3, "costo"=>"700€", "img"=>"/img/londra.jpg", "descrizione"=>"Londra è la capitale e maggiore città dell'Inghilterra e del Regno Unito, con i suoi 9 625 000 abitanti. La sua estensione territoriale la rende la terza città più estesa d'Europa, preceduta da Mosca e Istanbul. L'area metropolitana conta circa 14 milioni di residenti e si estende per svariate decine di chilometri lungo la valle del Tamigi, fino al suo enorme estuario."],
        ["id"=>2, "name"=>"Roma", "notti"=>2, "costo"=>"300€", "img"=>"/img/colosseo.jpg", "descrizione"=>" Roma è la capitale d'Italia. Inoltre è capoluogo dell'omonima città metropolitana e della regione Lazio. Il comune di Roma è dotato di un ordinamento amministrativo speciale, denominato Roma Capitale e disciplinato da legge dello Stato"],
        ["id"=>3, "name"=>"Parigi", "notti"=>4, "costo"=>"800€", "img"=>"/img/parigi.jpg", "descrizione"=> "Parigi è la capitale e la città più popolata della Francia, capoluogo della regione dell'Île-de-France e l'unico comune a essere nello stesso tempo dipartimento, secondo la riforma del 1977 e i dettami della legge PML che espansero i vecchi confini comunali."],
       
    ];

    public $founders=[
        [ "id"=>"1", "name"=>"Rosalinda", "surname"=>"Auciello", "role"=>"viaggiatrice", "img"=>"/img/donna.jpg"],
        [ "id"=>"2", "name"=>"Leonardo", "surname"=>"Auciello", "role"=>"addetto alle prenotazioni", "img"=>"/img/uomo.jpg"],
        [ "id"=>"3", "name"=>"Nicola", "surname"=>"Foggetti", "role"=>"autista", "img"=>"/img/uomo.jpg"],
        [ "id"=>"4", "name"=>"Alina", "surname"=>"Alberga", "role"=>"addetta alle pulizie", "img"=>"/img/donna.jpg"],
        [ "id"=>"5", "name"=>"Maria", "surname"=>"Ratti", "role"=>"receptionist", "img"=>"/img/donna.jpg"],
        [ "id"=>"6", "name"=>"Giovanni", "surname"=>"Auciello", "role"=>"autista", "img"=>"/img/uomo.jpg"],
        
    ]; 

    public $services=[
        ["id"=>1, "name"=>"Consulenza personalizzata", "descrizione"=>"La consulenza personalizzata è un servizio che si adatta alle esigenze e alle caratteristiche di ogni singolo individuo", "img"=> "/img/consulenza.jpg"], 
        ["id"=>2, "name"=>"Gestione delle prenotazioni last minute", "descrizione"=>"Il last minute è una modalità di prenotazione di viaggi e vacanze che consente di ottenere sconti consistenti e reali su pacchetti volo+hotel (e altri servizi) offerti da un tour operator", "img"=> "/img/lastminute.jpg"], 
        ["id"=>3, "name"=>"Proposte di pacchetti completi low cost", "descrizione"=>"Nel settore del turismo, servizio di trasporto aereo a prezzi contenuti rispetto a quello delle compagnie tradizionali e, per estensione, la compagnia aerea che offre questo servizio. Le compagnie l. sono in grado di applicare prezzi economici in quanto generalmente offrono ai passeggeri minori servizi a terra e in volo, assicurano collegamenti tra aeroporti secondari, si avvalgono della rete telematica per la prenotazione e l'acquisto del biglietto da parte dell’utente e per il check-in.", "img"=> "/img/lowcost.jpg"], 

    ]; 

    public $hotels=["Hotel Sole", "Luxury Hotel", "Hotel Luna", "Hotel Le Dune"]; 



    function cardWelcome() {
      
        return view('welcome', ["viaggi"=>$this->tours], ["partners"=>$this->hotels]);
    }

    function tourDescription($idTour){
        foreach($this->tours as $viaggio){
            if($idTour==$viaggio["id"]){
                return view("tourDescription", ["tour"=>$viaggio]); 
            }
        }
      
    }

    function pageHotel($alloggio){
        return view("hotelpartner", ["dettagliohotel"=>$alloggio]); 
    }

    function cardFounders() {
        return view('chisiamo', ["fondatori"=>$this->founders]);
    }

    function ourDescription($idRole){
        foreach($this->founders as $fondatore){
            if($idRole==$fondatore["id"]){
              return view('chisiamoruolo', ["founder"=>$fondatore]);   
            }
        }
        
    }

    function cardService() {
        return view('servizi', ["servizi"=>$this->services]);
    }

    function descriptionService($idService){
        foreach($this->services as $servizio){
            if($idService==$servizio['id']){
                return view ("dettaglioservizio", ["service"=>$servizio]); 
            }
        }
    }
}
