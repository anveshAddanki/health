<p align="center">HealthFirst - Jedi team</p>

<p align="center">Hfic CSS renewals application setup</p>

## Systems Requirement

- PHP > 7
- PHP Extensions: PDO, cURL, Mbstring, Tokenizer, Mcrypt, XML, GD
- Composer > 1.4.0
- Node.js > 6.0
- yarn > 0.24

## Installation

<ol><li>Install Composer using detailed installation instructions <a href="https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx">here</a></li>
<li>Install Node.js using detailed installation instructions <a href="https://nodejs.org/en/download/package-manager/">here</a></li>
<li>Clone repository</li></ol>
<pre><code>$ git clone git@10.242.33.76:renewals/web.git</code></pre>
<ol start="4"><li>Change into the working directory</li></ol>
<pre><code>$ cd laravel-boilerplate</code></pre>
<ol start="5"><li>Copy .env.example to .env and modify according to your environment</li></ol>
<pre><code>$ cp .env.example .env</code></pre>
<ol start="6"><li>Install composer dependencies</li></ol>
<pre><code>$ composer install --prefer-dist</code></pre>
<ol start="7"><li>An application key can be generated with the command</li></ol>
<pre><code>$ php artisan key:generate</code></pre>
<ol start="8"><li>Execute following commands to install other dependencies</li></ol>
<pre><code>$ npm install
$ npm run dev</code></pre>
<ol start="9"><li>Run these commands to create the tables within the defined database and populate seed data</li></ol>
<pre><code>$ php artisan migrate --seed

