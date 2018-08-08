<?php
interface Move{
    const Speed=300;
    const Stop=0;
    public function run();
    public function stop();
}
interface Hit
{
const BASE_DAMAGE = 50;
public function hit();
}
class car implements Move,Hit{
    protected $windows;
    protected $wheel;
    protected $speed;
    protected $damage;
    public function __construct($windows = "round")
    {
        echo "Start of class<br>";
        $this->windows = $windows;
        $this->display();
        $this->speed = Move::Stop;

    }
    public function run(){
        $this->speed=Move::Speed;
        echo "$this->windows is run, speed = $this->speed.<br>";
    return $this;

    }
    public function stop(){
        $this->stop=Move::Stop;
        echo "$this->windows is stop, speed = $this->stop.<br>";
        return $this;

    }

    public function hit()
{
$this->damage = Hit::BASE_DAMAGE;
echo "With $this->damage damages, $this->windows hits to the creep.<br>";
return $this;
}

public function display()
{
echo "Hero's Name : $this->windows.<br>";
}

public function __destruct()
{
echo "End of class.<br>";
}
}

$antimage = new car;
$antimage->run()->hit()->stop();
?>
