<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <SidebarMenu />
                </div>

            </div>
            <div class="col-lg-12">
                <BreadCrumbsVue 
                    to="calendar_panel" 
                    from="/calendar/add_activity" 
                    fromtitle="Add Activities" 
                    title="Calendar of Activities"/>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"
                                style="padding: 0.70rem 1.25rem!important;background-color:transparent!important;color:black">
                                <h5 class="card-title"><i class="fa fa-folder"></i> Activity List</h5>
                            </div>

                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <FormInput type="text" class="form-control">Event Title</FormInput>
                                        </div>
                                        <div class="col-md-4">
                                            <FormInput type="date" class="form-control">Program:</FormInput>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <FormInput type="date" class="form-control">End Date:</FormInput>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <textarea class="form-control" cols="161" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <FormInput type="text" class="form-control">Venue:</FormInput>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <FormInput type="text" class="form-control">Expected Number of
                                                    Participants:</FormInput>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <FormInput type="text" class="form-control">Target Participants:
                                                </FormInput>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <FormInput type="text" class="form-control">Posted By:</FormInput>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <FormInput type="text" class="form-control">Remind Me:</FormInput>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <FormInput type="text" class="form-control">Posted Date:</FormInput>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group float-right">
                                                <div class="d-grid gap-2 d-md-block">
                                                    <button class="btn btn-success btn-md" id="btn-filter"
                                                        type="button"><i class="fa fa-save"></i> Save</button>

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

textarea {
    resize: none;
}
</style>
<script>
import Navbar from "../Navbar.vue"
import '@fortawesome/fontawesome-free/js/all'
import '@fullcalendar/core/vdom' // solves problem with Vite
import SidebarMenu from "../Sidebar-Menu.vue";
import FormInput from "../FormInput.vue";
import BreadCrumbsVue from "../BreadCrumbs.vue";
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