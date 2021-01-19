# Example Instructions

## Installation

0. Ensure Composer is installed
0. Move into the `start` directory
0. Run `composer install` in this directory to install dependencies
0. Create a private key `openssl genrsa -out private.key 2048`
0. Change the private key permissions with `chmod 660 private.key`
0. Create a public key `openssl rsa -in private.key -pubout > public.key`
0. `cd` into the public directory
0. Start a PHP server `php -S localhost:4444`

## Testing the password grant example

Send the following cURL request:

```
curl -X "POST" "http://localhost:4444/password.php/access_token" -H "Content-Type: application/x-www-form-urlencoded" -H "Accept: 1.0" 	--data-urlencode "grant_type=password" 	--data-urlencode client_id=myawesomeapp" --data-urlencode "client_secret=abc123" --data-urlencode "username=linkedin"  --data-urlencode "password=learning"  --data-urlencode "scope=basic email"
```