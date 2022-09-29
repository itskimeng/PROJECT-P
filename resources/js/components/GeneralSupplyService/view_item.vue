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
                            <form action="/api/savePR" method="POST" @submit="addToCart()">
                                <div class="card-body">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Serial No:
                                                    </label>
                                                    <input type="text" class="form-control" :value="item.serial_no"
                                                        name="" :disabled="disabled" />
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Quantity:
                                                    </label>
                                                    <input type="number" class="form-control" name="" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        ABC:
                                                    </label>
                                                    <input type="text" class="form-control" :value="item.app_price"
                                                        name="" :disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label>Details/Other Instructions</label>
                                                    <textarea class="form-control" value="" name="" cols="161"
                                                        rows="5"></textarea>
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
                                                        :value="item.item_unit_title" name="" :disabled="disabled" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Category:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        :value="item.item_category_title" name=""
                                                        :disabled="disabled" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Mode:
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        :value="item.mode_of_proc_title" name="" :disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group float-right">
                                                    <div class="d-grid gap-2 d-md-block">
                                                        <button     
                                                        @click.prevent="reservedPRNo"  
                                                        class="btn btn-success btn-md" 
                                                        type="button"><i class="fa fa-save"></i> Add to
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
                txtserial_no: '',
                txtquantity: '',
                txtabc: '',
                txtdetails: '',
                txtunit: '',
                txtcategory: '',
                textmode: ''
            }

        }
    },
    mounted() {
        axios.get(`../../api/appitems/${this.$route.params.id}`).then((res) => {
            this.item = res.data
            this.addToCart(res.data.app_id);
        })
    },
    methods: {
        addToCart(id) {
           console.log(id);
        }
    },
    components: {
        SidebarMenu,
        BreadCrumbs,
        FormInput,
    }
}
</script>