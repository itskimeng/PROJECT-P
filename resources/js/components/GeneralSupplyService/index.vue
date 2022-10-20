<template>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <SidebarMenu />
                </div>

            </div>
            <div class="col-lg-12">

                <BreadCrumbsVue to="index" from="" fromtitle="" title="General Supply and Service" />

                <div class="row">
                    <div class="col-lg-3">
                        <user_view_info />
                        <SupplierRanking />

                    </div>
                    <div class="col-lg-9">
                        <DashboardVue/>
                    </div>
                    <!-- <div class="col-lg-2">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.chart-style1 {
    height: 420px !important;
}

a:hover,
a:focus {
    text-decoration: none;
    outline: none;
}

.tab .nav-tabs {
    border-bottom: 0 none;
}

.tab .nav-tabs li {
    margin-right: 2px;
}

.tab .nav-tabs li a {
    border: none;
    padding: 13px 35px;
    color: #fff;
    background: #272e38;
    border-radius: 0;
}

.tab .nav-tabs li a:hover {
    background: #000;
}

.tab .nav-tabs li a i {
    font-size: 14px;
    display: block;
    text-align: center;
    margin-bottom: 5px;
}

.tab .nav-tabs li.active a,
.tab .nav-tabs li.active a:focus,
.tab .nav-tabs li.active a:hover {
    border: none;
    background: #737495;
    color: #fff;
    transition: background 0.20s linear;
}

.tab .nav-tabs li.active:after {
    content: "";
    position: absolute;
    top: 41px;
    left: 40%;
    border: 12px solid transparent;
    border-top-color: #fff;
    transform: rotate(180deg);
}

.tab .tab-content {
    background: #fff;
    line-height: 25px;
    padding: 30px 25px;
    border: 1px solid #ddd;
    border-bottom: 5px solid #737495;
}

@media only screen and (max-width: 480px) {
    .tab .nav-tabs li {
        width: 100%;
    }

    .tab .nav-tabs li a {
        padding: 20px;
        text-align: center;
    }

    .tab .nav-tabs li.active:after {
        border: none;
    }
}


/* end */
ul {
    margin-left: 20px;
}

li {
    list-style: none;
    padding: 0;
}

.working:before {
    color: rgb(12, 19, 94);
}

.dot-style:before {
    content: "•";
    padding-right: 4px;
    vertical-align: middle;
    font-size: 1.8em;
}

.circle_obj {
    background-color: rgb(48, 58, 133);
    border-radius: 100%;
    width: 30px;
    height: 30px;
    display: flex;
}

.media {
    background-color: #fff !important;
}

.div_wrapper {
    display: flex;
    align-items: center;
}

.profile_img {
    width: 100px;
    height: 100px;
    padding: 1px;
    margin-bottom: 15%;
    border-radius: 100%;
    border: 1px solid rgb(18, 15, 76);

}

.profile_img .profile-image_border {
    width: calc(10% + 20px);
    height: auto;
    position: absolute;
    top: 20px;
    left: 20px;
}

.user_info {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    margin: 0px;
    vertical-align: middle;
    width: 100%;
}

.rank_wrapper {
    clip-path: polygon(100% 0px, 0px 0px, 100% 100%);
    height: 4.5rem;
    padding-right: 4px;
    padding-top: 2px;
    position: absolute;
    right: 0px;
    text-align: right;
    top: 0px;
    width: 4.5rem;
}

.rank_banner {

    background-color: rgb(248, 182, 0);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;

}

.rank_banner2 {

    background-color: rgb(128, 22, 22);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;

}

.rank_banner3 {

    background-color: rgb(28, 11, 156);
    color: rgb(255, 255, 255);
    font-family: Barlow, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0px;
    text-decoration: none;

}
</style>
<script>
import user_view_info from "./user_view_info.vue";
import SupplierRanking from "./SupplierRanking.vue";
import Navbar from "../Navbar.vue"
import '@fortawesome/fontawesome-free/js/all'
import BreadCrumbsVue from "../BreadCrumbs.vue";
import SidebarMenu from "../Sidebar-Menu.vue";
import FormInput from "../FormInput.vue";
import Navbar1 from "../Navbar.vue";
import image1 from '../../../assets/logo.png';
import avatar from '../../../assets/c1.jpg';
import DashboardVue from './dash_pr.vue';

export default {
    chartstyle() {
        return { height: '99px' }
    },
    mounted() {
        $('#itemModal').modal('hide');

        // const ctx = document.getElementById('myChart').getContext('2d');
        // const ctx_proc = document.getElementById('procurement').getContext('2d');
        // const myChart = new Chart(ctx, {
        //     type: 'doughnut',
        //     data: {
        //         labels: ['ORD', 'FAD', 'LGCDD', 'LGMED'],
        //         datasets: [{
        //             label: '# of Votes',
        //             data: [12, 19, 3, 5],
        //             backgroundColor: [
        //                 'rgb(248, 182, 0)',
        //                 'rgb(128, 22, 22)',
        //                 'rgb(28, 11, 156)',
        //                 '#388E3C',

        //             ],
        //             borderColor: [
        //                 'rgba(255, 99, 132, 1)',
        //                 'rgba(54, 162, 235, 1)',
        //                 'rgba(255, 206, 86, 1)',
        //                 'rgba(75, 192, 192, 1)',

        //             ],
        //             borderWidth: 0
        //         }]
        //     },
        //     options: {
        //         scales: {
        //             y: {
        //                 beginAtZero: true
        //             }
        //         }
        //     }
        // });
        // const ProcChart = new Chart(ctx_proc, {
        //     type: 'bar',
        //     data: {
        //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        //         datasets: [{
        //             label: 'Procurement Statistics',
        //             data: [12, 19, 3, 5, 56, 5, 8, 42, 151, 58, 56, 55],
        //             backgroundColor: [
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',
        //                 '#A5D6A7',

        //             ],
        //             borderColor: [
        //                 'rgba(255, 99, 132, 1)',
        //                 'rgba(54, 162, 235, 1)',
        //                 'rgba(255, 206, 86, 1)',
        //                 'rgba(75, 192, 192, 1)',

        //             ],
        //             borderWidth: 0
        //         }]
        //     },
        //     options: {
        //         scales: {
        //             y: {
        //                 beginAtZero: true
        //             }
        //         }
        //     }
        // });
        // myChart;
        // ProcChart;
    },
    methods: {
        // createNew() {
        //     this.$router.push('/GeneralSupplyService/create_new')
        // },
        logout() {
            axios.post('/api/logout').then(() => {
                this.$router.push({ name: "Home" })
            })
        },

    },
    name: "index",
    components: {
        Navbar,
        SidebarMenu,
        FormInput,
        Navbar1,
        BreadCrumbsVue,
        user_view_info,
        SupplierRanking,
        DashboardVue,
    }
}
</script>