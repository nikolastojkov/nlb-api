# Introduction
Disclaimer: this is an UNOFFICAL tool, it's not developed, sponsored, or approved by НЛБ Банка АД Скопје. It's maintained by Nikola S.

A Laravel package which is an API wrapper around the [NLBCLI](https://github.com/whoeverest/nlbcli) app.

## Why
I need the package for a local development project so I thought of making it. This is by no means production ready and it cannot handle multiple users as well etc.

## Requirements
- [NLBCLI](https://github.com/whoeverest/nlbcli)
- `php^8.0`

## Setting up
- Install or navigate to an existing Laravel application
- `composer require nikolastojkov/nlbklik`
- Run `php artisan nlbklik:init` to setup [NLBCLI](https://github.com/whoeverest/nlbcli)

## Usage
Visit the [API Docs](#) for usage.

## TODO
- [ ] Enable logging in through the package if not logged in (use the `nlbcli login` command to generate credentials)
- [ ] Finish `nlbklik:init` command
- [ ] Route files for the API
- [ ] Restructure code for stable version
- [ ] Create Docs in GitHub Wiki
