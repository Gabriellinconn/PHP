<form action="" method="GET">
<label>Altura</label>
<input name="b" type="text">


<button type="submit">Converter</button>

</form>

<?php

$b = $_GET ['b'];


echo "<p>Peso ideal para homens: ".((72.7*$b) - 58);
echo "<p>Peso ideal para mulheres: ".((62.1*$b) - 44.7);

?>