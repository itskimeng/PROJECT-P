<template>
    <nav aria-label="breadcrumb" style="margin-top:-2.5rem!important;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <router-link :to="to" style="color:black">{{title}}</router-link>
                <!-- <router-link to="/dashboard">{{user.name}}</router-link> -->
            </li>
            <li class="breadcrumb-item active">
                <router-link :to="from" style="color:black">{{fromtitle}}</router-link>

                <!-- <router-link to="/dashboard">{{user.name}}</router-link> -->
            </li>
        </ol>
    </nav>
</template>
<script>
export default {
      
    name: "BreadCrumbs",
    components: {
  
    },
  props: {
    title:{type:String, required: true},
    fromtitle:{type:String, required: true},
    to: { type: String, required: true },
    from: { type: String, required: true },
    class: {type: String},
    icon: { type: String},
  },
}

</script>