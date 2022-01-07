<?php
?>
<!-Пример 7.4. Вывод на экран парамертров из формы, переданной на обработку-->
<form method="post" action="example_07_03.php">
    <input type="text" name="product_id">
    <select name="category">
        <option value="overmitt">Pot Holder</option>
        <option value="fryingpan">Frying Pan</option>
        <option value="torch">Kitchen Torch</option>
    </select>
    <input type="submit" name="submit">
</form>
<p>Here are the submitted values:</p>
product_id: <?php print $_POST['product_id'] ?? ''?><br>
category: <?php print $_POST['category'] ?? '' ?>

