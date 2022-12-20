---
title: "Developing Composer Packages Locally"
date: 2018-09-08T23:03:05-07:00
---

When building composer packages, the development workflow may not be immediately apparent. Consuming composer packages in your project can be as easy as adding one line to your composer.json file, but what about a package that is currently under development and not yet available via Packagist?

Luckily, Composer gives you the ability to link the local directory of your in-development package to a project for easy testing.

<!--more-->

### Development Package

Start by creating a simple composer.json file for your development package.

```json
{
    "name": "michaeljdennis/dev-package",
    "description": "A local package currently in development.",
    "autoload": {
        "psr-4": {
            "Namespace\\": "src/"
        }
    }
}
```

### Test Application

Inside the test application you will need to add two entries to your composer.json file in order for this to work. First, add the usual require statement.

```json
{
    "require": {
        "michaeljdennis/dev-package": "*"
    }
}
```

Then add a repositories setting that tells composer the absolute or relative path to your development package.

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "../dev-package"
        }
    ]
}
```

After adding these two settings, run composer update inside your test application and the development package will be symlinked if possible, otherwise is will be copied.

Now you can quickly test out your new package. Check out the documentation for full details on <a href="https://getcomposer.org/doc/05-repositories.md#path">Composer's path based repositories</a>.
