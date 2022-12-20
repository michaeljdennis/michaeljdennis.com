---
title: Developing Composer Packages Locally
slug: developing-composer-packages-locally
date: 2018-09-08
time: 1536472985
---

@extends('_layouts.post')

@section('content')
<p>
    When building composer packages, the development workflow may not be immediately apparent.
    Consuming composer packages in your project can be as easy as adding one line to your composer.json
    file, but what about a package that is currently under development and not yet available via
    Packagist?
</p>

<p>
    Luckily, Composer gives you the ability to link the local directory of your in-development package to a project
    for easy testing.
</p>

<h3>Development Package</h3>

<p>
    Start by creating a simple composer.json file for your development package.
</p>

<pre>
{
    "name": "michaeljdennis/dev-package",
    "description": "A local package currently in development.",
    "autoload": {
        "psr-4": {
            "Namespace\\": "src/"
        }
    }
}
</pre>

<h3>Test Application</h3>

<p>
    Inside the test application you will need to add two entries to your composer.json file in order for this to work.
    First, add the usual require statement.
</p>

<pre>
{
    "require": {
        "michaeljdennis/dev-package": "*"
    }
}
</pre>

<p>
    Then add a repositories setting that tells composer the absolute or relative path to your development package.
</p>

<pre>
{
    "repositories": [
        {
            "type": "path",
            "url": "../dev-package"
        }
    ]
}
</pre>

<p>
    After adding these two settings, run composer update inside your test application and the development package
    will be symlinked if possible, otherwise is will be copied.
</p>

<p>
    Now you can quickly test out your new package. Check out the documentation for full details on
    <a href="https://getcomposer.org/doc/05-repositories.md#path">Composer's path based repositories</a>.
</p>
@endsection
