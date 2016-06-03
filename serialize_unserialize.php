<?php
class User {
    public $name;

    public function __construct(string $name) {

        $this->name = $name;
    }
}



class Card {
    public $name;
    public $expansion;
    public $cost;

    public function __construct(string $name, string $expansion,int $cost ) {

        $this->name = $name;
        $this->expansion = $expansion;
        $this->cost = $cost;
    }
}

$user = new User("Adrian");
$card = new Card("Black Lotus", "Alpha", 2000);

$data = [$user,$card];
print_r($data);

$serialized_data = serialize($data);
$unserialized_data = unserialize($serialized_data,
    ['allowed_classes' => ['User', 'Card']]);
echo '<br>';
print_r($serialized_data);




 ?>
