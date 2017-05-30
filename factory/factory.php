<?php
   class Cars{
      private $carMake;
      private $carModel;
      
      public function __construct($make, $model) {
         $this->carMake = $make;
         $this->carModel = $model;
      }
      
      public function getMakeAndModel() {
         return $this->carMake . ' ' . $this->carModel;
      }
   }
   
   class carFactory {
      public static function create($make, $model) {
         return new car($make, $model);
      }
   }
   
   $pulsar = carFactory::create('honda', 'suv');
   print_r($pulsar->getMakeAndModel());
   
   class Cars{
      private $carMake;
      private $carModel;
      
      public function __construct($make, $model) {
         $this->carMake = $make;
         $this->carModel = $model;
      }
      
      public function getMakeAndModel() {
         return $this->carMake . ' ' . $this->carModel;
      }
   }
   
   class carFactory {
      public static function create($make, $model) {
         return new car($make, $model);
      }
   }
   $pulsar = carFactory::create('honda', 'suv');
   
   print_r($pulsar->getMakeAndModel()); 
?>