<template>
      <table class="table table-dark mt-2" id="myTable" >
        <thead>
          <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Oeil droit</th>
            <th>Oeil gauche</th>
            <th>Date de controle</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="ordonnance in ordonnances">
            <td>{{ordonnance.client.prenom}}</td>
            <td>{{ordonnance.client.nom}}</td>
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
            ordonnances: [],
        }
    },
    mounted() {
         fetch('http://localhost:8000/api/v1/ordonnances')
        .then(res => res.json())
        .then(data => this.ordonnances = data )
        .catch(err => console.log(err));
    },
}
</script>
<style >
    
</style>