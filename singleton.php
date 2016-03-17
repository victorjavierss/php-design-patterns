<?php
class Singleton {
  private static $instancia;
  private $contador;


  private function __construct() {
    echo "He creado un " . __CLASS__ . "\n";
    $this->contador = 0;
  }

  public static function getInstance() {
    if (  !self::$instancia instanceof self) {
      self::$instancia = new self;
    }
    return self::$instancia;
  }

  public function incrementar() {
    return ++$this->contador;
  }

  public function disminuir() {
    return --$this->contador;
  }
}

$instancia = Singleton::getInstance();
echo "instancia (incrementar): " . $instancia->incrementar() . "\n";
echo "instancia (incrementar): " .$instancia->incrementar() . "\n";
echo "instancia (incrementar): " .$instancia->incrementar() . "\n";
$otraInstancia = Singleton::getInstance();
echo "otraInstancia (disminuir): " .$otraInstancia->disminuir() . "\n";
echo "otraInstancia (incrementar): " .$otraInstancia->incrementar() . "\n";