<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{ someObj }}</div>
    </div>
</template>



<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",

    data() {
        return {
            name: 'Ali',
            age: 20,
            boolean: false,
            someNull: null,
            arr: [

            ],
            someObj: {
                personName: 'Asel'
            }
        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
