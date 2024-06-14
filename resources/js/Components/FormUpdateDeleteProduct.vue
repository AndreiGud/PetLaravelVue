<script setup>
import { reactive, defineProps} from 'vue'
import {useRouter} from "vue-router";
const props = defineProps({data: {} })

const router = useRouter()

const formdata = reactive({
    name:'',
    description:'',
    status: 0,
    }
)

function Submit() {
    axios.patch('/api/product/'+props.data.id+'/update', {
        name: formdata.name,
        description: formdata.description,
        status: formdata.status
    }).then(
        () => {
            router.push({ name: 'product_list'})

            formdata.name = '';
            formdata.description = '';
            formdata.status = 0;
        }
    )
}
function Delete(){
    axios.delete('/api/product/'+props.data.id+'/delete').then(
        () => {
            router.push({ name: 'product_list'})

            formdata.name = '';
            formdata.description = '';
            formdata.status = 0;
        }
    )
}
</script>

<template>

    <form @submit.prevent="Submit">
        <p>Название: {{ data.name }}</p>
        <input v-model="formdata.name" placeholder="Введите новое название продукта" />
        <br><br>
        <span>Описание:</span>
        <span style="white-space: pre-line;">{{ data.description }}</span>
        <br>
        <textarea v-model="formdata.description" placeholder="Введите новое описание"></textarea>
        <br><br>
        <div>Обновить на статус: {{ data.status }}</div>

        <select v-model="formdata.status">
            <option disabled value="">Выберите один из вариантов</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
        </select>
        <br><br>
        <input type="submit" value="Обновить">
    </form>
    <br><br>
    <form @submit.prevent="Delete">
        <input type="submit" value="Удалить">
    </form>
</template>

<style scoped>

</style>
