<div class="container">
    <h1 id="titre_page">Détails de <?= $poke_datas->getName() ?></h1>


    <section class="blocs_centraux">
        <div class="photo_pokemon">
            <img src="img/<?= $poke_datas->getNumber()?>.png">
        </div>
        <div class="statistiques">

            <h3>#<?= $poke_datas->getNumber() . " " . $poke_datas->getName()?></h3>
            <br>

            <span class="type_box"><?php $poke_datas->getConcat()?></span>
            

            <h4>Statistiques</h4>

            <div class="points_specs">

                <ul class="specs">
                    <li>Hp</li>
                    <li>Attaque</li>
                    <li>Défense</li>
                    <li>Attaque Spé.</li>
                    <li>Défense Spé.</li>
                    <li>Vitesse</li>
                </ul>

                <ul class="specs">
                    <li><?= $poke_datas->getHp() ?></li>
                    <li><?= $poke_datas->getAttack() ?></li>
                    <li><?= $poke_datas->getDefense() ?></li>
                    <li><?= $poke_datas->getSpe_attack() ?></li>
                    <li><?= $poke_datas->getSpe_defense() ?></li>
                    <li><?= $poke_datas->getSpeed() ?></li>
                </ul>


            </div>

        </div>
    </section>


</div>
</main>

