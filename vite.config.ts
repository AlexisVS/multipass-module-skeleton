import {defineConfig} from 'vite';

export default defineConfig({
    build: {
        outDir: 'public/dist', // Output directory for the built files
        assetsDir: 'public/dist/assets', // Output directory for assets
        emptyOutDir: true, // Empty the output directory before building
        rollupOptions: {
            input: {
                // Customize the entry point(s) as per your requirement
                main: 'resources/src/main.ts'
            },
            
            external: ['vue'],
            // output: {
            //     // Customize the output file names and paths as per your requirement
            //     entryFileNames: '[name].js',
            //     chunkFileNames: 'chunks/[name].js',
            //     assetFileNames: 'assets/[name].[ext]',
            //     dir: resolve(__dirname, 'dist'),
            // },
        },

    },
});
