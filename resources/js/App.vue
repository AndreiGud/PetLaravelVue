<script setup>

</script>

<template>
    <h1>App</h1>
    <div></div>
    <h3>Top</h3>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name">
            <Component :is="Component" />
        </div>
    </router-view>
    <div>
        <h2>Footer</h2>
    </div>
</template>

<style scoped>

</style>
