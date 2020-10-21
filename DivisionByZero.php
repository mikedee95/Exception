<?php

class DivideByZeroException extends Exception{
    public function __toString()
    {
        return "Cant divide by zero.";
    }
}

function divide($a,$b){
    if($b == 0){
        throw new DivideByZeroException();
    }
    return $a/$b;
}

try{
    echo divide(100,0);
} catch (DivideByZeroException $e){
    echo "Something went wrong ". $e;
}
