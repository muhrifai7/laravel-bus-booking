<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<h2 class="code-line" data-line-start=1 data-line-end=2 ><a id="Installation_1"></a>Installation</h2>
<h3 class="code-line" data-line-start=2 data-line-end=3 ><a id="Download_Docker_Desktop_2"></a>Download Docker Desktop</h3>
<p class="has-line-data" data-line-start="3" data-line-end="4">Install Docker Desktop – the fastest way to containerize applications.</p>
<h3 class="code-line" data-line-start=4 data-line-end=5 ><a id="Download_Git__optional_4"></a>Download Git – optional</h3>
<h3 class="code-line" data-line-start=5 data-line-end=6 ><a id="INSTALLATION_DOCKER_5"></a>INSTALLATION DOCKER</h3>

<ul>
<li class="has-line-data" data-line-start="17" data-line-end="28">RUNNING APP AND MIGRATION<pre><code class="has-line-data" data-line-start="19" data-line-end="28" class="language-sh">- <span class="hljs-built_in">cd</span> bus-ticket-app &amp;&amp; ./vendor/bin/sail up
    - ./vendor/bin/sail up
    - This <span class="hljs-built_in">command</span> will start the containers needed <span class="hljs-keyword">for</span> Laravel Sail.
- ./vendor/bin/sail shell
    - This <span class="hljs-built_in">command</span> will start a shell inside the workspace container.
- docker exec -it -e MYSQL_PWD=password &lt;container-name&gt;  mysql -uroot.
CREATE DATABASE mydatabase;
- This will create a new database with the specified name.
SHOW DATABASES;
- The output should include the database you just created.
USE mydatabases;
- this will select the specified database
SHOW TABLES;
- this will show all yoyr table inside mydatabase
- php artisan make:migration create_table_name
    - Replace table_name with the name you want to give your new table.
- open database/migration file and edit file to edit table schema
- php artisan migrate
<pre><code> 
 
</code></pre>

</code></pre>
</li>
</ul>
<h2 class="code-line" data-line-start=28 data-line-end=29 ><a id="Features_28"></a>Features</h2>
<ul>
<li class="has-line-data" data-line-start="30" data-line-end="31">Import a HTML file and watch it magically convert to Markdown</li>
<li class="has-line-data" data-line-start="31" data-line-end="32">Drag and drop images (requires your Dropbox account be linked)</li>
<li class="has-line-data" data-line-start="32" data-line-end="33">Import and save files from GitHub, Dropbox, Google Drive and One Drive</li>
<li class="has-line-data" data-line-start="33" data-line-end="34">Drag and drop markdown and HTML files into Dillinger</li>
<li class="has-line-data" data-line-start="34" data-line-end="36">Export documents as Markdown, HTML and PDF</li>
</ul>
<h2 class="code-line" data-line-start=36 data-line-end=37 ><a id="Tech_36"></a>Tech</h2>
<p class="has-line-data" data-line-start="37" data-line-end="38">Name uses a number of open source projects to work properly:</p>
<ul>
<li class="has-line-data" data-line-start="38" data-line-end="39">[AngularJS] - HTML enhanced for web apps!</li>
<li class="has-line-data" data-line-start="39" data-line-end="40">[Ace Editor] - awesome web-based text editor</li>
<li class="has-line-data" data-line-start="40" data-line-end="41">[markdown-it] - Markdown parser done right. Fast and easy to extend.</li>
<li class="has-line-data" data-line-start="41" data-line-end="42">[Twitter Bootstrap] - great UI boilerplate for modern web apps</li>
<li class="has-line-data" data-line-start="42" data-line-end="43">[node.js] - evented I/O for the backend</li>
<li class="has-line-data" data-line-start="43" data-line-end="44">[Express] - fast node.js network app framework [@tjholowaychuk]</li>
<li class="has-line-data" data-line-start="44" data-line-end="45">[Gulp] - the streaming build system</li>
<li class="has-line-data" data-line-start="45" data-line-end="47"><a href="https://breakdance.github.io/breakdance/">Breakdance</a> - HTML<br>
to Markdown converter</li>
<li class="has-line-data" data-line-start="47" data-line-end="49">[jQuery] - duh</li>
</ul>.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
