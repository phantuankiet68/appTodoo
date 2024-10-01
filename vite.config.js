import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@fullcalendar/core': path.resolve(__dirname, 'node_modules/@fullcalendar/core'),
            '@fullcalendar/daygrid': path.resolve(__dirname, 'node_modules/@fullcalendar/daygrid'),
            '@fullcalendar/timegrid': path.resolve(__dirname, 'node_modules/@fullcalendar/timegrid'),
            '@fullcalendar/interaction': path.resolve(__dirname, 'node_modules/@fullcalendar/interaction'),
        },
    },
});
