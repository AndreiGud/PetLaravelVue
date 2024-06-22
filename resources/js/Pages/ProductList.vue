<script setup>

import { onMounted, ref} from 'vue'

import NavMenu from "../Components/NavMenu.vue";

const data = ref([])

function GetData() {
    axios.get('/api/product')
        .then((response) => {
            data.value = response.data;
        })
}
onMounted(() => { GetData() });
</script>

<template>
    <h1>Список</h1>
    <NavMenu></NavMenu>
 <section v-show="data.length!==0">
    <table data-toggle="table">
        <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Имя
            </th>
            <th>
                Описание
            </th>
            <th>
                Статус
            </th>
            <th>
                Стоимость
            </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in data">

            <td>{{ item.id }}</td>
            <td>{{ item.name }}</td>
            <td>{{ item.description }}</td>
            <td>{{ item.status }}</td>
            <td>{{ item.cost }}</td>
            <td> <router-link :to="{ name: 'product_edit', params: { id: item.id} }">Редактировать</router-link> </td>

        </tr>
        </tbody>
    </table>
 </section>
</template>

<style scoped>

</style>
