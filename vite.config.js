import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/assets/admin/css/admin.css',
                'resources/assets/admin/plugins/select2/css/select2.min.css',
                'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                'resources/js/app.js',
                'resources/assets/admin/plugins/jquery/jquery.min.js',
                'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/admin/js/adminlte.min.js',
                'resources/assets/admin/js/demo.js',
                'resources/assets/admin/js/admin.js',
                'resources/assets/admin/plugins/select2/js/select2.full.js'
            ],
            refresh: true,
        }),
    ],
});
