<script setup>
import { reactive, ref } from 'vue'

const data= ref([]);
const formdata = reactive({
    name:'',
    description:'',
    status: 0,
    cost: 0,
    }
)

function Submit() {
    axios.post('/api/create', {
        name: formdata.name,
        description: formdata.description,
        status: formdata.status,
        cost: formdata.cost,
    }).then(
        () => {
            formdata.name = '';
            formdata.description = '';
            formdata.status = 0;
            formdata.cost = 0;
        }
    )
}
</script>

<template>

    <form @submit.prevent="Submit">
        <p>Название: {{ formdata.name }}</p>
        <input v-model="formdata.name" placeholder="Введите название продукта" />
        <br><br>
        <span>Описание:</span>
        <span style="white-space: pre-line;">{{ formdata.description }}</span>
        <br>
        <textarea v-model="formdata.description" placeholder="Введите описание"></textarea>
        <br><br>
        <div>Создать с статусом: {{ formdata.status }}</div>

        <select v-model.number="formdata.status">
            <option disabled value="">Выберите один из вариантов</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
        </select>
        <br><br>
        <div>Установить стоимость: {{ formdata.cost }}</div>
        <input v-model="formdata.cost" value="0"><br><br>
        <input type="submit" value="Создать">
    </form>


</template>

<style scoped>

</style>
