<form action="" method="GET">
<label>Digite um distância em metros</label>
<input name="m" type="text">

<button type="submit">Converter</button>

</form>

<?php

$m = $_GET ['m'];

echo "A distância em cm é: ". ($m*100)."cm";

?>