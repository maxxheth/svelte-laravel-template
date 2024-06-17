// vite.config.js
import { defineConfig } from 'vite';
import { svelte } from '@sveltejs/vite-plugin-svelte';
// import WindiCSS from 'vite-plugin-windicss'; 

import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [svelte(), laravel({
    input: "resources/js/app.js",
    refresh: true,
  })],
  resolve: {
    alias: {
      $resources: '/resources/js'
    }
  },
  build: {
    manifest: "manifest.json",
    outDir: 'public/build',
    publicDir: 'public',
    sourcemap: true,
  }
});