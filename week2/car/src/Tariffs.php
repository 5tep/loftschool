<?php
// Интерфейс для подсчета цены поездки
interface Tariff 
{
    public function calculatePrice($km, $minutes);
    public function addService(Service $service);
    public function getPricePerKm();
    public function getPricePerMinute();
    public function getTotalPrice();
    
}
// Абстрактный класс тарифа
abstract class AbstractTariff implements Tariff 
{
    protected $pricePerKm = 0;
    protected $pricePerMinute = 0;
    protected $services = [];
    public $totalPrice;

  public function calculatePrice($km, $minutes) 
    {
        $this->totalPrice = $km * $this->pricePerKm + $minutes * $this->pricePerMinute;
        
        foreach ($this->services as $service) {
            $this->totalPrice += $service->apply($this);
        }

        return $this->totalPrice;
    }

    public function addService(Service $service) 
    {
        $this->services[] = $service;
    }

    public function getPricePerKm()
    {
        return $this->pricePerKm;
    }
    
    public function getPricePerMinute()
    {
        return $this->pricePerMinute;
    }
    
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
}

// Реализация базового тарифа
class BaseTariff extends AbstractTariff 
{
    public function __construct() 
  {
        $this->pricePerKm = 10;
        $this->pricePerMinute = 3;
    }
    
}

// Реализация почасового тарифа
class HourlyTariff extends AbstractTariff 
{
    public function calculatePrice($km, $minutes) 
  {
        $hours = ceil($minutes / 60);
        $this->totalPrice = $hours * 200.0;
        
        foreach ($this->services as $service) {
            $this->totalPrice += $service->apply($this);
        }

        return $this->totalPrice;
    }
}

// Реализация студенческого тарифа
class StudentTariff extends AbstractTariff 
{
    public function __construct() 
  {
        $this->pricePerKm = 4;
        $this->pricePerMinute = 1;
    }
}

?>
