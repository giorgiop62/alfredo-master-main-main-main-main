<script>
export default {
    name: 'Bio'
}
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center">Biografia</h1>
        <section class="text-center mb-4">
            Musicista e compositore napoletano, classe 1990, inizia ad approcciare alla musica da bambino studiando il
            flauto traverso, successivamente inizia lo studio della chitarra, approfondendola nel jazz per poi
            diplomarsi al conservatorio di Napoli S. Pietro a Majella in violino classico
        </section>
        <section class="text-center mb-4">

            Il primo approccio al violino è avvenuto grazie al gypsy jazz, dove la genialità di artisti come Stéphane
            Grappelli e Django Reinhardt ha catturato la sua attenzione e stimolato la sua creatività. Sotto la guida
            del violinista rumeno Illie Pipica, si è incuriosito ed appassionato ai vari linguaggi dell’est Europa,
            mantenendo sempre vivo lo studio della musica classica.
        </section>
        <section class="text-center mb-4">
            Durante i suoi studi classici continua a dedicarsi allo studio del jazz, frequentando la MAD SCHOOL, sotto
            la guida di Valerio Silvestro e girando l’Europa seguendo diversi stage per violino jazz, primo fra tutti lo
            stage con il violinista Didier Lockwood al CMDL (Centre des musiques Didier Lockwood).
        </section>
        <section class="text-center mb-4">
            Lungi dall’inquadrarsi in un unico stile, moltiplica le esperienze fondendole in un nuovo e personalissimo
            linguaggio, esprimendo diverse influenze che vengono dal mondo del Flamenco, della musica turco ottomana,
            del jazz, del Gypsy jazz, del bluegrass.
        </section>
        <section class="text-center mb-4">
            - Nel 2016 con gli ‘Araputo Zen’ pubblica il primo disco, Hydruntum; <br>
            - Nel 2017 pubblica il disco con il trio ‘Flamenco Napuleño’;<br>
            - Nel 2021 viene presentato il secondo Album degli ‘Araputo Zen’, Majacosajusta; <br>

            - Attualmente sta Lavorando al suo nuovo disco, <br>
            <span>Miradois.</span>
        </section>

    </div>
</template>

<style lang="scss" scoped>
section {
    text-align: center;
    color: white;
    font-size: 20px;
    margin-top: 10px;
}

.container-fluid {
    font-style: sans-serif;
    background-image: url('../assets/alfviolin.JPG');
    background-size: cover;
    height: 100vh;

}

span {
    font-weight: bold;
    color: burlywood;
}

h1 {
    padding-top: 20px;
    color: white;
}



@media only screen and (max-width: 767px) {
    img {
        width: 100%;
    }

    .container-fluid {
        height: 1500px;

    }
}
</style>