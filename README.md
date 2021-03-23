# Introduction
Disclaimer: this is an UNOFFICAL tool, it's not developed by НЛБ Банка АД Скопје. It's maintained by Nikola S.

A Laravel package which is a API wrapper around the [NLBCLI](https://github.com/whoeverest/nlbcli) bin, used to get info from the CLI in a REST manner.

## Requirements
- [NLBCLI](https://github.com/whoeverest/nlbcli)
- `php^8.0`

## Setting up
- Install or nav to a laravel application
- `composer require nikolastojkov/nlbklik`
- Run `php artisan nlbklik:init` to setup [NLBCLI](https://github.com/whoeverest/nlbcli)

## Usage
Visit the [API Docs](#) for usage.

## TODO
- [ ] Enable logging in through the package if not logged in (use the `nlbcli login` command to generate credentials)
- [ ] Finish `nlbklik:init` command
- [ ] Route files for the API
- [ ] Restructure code for stable version
