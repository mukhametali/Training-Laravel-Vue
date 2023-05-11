<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Job</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="person in persons">
                    <th scope="row">{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                </tr>
                </tbody>
            </table>
        </div>
</template>



<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",

    data() {
        return {
            persons: [
                {
                    id: 1,
                    name: 'Ali',
                    age: 27,
                    job: 'developer',
                },
                {
                    id: 2,
                    name: 'Asel',
                    age: 26,
                    job: 'teacher',
                },
                {
                    id: 3,
                    name: 'Adel',
                    age: 25,
                    job: 'administrator',
                },
            ]

        }
    },

    methods: {

    },

    computed: {

    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
