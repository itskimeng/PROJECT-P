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
                    <div class="col-lg-2">
                        <user_view_info />
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body" style="height:auto;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab" role="tabpanel">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation">
                                                        <a href="#Section1" aria-controls="home" role="tab"
                                                            data-toggle="tab">
                                                            <i class="fa fa-cart-arrow-down"></i>Procurement
                                                        </a>
                                                    </li>
                                                    <li role="presentation"><a href="#Section2" aria-controls="profile"
                                                            role="tab" data-toggle="tab"><i
                                                                class="fa fa-chart-area"></i> Transparency</a></li>
                                                    <li role="presentation"><a href="#Section3" aria-controls="settings"
                                                            role="tab" data-toggle="tab"><i class="fa fa-folder"></i>
                                                            Report</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade in active show"
                                                        id="Section1">
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
                                                                    <a href="#" class="small-box-footer"><i
                                                                            class="fas fa-plus"></i> View More</a>
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
                                                                    <a href="#" class="small-box-footer"><i
                                                                            class="fas fa-plus"></i> View More</a>
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
                                                                    <a href="#" class="small-box-footer"><i
                                                                            class="fas fa-plus"></i> View More
                                                                        &nbsp;

                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <nav aria-label="breadcrumb"
                                                            style="margin-top: 0.5rem !important;">
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
                                                        <table id="list_table"
                                                            class="table table-bordered table-striped dataTable no-footer dtr-inline table-responsive-lg"
                                                            style="font-size:10pt;" role="grid"
                                                            aria-describedby="list_table_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="NAME: activate to sort column ascending">
                                                                        Purchase No.
                                                                    </th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="USERNAME: activate to sort column ascending">
                                                                        Office</th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="PROVINCE: activate to sort column ascending">
                                                                        Type</th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="CITY/MUNICIPALITY: activate to sort column ascending">
                                                                        Price</th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="EMAIL: activate to sort column ascending">
                                                                        EMAIL
                                                                    </th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="STATUS: activate to sort column ascending">
                                                                        PR Date</th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="ACTION: activate to sort column ascending">
                                                                        Target Date</th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="ACTION: activate to sort column ascending">
                                                                        Status</th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="ACTION: activate to sort column ascending">
                                                                        Time Elapsed</th>
                                                                    <th style="text-align: center;" class="sorting"
                                                                        tabindex="0" aria-controls="list_table"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="ACTION: activate to sort column ascending">
                                                                        Action</th>
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
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important; "
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-eye"></i></span>
                                                                                    View
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fa fa-share-square"></i></span>
                                                                                    Submit to Budget
                                                                                </router-link>
                                                                                <div class="dropdown-divider"></div>
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-send"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    Submit to GSS
                                                                                </router-link>
                                                                                <div class="dropdown-divider"></div>
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fa fa-times-circle"></i></span>
                                                                                    Cancel this PR
                                                                                </router-link>





                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important;
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-calendar"></i></span>
                                                                                    View Encoded Activities
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    New Activity
                                                                                </router-link>



                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important;
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-calendar"></i></span>
                                                                                    View Encoded Activities
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    New Activity
                                                                                </router-link>



                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important;
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-calendar"></i></span>
                                                                                    View Encoded Activities
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    New Activity
                                                                                </router-link>



                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important;
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-calendar"></i></span>
                                                                                    View Encoded Activities
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    New Activity
                                                                                </router-link>



                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important;
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-calendar"></i></span>
                                                                                    View Encoded Activities
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    New Activity
                                                                                </router-link>



                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important;
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-calendar"></i></span>
                                                                                    View Encoded Activities
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    New Activity
                                                                                </router-link>



                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td>a</td>
                                                                    <td class="float-center">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-info dropdown-toggle"
                                                                                style="margin-left: 0.5cm !important;
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                Menu
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/calendar_activities">
                                                                                    <span key="fa-calendar"><i
                                                                                            class="fas fa-calendar"></i></span>
                                                                                    View Encoded Activities
                                                                                </router-link>


                                                                                <div class="dropdown-divider"></div>

                                                                                <router-link class="dropdown-item"
                                                                                    to="/calendar/add_activity">
                                                                                    <span key="fa-plus"><i
                                                                                            class="fas fa-plus"></i></span>
                                                                                    New Activity
                                                                                </router-link>



                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>


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
                    </div>
                    <div class="col-lg-3">
                        <SupplierRanking />
                    </div>
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
import Chart from 'chart.js/auto';

export default {
    chartstyle() {
        return { height: '99px' }
    },
    mounted() {
        // axios.get('/api/user').then((res) => {
        //     this.user = res.data
        // })

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
        createNew(){
            this.$router.push('/GeneralSupplyService/create_new')
        },
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
        SupplierRanking
    }
}
</script>