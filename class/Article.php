<?php
class Article {
    private $titre;
    private $contenu;
    private $dateDePublication;

    function __construct($titre=null,$contenu=null,$date=null) 
    {
        echo "J'ai reçu $titre / $contenu / $date";
        $this->titre=$titre;
        $this->contenu=$contenu;
        $this->dateDePublication=$date;
    }

    function afficher() 
    {
        setlocale(LC_TIME, ['fr','fra','fr_FR']);
        date_default_timezone_set('Europe/Paris');
        $date=datetime::createFromFormat('Y-m-d', $this->dateDePublication);

        echo "
            <article>
            <h2>$this->titre</h2>
            <p>$this->contenu</p>
            <p>Publié le <time datetime=\"$this->dateDePublication\">".$date->format('l j F Y')."</time></p>
            </article>
            ";
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Get the value of dateDePublication
     */ 
    public function getDateDePublication()
    {
        return $this->dateDePublication;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Set the value of dateDePublication
     *
     * @return  self
     */ 
    public function setDateDePublication($dateDePublication)
    {
        $this->dateDePublication = $dateDePublication;

        return $this;
    }
}


