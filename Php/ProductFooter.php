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
new Product("K9-DL-01","Dalmation",12.00,"P",18.50,"Spotted Adult Female","EST-10"),
new Product("RP-SN-01","Rattlesnake",12.00,"P",38.50,"Venomless","EST-11"),
new Product("RP-SN-01","Rattlesnake",12.00,"P",26.50,"Rattleless","EST-12"),
new Product("RP-LI-02","Iguana",12.00,"P",35.50,"Green Adult","EST-13"),
new Product("FL-DSH-01","Manx",12.00,"P",158.50,"Tailless","EST-14"),
new Product("FL-DSH-01","Manx",12.00,"P",83.50,"With tail","EST-15"),
new Product("FL-DLH-02","Persian",12.00,"P",23.50,"Adult Female","EST-16"),
new Product("FL-DLH-02","Persian",12.00,"P",89.50,"Adult Male","EST-17"),
new Product("AV-CB-01","Amazon Parrot",92.00,"P",63.50,"Adult Male","EST-18")
);
$rows=array();
for($i=0;$i<count($productArray);$i++)
{
	array_push($rows,$productArray[$i]);	
}
$footer=array();
array_push($footer,new Product("Average:","",19.80,"",60.40,"",""));
array_push($footer,new Product("Total:","",198.0,"",604.0,"",""));


class DataGridObj
{
	var $total;
	var $rows;
	var $footer;
	function __construct($total,$rows,$footer)
	{
		$this->total=$total;
		$this->rows=$rows;
		$this->footer=$footer;
	}
}
$dg=new DataGridObj(28,$rows,$footer);
echo json_encode($dg);
?>
