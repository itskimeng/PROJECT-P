<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="container">
                    <SidebarMenu />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import SidebarMenu from '../../Sidebar-Menu.vue';
export default {
    name: 'update item',
    data() {
        return {

        }
    },
    components: {
        SidebarMenu
    }
}
</script>