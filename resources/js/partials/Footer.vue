<script>
export default {
    name: 'AppFooter',

}
</script>

<template>
    <footer class="bg-dark text-light py-3 d-flex">
        <h6>Alfredo Pumilia ©</h6>

        <a class="login text-light" href="http://127.0.0.1:8000/admin">Accedi</a>
    </footer>
</template>

<style lang="scss" scoped>
footer {
    justify-content: space-between;
    align-items: center;
    padding: 0 23px;
}

.login {
    text-decoration: none;
    color: black;
    cursor: pointer;

}

@media (max-width: 767px) {
    footer {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
    }
}
</style>