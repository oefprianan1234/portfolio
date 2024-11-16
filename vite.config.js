import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
    optimizeDeps: {
        include: ['aos', 'gsap', 'swiper'],
    },
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['aos', 'gsap', 'swiper'],
                },
            },
        },
    },
    server: {
        hmr: {
            overlay: true,
        },
    },
});
