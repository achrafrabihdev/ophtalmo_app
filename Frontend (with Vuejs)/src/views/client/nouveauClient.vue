<template>
<h1 class="text-primary text-center">Nouveau Client</h1>
                <form @submit.prevent="createClient">
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" v-model="prenom">
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" v-model="nom">
                    </div>
                    <div class="mb-3">
                        <label for="dateDeNaissance" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="dateDeNaissance" v-model="dateDeNaissance">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
</template>
<script>
export default {
    data() {
        return {
            prenom: "",
            nom: "",
            dateDeNaissance: ""
        }
    },
    methods: {
        createClient(){
            let client = {
                prenom: this.prenom,
                nom: this.nom,
                dateDeNaissance: this.dateDeNaissance
            };
            fetch('http://localhost:8000/api/v1/clients',{
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(client)
            })
            .then(() => this.$router.push('/clients'))
            .catch(err => console.log(err.message))
        }
    },
}
</script>
<style >
    
</style>