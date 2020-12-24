<?php
class MyList
{
    public $size = 0;
    public $elements = [];

    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->elements = $arr;
        else
            $this->elements = array();
        $this->reSize();
    }

    public function insert($index, $obj)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            array_splice($this->elements, $index, 0, $obj);
        } else {
            die("ERROR in ArrayList.remove");
        }
        $this->reSize();
    }

    public function add($obj)
    {
        $this->elements[] = $obj;
        $this->reSize();
    }

    public function remove($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            array_splice($this->elements, $index, 1);
        } else {
            die("ERROR in ArrayList.remove");
        }
        $this->reSize();
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function clear()
    {
        $this->elements = [];
        $this->reSize();
    }

    public function addAll($array)
    {
        $result = $this->elements;
        foreach ($array as $value) {
            array_push($result, $value);
        }
        $this->reSize();
        return $result;
    }

    public function indexOf($obj)
    {
        foreach ($this->elements as $key => $value) {
            if ($value == $obj) {
                return $key;
            }
        }
        return "Array isn't contain $obj!";
    }

    public function isEmpty()
    {
        return empty($this->elements);
    }

    public function sort()
    {
        $array = $this->elements;
        sort($array);
        return $array;
    }

    public function reset()
    {
        reset($this->elements);
    }

    public function size()
    {
        return count($this->elements);
    }

    protected function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    protected function reSize()
    {
        $this->size = count($this->elements);
    }

}
