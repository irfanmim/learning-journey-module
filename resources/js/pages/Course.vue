<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import { Input, Textarea } from '@/components/ui/input';
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
    errors: {}
});

</script>

<template>
    <Head title="Course" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
            <h1>Create New Course</h1>
            <div class="relative min-h-[100vh] flex-1 rounded-xl md:min-h-min">
                <div class="grid gap-2">
                    <Label>Course Title / Book Title</Label>
                    <Input id="title" type="text" placeholder="Course Title / Book Title" />
                    <!-- <InputError :message="form.errors" /> -->
                </div>
                <div class="grid gap-2 mt-4">
                    <Label>Sub-Title</Label>
                    <Input id="sub-title" type="text" placeholder="Sub-Title" />
                    <!-- <InputError :message="form.errors" /> -->
                </div>
                <div class="grid gap-2 mt-4">
                    <Label>Source</Label>
                    <Input id="source" type="text" placeholder="Source" />
                </div>
                <div class="grid gap-2 mt-4">
                    <Label>Topic</Label>
                    <Input id="topic" type="text" placeholder="Topic" />
                </div>
                <div class="grid gap-2 mt-4">
                    <Label>Learning Materials</Label>
                    <Textarea id="learning-materials" type="textarea" placeholder="Learning Materials" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
