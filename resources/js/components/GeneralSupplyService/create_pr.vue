<template>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <div class="container">
                <SidebarMenu />
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
            <BreadCrumbs to="index" from="" fromtitle="Create Purchase Request" title="General Supply and Service" />
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert filter">
                                <span><strong><i class="glyphicon glyphicon-info-sign"></i></strong>
                                    Legend :</span>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="tdSpacing">
                                                <div style="width:20px;height:20px;background-color:#a3e381;"></div>
                                            </td>
                                            <td class="tdSpacing">&nbsp;Urgent</td>
                                        </tr>
                                        <tr>
                                            <td class="tdSpacing">
                                                <div style="width:20px;height:20px;background-color:#e3c281;"></div>
                                            </td>
                                            <td class="tdSpacing">&nbsp;Cancelled</td>
                                        </tr>
                                        <tr>
                                            <td class="tdSpacing">
                                                <div style="width:20px;height:20px;background-color:#81aae3;"></div>
                                            </td>
                                            <td class="tdSpacing">&nbsp;Obligated</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body" style="height:auto;">
                            <form action="/api/savePurchaseRequestInfo" method="POST" @submit="savePurchaseRequestInfo()">
                                <div class="row">

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group"><label>Purchase Request Number: </label>

                                            <input v-model="client_pr.pr_no" :disabled="disabled" name="pr_no" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label>Office:</label>

                                        <select v-model="this.user.office" class="form-control">
                                            <option disabled value="">Please Select</option>
                                            <option disabled v-for="office in offices" :value="office.id">
                                                {{office.value}}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label>Type:</label>
                                        <select @change="onChange($event)" v-model="selected" class="form-control">
                                            <option v-for="pr_type in options" :key="pr_type.id" :value="pr_type.id">{{
                                                    pr_type.name }}
                                            </option>
                                        </select>
                                        {{selected.id}}
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 12px ">
                                        <label>Purchase Request Date:</label>
                                        <input type="date" v-model="this.form.pr_date" class="form-control" />
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label>Purchase Request Target Date:</label>
                                        <input type="date" v-model="this.form.target_date" class="form-control" />
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label>Purpose:</label>
                                        <textarea v-model="this.form.purpose" class="form-control" cols="161" rows="5"></textarea>

                                    </div>
                                    <button type="submit" @click.prevent="savePurchaseRequestInfo()" class="btn btn-info btn-lg col-md-12" style="margin-top: 5px;"><i class="fa fa-save"></i> Save</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <span class="fa-layers fa-fw" style="font-size: 50px;float: right;margin-top: -10px;">
                                <i class="bx bx-cart"></i>

                                <span class="fa-layers-counter" style="background:Tomato;margin-top:8px;margin-right: -7px;font-size: 54pt;">{{this.cartInfo.cart}}</span>
                            </span>
                            <h2>GRAND TOTAL: ₱ {{this.cartInfo.gTotal}}</h2>

                            <input type="text" v-model="searchValue" class="form-control" name="" id="" />
                        </div>
                    </div>

                    <div class=" card card-body" style="height: 660px;overflow-y:auto">

                        <div class="row" style="margin-top: 25px  ;">
                            <div class="col-lg-2 d-none d-lg-block" v-for="item in userList" v-bind:key="item.id">
                                <div class="card">
                                    <router-link :to="{
                                        name: 'view item', 
                                        params: { id: item.id }, 
                                        query: { 
                                        pr_no:client_pr.id,
                                        app_id:item.id
                                        }
                                        }" style="color:black">

                                        <img src="../../../assets/proc1.jpg" class="card-img-top" alt="Sunset Over the Sea" />
                                    </router-link>
                                    <router-link :to="{
                                        name: 'view item', 
                                        params: { id: item.id }, 
                                        query: { 
                                        pr_no:client_pr.id,
                                        app_id:item.id
                                        }
                                        }" style="color:black">
                                        <p style="margin-top: -30px;text-align:center">
                                            {{shorten(item.procurement,11)+'..'}}</p>
                                    </router-link>
                                    <p style="margin-top: -20px;text-align:center">Php. {{item.app_price}}</p>
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
h2 {
    float: left;
}

.app_img {
    width: 100%;
    height: 100%;
}

a {
    cursor: pointer;
}

.pagination {
    justify-content: center;
    flex-wrap: wrap;
}
</style>

<script>
import SidebarMenu from '../Sidebar-Menu.vue';
import BreadCrumbs from '../BreadCrumbs.vue';
import FormInput from '../FormInput.vue';
import AppData from "./app_data.json";
import axios from 'axios';
import ModalPRNoCreate from './ModalPRNoCreate.vue';

export default {
    name: 'create_new',

    data() {
        return {
            user: '',
            cartInfo: {
                cart: null,
                gTotal: null
            },
            client_pr: {
                id: null,
                pr_no: null,
            },
            form: {
                office: null,
                pr_date: null,
                target_date: null,
                purpose: null

            },
            disabled: true,
            pageOfItems: [],
            pr: [],
            nodata: false,
            products: null,
            sel_type: null,
            selected: '',
            options: [{
                    id: 1,
                    name: 'Catering Services'
                },
                {
                    id: 2,
                    name: 'Meals, Venu and Accomodation'
                },
                {
                    id: 3,
                    name: 'Repair and Maintenance'
                },
                {
                    id: 4,
                    name: 'Supplies, Materials and Devices'
                },
                {
                    id: 5,
                    name: 'Other Services'
                }
            ],
            offices: [{
                    id: 1,
                    value: 'ORD'
                },
                {
                    id: 2,
                    value: 'FAD'
                },
                {
                    id: 3,
                    value: 'LGCDD'
                },
                {
                    id: 4,
                    value: 'LGMED'
                },

            ],
            searchValue: '',
            users: AppData,

        }
    },
    computed: {
        // 1. searching function
        userList: function () {
            var app_item = this.products;
            var searchValue = this.searchValue.trim().toLowerCase();

            if (!searchValue) {
                return app_item;
            }
            app_item = app_item.filter(function (item) {
                if (item.procurement.toLowerCase().indexOf(searchValue) !== -1) {
                    return item;
                }
            })
            return app_item;
        }

    },
    mounted() {

        axios
            .get('../../api/appitems')
            .then(response => (this.products = response.data))
            .catch(error => console.log(error.response))

        axios.get(`../../api/tbl_procurement`).then((res) => {
            this.pr = res.data
            this.client_pr.pr_no = res.data[0].pr_no;
            this.client_pr.id = res.data[0].id;
            this.countCart(this.client_pr.id);

        })
        this.userInfo();

    },
    methods: {
        userInfo() {
            axios.get(`../../api/user`).then((res) => {
                this.user = res.data
            })
        },
        // 1. shorten the character of each app item.
        shorten: function (string, len) {
            return string.substring(0, len + string.substring(len - 1).indexOf(' '));

        },
        countCart(id) {
            // 1. get the pr id for returning all number of item in the cart
            // 2. show details with info.
            // 3. select count(*) from pr_items where pr_id = id
            axios.get(`/api/count/${id}`).then((res) => {
                this.cartInfo.cart = res.data[0].cart;
                this.cartInfo.gTotal = res.data[0].gTotal.toFixed(2)
            })
        },
        onChange(event) {
            this.selected = event.target.value;

        },
        savePurchaseRequestInfo() {
            //1. get the pr id for updating the pr table information.
            //2. get all text input values for validation
            //3. save all data 
            let data = {
                office: this.user.office,
                user_id: this.user.id,
                pr_date: this.form.pr_date,
                target_date: this.form.target_date,
                purpose: this.form.purpose,
                type: this.selected,
            };
            axios.post(`/api/savePRInfo/${this.client_pr.id}`, data).then(() => {
                // router.push({name:'create_pr',params:{id: this.client_pr.pr_no}});
            }).catch((error) => {
                this.errors = error.response.data.errors;

            })

        },
        redirect(path) {
            window.location = "/GeneralSupplyService/" + path + "/" + this.data.pr_no;

        }

    },
    components: {
        SidebarMenu,
        BreadCrumbs,
        FormInput,
        ModalPRNoCreate
    }
}
</script>
