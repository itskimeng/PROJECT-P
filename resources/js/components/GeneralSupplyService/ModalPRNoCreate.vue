<template>
    <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="col-lg-12">
                <div class="modal-content shadow-lg p-3 mb-5 bg-white rounded" style="border-radius:25px;">

                    <div class="modal-body" v-for="item in pr" v-bind:key="item.id">
                        <form action="/api/ReservedPurchaseNo" method="POST" @submit="reservedPRNo()">
                            <h4>Do you wish to continue with </h4>
                            <h4>PR No: <span class="text-primary"><b>{{currentYear+ '-0' + currentMonth + '-000'+ '' +counter}}</b></span>?</h4>
                            <input 
                            v-model="pr_no" 
                            name="pr_no"
                            type="hidden" 
                            class="form-control" 
                             />

                            <input 
                            v-model="user_id"
                            name="user_id"
                            type="hidden"
                            class="form-control" 
                            />


                            <button 
                             @click.prevent="reservedPRNo"  
                             type="submit" 
                             class="btn btn-lg btn-primary btn-style1"
                            
                                ><i class="fa fa-arrow-circle-right"></i> PROCEED TO
                                ENCODING
                            </button>
                            <table class="table table-responsive">
                                <tbody>
                                    <tr>
                                        <td><b>END-USER:</b></td>
                                        <td>{{username.name}}</td>
                                        <td hidden=""><input type="hidden" class="" id="" name="cform-user-hidden"
                                                value="3174"></td>
                                        <td hidden=""><input type="hidden" class="" id="" name="cform-pr-no-hidden"
                                                value="2022-09-0323"></td>
                                    </tr>
                                    <tr>
                                        <td><b>OFFICE :</b></td>
                                        <td>REGIONAL OFFICE</td>
                                    </tr>
                                    <tr>
                                        <td><b>Region :</b></td>
                                        <td>REGION IV-A - CALABARZON</td>
                                    </tr>

                                    <tr>

                                        <td hidden=""><input type="hidden" class="" id="" name="cform-office-hidden"
                                                value="10"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .btn-style1{
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin:10%;border-radius:50px;
    }
</style>
<script>
export default {
    name: 'create_new',
    data() {
    let dt =  new Date().getMonth()+1;
        return {
            pr: [],
            counter:0,
            username: '',
            user_id: '',
            pr_no: '',
            currentYear: new Date().getFullYear(), // 2020
            currentMonth: dt.toLocaleString("en-US", { day: "2-digit" }),
            errors:[]

        }
    },
    mounted() {

        axios.get(`../../api/tbl_procurement`).then((res) => {
            this.pr = res.data
            this.counter = res.data[0].id+1;
            this.pr_no = this.currentYear + "-0" + this.currentMonth + "-000"+ this.counter;

        })

        axios.get('/api/user').then((res) => {
            this.username = res.data
            this.user_id = res.data.id
            // console.log(res.data.id);
        })



    },
    methods:{
        reservedPRNo(){
            axios.post('/api/ReservedPurchaseNo',{ pr_no: this.pr_no}
            ).then(() => {
                window.location = "/GeneralSupplyService/create_pr/"+this.pr_no;

            }).catch((error) => {
                this.errors = error.response.data.errors;
            })
        }
    }

}
</script>