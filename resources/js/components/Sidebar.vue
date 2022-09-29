
<template>
    <div class="list-group" id="list-tab" role="tablist">
        <SidebarLink to="/dashboard" :class="{'router-link-active':subIsActive('/dashboard'),'link':'link'}" icon="fas fa-dashboard" >Dashboard</SidebarLink>
        <SidebarLink to="/calendar/calendar_panel" :class="{'router-link-active':subIsActive('/calendar'),'link':'link'}"  icon="fas fa-calendar" >Calendar</SidebarLink>
        <SidebarLink to="/about" :class="{'router-link-active':subIsActive('/about'),'link':'link'}" icon="fas fa-calendar">LGCDD</SidebarLink>
        <SidebarLink to="/gss" :class="{'router-link-active':subIsActive('/gss'),'link':'link'}" icon="fas fa-market">GSS</SidebarLink>
        <SidebarLink to="/gss" :class="{'router-link-active':subIsActive('/gss'),'link':'link'}" icon="fas fa-market">RICTU</SidebarLink>
        <!-- <SidebarLink to="/a" icon="fas fa-calendar">Records Section</SidebarLink>
        <SidebarLink to="/d" icon="fas fa-calendar">HR Section</SidebarLink>
        <SidebarLink to="/f" icon="fas fa-calendar">GSS Section</SidebarLink>
        <SidebarLink to="/t" icon="fas fa-calendar">Finance Section</SidebarLink>
        <SidebarLink to="/t" icon="fas fa-calendar">RICTU</SidebarLink>
        <SidebarLink to="/t" icon="fas fa-calendar">QMS</SidebarLink>
        <SidebarLink to="/t" icon="fas fa-calendar">Setting</SidebarLink> -->
        
    </div>
    

</template>

<style>
/* Declaring global css */

:root {
    --sidebar-bg-color: #9881bb;
    --sidebar-item-hover: #7952b3;
    --sidebar-item-active: #7952b3;

}
</style>
<style scoped>
.list-group {
    background-color: #e8e3ef;
    padding: 4%;
    border-radius: 3px;
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%)!important;

}

</style>

<script>
import SidebarLink from './SidebarLink.vue';
export default {
    props: {},
    components: { SidebarLink },
    methods:{
    subIsActive(input) {
    const paths = Array.isArray(input) ? input : [input]
    return paths.some(path => {
        return this.$route.path.indexOf(path) === 0 // current path starts with this path string
    })
  }
  }
    
}
</script>