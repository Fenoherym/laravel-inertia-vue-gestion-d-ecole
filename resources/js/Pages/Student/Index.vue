<template>
    <div class="header-title">

        <h1>Liste des étudiants</h1>
    </div>
    <div class="card mt-5">
        <div class="card-header">
            Liste des étudiants
        </div>
        <div class="card-body">
            <div class="paginator">
                <Link :href=" link.url" v-for="link in students.links" :key="link.label">
                    <span :class="{active: link.active}" v-html="link.label"></span>
                </Link>
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Recherche" v-model="q">
            </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="student in students.data" :key="student.id">
                        <th scope="row">{{ student.name }}</th>
                        <td>{{ student.first_name }}</td>
                        <td>{{ student.birthday }}</td>
                        <td>{{ student.email }}</td>
                        <td>
                            <Link href="#" class="btn btn-primary mb-2 ms-2">Modifier</Link>
                            <Link href="/student/delete" class="btn btn-danger mb-2 ms-2">Supprimer</Link>
                        </td>

                    </tr>
                </tbody>
            </table>

        </div>
        </div>
</template>

<script>
import MainLayout from '../../Layout/MainLayout.vue';
export default {
    layout: MainLayout
}
</script>
<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    import { ref } from '@vue/reactivity';
    const props = defineProps(['students'])
    const q = ref('')

    console.log(props.students)
</script>

<style scoped lang="scss">
    .header-title{
        h1{
            font-size: 1.2rem  !important;
           color: rgb(97, 97, 97) !important;
        }
    }

    .paginator{
            margin: 20px 0px;
        span{

            border: rgb(90, 166, 218) 1px solid;
            color: rgb(77, 77, 77);
            padding: 10px 15px;
        }
        span:hover, span.active{
            background:  rgb(90, 166, 218);
        }
    }
</style>
