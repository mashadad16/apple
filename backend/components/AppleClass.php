<?php


namespace app\components;


class AppleClass
{
    //цвет
    private $color;
    //дата появления (устанавливается при создании объекта случайным unixTmeStamp)
    private $date_birth;
    //дата падения (устанавливается при падении объекта с дерева)
    private $date_fall;
    //статус (на дереве / упало)
    private $status;
    //сколько съели (%)
    private $count_of_eat;
    //id яблони
    private $tree_id;

    public function __construct(string $color)
    {
        $this->color = $color;

        //изначально яблоко на дереве
        $this->status = 0;

        //сгенерируем значение
        $randomTimestamp = mktime(rand(0,12),rand(0,59),0,rand(1,12),rand(1,31),rand(2020,2023));
        $this->date_birth = $randomTimestamp;

        //по умолчанию яблоко целое
        $this->count_of_eat = 1;

        //яблони всего три (красная, желтая, зеленая)
        $this->tree_id = rand(1,3);

    }


    public function setTreeId($treeId)
    {
        return $this->tree_id = $treeId;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }

    public function setDateBirth($date_birth)
    {
        return $this->date_birth = $date_birth;
    }

    public function setDateFall($date_fall)
    {
        return $this->date_fall = $date_fall;
    }

    public function setStatus($status)
    {
        return $this->status = $status;
    }

    public function setCountOfEat()
    {
        return $this->count_of_eat;
    }

    public function getTreeId()
    {
        return $this->tree_id;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getDateBirth()
    {
        return $this->date_birth;
    }

    public function getDateFall()
    {
        return $this->date_fall;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCountOfEat()
    {
        return $this->count_of_eat;
    }

    //метод падения яблока
    public function fallApple()
    {
        //если яблоко не на дереве
        if ($this->status != 0) {
            throw new \Exception("Яблоко не может упасть, так как оно уже на земле.");
        }else{
            //меняем статус, так как яблоко упало
            $this->status = 1;
            //текущая дата падения
            $this->date_fall = time();
        }
    }

    //метод для откусывания яблока




}