<template>
    <div class="card">
        <div class="card-body" style="height:320px;text-align:center;">
            <img :src="user_image" class="profile_img" />
            <div class="user_info">
                <p>Office:</p>
                <p>ORD-RICTU</p>
            </div>
            <div class="user_info">
                <p>Position:</p>
                <p>Database Admin</p>
            </div>
            <div class="user_info">
                <p>Cancelled PR:</p>
                <p>10</p>
            </div>
            <div class="user_info">
                <p>Total PR's:</p>
                <p>10</p>
            </div>
        </div>
    </div>
    <!-- <div class="card">
                            <div class="card-body" style="height:475px;">
                                <div class="alert filter">
                                    <span><strong><i class="glyphicon glyphicon-info-sign"></i></strong> Legend :</span>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="tdSpacing">
                                                    <div style="width:20px;height:20px;background-color:#a3e381;"></div>
                                                </td>
                                                <td class="tdSpacing">&nbsp;Urgent</td>
                                            </tr>
                                            <tr>
                                                <td class="tdSpacing">
                                                    <div style="width:20px;height:20px;background-color:#e3c281;"></div>
                                                </td>
                                                <td class="tdSpacing">&nbsp;Cancelled</td>
                                            </tr>
                                            <tr>
                                                <td class="tdSpacing">
                                                    <div style="width:20px;height:20px;background-color:#81aae3;"></div>
                                                </td>
                                                <td class="tdSpacing">&nbsp;Obligated</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
</template>
<script>
import avatar from '../../../assets/c1.jpg';
export default{
    name: "user_view_info",
    data(){
        return {
            user_image: avatar
        }
    }

}
</script>