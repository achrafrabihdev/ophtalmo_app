<template>
<h1 class="text-primary text-center">{{client.prenom}} {{client.nom}}</h1>
                        <router-link :to="{name: 'nouveauOrdonnance', params: {id: $route.params.id}}" class="btn btn-primary float-end mb-2">Nouveau ordonnances</router-link>
    <table class="table table-dark mt-2" id="myTable" >
        <thead>
          <tr>
            <th>Description</th>
            <th>Oeil droit</th>
            <th>Oeil gauche</th>
            <th>Date de controle</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="ordonnance in client.ordonnances">
            <td>{{ordonnance.desc}}</td>
            <td>{{ordonnance.od}}</td>
            <td>{{ordonnance.og}}</td>
            <td>{{ordonnance.dateDeControle}}</td>
          </tr>
          
        </tbody>
      </table>   
</template>
<script>
export default {
    data() {
        return {
            client: "",
        }
    },
    mounted() {
         fetch(`http://localhost:8000/api/v1/clients/${this.$route.params.id}`)
        .then(res => res.json())
        .then(data => this.client = data )
        .catch(err => console.log(err));
    },
}
</script>
<style>
    
</style>