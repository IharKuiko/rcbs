import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/assets/admin/css/admin.css', 'resources/js/app.js', 'resources/assets/admin/js/admin.js'],
            refresh: true,
        }),
    ],
});
