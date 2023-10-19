<?php
// Интерфейс для дополнительных услуг
interface Service 
{
    public function apply(Tariff $tariff);
    public function getPrice();
}

// Реализация GPS-услуги
class GPSService implements Service 
{
    private $pricePerHour = 15;

        public function getPrice() 
  {
        return $this->$pricePerHour;
  }

    public function apply($tariff) 
  {
        $hours = ceil($tariff->totalmin / 60);
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

    public function apply($tariff) 
  {
        return $this->price;
  }
}
?>
