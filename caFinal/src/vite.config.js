import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/styles.css",
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/collision.js",
                "resources/js/mapFunctions.js",
                "resources/js/staticMaps.js",
                "resources/js/mapExec.js",
                "resources/js/main.js",
                "resources/js/inputs.js",
                "resources/js/animate.js",
            ],
            refresh: true,
        }),
    ],
});
