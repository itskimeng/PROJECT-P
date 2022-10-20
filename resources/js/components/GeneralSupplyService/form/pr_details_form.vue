<template>
    <div class="card">
        <div class="card-body">
            <div class="alert filter">
                <span><strong><i class="glyphicon glyphicon-info-sign"></i></strong>
                    Legend :</span>
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
    </div>
    <div class="card">
        <div class="card-body" style="height:auto;">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <FormInput type="text" class="form-control" name="" id="" value="2022-01-0001">
                        Purchase
                        Request
                        Number:</FormInput>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <FormInput type="text" class="form-control" name="" id="" value="FAD">Office:
                    </FormInput>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <label>Type:</label>
                    <select v-model="selected" class="form-control">
                        <option disabled value="">Please Select</option>
                        <option v-for="option in options" :value="option">{{option}}</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 12px;">
                    <FormInput type="date" class="form-control" name="" id="" value="FAD">Purchase
                        Request Date:
                    </FormInput>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <FormInput type="date" class="form-control" name="" id="" value="FAD">Purchase
                        Request Target:
                    </FormInput>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <textarea class="form-control" cols="161" rows="5"></textarea>

                </div>

            </div>
        </div>
    </div>
</template>
<style>

</style>
<script>
import FormInput from '../../FormInput.vue';

export default{
    name: 'pr_details_form',
    data(){
        return {
            selected: '',
            options: [
                'Catering Services',
                'Meals, Venu and Accomodation',
                'Repair and Maintenance',
                'Supplies, Materials and Devices',
                'Other Services'
            ],
        }
    },
    components:{
        FormInput
    }
}
</script>