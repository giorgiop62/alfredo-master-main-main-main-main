<script>
export default {
    name: "Projets",
};
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Discografia</h1>
        <div class="box-disco p-5 d-flex flex-wrap justify-content-around">
            <!-- Aggiunto flex-wrap e justify-content-center -->
            <div class="card" style="width: 18rem; margin-bottom: 20px;">
                <!-- Aggiunto margin-bottom per la distanza tra le cards -->
                <img src="../assets/album1.png" class="card-img-top" alt="Majacosajusta">
                <div class="card-body">
                    <h5 class="card-title">Majacosajusta</h5>
                    <p class="card-text">Anno: 2021</p>
                    <a href="https://open.spotify.com/intl-it/artist/2gQaHes6Px7wbNHmp5H4KM?si=JUmw4bKBTfO2NIkFu7KcRw"
                        class="btn btn-dark">Ascolta su Spotify</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-bottom: 20px;">
                <!-- Aggiunto margin-bottom per la distanza tra le cards -->
                <img src="../assets/album4.png" class="card-img-top" alt="Hydruntum">
                <div class="card-body">
                    <h5 class="card-title">Hubrys</h5>
                    <p class="card-text">Anno: 2019</p>
                    <a href="https://open.spotify.com/intl-it/track/4YXALdq9vRBR5dxeWSYiAt?si=14f17a0cc2474db5"
                        class="btn btn-dark">Ascolta su Spotify</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-bottom: 20px;">
                <!-- Aggiunto margin-bottom per la distanza tra le cards -->
                <img src="../assets/album3.jpeg" class="card-img-top" alt="Hydruntum">
                <div class="card-body">
                    <h5 class="card-title">Flamenco Napuleño</h5>
                    <p class="card-text">Anno: 2017</p>
                    <a href="https://open.spotify.com/intl-it/artist/1skEFR5AL075fwcM0AopGU?si=UTmm3DqSSUWYkimdC6jOgA"
                        class="btn btn-dark">Ascolta su Spotify</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-bottom: 20px;">
                <!-- Aggiunto margin-bottom per la distanza tra le cards -->
                <img src="../assets/album2.png" class="card-img-top" alt="Hydruntum">
                <div class="card-body">
                    <h5 class="card-title">Hydruntum</h5>
                    <p class="card-text">Anno: 2016</p>
                    <a href="https://open.spotify.com/intl-it/album/4DuDbk2Kx5xfflF2nqrxCI?si=hFhDb4HDQdOxGftlyS-h7A"
                        class="btn btn-dark">Ascolta su Spotify</a>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    background-color: black;
    color: white;
    justify-content: space-between;
    height: 100vh;
}



@media only screen and (max-width: 600px) {

    .box-disco {
        flex-direction: column;
        align-items: center;
        margin: 0 auto;
    }

    .container-fluid {
        height: 100%;
    }

    .card {
        width: 80%;
    }
}
</style>