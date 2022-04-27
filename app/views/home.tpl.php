<main>


    <section class=poke_list>
        <?php foreach ($home_datas_list as $home_data) : ?>
            <?php var_dump($home_data) ?>


            <div class="card_pokemon">

                <img src="img/<?= $home_data->getNumber() ?>.png">
                <p>#<?= $home_data->getNumber() . " " . $home_data->getName() ?>
                    <a href="<?= $router->generate('pokemon-page', ['id' => $home_data->getNumber()]) ?>">
                </p>

            </div>
            </div>
        <?php endforeach; ?>



    </section>


</main>
</body>

</html>

<?php