<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
// import InputError from '@/components/InputError.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Course',
        href: '/course',
    },
];

const form = useForm({
    password: '',
});

</script>

<template>
    <Head title="Course" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
            <h1>Course</h1>
            <div class="relative min-h-[100vh] flex-1 rounded-xl md:min-h-min">
                <div class="grid gap-2">
                    <Label>Name</Label>
                    <Input id="name" type="text" placeholder="Name" />
                    <!-- <InputError :message="form.errors.password" /> -->
                </div>
            </div>
        </div>
    </AppLayout>
</template>
