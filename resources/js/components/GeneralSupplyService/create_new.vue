<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <SidebarMenu />
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                <BreadCrumbs to="index" from="" fromtitle="Create Purchase Request"
                    title="General Supply and Service" />
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
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <FormInput type="text" class="form-control" name="" id="" value="2022-01-0001">
                                            Purchase
                                            Request
                                            Number:</FormInput>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <FormInput type="text" class="form-control" name="" id="" value="FAD">Office:
                                        </FormInput>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label>Type:</label>
                                        <select v-model="selected" class="form-control">
                                            <option disabled value="">Please Select</option>
                                            <option v-for="option in options" :value="option">{{option}}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 12px;">
                                        <FormInput type="date" class="form-control" name="" id="" value="FAD">Purchase
                                            Request Date:
                                        </FormInput>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <FormInput type="date" class="form-control" name="" id="" value="FAD">Purchase
                                            Request Target:
                                        </FormInput>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <textarea class="form-control" cols="161" rows="5"></textarea>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <h2>GRAND TOTAL: ₱ 0.00</h2>

                                <input type="text" v-model="searchValue" class="form-control" name="" id="" />
                            </div>
                        </div>

                        <div class=" card card-body" style="height: 660px;overflow-y:auto">

                            <div class="row" style="margin-top: 25px  ;">
                                <div class="col-lg-2 d-none d-lg-block" v-for="item in userList" v-bind:key="item.id">
                                    <div class="card">
                                        <router-link :to="{name: 'view item', params: { id: item.id }}"
                                            style="color:black">

                                            <img src="../../../assets/proc1.jpg" class="card-img-top"
                                                alt="Sunset Over the Sea" />
                                        </router-link>
                                        <router-link :to="{name: 'view item', params: { id: item.id }}"
                                            style="color:black">
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
    <ModalPRNoCreate />

</template>
<style>
h2 {
    float: right;
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
import JwPagination from 'jw-vue-pagination';
import ModalPRNoCreate from './ModalPRNoCreate.vue';
const exampleItems = [...Array(150).keys()].map(i => ({ id: (i + 1), name: 'Item ' + (i + 1) }));

export default {
    name: 'create_new',

    data() {
        return {
            user: '',
            products: null,
            pr: [],
            pageOfItems: [],
            exampleItems,
            selected: '',
            nodata: false,
            options: [
                'Catering Services',
                'Meals, Venu and Accomodation',
                'Repair and Maintenance',
                'Supplies, Materials and Devices',
                'Other Services'
            ],
            searchValue: '',
            users: AppData,
      



        }
    },
    computed: {
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
        })

        $('#itemModal').modal({
            backdrop: 'static',
            keyboard: false
        })

    },
    methods: {
        shorten: function (string, len) {
            return string.substring(0, len + string.substring(len - 1).indexOf(' '));

        },
       

    },
    components: {
        SidebarMenu,
        BreadCrumbs,
        FormInput,
        JwPagination,
        ModalPRNoCreate
    }
}

</script>