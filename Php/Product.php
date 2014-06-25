<?php
class Product
{
	var $productid;
	var $productname;
	var $unitcost;
	var $status;
	var $listprice;
	var $attr1;
	var $itemid;
	function __construct($productid,$productname,$unitcost,$status,$listprice,$attr1,$itemid)
	{
		$this->productid=$productid;
		$this->productname=$productname;
		$this->unitcost=$unitcost;
		$this->status=$status;
		$this->listprice=$listprice;
		$this->attr1=$attr1;
		$this->itemid=$itemid;
	}
}
$productArray=array(
new Product("FI-SW-01","Koi",10.00,"P",36.50,"Large","EST-1"),
new Product("K9-DL-01","Dalmation",12.00,"P",18.50,"Spotted Adult Female","EST-10")
);
$result=array();
for($i=0;$i<count($productArray);$i++)
{
	array_push($result,$productArray[$i]);	
}
echo json_encode($result);
?>

