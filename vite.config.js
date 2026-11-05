import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';
// import 'resources/css/app.css';
// import 'resources/css/app2.css';
// import 'resources/css/atyle_jogos.css';
// import 'resources/css/style_layout.css';
// import 'resources/css/style_login.css';
// import 'resources/css/style_notas.css';
// import 'resources/css/style.css';
// import 'resources/css/style.index.css';

// import 'resources/css/images/louca.png';

// import 'resources/js/app.js'

export default defineConfig({
    plugins: [
        laravel({
            input: [ 'resources/css/style.index.css','resources/css/app.css', 'resources/css/app.2.css', 'resources/css/style_jogos.css', 'resources/css/style_layout.css', 'resources/css/style_login.css','resources/css/style.css', 'resources/css/style_notas.css','resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
