<script>
export default {
    props: {
        class: { type: String, required: true },
        name: { type: String, required: true },
        value: { type: String, required: true },
        id: { type: String, required: true },
        type: { type: String, required: true },
        disabled:{type: String,required:false}
    },
}

</script>
<style>
    label{
        font-weight: bolder;
    }
</style>
<template>
    <div class="form-group">
        <label>
        <slot />
        </label>
        <input :type="type" :class="class"  :disabled="disabled" />
    </div>
</template>