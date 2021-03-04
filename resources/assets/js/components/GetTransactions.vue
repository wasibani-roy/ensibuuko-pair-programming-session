<template>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Individual Name</th>
                <th scope="col">Sacco Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Transaction Type</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="transaction in transactions.data">
                <td scope="row">{{transaction.individual.first_name}} {{transaction.individual.last_name}}</td>
                <td scope="row">{{transaction.individual.sacco.name}}</td>
                <td scope="row">{{Math.round(transaction.amount)}}</td>
                <td scope="row">{{transaction.type}}</td>
            </tr>
        </tbody>
    </table>
    <pagination :data="transactions" :limit="1" @pagination-change-page="getTransactions"></pagination>
</div>

</template>
<script>
    import axios from 'axios';

    export default{
        data(){
            return{
                transactions:{}
            };
        },
        mounted(){
            console.log("mounted");
            this.getTransactions();
        },

        methods:{
            getTransactions(page=1){
                axios.get('transactions?page=' + page)
                .then(response =>{
                    this.transactions = response.data;
                });
            }
        }
    }

</script>