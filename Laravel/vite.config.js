import { defineConfig } from 'vite'
import postcss from 'rollup-plugin-postcss'
const laravel = require('laravel-mix');

export default defineConfig({

    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),

    ]
})