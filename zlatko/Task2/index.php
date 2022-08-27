<?php
require_once "config.php";
interface Select{
    public function render();

    public function setDefaultValue($value);
}

class SelectArray implements Select{
    protected $name;
    protected $defaultValue;
    protected $id;
    protected $label;
    protected $array;
    protected $key;

    /**
     * @param $name
     * @param $id
     * @param $label
     * @param $array
     * @param $key
     * @param string $defaultValue
     */
    public function __construct($name, $id, $label, $array, $key, $defaultValue = ""){
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->array = $array;
        $this->key = $key;
        $this->defaultValue = $defaultValue;
    }

    public function render()
    {
        echo "<label for='$this->id'>$this->label</label>";
        echo "<select name='$this->name' id='$this->id'>";
        foreach ($this->array as $key=>$value){
            $selected = "";
            if($this->defaultValue == $value){
                $selected = "selected";
            }
            if($this->key){
                echo "<option value='$key' $selected>$value</option>";
            }
            else{
                echo "<option value='$value' $selected>$value</option>";
            }
        }
        echo "</select>";
    }

    public function setDefaultValue($value)
    {
        $this->defaultValue = $value;
    }
}
global $months;
$months = new SelectArray("months", "select_months2", "Month:", $months, true);
$months->setDefaultValue("March");
$months->render();


class SelectNumber implements Select{
    protected $name;
    protected $defaultValue;
    protected $id;
    protected $label;
    protected $start;
    protected $end;

    public function __construct($name, $id, $label, $start, $end, $defaultValue=0)
    {
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->start = $start;
        $this->end = $end;
        if($start > $this->end)
            [$this->end, $this->start] = [$this->start, $this->end];
        $this->defaultValue = $defaultValue;
    }

    public function setDefaultValue($value)
    {
        $this->defaultValue = $value;
    }

    public function render()
    {
        echo "<label for='$this->id'>$this->label</label>";
        echo "<select name='$this->name' id='$this->id'>";
        for($i = $this->start; $i < $this->end; $i++){
            $selected = "";
            if($i == $this->defaultValue){
                $selected = "selected";
            }
            echo "<option value='$i' $selected>$i</option>";
        }
        echo "</select>";
    }
}
$years = new SelectNumber("year", "select_year", "Year:", 1900, 2022);
$years->setDefaultValue(2000);
$years->render();

$years2 = new SelectNumber("year", "select_year2", "Year:", 2022, 1900);
$years2->setDefaultValue(2020);
$years2->render();