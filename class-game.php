<?php
 class mathgame
{
    private $bil1;
    private $bil2;
    private $operator;
    var $lives;
    var $score;
     
    function initial()
    {
        $this->bil1 = rand(0, 20);
        $this->bil2 = rand(0, 20);
        $this->operator = '+';
       

    }
 
    function generatekode()
    {
        $this->initial();
     
        if ($this->operator == '+') 
            $hasil = $this->bil1 + $this->bil2;
        
        $_SESSION['kode'] = $hasil;     
    }
 
    function show()
    {
        echo "Berapa hasil dari ".$this->bil1." ".$this->operator." ".$this->bil2." ? ";
    }   
     
    function result()
    {
        return $_SESSION['kode'];
    }
     
}
?>