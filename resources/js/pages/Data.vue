<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Concerti</h1>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Luogo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Descrizione</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Blue turtle: Passeggiata Colonna, P.za Amedeo, 16c,
                        80121 Napoli NA
                    </td>
                    <td>8 Marzo</td>
                    <td>Gypsy jazz duo</td>
                </tr>
                <tr>
                    <td>Versa: Via Mezzocannone, 103, 80134 Napoli NA</td>
                    <td>9 Marzo</td>
                    <td>Gypsy jazz duo</td>
                </tr>
                <tr>
                    <td>
                        Torella dei Lombardi (AV)
                    </td>
                    <td>17 Marzo </td>
                    <td> Be.Folky</td>
                </tr>
                <tr>
                    <td>Via Guglielmo Marconi 8/19, Angri SA</td>
                    <td>22 Marzo</td>
                    <td>Araputo Zen</td>
                </tr>
                <tr>
                    <td>
                        Auditorium di bagnoli: Via Diocleziano, 341, 80124
                        Napoli NA
                    </td>
                    <td>25 Marzo</td>
                    <td>
                        OEOAS (orchestra elettroacustica officina arti sonore)
                    </td>
                </tr>
                <tr>
                    <td>
                        Blum, Via Bagnoli, 674, 80124 Naples, Italy (AV)
                    </td>
                    <td>27 Marzo</td>
                    <td>Flamenco Napuleño trio</td>
                </tr>
                <tr>
                    <td>
                        Auditorium novecento: Via Enrico De Marinis, 4, 80134
                        Napoli NA
                    </td>
                    <td>11 Aprile</td>
                    <td>Alfredo Pumilia ensemble, presentazione Miradois</td>
                </tr>
                <tr>
                    <td>
                        Procida
                    </td>
                    <td>24-25-26 Maggio</td>
                    <td>Raduno Manouche</td>
                </tr>
                <tr>
                    <td>
                        1970 country house (Contrada Ponte Teano, 03037 Pontecorvo FR)
                    </td>
                    <td>14 Giugno </td>
                    <td>Be.Folky (bluegrass ensemble)</td>
                </tr>
                <tr>
                    <td>
                        Letino (CE)
                    </td>
                    <td>27 Luglio</td>
                    <td> Ensemble Alfredo Pumilia</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    color: white;
    background-image: url("../../assets/notte.jpg");
    background-size: cover;
    width: 100%;
    height: 100vh;
}

.table {
    opacity: 0.8;
}

@media only screen and (max-width: 767px) {
    .container-fluid {
        height: 1200px;
    }
}
</style>
