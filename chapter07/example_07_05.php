<?php
// Пример 7.5. Доступ к нескольким значениям элемента формы
?>
<form method="POST" action="example_07_05.php">
    <select name="lunch[]" multiple>
        <option value="pork">BBQ Pork Bun</option>
        <option value="chicken">Chicken Bun</option>
        <option value="lotus">Lotus Seed Bun</option>
        <option value="bean">Bean Paste Bun</option>
        <option value="nest">Bird-Nest Bun</option>
    </select>
    <input type="submit" name="submit">
</form>
Selected Buns:<br/>
<?php
if (isset($_POST['lunch'])){
    foreach ($_POST['lunch'] as $choice){
        print "You want a $choice bun.<br/>";
    }
}
?>