import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app-admin.js',
                'resources/js/app-website.js'
            ],
            refresh: true,
        }),
        vue()
    ],
    resolve: {
        alias: {
          vue: 'vue/dist/vue.esm-bundler.js',
        },
    }
});
