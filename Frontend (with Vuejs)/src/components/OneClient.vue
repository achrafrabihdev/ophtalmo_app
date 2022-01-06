<template>
            <div class="card">
                <div class="card-header">
                    <button v-on:click="deleteClient" class="text-primary float-end"><i class="far fa-trash-alt"></i></button>
                </div>
                    <img src="../assets/user.png" class="card-img-top" alt="..." height="253px">
                    <div class="card-body text-center">
                      <h5 class="card-title">{{client.prenom}} {{client.nom}}</h5>
                      <div class="badge rounded-pill bg-primary" style="font-size: large;"> 
                          {{client.dateDeNaissance}}
                      </div>
                    </div>
                    <div class="card-footer text-center">
                        <router-link :to="{name: 'mesOrdonnances', params: {id: client.id}}" class="btn btn-primary">Les ordonnances</router-link>
                    </div>
            </div>
</template>
<script>
export default {
    emits:["delete"],
    props:["client"],
    methods: {
         deleteClient() {
            fetch(`http://localhost:8000/api/v1/clients/${this.client.id}`, {method: 'DELETE'})
              .then(() => this.$emit('delete', this.client.id))
              .catch(err => console.log(err.message));
        }
    },
}
</script>
<style>
    
</style>