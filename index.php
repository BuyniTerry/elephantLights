<?php


class Time
{
    public $years;
    public $hours;
    public $minutes;
    public $seconds;
    public $days;

    public function __construct($years, $days, $hours, $minutes, $seconds)
    {
        $this->years = $years;
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
        $this->days = $days;
    }
    public function getTime()
    {
        echo date("$this->years") . ":" . date("$this->days") . ":" . date("$this->hours") . ":" . date("$this->minutes") . ":" . date("$this->seconds");
    }
    public function getRect()
    {
        if($this->minutes % 3 == 0) {
            echo "<svg width=".($this->hours*20)." height=".($this->days**3).">
    <rect width=".($this->hours*20)." height=".($this->days**3)." fill=red></svg>";
        } elseif($this->minutes % 2 == 0 && $this->minutes % 3 != 0) {
            echo "<svg width=".((round(sqrt($this->years)))*5)." height=".((round(sqrt($this->years)))*5).">
    <rect width=".((round(sqrt($this->years)))*5)." height=".((round(sqrt($this->years)))*5)." fill=yellow></svg>";
        } else {
            echo "<svg width=".$this->minutes*$this->seconds." height=".($this->hours**2).">
    <rect width=".$this->minutes*$this->seconds." height=".($this->hours**2)." fill=green></svg>";
        }
    }
}
$rect = new Time(date("Y"), date("j"), date("H"), date("i"), date("s"));
$rect->getTime();
echo "<hr>";
$rect->getRect();


?>
