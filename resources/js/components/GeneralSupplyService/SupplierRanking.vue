<template>
    <div class="card">
        <div class="card-body" style="height:500px;">
            <h5>Supplier Rankings</h5>
            <select class="form-control">
                <option>This Week</option>
                <option>This Month</option>
                <option>This Year</option>
            </select>

            <div class="card" style="margin-top:10px">
                <div class="card-body" style="height: 90px;">
                    <div class="media" style="margin-top: -25px;">
                        <div style="width:65px; height:65px;">
                            <img style="border-radius: 5px; width: 100%;object-fit: cover;margin-left: -14px;"
                                :src="supplier_logo" alt="...">
                        </div>
                        <div class="media-body">
                            <div class="media-content">
                                <small>Supplier Title</small><br>
                            </div>
                            <div class="media-content" style="margin-top: -1%;">
                                <small><i class="fa fa-envelope"></i> sample@ymail.com</small>
                            </div>
                            <div class="media-content" style="margin-top: -2%;">
                                <small><i class="fa fa-phone"></i> 0927-120-6718</small>

                            </div>



                        </div>
                    </div>
                    <p class="rank_wrapper rank_banner">1st</p>
                </div>
            </div>
            <div class="card" style="margin-top:10px">
                <div class="card-body" style="height: 90px;">
                    <div class="media" style="margin-top: -25px;">
                        <div style="width:65px; height:65px;">
                            <img style="border-radius: 5px; width: 100%;object-fit: cover;margin-left: -14px;"
                                :src="supplier_logo" alt="...">
                        </div>
                        <div class="media-body">
                            <div class="media-content">
                                <small>Supplier Title</small><br>
                            </div>
                            <div class="media-content" style="margin-top: -1%;">
                                <small><i class="fa fa-envelope"></i> sample@ymail.com</small>
                            </div>
                            <div class="media-content" style="margin-top: -2%;">
                                <small><i class="fa fa-phone"></i> 0927-120-6718</small>

                            </div>



                        </div>
                    </div>
                    <p class="rank_wrapper rank_banner2">2nd</p>
                </div>
            </div>
            <div class="card" style="margin-top:10px">
                <div class="card-body" style="height: 90px;">
                    <div class="media" style="margin-top: -25px;">
                        <div style="width:65px; height:65px;">
                            <img style="border-radius: 5px; width: 100%;object-fit: cover;margin-left: -14px;"
                                :src="supplier_logo" alt="...">
                        </div>
                        <div class="media-body">
                            <div class="media-content">
                                <small>Supplier Title</small><br>
                            </div>
                            <div class="media-content" style="margin-top: -1%;">
                                <small><i class="fa fa-envelope"></i> sample@ymail.com</small>
                            </div>
                            <div class="media-content" style="margin-top: -2%;">
                                <small><i class="fa fa-phone"></i> 0927-120-6718</small>

                            </div>



                        </div>
                    </div>
                    <p class="rank_wrapper rank_banner3">3rd</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="height:280px;">
            <h5>Urgent Purchase Request</h5>
            <ul>

                <li class="working dot-style">2022-07-0315 - Carwash of the service vehicle in the
                    Regional Office (Isuzu Crosswind SAB4999)</li>
                <li class="working dot-style">2022-07-0315 - Carwash of the service vehicle in the
                    Regional Office (Isuzu Crosswind SAB4999)</li>

            </ul>
        </div>
    </div>
</template>
<script>
import logo from '../../../assets/logo.png';
export default {
    name: "SupplierRanking",
    data() {
        return {
            supplier_logo: logo
        }
    }

}
</script>