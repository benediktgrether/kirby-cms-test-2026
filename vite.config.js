import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [tailwindcss()],
  build: {
    outDir: 'public/assets',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        app: 'assets/js/app.js'
      },
      output: {
        entryFileNames: 'js/[name].js',
        assetFileNames: 'css/[name][extname]'
      }
    }
  }
});
