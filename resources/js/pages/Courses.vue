<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import { Button } from '@/components/ui/button';
import { Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Courses',
        href: '/courses',
    },
];

const courses = []
</script>

<template>
    <Head title="Courses" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
            <div class="flex justify-between">
                <h1>Courses</h1>
                <Link :href="route('course')">
                    <Button>Create New</Button>
                </Link>
            </div>
            <table class="min-w-full border">
                <thead>
                <tr>
                    <th class="p-2 text-left">Title</th>
                    <th class="p-2 text-left">Created Date</th>
                    <th class="p-2 text-left">Updated Date</th>
                    <th class="p-2 text-left">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="course in courses" :key="course.title" class="border-t hover:bg-gray-100">
                    <td class="p-2">{{ course.created_date }}</td>
                    <td class="p-2">{{ course.updated_date }}</td>
                    <td class="p-2">{{ course.action }}</td>
                    <td class="p-2">
                        <Button>Edit</Button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
