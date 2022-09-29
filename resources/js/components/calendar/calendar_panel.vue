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
                    <div class="col-lg-4 col-sm-3 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-info dropdown-toggle" style="margin-left: 0.5cm !important;
"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Menu
                                    </button>
                                    <div class="dropdown-menu">
                                        <router-link class="dropdown-item" to="/calendar/calendar_activities">
                                            <span key="fa-calendar"><i class="fas fa-calendar"></i></span>
                                            View Encoded Activities
                                        </router-link>


                                        <div class="dropdown-divider"></div>

                                        <router-link class="dropdown-item" to="/calendar/add_activity">
                                            <span key="fa-plus"><i class="fas fa-plus"></i></span>
                                            New Activity
                                        </router-link>



                                    </div>
                                </div>
                                <div class="alert filter">
                                    <span><strong><i class="glyphicon glyphicon-info-sign"> </i> </strong> Legend
                                        :</span>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="tdSpacing">
                                                    <div style="width:20px; height: 20px; background-color:#a3e381;">
                                                    </div>
                                                </td>
                                                <td class="tdSpacing">&nbsp;To Attend</td>
                                            </tr>
                                            <tr>
                                                <td class="tdSpacing">
                                                    <div style="width:20px; height: 20px; background-color:#e3c281;">
                                                    </div>
                                                </td>
                                                <td class="tdSpacing">&nbsp;Will Not Attend</td>
                                            </tr>
                                            <tr>
                                                <td class="tdSpacing">
                                                    <div style="width:20px; height: 20px; background-color:#81aae3;">
                                                    </div>
                                                </td>
                                                <td class="tdSpacing">&nbsp;No Confirmation Made</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Activity Updates</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Upcoming Events</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <FullCalendar :options="calendarOptions" />
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
    margin-left: 0.5cm !important;
}
</style>
<script>
import Navbar from "../Navbar.vue"
import '@fortawesome/fontawesome-free/js/all'
import '@fullcalendar/core/vdom' // solves problem with Vite
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import BreadCrumbsVue from "../BreadCrumbs.vue"
import SidebarMenu from "../Sidebar-Menu.vue"
import SidebarLink from "../SidebarLink.vue";
export default {
    data() {
        return {
            user: '',

            calendarOptions: {
                plugins: [dayGridPlugin, interactionPlugin],
                initialView: 'dayGridMonth'
            }
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
        FullCalendar,
        SidebarLink,
        BreadCrumbsVue
    }
}
</script>