<template>

    <div class="row" v-if="clients.length">
        <!-- <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="text-primary float-start"><i class="far fa-edit"></i></a>
                    <a href="#" class="text-primary float-end"><i class="far fa-trash-alt"></i></a>
                </div>
                    <img src="../../assets/user.png" class="card-img-top" alt="..." height="253px">
                    <div class="card-body text-center">
                      <h5 class="card-title">title hcjfv</h5>
                      <div class="badge rounded-pill bg-primary" style="font-size: large;"> 
                          ervcervcerv
                      </div>
                    </div>
            </div>
        </div> -->
        <div v-for="client in clients" class="col-md-3 mt-4">
            <OneClient :client="client" @delete="handleDelete"/>
        </div>
        
    </div>
</template>
<script>
import OneClient from '../../components/OneClient.vue'
export default {
    components: {OneClient},
    data() {
        return {
            clients: [],
        }
    },
    mounted() {
         fetch('http://localhost:8000/api/v1/clients')
        .then(res => res.json())
        .then(data => this.clients = data)
        .catch(err => console.log(err));
    },
    methods: {
        handleDelete(id) {
            this.clients = this.clients.filter(client => client.id !== id);
        }
    },
}
</script>
<style>
    
</style>