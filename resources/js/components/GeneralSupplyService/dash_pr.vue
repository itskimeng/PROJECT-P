<template>
    <div class="card">
        <div class="card-body" style="height:auto;">
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation">
                                    <a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">
                                        <i class="fa fa-cart-arrow-down"></i>Procurement
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">
                                        <i class="fa fa-chart-area"></i> Transparency
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#Section3" aria-controls="settings" role="tab" data-toggle="tab">
                                        <i class="fa fa-folder"></i>
                                        Report
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="Section1">
                                    <div class="row">
                                        <div class="col-lg-3 col-xs-6">
                                            <div class="small-box bg-primary zoom">
                                                <div class="inner">
                                                    <h3>65</h3>
                                                    <p>DRAFT APPLICATION</p>
                                                </div>
                                                <div class="icon">

                                                </div>
                                                <a href="#" class="small-box-footer">&nbsp;</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xs-6">
                                            <div class="small-box bg-yellow zoom">
                                                <div class="inner">
                                                    <h3>28</h3>

                                                    <p>PENDING</p>
                                                </div>
                                                <div class="icon">

                                                </div>
                                                <a href="#" class="small-box-footer"><i class="fas fa-plus"></i> View
                                                    More</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xs-6">
                                            <!-- small box -->
                                            <div class="small-box bg-green zoom">
                                                <div class="inner">
                                                    <h3>1497</h3>

                                                    <p>APPROVED</p>
                                                </div>
                                                <div class="icon">


                                                </div>
                                                <a href="#" class="small-box-footer"><i class="fas fa-plus"></i> View
                                                    More</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-xs-6">
                                            <!-- small box -->
                                            <div class="small-box zoom"
                                                style="background-color: #b71c1c;color:gainsboro">
                                                <div class="inner">
                                                    <h3>107</h3>
                                                    <p>DISAPPROVED</p>
                                                </div>
                                                <div class="icon">


                                                </div>
                                                <a href="#" class="small-box-footer"><i class="fas fa-plus"></i> View
                                                    More
                                                    &nbsp;

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <nav aria-label="breadcrumb" style="margin-top: 0.5rem !important;">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">

                                                <button @click="createNew()" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-plus-circle"></i>
                                                    Create
                                                    Purchase Request
                                                </button>
                                            </li>

                                        </ol>
                                    </nav>
                                    <table id="pr_table" class="table table-bordered table-striped dataTable no-footer dtr-inline table-responsive-lg" style="font-size:10pt;width:100%!important;" role="grid" aria-describedby="list_table_info">
                                        <thead>
                                            <tr role="row">
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="NAME: activate to sort column ascending">
                                                    Purchase No.
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="USERNAME: activate to sort column ascending">
                                                    Office</th>
                                                    <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="PROVINCE: activate to sort column ascending">
                                                    Purpose</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="PROVINCE: activate to sort column ascending">
                                                    Type</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="CITY/MUNICIPALITY: activate to sort column ascending">
                                                    Price</th>
                                         
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="STATUS: activate to sort column ascending">
                                                    PR Date</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="ACTION: activate to sort column ascending">
                                                    Target Date</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="ACTION: activate to sort column ascending">
                                                    Status</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="ACTION: activate to sort column ascending">
                                                    Time Elapsed</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="list_table" rowspan="1" colspan="1"
                                                    aria-label="ACTION: activate to sort column ascending">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>


                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="Section2">
                                    <canvas id="myChart"></canvas>
                                    <canvas id="procurement"></canvas>

                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="Section3">
                                    <h2>Section 3</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus pretium, metus et scelerisque dignissim, ligula
                                        est imperdiet nisl, sit amet malesuada nunc felis in nisi.
                                        Nullam dapibus ligula dui, in rhoncus purus euismod nec.
                                        Duis in lacinia neque. Etiam tellus.
                                    </p>
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

</style>
<script>
import { data } from 'browserslist';
import Chart from 'chart.js/auto';
import $ from "jquery";


export default {
    name: 'dash_pr',
    data() {
        return {

        }
    },
    mounted() {
        // $('#itemModal').modal('hide');
        this.fetchPREntries();

        const ctx = document.getElementById('myChart').getContext('2d');
        const ctx_proc = document.getElementById('procurement').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['ORD', 'FAD', 'LGCDD', 'LGMED'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5],
                    backgroundColor: [
                        'rgb(248, 182, 0)',
                        'rgb(128, 22, 22)',
                        'rgb(28, 11, 156)',
                        '#388E3C',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',

                    ],
                    borderWidth: 0
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        const ProcChart = new Chart(ctx_proc, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Procurement Statistics',
                    data: [12, 19, 3, 5, 56, 5, 8, 42, 151, 58, 56, 55],
                    backgroundColor: [
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',
                        '#A5D6A7',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',

                    ],
                    borderWidth: 0
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        myChart;
        ProcChart;
    },
    methods: {
        fetchPREntries(){
            let btn = null;
            axios.get('/api/fetchPurchaseRequestList').then((response) => {
                $('#pr_table').DataTable({
                    data: response.data,
                    ordering:false,
                    columns: [
                        { data:'pr_no'}, 
                        { data:'office'}, 
                        { data:'user_id'}, 
                        { data:'admin_id'}, 
                        { data:'pr_date'}, 
                        { data:'target_date'}, 
                        { data:'submitted_date'}, 
                        { data:'received_date'}, 
                        { data:'received_by'},
                    ],
                    columnDefs:[{
                        targets: 9,
                        render: function(data, type, row, meta) {
                            btn  = '<div class="btn-group"> <button type="button" class="btn btn-sm btn-info dropdown-toggle" style="margin-left: 0.5cm !important; " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </button> <div class="dropdown-menu"> <a class="dropdown-item" href="/GeneralSupplyService/view/'+row['id']+'"> <span key="fa-calendar"><i class="fas fa-eye"></i></span> View </a> <div class="dropdown-divider"></div> <a class="dropdown-item" href="/calendar/add_activity"> <span key="fa-plus"><i class="fa fa-share-square"></i></span> Submit to Budget </a> <div class="dropdown-divider"></div> <a class="dropdown-item" href="/calendar/add_activity"> <span key="fa-send"><i class="fas fa-plus"></i></span> Submit to GSS </a> <div class="dropdown-divider"></div> <a class="dropdown-item" href="/calendar/add_activity"> <span key="fa-plus"><i class="fa fa-times-circle"></i></span> Cancel this PR </a> </div> </div>';
                            return btn;
                        }


                }]
                });
            }).catch((error) => console.log(error.response));
        },
        createNew() {
            this.$router.push('/GeneralSupplyService/create_new')
        },
        logout() {
            axios.post('/api/logout').then(() => {
                this.$router.push({ name: "Home" })
            })
        },

    },
   
    components: {

    }
}
</script>