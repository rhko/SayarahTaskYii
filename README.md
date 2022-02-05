<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

<h2 dir="auto"><a id="user-content-getting-started" class="anchor" aria-hidden="true" href="#getting-started"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>INSTALLATION</h2>

<p dir="auto">If you do not have <a href="http://getcomposer.org/" rel="nofollow">Composer</a>, you can install it by following the instructions
at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" rel="nofollow">getcomposer.org</a>.</p>
<p dir="auto">You can then install the application using the following command:</p>
<div class="snippet-clipboard-content position-relative overflow-auto" data-snippet-clipboard-copy-content="https://github.com/rhko/SayarahTaskYii
composer self-update
composer global require &quot;fxp/composer-asset-plugin:~1.1.1&quot;
cd yii2-shop
composer install"><pre>
<code>
1- clone the repo
    git clone https://github.com/rhko/SayarahTaskYii
2- Yii2 advance template require fxp/composer-asset-plugin, you need to use version 1 of composer regarding to fxp/composer-asset-plugin not compatable with composer2, or you can do it via yii2-composer if you are familiar with it
    composer global require "fxp/composer-asset-plugin:~1.1.1"
3- cd SayarahTaskYii
4- composer install
</code>
</pre>
</div>

<h2 dir="auto"><a id="user-content-getting-started" class="anchor" aria-hidden="true" href="#getting-started"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>GETTING STARTED</h2>
<ol dir="auto">
<li>Run command <code>php init</code> to initialize the application with a specific environment.</li>
<li>Configure virtual hosts and set document roots of your Web server:
<ul dir="auto">
    <li>for frontend <code>/path/to/SayarahTaskYii/frontend/web/</code></li>
    <li>for backend <code>/path/to/SayarahTaskYii/backend/web/</code></li>
</ul>
</li>
<li>
Optional
<ul dir="auto">
    <li>I provided sample client_secret.json file in the project for test, if you need to provide your own google app you need to go <a href="https://console.developers.google.com" rel="nofollow">google developer console</a> and register your app then make callback url looks like <a href="http://{127.0.0.1}/index.php?r=site%2Fcallback" rel="nofollow">http://{127.0.0.1}/index.php?r=site%2Fcallback</a> then save file as client_secret.json and replace the original file in project root directory</li>
</ul>
</li>
</ol>