<?php
// Интерфейс для дополнительных услуг
interface Service 
{
    public function applyService($minutes);
    public function getPrice() ;
}

// Реализация GPS-услуги
class GPSService implements Service 
{
    private $pricePerHour = 15;

        public function getPrice() 
  {
        return $this->$pricePerHour;
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
    private $price = 200;

    public function getPrice() 
  {
        return $this->price;
  }

    public function applyService($minutes) 
  {
        return $this->price;
  }
}
?>
