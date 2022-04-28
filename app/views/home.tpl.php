<main>
    <section class=poke_list>
        <?php foreach ($home_datas_list as $home_data) : ?>
            <div class="card_pokemon">
                <img src="img/<?= $home_data->getNumber() ?>.png">
                <a href="<?= $router->generate('pokemon-page', ['id' => $home_data->getNumber()]) ?>">
                <p>#<?= $home_data->getNumber() . " " . $home_data->getName() ?></a></p>

            
            </div>
            <?php endforeach; ?>
    </section>
</main>
</body>

</html>