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
    <img src="../assets/mobile.png" alt="" class="mobile"> <!-- Aggiunto la classe "mobile" all'immagine -->
</template>

<style lang="scss" scoped>
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
        /* Nascondi il contenuto principale quando la larghezza dello schermo è inferiore a 768px */
    }

    .mobile {
        display: block;
        max-width: 100%;

        /* Mostra l'immagine mobile quando la larghezza dello schermo è inferiore a 768px */
    }
}
</style>
