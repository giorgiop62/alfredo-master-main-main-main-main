<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Contatti</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/contact.jpg" alt="Alfredo Pumilia" class="img-fluid" />
            </div>
            <div class="col-md-6">
                <div class="contatti">
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-phone my-2 "></i> <a href="+393929220639">+393929220639</a></li>
                        <li><i class="fa-solid fa-envelope my-2"></i> <a
                                href="alfredopumilia@gmail.com">alfredopumilia@gmail.com</a></li>
                        <li>
                            <span class="navbar-text">
                                <a class="nav-link text-light "
                                    href="https://www.facebook.com/alfredo.pumilia?locale=it_IT%2F"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a class="nav-link text-light" href="https://www.instagram.com/alfredo_pumilia/"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a class="nav-link text-light" href="https://www.youtube.com/watch?v=9jPcHhuZQ8Q"><i
                                        class="fa-brands fa-youtube"></i></a>
                                <a class="nav-link text-light"
                                    href="https://open.spotify.com/user/1174504297?si=f2b72c67d1d54f02"><i
                                        class="fa-brands fa-spotify"></i></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    background-color: black;
    color: white;
    padding: 20px;
}

img {
    filter: grayscale(100%);
}

.contatti {
    font-size: 30px;
    margin-top: 20px;
    font-family: 'Times New Roman', Times, serif;
}

ul {
    list-style-type: none;
    padding-left: 0;
}

li {
    margin-bottom: 20px;
}

a {
    color: white;
    text-decoration: none;
    font-size: 21px;
}

.navbar-text {
    display: flex;
    /* Mostra le icone dei social media in orizzontale */
}

.navbar-text a {
    margin-right: 20px;
    /* Aggiunge spazio tra le icone */
}

@media (max-width: 767px) {
    .contatti {
        font-size: 20px;
    }

    .container-fluid {
        height: 100vh;
    }
}
</style>
