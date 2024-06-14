<script setup>

</script>

<template>
    <h1>AppVueJs</h1>
    <div></div>
    <h3>Routing</h3>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name">
            <Component :is="Component" />
        </div>
    </router-view>
    <h3>Routing</h3>
    <div>
        <h2>Footer</h2>
    </div>
</template>

<style scoped>

</style>
