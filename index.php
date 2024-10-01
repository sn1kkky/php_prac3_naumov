<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?
    class Animal {
    protected $weight;
    protected $age;
    protected $color;

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Вес: $this->weight кг, Возраст: $this->age лет, Окрас: $this->color";
    }
}

class Lion extends Animal {
    private $maneLength; 

    public function __construct($weight, $age, $color, $maneLength) {
        parent::__construct($weight, $age, $color);
        $this->maneLength = $maneLength;
    }

    public function roar() { 
        return "Рык льва с длиной гривы $this->maneLength см!";
    }

    public function getLionInfo() {
        return $this->getInfo() . ", Длина гривы: $this->maneLength см";
    }
}

class Rabbit extends Animal {
    private $earLength; 

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function hop() { 
        return "Кролик прыгает с длиной ушей $this->earLength см!";
    }

    public function getRabbitInfo() {
        return $this->getInfo() . ", Длина ушей: $this->earLength см";
    }
}

class Wolf extends Animal {
    private $packSize;

    public function __construct($weight, $age, $color, $packSize) {
        parent::__construct($weight, $age, $color);
        $this->packSize = $packSize;
    }

    public function howl() {
        return "Волк воет в стае размером $this->packSize!";
    }

    public function getWolfInfo() {
        return $this->getInfo() . ", Размер стаи: $this->packSize";
    }
}

    $lion = new Lion(190, 5, 'золотистый', 30);
    $rabbit = new Rabbit(2, 1, 'белый', 10);
    $wolf = new Wolf(50, 3, 'серый', 7);


    ?><div class="info"><?
    echo $lion->getLionInfo() . "\n";
    echo $lion->roar() . "\n";
    ?></div><?

    ?><div class="info"><?
    echo $rabbit->getRabbitInfo() . "\n";
    echo $rabbit->hop() . "\n";
    ?></div><?

    ?><div class="info"><?
    echo $wolf->getWolfInfo() . "\n";
    echo $wolf->howl() . "\n";
    ?></div><?

?>
</body>
</html>