<?php
class Books
{
    var $price=10;
    function display()
    {
        echo "price in class method ".$this->price."<br/>";
    }
}
$b=new Books();
$b->display();
echo "price outside class ".$b->price;
?>