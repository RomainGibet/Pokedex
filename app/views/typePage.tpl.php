<main>
    <section class=poke_list>
        <?php foreach ($list_type as $type) : ?>
            
            <div class="card_pokemon">
                <img src="img/<?= $type->getNumber() ?>.png">

                <p>#<?= $type->getNumber() . " " . $type->getName() ?></a></p>


            </div>
        <?php endforeach; ?>

    </section>
</main>
</body>


</html>