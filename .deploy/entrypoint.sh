#!/bin/sh

echo "🎬 entrypoint.sh: [$(whoami)] [PHP $(php -r 'echo phpversion();')]"
composer dump-autoload --no-interaction --no-dev --optimize
echo "🎬 artisan commands"
echo "🎬 start supervisord"
supervisord -c /srv/app/.deploy/config/supervisor.conf
caddy run --config /srv/app/.deploy/config/Caddyfile
