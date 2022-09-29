<template>

    <RouterView>
    </RouterView>
</template>


<script>
import Navbar from "./components/Navbar.vue";
import Sidebar from "./components/Sidebar.vue";
import LoginForm from "./components/LoginForm.vue";
import Home from "./components/Home.vue";
import About from "./components/About.vue";
import Register from "./components/Register.vue";
import Dashboard from "./components/Dashboard.vue";
import ProfileCard from "./components/ProfileCard.vue";
import ProfileCardSkeleton from "./components/dashboard/ProfileCardSkeleton.vue";
import calendar_panel from "./components/calendar/calendar_panel.vue";
import calendar_activities from "./components/calendar/calendar_activities.vue";


export default {
    name: "App",
    components: {
        ProfileCard,
        ProfileCardSkeleton,
        Navbar,
        navigation: Sidebar,
        LoginForm,
        Home,
        About,
        Register,
        calendar_panel,
        Navbar,
        Dashboard,
    }
}

</script> 
