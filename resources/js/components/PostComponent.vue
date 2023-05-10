<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{ name }}</div>
        <div>Job: {{ vasyaJob }}</div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
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

        }
    },

    methods: {
      sayHello() {
         console.log('hello')
      },
      sayHi() {
          console.log('hi')
      }
    },

    computed: {
      vasyaJob() {
          return this.name + ' working in KazNU'
      }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
