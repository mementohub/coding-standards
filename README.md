# Coding Standards used by Memento Hub

The development of this package has been greatly inspired by this [Laravel News article](https://laravel-news.com/sharing-php-cs-fixer-rules-across-projects-and-teams)


## Installation

```bash
# install package
composer require --dev mementohub/coding-standards

# set php-cs-fixer config file if not present
cp -n vendor/mementohub/coding-standards/stubs/.php-cs-fixer.dist.php .php-cs-fixer.dist.php

# set git pre-commit hook if not present
cp -n vendor/mementohub/coding-standards/stubs/pre-commit .git/hooks/pre-commit
chmod +x .git/hooks/pre-commit

# add .php-cs-fixer.cache file to .gitignore if not already present
grep -qxF '/.php-cs-fixer.cache' .gitignore || echo '/.php-cs-fixer.cache' >> .gitignore

# run a global fix on your project and commit the changes
vendor/bin/php-cs-fixer fix
git commit -a -m "Fixed code styling"
```

## VS Code configuration

Install the `junstyle.php-cs-fixer` extension.

Add the following entries to your settings file:

```json
{
    "php-cs-fixer.executablePath": "${workspaceFolder}/vendor/bin/php-cs-fixer",
    "php-cs-fixer.onsave": true,
}
```
