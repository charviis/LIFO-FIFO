class FIFO implements Pushable{
private $queue = [];

public function push($value){
array_push($this->queue, $value);
}

public function pop(){
return array_shift($this->queue);
}
}