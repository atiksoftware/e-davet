const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
 

 

mix
    .js('resources/js/admin.js', 'public/js')
    .js('resources/js/editor.js', 'public/js') 
    .js('resources/js/app.js', 'public/js')

    .postCss('resources/css/auth.css', 'public/css', {}, [tailwindcss(  'resources/css/tailwind.auth.config.js' )]) 
    .postCss('resources/css/admin.css', 'public/css', {}, [tailwindcss(  'resources/css/tailwind.admin.config.js' )])
    .postCss('resources/css/editor.css', 'public/css', {}, [tailwindcss(  'resources/css/tailwind.editor.config.js' )])
    .postCss('resources/css/app.css', 'public/css', {}, [tailwindcss(  'resources/css/tailwind.app.config.js' )])

