<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps(["course"])

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ course.title }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                  
                </div>
            </div>
        </div>
    </AppLayout>
</template>
