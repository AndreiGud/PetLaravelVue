<script setup>

import {onMounted, ref} from 'vue'
import { useRoute } from 'vue-router'
import NavMenu from "../Components/NavMenu.vue";
import FormUpdateDeleteProduct from "../Components/FormUpdateDeleteProduct.vue";

const route = useRoute()

const data = ref([])

function GetData() {

    axios.get('/api/product/'+ route.params.id)
        .then((response) => {
            data.value = response.data;
        })
}
onMounted(() => { GetData() });
</script>

<template>
    <h1>Редактировать "{{ data.name }}"</h1>
    <NavMenu></NavMenu>
 <section>
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
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>{{ data.id }}</td>
            <td>{{ data.name }}</td>
            <td>{{ data.description }}</td>
            <td>{{ data.status }}</td>

        </tr>
        </tbody>
    </table>
 </section>
    <FormUpdateDeleteProduct :data="data"></FormUpdateDeleteProduct>
</template>

<style scoped>

</style>
