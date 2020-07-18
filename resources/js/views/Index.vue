<template>
    <div class="container">
        <div class="card mt-5" style="width: 50rem;">
            <img src='/img/laravel.svg' class="card-img-top">
            <div class="card-body">
                <h1>Laravel 7 Project Template</h1>
                <p class="card-text">A template project for laravel 7 using Vue, Vuex, Vue-Router, Bootstrap 4 and Typescript</p>
                <a href="https://www.github.com/HOWZ1T" class="btn btn-primary" target="_blank">Template Author's Github</a>
            </div>
        </div>
    </div>
</template>

<script lang='ts'>
import Vue from 'vue';
import Component from 'vue-class-component';

@Component
export default class Index extends Vue {
    mounted() : void {
        console.log('Index component mounted.');
    }
}
</script>