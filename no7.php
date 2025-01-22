<?php

class Laptop {
    private $processor;
    private $ram;

    public function __construct() {
        $this->processor = "";
        $this->ram = 0; 
    }
    public function setProcessor($processor) {
        $this->processor = $processor;
    }

    public function getProcessor() {
        return $this->processor;
    }

    public function setRam($ram) {
        if ($ram > 0) {
            $this->ram = $ram;
        }
    }

    public function getRam() {
        return $this->ram;
    }
}

$laptop = new Laptop();

$laptop->setProcessor("12th Gen Intel(R) Core(TM) i7-12650H");
$laptop->setRam(24);

echo "Processor: " . $laptop->getProcessor() . "<br>";
echo "RAM: " . $laptop->getRam() . " GB";

?>




