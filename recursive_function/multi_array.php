<?php
//recursive function is a function which is being called by itself.
//the conditions are set to stop the execution which mainly known as base case
//factorial, multi dimensional array manipulation etc are the examples of recursive function
//In particular, nested data operation are handled by recursive function

// first see a simple array 
$a = array('a','b','c','d');

//what if we want to see all elements in the browser, we know we can use foreach, lets see
function get_element ($a){
    foreach($a as $value){
        echo $value.'<br/>';
    }
}
echo "<pre>";
echo "Normal Array"."<br/>";
get_element($a);

//what about while the last element of $a array is also an array ? can we do it with normally
//nope, it will get an error
$a1 = array('a','b','c','d'=>array('da','db','dc','dd'));

function get_element2($array){
    if(is_array($array)){ //first checking its array or not
        foreach($array as $values){ // passing the array elements into values
            if(is_array($values)){ // re-check is there any element as an array
                foreach($values as $nested){ // again passing the values
                    echo $nested."<br/>";
                }
            }else{
                echo $values."<br/>";
            }
        }
    }else{
        echo $array.'<br/>';
    }
}
echo "Multidimesional Array"."<br/>";
get_element2($a1);

//In above we have to write again and again, but thats not the right way
//now we can call the function by itself
//recursive function
function get_element3($a){
    if(is_array($a)){    //first check its array or not 
        foreach($a as $values){ //if then passed it through foreach 
            get_element3($values); //the call the function again if there is more array in elements
        }
    }else{ //if not then direct print 
        echo $a."<br/>";
    }
}

$an_array = array(
    'a','b','c', 'd'=>array('da','db','dc','dd'=> array('another array element'))
);
get_element3($an_array);

//factorial 
// 5! - 5 4 3 2 1 ==> 120

function get_factorial($num){
    if($num == 0){
        return 1;
    }
      //recursive 
      $result = ($num * get_factorial($num-1));
      return $result;
}
echo get_factorial(5);