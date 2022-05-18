<style>
  .table {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    padding: 10px;
    grid-gap: 30px;
    /* background-color: #737373; */
        
}
.table > div:nth-child(1) {
  background: red;
}

.table > div:nth-child(2) {
  background: lightgreen;
}
.table > div:nth-child(3) {
  background: green;
}
.table > div:nth-child(4) {
  background: yellow;
}
.table > div:nth-child(5) {
  background: grey;
}
.table > div:nth-child(6) {
  background: pink;
}
.table > div:nth-child(7) {
  background: blue;
}
.table > div:nth-child(8) {
  background: darkblue;
}
.table > div:nth-child(9) {
  background: gray;
}
.table > div:nth-child(10) {
  background: lightyellow;
}

.tables {
  /* background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8); */
  /* padding: 20px; */
  font-size: 20px;
  text-align: center;
}

</style>

<div class="table"> 

<?php
$num = 10;

for($i = 1; $i <= 10; $i++)
{	
    echo '<div class="tables">';
	
	for($j =1; $j <= $num; $j++)
	{
		$multiplication_table = ($i * $j);
		echo "<div> $i   x $j =  $multiplication_table </div>";
	}
	
	echo "</div>";
}
?>

</div>
