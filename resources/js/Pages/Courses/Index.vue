<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps(["courses"])

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste des cours
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="bg-white p-4 mb-2" v-for="course in courses" v-bind:key="course.id">
                      <div class="mb-4 flex justify-between">
                        <h1 class="text-2xl font-bold">{{ course.title }}</h1>
                        <span>{{ course.episodes_count }} episode(s)</span>
                      </div>
                      <p>{{ course.description }}</p>

                      <a :href="'courses/'+course.id" class='bg-indigo-500 mt-4 inline-block p-2 mx-2 text-white font-bold rounded-lg hover:bg-indigo-300'>Voir ce cours</a>
                  </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
