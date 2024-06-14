<script setup>

</script>

<template>
    <router-link class="router-link-a" :to="{ name: 'index', params: { } }">index</router-link><br>
    <router-link class="router-link-a" :to="{ name: 'product_list', params: { } }">Список продукции</router-link><br>
    <router-link class="router-link-a" :to="{ name: 'product_create', params: {} }">Создать</router-link><br>
</template>

<style scoped>

</style>
