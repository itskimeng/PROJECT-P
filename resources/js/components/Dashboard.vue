<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                        <SidebarMenu />
                </div>
            </div>
            <div class="col-lg-12">
            
                <BreadCrumbsVue to="dashboard" from="" title="Dashboard" />
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-primary zoom">
                            <div class="inner">
                                <h3>{{65}}</h3>
                                <p>DRAFT APPLICATION</p>
                            </div>
                            <div class="icon">
                                <img class="zoom"
                                    src="http://safetyseal.calabarzon.dilg.gov.ph/frontend/images/dash_received.png"
                                    style="width:100px;margin-top:-100px;margin-right:10px;" align="right" alt="">
                            </div>
                            <a href="#" class="small-box-footer">&nbsp;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-yellow zoom">
                            <div class="inner">
                                <h3>28</h3>

                                <p>PENDING APPLICATION</p>
                            </div>
                            <div class="icon">
                                <img class="zoom"
                                    src="http://safetyseal.calabarzon.dilg.gov.ph/frontend/images/dash_received.png"
                                    style="width:100px;margin-top:-100px;margin-right:10px;" align="right" alt="">
                            </div>
                            <a href="#" class="small-box-footer"><i class="fas fa-plus"></i> View More</a>
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
                                <img class="zoom"
                                    src="http://safetyseal.calabarzon.dilg.gov.ph/frontend/images/dash_approved.png"
                                    style="width:100px;margin-top:-100px;margin-right:10px;" align="right" alt="" />

                            </div>
                            <a href="#" class="small-box-footer"><i class="fas fa-plus"></i> View More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box zoom" style="background-color: #b71c1c;color:gainsboro">
                            <div class="inner">
                                <h3>107</h3>
                                <p>DISAPPROVED</p>
                            </div>
                            <div class="icon">
                                <img class="zoom"
                                    src="http://safetyseal.calabarzon.dilg.gov.ph/frontend/images/dash_disapproved.png"
                                    style="width:100px;margin-top:-100px;margin-right:10px;" align="right" alt="">

                            </div>
                            <a href="#" class="small-box-footer"><i class="fas fa-plus"></i> View More
                                &nbsp;

                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="row">
                            <div class="col-sm-12">
                                
                                <div class="card">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                    data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                                        </li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                                        </li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="greet-card">
                                                                <p>Mark Kim Sacluti<br>Oct. 10, 1996</p>
                                                                <img :src="image5" class="greet-cake" />
                                                                <img :src="image1"
                                                                    class="rounded img-thumbnail img-style" src=""
                                                                    alt="First slide" />
                                                            </div>


                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="greet-card">
                                                                <img :src="image5" class="greet-cake" />

                                                                <img :src="image2"
                                                                    class="rounded img-thumbnail img-style" src=""
                                                                    alt="First slide" />
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="greet-card">
                                                                <img :src="image5" class="greet-cake" />

                                                                <img :src="image3"
                                                                    class="rounded img-thumbnail img-style" src=""
                                                                    alt="First slide" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                        role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                        role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="card memo-card">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Events</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card memo-card ">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="card chart-style1">
                                            <div class="scroll" style="max-height:100%!important;padding:5px;">
                                                <div class="">
                                                    <div class="media">
                                                        <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                            style="width: 100px; height:100px;">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Title</h5>
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                            scelerisque ante sollicitudin. Cras purus odio, vestibulum
                                                            in
                                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                                            ac nisi
                                                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                            style="width: 100px; height:100px;">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Title</h5>
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                            scelerisque ante sollicitudin. Cras purus odio, vestibulum
                                                            in
                                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                                            ac nisi
                                                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                            style="width: 100px; height:100px;">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Title</h5>
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                            scelerisque ante sollicitudin. Cras purus odio, vestibulum
                                                            in
                                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                                            ac nisi
                                                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                            style="width: 100px; height:100px;">
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Title</h5>
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                            scelerisque ante sollicitudin. Cras purus odio, vestibulum
                                                            in
                                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                                            ac nisi
                                                            vulputate fringilla. Donec lacinia congue felis in faucibus.
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


                    <div class="col-xl-7 col-lg-6 ">
                        <div class="card ">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="card chart-style1">
                                    <div class="scroll" style="max-height:100%!important;padding:5px;">
                                        <div class="">
                                            <div class="media">
                                                <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                    style="width: 100px; height:100px;">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Title</h5>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                    style="width: 100px; height:100px;">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Title</h5>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                    style="width: 100px; height:100px;">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Title</h5>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img class="mr-3" :src=image1 alt="Generic placeholder image"
                                                    style="width: 100px; height:100px;">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Title</h5>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card card-style">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="chart-style1">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="card card-style">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="card chart-style1">
                                    <canvas id="procurement"></canvas>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4">
                        <div class="card card-style">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="card chart-style1">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">07 April 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">25 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">17 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">12 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">05 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4">
                        <div class="card card-style">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="card chart-style1">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">07 April 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">25 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">17 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">12 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">05 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4">
                        <div class="card card-style">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="card chart-style1">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">07 April 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">25 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">17 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">12 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">05 March 2018</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Price</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Amount</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
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
.breadcrumb-item {
    color: black !important;
    font-weight: bold !important;
}

canvas {
    max-height: 320px;
    max-width: 100%;
}

.container-fluid {
    margin-top: 4%;
}

.scroll {
    height: 700px !important;
    overflow-y: auto !important;
}

.scroll:active::-webkit-scrollbar-thumb,
.scroll:focus::-webkit-scrollbar-thumb,
.scroll:hover::-webkit-scrollbar-thumb {
    visibility: visible;
}

.scroll::-webkit-scrollbar-thumb {
    background-color: darkgrey;
    visibility: hidden;
}

.scroll::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

.media {
    background-color: #ecedf6 !important;
    padding: 10px;
    margin-top: 5px;
}

.greet-cake {
    position: absolute;
    text-align: center;
    left: 65%;
    width: 32%;
    top: 5px;
}

.greet-card p {
    font-size: 20px;
    font-weight: bold;
    color: rgb(215, 17, 241);
    text-transform: uppercase;
    font-family: sans-serif;
    position: absolute;
    text-align: center;
    left: -25px;
    width: 100%;
    z-index: 1;
}

.img-style {
    width: 23%;
    height: 23%;
    object-fit: contain;
}

.memo-card {
    margin-top: 10px !important;
}

.chart-style1 {
    height: 420px !important;
}

.card-style {
    margin-top: 10px !important;
}

.card-body {
    background-color: #fff !important;
    margin-top: 10px !important;

}

.card-header {
    background-color: #7952b3 !important;
    color: #fff;
}

.small-box .icon {
    color: rgba(0, 0, 0, .15);
    z-index: 0;
}

.small-box>.small-box-footer {
    background-color: rgba(0, 0, 0, .1);
    color: rgba(255, 255, 255, .8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
}

.small-box>.inner {
    padding: 10px;
}

.zoom {
    z-index: 1;
    transition: transform .5s;
    /* Animation */
}

.zoom:hover {
    z-index: 9999;
    /*margin-top: 13px !important;*/
    /*margin-bottom: 13px !important;*/
    transform: scale(1.1);
    /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.bg-primary,
.bg-primary>a {
    color: #fff !important;
}

.bg-primary {
    background-color: #007bff !important;
}

.small-box {
    border-radius: 0.25rem;
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
    display: block;
    margin-bottom: 20px;
    position: relative;
}

.antialiased {
    background-color: #fff;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #3e4684 !important;
    border-color: #007bff;
}

.bg-yellow,
.bg-yellow>a {
    color: #1f2d3d !important;
}

.bg-yellow {
    background-color: #ffc107 !important;
}

.bg-yellow,
.bg-yellow>a {
    color: #fff !important;
}

.bg-green,
.bg-green>a {
    color: #fff !important;
}

.bg-green {
    background-color: #28a745 !important;
}

.bg-green,
.bg-green>a {
    color: #fff !important;
}
</style>

<script>
import Navbar from "./Navbar.vue"
import image1 from "../../assets/c1.jpg";
import image2 from "../../assets/c2.jpeg";
import image3 from "../../assets/c3.jpg";
import image4 from "../../assets/cake.jpg";
import image5 from "../../assets/greet.gif";
import Sidebar from "./Sidebar.vue";
import SidebarMenu from "./Sidebar-Menu.vue";
import Chart from 'chart.js/auto';
import BreadCrumbsVue from "./BreadCrumbs.vue";
import { ref } from 'vue';


export default {

    chartstyle() {
        return { height: '99px' }
    },
    data() {
        return {
            user: '',
            image1: image1,
            image2: image2,
            image3: image3,
            image4: image4,
            image5: image5,
        }
    },
    methods: {
        logout() {
            axios.post('/api/logout').then(() => {
                this.$router.push({ name: "Home" })
            })
        }
    },
    mounted() {
        axios.get('/api/user').then((res) => {
            this.user = res.data
        })

        const ctx = document.getElementById('myChart').getContext('2d');
        const ctx_proc = document.getElementById('procurement').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Regular Male', 'Regular Female', 'COS Male', 'COS Female'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5],
                    backgroundColor: [
                        '#3F51B5',
                        '#EC407A',
                        '#8BC34A',
                        '#FFFF00',

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
    
    name: "Calendar",
    components: {
        Navbar,
        Sidebar,
        SidebarMenu,
        BreadCrumbsVue
    }
}
</script>