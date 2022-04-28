<main>

    <div class="page-liste-titre">
        <h3>Cliquez sur un type pour voir tous les Pokémon de ce type</h3>
    </div>

    <section class="type_category">

        <?php foreach ($type_data_list as $type_data) : ?>

            <div class="type_nom <?= $type_data->getName() ?>">
                <a href="<?= $router->generate('type-page', ['action' => $type_data->getName()]) ?>">
                    <?= $type_data->getName() ?>
                </a>
            </div>

        <?php endforeach; ?>

    </section>




</main>