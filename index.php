<?php
class Date
{
    private $date;
    public function __construct($date 
        = null) 
    {
        if($date != null){
            $this->date = strtotime($date);
        }
        else{
            $this->date = time('Y-m-d');
        }
    }
    public function getDate(){
        return $this->date;
    }
    public function getDay()
    {
        echo date('w', $this->date);
        return (int) date('w', $this->date);
    }
    
    public function getMonth($lang = 'ru')
    {
        $rumonths = ['январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
        $enmonths = ['january','february','march','april','may','june','july','august','september','october','november','december'];
        if($lang != null){
            $month = (int) date('n',$this->date);
            if($lang = 'ru'){
                return $rumonths[$month - 1];
                // return $rumonths[date('n',strtotime($this->date))];
            }
            else if($lang = 'en'){
                return $enmonths[$month - 1];
            }
        }else{
            return 'не выбран язык';
        }
    }
    
    public function getYear()
    {
        return date('Y',$this->date);
    }
    
    public function getWeekDay($lang 
        = null) 
    {
        $ruweeks = ['Понедельник','вторник','среда','четверг','пятница','суббота','воскрeсенье'];
        $enweeks = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
        if($lang != null){
            $weekday = (int) date('w',$this->date);
            if($lang = 'ru'){
                return $ruweeks[$weekday];
            }
            else if($lang = 'en'){
                return $enweeks[$weekday];
            }
        }else{
            return 'не выбран день недели';
        }
    }
    
    public function addDay($value)
    {
        // добавляет значение $value к дню
    }
    
    public function subDay($value)
    {
        // отнимает значение $value от дня
    }
    
    public function addMonth($value)
    {
        // добавляет значение $value к месяцу
    }
    
    public function subMonth($value)
    {
        // отнимает значение $value от 
            // месяца 
    }
    
    public function addYear($value)
    {
        // добавляет значение $value к году
    }
    
    public function subYear($value)
    {
        // отнимает значение $value от года
    }
    
    public function format($format)
    {
        // выведет дату в указанном 
            //   формате 
        // формат пусть будет такой же, 
            // как в функции date 
    }
    
    public function __toString()
    {
        // выведет дату в формате 
            //   'год-месяц-день' 
    }
}
$date = new Date('2025-12-31');
echo $date->getYear() . '<br>';  // выведет '2025'
echo $date->getMonth() . '<br>'; // выведет '12'
echo $date->getDay() . '<br>';   // выведет '31'
