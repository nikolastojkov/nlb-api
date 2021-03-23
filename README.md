# Initial Readme
This is a thin PHP package which is a API wrapper around the [NLBCLI](https://github.com/whoeverest/nlbcli) bin, used to get info from the CLI in a REST manner.

## Requirements
- [NLBCLI](https://github.com/whoeverest/nlbcli)
- `php >= 8.0.3`

## Setting up
- Login using the `nlbcli login` command
- `git clone` this repository
- Run `composer install`
- Include the `NLBKlik` namespace
- `cp .env.example .env` and change the login params OR run `nlblogin.sh` to copy login creds from `~/.nlbcli` to the `.env` file

## Development
Currently the `dev-unstable` branch will be used until there's a more stable version of [NLBCLI](https://github.com/whoeverest/nlbcli)

Visit the [API Docs](#) for usage.

## TODO:
- [ ] Use dotenv for the credentials
- [ ] Make a Laravel package branch (?)
- [ ] Enable logging in through the package if not logged in (use the `nlbcli login` command to generate credentials)
