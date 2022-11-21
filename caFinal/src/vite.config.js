import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/styles.css",
                "resources/css/app.css",
                "resources/js/allin1.js",
            ],
            refresh: true,
        }),
    ],
});
