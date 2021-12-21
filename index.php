<!-- Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... 

$c = new CreditCard(..); 
$user->insertCreditCard($c);

-->

<?php
    class User{
        public $name;
        public $surname;
        public $email;
        private $pwd;   
        public $carriage;
        
        
        public function __construct($name, $surname, $email){
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
        }
        public function setPWD(String $pwd){
            $this->pwd = hash('md5', $pwd);
        }
        public function setCarriage(int $carriage){
            $this->carriage = $carriage;
        }
    }

    class PrivilegedUser extends User{
        protected $discount;

        function __construct($name, $surname, $email, $pwd, $carriage, int $discount){
        parent::__construct($name, $surname, $email, $pwd, $carriage);
        $this->discount = $discount;
    }
    }

    class Product{
        public $name;
        public $desc;
        public $price;
        public $material;
        public $instock;

        function __construct($name, $desc, $price, $material, $instock = false)
        {
            $this->name = $name;
            $this->desc = $desc;
            $this->price = $price;
            $this->material = $material;
            $this->instock = $instock;
        }
    }
    $Valerio = new User('Valerio', 'Corda', 'Valerio@example.com');
    $Valerio->setPWD('password');


    echo '<pre>';
    var_dump($Valerio);
    echo '</pre>';
?>