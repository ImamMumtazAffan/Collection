<?php

include "collection.php";

class Cart{
    private $id;
    private $name;
  	private $details;

    public function __construct($id, $name, $detail) {
        $this->id = $id;
        $this->name = $name;
      	$this->details = $detail;
    }

}

$c = new Collection();
$c->addItem(new Cart(1, "imam", ["roti", "gula", "gandum"]), 'imam');

$imam1 = json_encode($c->getItem('imam'));

echo json_last_error_msg();
?>