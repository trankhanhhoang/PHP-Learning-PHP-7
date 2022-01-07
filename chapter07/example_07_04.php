<?php
// Пример 7.4. Элементы формы с несколькими значениями
?>
<form method="POST" action="example_07_04.php">
    <select name="lunch[]" multiple>
        <option value="pork">BBQ Pork Bun</option>
        <option value="chicken">Chicken Bun</option>
        <option value="lotus">Lotus Seed Bun</option>
        <option value="bean">Bean Paste Bun</option>
        <option value="nest">Bird-Nest Bun</option>
    </select>
    <input type="submit" name="submit">
</form>