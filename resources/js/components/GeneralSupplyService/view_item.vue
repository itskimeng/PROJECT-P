<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <SidebarMenu />
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                <BreadCrumbs to="index" from="" fromtitle="Item Details" title="General Supply and Service" />
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <img src="../../../assets/proc1.jpg" alt="..." class="img-thumbnail" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"
                                style="padding: 0.70rem 1.25rem!important;background-color:transparent!important;color:black">
                                <h5 class="card-title"><i class="fa fa-star"></i> {{item.procurement}}</h5>
                            </div>

                            <form action="/api/create_pr_item" method="POST" @submit="addToCart()">
                                <div class="card-body">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Serial No:
                                                    </label>
                                                    <input v-model="item.serial_no" type="text" class="form-control"
                                                        :disabled="disabled" />
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Quantity:
                                                    </label>
                                                    <input v-model="form.quantity" type="number" class="form-control" />
                                                    <small>{{qty_error}}</small>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        ABC:
                                                    </label>
                                                    <input v-model="item.app_price" type="text" class="form-control"
                                                        :disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label>Details/Other Instructions</label>
                                                    <textarea v-model="form.description" class="form-control" name=""
                                                        cols="161" rows="5">
                                                </textarea>
                                                    <small>{{description_error}}</small>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Unit:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        v-model="item.item_unit_title" name="" :disabled="disabled" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Category:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        v-model="item.item_category_title" name=""
                                                        :disabled="disabled" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Mode:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        v-model="item.mode_of_proc_title" name=""
                                                        :disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group float-right">
                                                    <div class="d-grid gap-2 d-md-block">
                                                        <button @click.prevent="addToCart"
                                                            class="btn btn-success btn-md" type="submit"><i
                                                                class="fa fa-save"></i> Add to
                                                            Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row float-right">
                                            <div class="col-md-12">


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.img-thumbnail {
    width: auto !important;

}

small {
    color: red;
}
</style>
<script>
import SidebarMenu from '../Sidebar-Menu.vue';
import BreadCrumbs from '../BreadCrumbs.vue';
import FormInput from '../FormInput.vue';
export default {
    name: "view_item",
    data() {
        return {
            item: '',
            disabled: true,
            form: {
                description: '',
                quantity: ''
            },
            description_error: '',
            qty_error: '',
            data: ''


        }
    },
    mounted() {
        axios.get(`../../api/appitems/${this.$route.params.id}`).then((res) => {
            this.item = res.data
            this.showPR()
        })
    },
    methods: {
        addToCart() {
            axios.post('/api/create_pr_item', {
                id: null,
                app_id: this.$route.params.id,
                pr_id: this.$route.query.pr_no,
                description: this.form.description,
                unit_id: this.item.unit_id,
                qty: this.form.quantity,
                abc: this.item.app_price
            }

            ).then(() => {
                window.location = "/GeneralSupplyService/create_pr/" + this.data.pr_no;
            }).catch((error) => {
                this.errors = error.response.data.errors;

                if (this.form.description == '' || this.form.quantity == '' ) {
                    this.qty_error = this.errors.qty[0];
                    this.description_error = this.errors.description[0];
                    
                } else{
                    this.qty_error = '';
                }
                // else if () {
                //     this.qty_error = this.errors.qty[0];
                // }
            })
        },
        showPR() {
            axios.get(`../../api/procurement/${this.$route.query.pr_no}`).then((res) => {
                this.data = res.data
            })
        }
    },
    components: {
        SidebarMenu,
        BreadCrumbs,
        FormInput,
    }
}
</script>