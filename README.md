# Initial Readme
This is a thin PHP package which is a API wrapper around the [NLBCLI](https://github.com/whoeverest/nlbcli) bin, used to get info from the CLI in a REST manner.

## Requirements
- [NLBCLI](https://github.com/whoeverest/nlbcli)
- At least `php >= 7.1.0` (Developed on v.8.0.3)

## Setting up
- Login using the `nlbcli login` command
- `git clone` this repository
- Run `composer install`
- Include the `NLBKlik` namespace
- `cp .env.example .env` and change the login params OR run `nlblogin.sh` to copy login creds from `~/.nlbcli` to the `.env` file


Visit the [API Docs](#) for usage.

## TODO:
- [ ] Enable logging in through the API (which will use the `nlbcli command`)
