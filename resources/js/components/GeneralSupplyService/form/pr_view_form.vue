<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <SidebarMenu />
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                <BreadCrumbs to="index" from="" fromtitle="Purhase Request Details"
                    title="General Supply and Service" />
                <div class="row">
                    <div class="col-lg-3">
                        <PRDetailsForm />
                    </div>
                    <div class="col-lg-9" style="height: 800px;overflow-y:auto">
       

                        <div class="card"  v-for="item in pr_list" v-bind:key="item.id">
                            <div class="card-body cart">
                                <div class="parent">
                                    <div class="img">
                                        <img src="../../../../assets/proc1.jpg" alt="" />
                                    </div>
                                    <div class="text">
                                       <strong>{{shorten(item.procurement,115)+'..'}}</strong><br>
                                       ABC:{{item.abc.toFixed(2)}}<br>
                                        Quantity: <span class="item-quantity">x{{item.qty}}</span>
                                    </div>
                                    <div class="item-price"> ₱ {{item.abc * item.qty}}<br> 
                                    <router-link :to="{ name: 'view item',
                                                        params: { id: item.id }, 
                                                        query: { pr_no:item.pr_id, app_id:item.app_id } }" 
                                    style="color:#fff;" class="btn btn-sm btn-success"><i class="fa fa-eye"></i>
                                    </router-link>
                                        <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</template>
<style>
.btn {
    margin: 5px !important;
    margin-top: 2% !important;

}

div.parent {
    display: table;
    width: 100%;
    /* you can change/remove margin */
}

div.text {
    vertical-align: middle;
    display: table-cell;
    text-align: justify;
}

div.item-price {
    vertical-align: middle;
    display: table-cell;
    text-align: right;
    font-size: 2rem;
    color: rgb(255, 136, 0);
    margin-left: 50%;
}

div.parent .img {
    vertical-align: middle;
    display: table-cell;
    padding-right: 15px;
    width: 150px;
    /* you can change width */
}

div.img img {
    width: 100%;
    /* you can change height */
    vertical-align: middle;
}

.cart {
    background-color: rgb(238, 241, 243) !important;
    padding: 0 12px 0 0.5;
    flex: 1;
    align-items: flex-start;
    flex-wrap: nowrap;
}
</style>
<script>
import SidebarMenu from "../../Sidebar-Menu.vue";
import BreadCrumbs from "../../BreadCrumbs.vue";
import PRDetailsForm from "./pr_details_form.vue";
let index=0;
export default {
    name: 'view pr',
    data() {
        return {
            pr_list:[],
        }
    },
    mounted() {
        axios.get(`../../api/view_pr/${this.$route.params.id}`).then((res) => {
                this.pr_list = res.data
            })
    },
    methods: {
        shorten: function (string, len) {
            return string.substring(0, len + string.substring(len - 1).indexOf(' '));

        }
    },
    components: {
        SidebarMenu,
        BreadCrumbs,
        PRDetailsForm

    }
}
</script>