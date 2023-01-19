<script setup>
    defineProps(['courses']);
</script>

<template>
 <div class="bg-white p-4 mb-2" v-for="course in courses" v-bind:key="course.id">
      <div class="mb-4 flex justify-between">
        <h1 class="text-2xl font-bold">{{ course.title }}</h1>
        <span>{{ course.episodes_count }} episode(s)</span>
      </div>
      <p>{{ course.description }}</p>
  </div>
</template>
