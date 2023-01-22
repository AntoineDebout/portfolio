import { defineConfig } from 'vite';
import fs from "fs";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import dotenv from 'dotenv';

dotenv.config()

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        })
    ],
    server: {
        https: {
            key: fs.readFileSync(process.env.VITE_HTTPS_KEY),
            cert: fs.readFileSync(process.env.VITE_HTTPS_CERT)
        },
        host: process.env.VITE_LOCAL_HOST,
    },
});
