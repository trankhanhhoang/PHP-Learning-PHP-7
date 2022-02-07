<form method="POST" action ="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
    <table>
        <?php if ($errors) { ?>
            <tr>
                <td>You need to correct the following errors:</td>
                <td><ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?= $form->encode($error) ?></li>
                        <?php } ?>
                    </ul></td>
            </tr>
        <?php } ?>

        <tr>
            <td>Название блюда:</td>
            <td><?= $form->input('text', ['name' => 'dish_name']) ?></td>
        </tr>

        <tr>
            <td>Минимальная цена:</td>
            <td><?= $form->input('text', ['name' => 'min_price']) ?></td>
        </tr>

        <tr>
            <td>Максимальная цена:</td>
            <td><?= $form->input('text', ['name' => 'max_price']) ?></td>
        </tr>

        <tr>
            <td>Острый:</td>
            <td><?= $form->select($GLOBALS['spicy_choices'],
                                        ['name' => 'is_spicy']) ?></td>
        </tr>

        <tr><td colspan="2" align="center">
                <?= $form->input('submit', ['name' => 'search',
                    'value' => 'Поиск']) ?>
            </td></tr>

    </table>
</form>