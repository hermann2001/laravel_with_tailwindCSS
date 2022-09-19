<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    </a>
</p>

<p align="center">
    <a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center">
    <a target="_blank" href="https://tailwindcss.com/docs/guides/laravel#mix">
        TailWindCSS
    </a>
</p>

<h1 align="center">Install Tailwind CSS with Laravel</h1>
<h4 align="center">Setting up Tailwind CSS in a Laravel project.</h4>

<h4 align="left" style="marin-top:20px">Using Laravel Mix</h4>
<ul>
    <li>
        <p><strong>Install Tailwind CSS</strong></p>
        <p>Install tailwindcss and its peer dependencies via npm, and create your 'tailwind.config.js' file.</p>
        <div style="text-align:center; margin:50px; background-color:#fff; color:#000;">
            <ol>
                <li>npm install -D tailwindcss postcss autoprefixer</li>
                <li>npx tailwindcss init</li>
            </ol>
        <div>
    </li>
    <li>
        <p><strong>Add Tailwind to your Laravel Mix configuration</strong></p>
        <p>In your "webpack.mix.js" file, add "tailwindcss" as a PostCSS plugin.</p>
        <div style="text-align:center; margin:50px; background-color:#fff; color:#000;">
            <p>
                mix.js("resources/js/app.js", "public/js")<br/>
                    .postCss("resources/css/app.css", "public/css", [<br/>
                        require("tailwindcss"),<br/>
                    ]);
            </p>
        <div>
    </li>
    <li>
        <p><strong>Configure your template paths</strong></p>
        <p>Add the paths to all of your template files in your "tailwind.config.js" file.</p>
        <div style="text-align:center; margin:50px; background-color:#fff; color:#000;">
            <p>
                /** @type {import('tailwindcss').Config} */<br/>
                module.exports = {<br/>
                content: [<br/>
                    "./resources/**/*.blade.php",<br/>
                    "./resources/**/*.js",<br/>
                    "./resources/**/*.vue",<br/>
                ],<br/>
                theme: {<br/>
                    extend: {},<br/>
                },<br/>
                plugins: [],<br/>
                }
            </p>
        <div>
    </li>
    <li>
        <p><strong>Add the Tailwind directives to your CSS</strong></p>
        <p>Add the @tailwind directives for each of Tailwind’s layers to your "./resources/css/app.css" file.</p>
        <div style="text-align:center; margin:50px; background-color:#fff; color:#000;">
            <p>
                @tailwind base;
                @tailwind components;
                @tailwind utilities;
            </p>
        <div>
    </li>
    <li>
        <p><strong>Start your build process</strong></p>
        <p>Run your build process with npm run watch in the terminal.</p>
    </li>
    <li>
        <p><strong>Start using Tailwind in your project</strong></p>
        <p>Make sure your compiled CSS is included in the <head> then start using Tailwind’s utility classes to style your content.</p>
        <div style="text-align:center; margin:50px; background-color:#fff; color:#000;">
            <p>
                <code class="flex-none min-w-full p-5">
                    <span class="token block"><span class="token doctype punctuation">&lt;!</span><span class="token doctype doctype-tag">doctype</span><span class="token doctype"> </span><span class="token doctype name">html</span><span class="token doctype punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain"></span><span class="token tag punctuation">&lt;</span><span class="token tag">html</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain"></span><span class="token tag punctuation">&lt;</span><span class="token tag">head</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain">  </span><span class="token tag punctuation">&lt;</span><span class="token tag">meta</span><span class="token tag"> </span><span class="token tag attr-name">charset</span><span class="token tag attr-value punctuation attr-equals">=</span><span class="token tag attr-value punctuation">"</span><span class="token tag attr-value">utf-8</span><span class="token tag attr-value punctuation">"</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain">  </span><span class="token tag punctuation">&lt;</span><span class="token tag">meta</span><span class="token tag"> </span><span class="token tag attr-name">name</span><span class="token tag attr-value punctuation attr-equals">=</span><span class="token tag attr-value punctuation">"</span><span class="token tag attr-value">viewport</span><span class="token tag attr-value punctuation">"</span><span class="token tag"> </span><span class="token tag attr-name">content</span><span class="token tag attr-value punctuation attr-equals">=</span><span class="token tag attr-value punctuation">"</span><span class="token tag attr-value">width=device-width, initial-scale=1.0</span><span class="token tag attr-value punctuation">"</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain">  </span><span class="token tag punctuation">&lt;</span><span class="token tag">link</span><span class="token tag"> </span><span class="token tag attr-name">href</span><span class="token tag attr-value punctuation attr-equals">=</span><span class="token tag attr-value punctuation">"</span><span class="token tag attr-value">{{ asset(</span><span class="token tag attr-value punctuation">'</span><span class="token tag attr-value">css/app.css</span><span class="token tag attr-value punctuation">'</span><span class="token tag attr-value">) }}</span><span class="token tag attr-value punctuation">"</span><span class="token tag"> </span><span class="token tag attr-name">rel</span><span class="token tag attr-value punctuation attr-equals">=</span><span class="token tag attr-value punctuation">"</span><span class="token tag attr-value">stylesheet</span><span class="token tag attr-value punctuation">"</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain"></span><span class="token tag punctuation">&lt;/</span><span class="token tag">head</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain"></span><span class="token tag punctuation">&lt;</span><span class="token tag">body</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block -mx-5 pl-4 pr-5 border-l-4 border-sky-400 bg-sky-300/[0.15]"><span class="token plain">  </span><span class="token tag punctuation">&lt;</span><span class="token tag">h1</span><span class="token tag"> </span><span class="token tag attr-name">class</span><span class="token tag attr-value punctuation attr-equals">=</span><span class="token tag attr-value punctuation">"</span><span class="token tag attr-value">text-3xl font-bold underline</span><span class="token tag attr-value punctuation">"</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token plain block -mx-5 pl-4 pr-5 border-l-4 border-sky-400 bg-sky-300/[0.15]">    Hello world!
                    </span><span class="token block -mx-5 pl-4 pr-5 border-l-4 border-sky-400 bg-sky-300/[0.15]"><span class="token plain">  </span><span class="token tag punctuation">&lt;/</span><span class="token tag">h1</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain"></span><span class="token tag punctuation">&lt;/</span><span class="token tag">body</span><span class="token tag punctuation">&gt;</span><span class="token plain"></span>
                    </span><span class="token block"><span class="token plain"></span><span class="token tag punctuation">&lt;/</span><span class="token tag">html</span><span class="token tag punctuation">&gt;</span>
                    </span>
                </code>
            </p>
        <div>
    </li>
</ul>