import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {

        //PORT DEFAULT
        
        // host: '0.0.0.0', // Atau 'localhost' jika ingin spesifik ke localhost
        // port: 8000, // Pastikan port ini tidak digunakan oleh aplikasi lain`


        // PORT UNTUK TES MELALUI IP WIFI MASING MASING UNTUK LIVE CHAT

        // host: '172.16.16.203',  
        
        port: 8000, 
      },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
