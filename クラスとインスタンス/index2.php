<?php 
    class Enemy{
        public $name;
        public $stamina;
        public $attack;

        public function __construct($name, $stamina = 100, $attack = 10) {
            $this->name = $name;
            $this->stamina = $stamina;
            $this->attack = $attack;
        }

        public function sayMyName() {
            echo $this->name.'があらわれた！';
        } 

        public function powerUp() {
            $this->attack += 10;
            echo '攻撃力が'.$this->attack.'になった。</br>';
        }


    }

    class Boss extends Enemy {
        public function sayMyName(){
            echo 'ボスの'.$this->name.'があらわれた！';
        }

        public function specialAttack() {
            echo 'すごい強い一撃！';
        }
    }



    $slime = new Enemy('スライム');
    echo $slime->stamina;
    echo $slime->attack;
    
    echo '</br>';
    
    $kuribo = new Enemy('クリボー', 200, 10);
    echo $kuribo->stamina;
    echo $kuribo->attack;

    $slime = new Enemy('スライム');
    $slime->powerUp();
    $slime->powerUp();
    $slime->powerUp();
    $slime->powerUp();
    $slime->powerUp();
    $slime->powerUp();
    $slime->powerUp();

    echo '<br>';

    $boss = new Boss('竜王');
    $boss->sayMyName();
    $boss->specialAttack();

    $slime = new Enemy('スライム');
    $boss = new Boss('竜王');
    $slime->sayMyName();
    $boss->sayMyName();
?>