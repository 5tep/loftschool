<?php
// Интерфейс для дополнительных услуг
interface Service 
{
    public function applyService($minutes);
}

// Реализация GPS-услуги
class GPSService implements Service 
{
    private $pricePerHour;

    public function __construct($pricePerHour) 
  {
        $this->pricePerHour = $pricePerHour;
  }

    public function applyService($minutes) 
  {
        $hours = ceil($minutes / 60);
        return $hours * $this->pricePerHour;
  }
}
// Реализация услуги "Дополнительный водитель"
class AdditionalDriverService implements Service 
{
    private $price;

    public function __construct($price) 
  {
        $this->price = $price;
  }

    public function applyService($minutes) 
  {
        return $this->price;
  }
}
?>
