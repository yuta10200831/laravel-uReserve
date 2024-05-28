import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    build: {
        outDir: 'public/build', // ビルドファイルの出力先を指定
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['vue', 'axios', 'alpinejs'], // 例: 必要に応じて調整
                },
            },
        },
    },
});
