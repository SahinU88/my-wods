<template>
    <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
            <div v-for="wod in wods" :key="wod.id"
                :class="'bg-'+wod.type.toLowerCase()+'-500'"
                class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-6 px-6 flex h-48 overflow-hidden">
                    <div class="font-bold text-gray-200 leading-normal uppercase whitespace-pre">{{ wod.content }}</div>
                </div>
                <div class="relative text-gray-100 px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block text-sm uppercase">{{ wod.type }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            loading: false,
            wods: null,
            error: null,
        };
    },
    created() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            this.error = this.wods = null;
            this.loading = true;

            axios
                .get('/api/wods')
                .then(response => {
                    this.wods = response.data;
                    this.loading = false;
                });
        }
    }
}
</script>
