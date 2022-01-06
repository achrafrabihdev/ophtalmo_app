<template>
<h1 class="text-primary text-center">Nouveau Ordonnance</h1>
                <form @submit.prevent="createOrdonnance">
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="desc" v-model="desc">
                    </div>
                    <div class="mb-3">
                        <label for="od" class="form-label">Oeil droit</label>
                        <input type="text" class="form-control" id="od" v-model="od">
                    </div>
                    <div class="mb-3">
                        <label for="og" class="form-label">Oeil gauche</label>
                        <input type="text" class="form-control" id="nom" v-model="og">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Créer</button>
                    </div>
                </form>
</template>
<script>
export default {
    data() {
        return {
            desc: "",
            od: "",
            og: "",
        }
    },
    methods: {
        createOrdonnance(){
            let ordonnance = {
                desc: this.desc,
                od: this.od,
                og: this.og,
                client_id: this.$route.params.id
            };
            fetch('http://localhost:8000/api/v1/ordonnances',{
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(ordonnance)
            })
            .then(() => this.$router.push(`/clients/${this.$route.params.id}/ordonnances`))
            .catch(err => console.log(err.message))
        }
    },
}
</script>
<style >
    
</style>