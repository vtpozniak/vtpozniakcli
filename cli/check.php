<?php
class Check{

    public function rez(){$a = $_POST;
       $ty =  implode(" ",$a);

        if (strpos($ty, 'sound') !== false) {
            if (strpos($ty, 'shiba-inu') !== false){
                echo $ty . "</br>",
                "woof! woof!";
            }else if (strpos($ty, 'mops') !== false){
                echo $ty . "</br>",
                "woof! woof!";
            }else if (strpos($ty, 'dachshund') !== false){
                echo $ty . "</br>",
                "woof! woof!";
            }else if (strpos($ty, 'plush-labrador') !== false) {
                echo $ty . "</br>",
                "**no reaction";
            }else if (strpos($ty, 'rubber-dachshund') !== false) {
                echo $ty . "</br>",
                "beep! beep!";
            }else{
                echo "no team or breed specified";
            }
        }else if (strpos($ty, 'hunt') !== false){
            if (strpos($ty, 'shiba-inu') !== false){
                echo $ty . "</br>",
                "woof! woof!";
            }else if (strpos($ty, 'mops') !== false){
                echo $ty . "</br>",
                "**whining piteously";
            }else if (strpos($ty, 'dachshund') !== false){
                echo $ty . "</br>",
                "woof! woof!";
            }else if (strpos($ty, 'plush-labrador') !== false) {
                echo $ty . "</br>",
                "**no reaction";
            }else if (strpos($ty, 'rubber-dachshund') !== false) {
                echo $ty . "</br>",
                "**no reaction!";
            }else{
                echo "no team or breed specified";
            }
        }else{
            echo "no team or breed specified";
        }
    }
}

$test = new Check();
$test->rez();
