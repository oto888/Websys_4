import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

import fs from 'fs';

export default defineConfig({

    server: {
        host,
        hmr: {host},
        https: {
            key: fs.readFileSync(`/xampp/htdocs/laravelapp/to/${host}.key`),
            cert: fs.readFileSync(`/xampp/htdocs/laravelapp/to/${host}.crt`),
        },
    },
    plugins: [
        laravel({
            valetTls: 'my-app.test',
            input: [
                
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
