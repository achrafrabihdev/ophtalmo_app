<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ophtalmo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                <router-link class="nav-link" :to="{name: 'Client'}">Mes clients</router-link>
                </li>
                <li class="nav-item">
                <router-link class="nav-link" :to="{name: 'NouveauClient'}">Nouveau Client</router-link>
                </li>
                <li class="nav-item">
                <router-link class="nav-link" :to="{name: 'Ordonnance'}">Historiques</router-link>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    
}
</script>
<style>
    
</style>