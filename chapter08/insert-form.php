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
            <td>Цена:</td>
            <td><?= $form->input('text', ['name' => 'price']) ?></td>
        </tr>

        <tr>
            <td>Острый:</td>
            <td><?= $form->input('checkbox', ['name' => 'is_spicy',
                    'value' => 'yes'])?>Yes</td>
        </tr>

        <tr><td colspan="2" align="center">
                <?= $form->input('submit', ['name' => 'save',
                    'value' => 'Order'])?>
            </td></tr>

    </table>
</form>