<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <SidebarMenu />
                </div>

            </div>
            <div class="col-lg-12">
                <BreadCrumbsVue to="calendar_panel" from="/calendar/calendar_activities" fromtitle="Activities" title="Calendar of Activities"/>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"
                                style="padding: 0.10rem 1.25rem!important;background-color:transparent!important;color:black">
                                <h5 class="card-title" style="margin-top:10px"><i class="fa fa-search"></i> Advanced Search</h5>


                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-4">
                                        <FormInput type="text" class="form-control">Event Title</FormInput>
                                    </div>
                                    <div class="col-md-4">
                                        <FormInput type="text" class="form-control">Start Date</FormInput>
                                    </div>
                                    <div class="col-md-4">
                                        <FormInput type="text" class="form-control">End Date</FormInput>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <FormInput type="text" class="form-control">Posted By:</FormInput>
                                    </div>
                                    <div class="col-md-4">
                                        <FormInput type="text" class="form-control">Office:</FormInput>
                                    </div>
                                    <div class="col-md-4">
                                        <FormInput type="text" class="form-control">Posted Date</FormInput>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group float-right">
                                                <div class="d-grid gap-2 d-md-block">
                                                    <button class="btn btn-info btn-md" id="btn-filter"
                                                        type="button"><i class="fa fa-search"></i> Filter</button>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"
                                style="padding: 0.10rem 1.25rem!important;background-color:transparent!important;color:black">
                                <h5 class="card-title" style="margin-top: 10px;"><i class="fa fa-folder"></i> Activity List</h5>
                            </div>

                            <div class="card-body">
                                <div id="list_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="list_table"
                                                class="table table-bordered table-striped dataTable no-footer dtr-inline table-responsive-lg"
                                                style="font-size:10pt;" role="grid" aria-describedby="list_table_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="list_table" rowspan="1" colspan="1"
                                                            aria-label="NAME: activate to sort column ascending">NAME
                                                        </th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="list_table" rowspan="1" colspan="1"
                                                            aria-label="USERNAME: activate to sort column ascending">
                                                            USERNAME</th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="list_table" rowspan="1" colspan="1"
                                                            aria-label="PROVINCE: activate to sort column ascending">
                                                            PROVINCE</th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="list_table" rowspan="1" colspan="1"
                                                            aria-label="CITY/MUNICIPALITY: activate to sort column ascending">
                                                            CITY/MUNICIPALITY</th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="list_table" rowspan="1" colspan="1"
                                                            aria-label="EMAIL: activate to sort column ascending">EMAIL
                                                        </th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="list_table" rowspan="1" colspan="1"
                                                            aria-label="STATUS: activate to sort column ascending">
                                                            STATUS</th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="list_table" rowspan="1" colspan="1"
                                                            aria-label="ACTION: activate to sort column ascending">
                                                            ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td class="float-center"><button class="btn btn-sm btn-warning"><i class="fa fa-eye"></i>View</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td class="float-center"><button class="btn btn-sm btn-warning"><i class="fa fa-eye"></i>View</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td class="float-center"><button class="btn btn-sm btn-warning"><i class="fa fa-eye"></i>View</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td>a</td>
                                                        <td class="float-center"><button class="btn btn-sm btn-warning"><i class="fa fa-eye"></i>View</button></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
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
.card {
    margin-bottom: 10px !important;
}

.btn-group>.btn:first-child {
    margin-left: 7.5cm !important;
}
.float-center{
    text-align: center;
}
</style>
<script>
import Navbar from "../Navbar.vue"
import '@fortawesome/fontawesome-free/js/all'
import '@fullcalendar/core/vdom' // solves problem with Vite
import BreadCrumbsVue from "../BreadCrumbs.vue";
import SidebarMenu from "../Sidebar-Menu.vue";
import FormInput from "../FormInput.vue";
export default {
    data() {
        return {
            user: '',
        }
    },
    methods: {
        logout() {
            axios.post('/api/logout').then(() => {
                this.$router.push({ name: "Home" })
            })
        },

    },
    mounted() {
        axios.get('/api/user').then((res) => {
            this.user = res.data
        })
    },
    name: "Calendar",
    components: {
        Navbar,
        SidebarMenu,
        FormInput,
        BreadCrumbsVue
    }
}
</script>