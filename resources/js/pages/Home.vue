<script>
export default {
    name: "Home",
};
</script>

<template>
    <div class="container-fluid text-center">
        <div class="title">
            <h3 class="mt-5">Violinista <i class="fa-solid fa-circle"></i> Compositore <i
                    class="fa-solid fa-circle"></i>
                Performer</h3>
        </div>
    </div>
    <!-- <section class="text-center">
        <iframe rc="https://www.youtube.com/embed/AzKdiT0cds0" frameborder="0" allowfullscreen></iframe>
    </section> -->
    <!-- <div class="embed-responsive embed-responsive-16by9  mx-auto">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AzKdiT0cds0" allowfullscreen></iframe>
    </div> -->
    <img src="../assets/mobile.png" alt="" class="mobile"> <!-- Aggiunto la classe "mobile" all'immagine -->

    <iframe class="videoPresentazione" src="https://www.youtube.com/embed/AzKdiT0cds0"></iframe>



</template>

<style lang="scss" scoped>
.videoPresentazione {
    width: 100%;
    height: 50rem;
    border: 4px solid gray;
    padding: 90px;
    background-color: black;
}

.container-fluid {
    background-image: url('../assets/violinome.jpg');
    background-color: black;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center center;
    color: white;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
}

section {
    background-color: black;
    padding-top: 30px;
}

.mobile {
    display: none;
    /* Nascondi l'immagine mobile per impostazione predefinita */
}

h3 {
    font-size: 25px;
    display: flex;
    align-items: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

i {
    font-size: 10px;
    margin: 0 5px;
}

.title {
    align-items: center;
}

@media (max-width: 767px) {
    .container-fluid {
        display: none;
    }

    .videoPresentazione {
        width: 100%;
        height: 20rem;
        border: 3px solid gray;
        padding: 30px;
        background-color: black;
    }


    .mobile {
        display: block;
        /* Mostra l'immagine mobile */
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;

    }



}
</style>
