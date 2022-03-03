<?php 

class church {
    public $churchName;
    public $churcGo;

    public function __construct($chnm, $chgo){

        $this->churchName = $chnm;
        $this->churchGo = $chgo;
    }

    public function service(){
        echo "The name of the church is " . $this->churchName .'<br>'. "The name of the GO is" .$this->churchName;
    }
    
}
$pray = new church("Rcf", "baba");
$pray->service();
?>

<?php 

 class university {

    public $name;
    public $nameUni;
    public $department;

    public function __construct($nm, $nmu, $dpt){
        $this->name = $nm;
        $this->nameUni = $nmu;
        $this->department = $dpt;
    }
    public function school(){
        echo "My name is " . $this->name . " " . '<br>' . "I attend " . $this->nameUni .'<br>'. "I am in " . $this->department; 
    }
 }
 $exam = new university("Darasimi", "Lagos State University", "Business Administration");
 $exam->school();


?>