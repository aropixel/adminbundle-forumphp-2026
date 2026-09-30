<?php

defined('CASTOR_USE_CHDIR') || define('CASTOR_USE_CHDIR', true);

use Castor\Attribute\AsTask;

use function Castor\capture;
use function Castor\context;
use function Castor\run;

#[AsTask(description: 'Lance Slidev en développement sur l’IP Tailscale, port 3030.')]
function start(): void
{
    $ip = trim(capture(['tailscale', 'ip', '-4']));

    if ($ip === '') {
        throw new RuntimeException('Aucune adresse IPv4 Tailscale disponible.');
    }

    run(
        ['mise', 'exec', '--', 'npm', 'exec', 'slidev', '--', '--remote', '--bind', $ip, '--port', '3030'],
        context: context()
            ->withWorkingDirectory(__DIR__)
            ->withTty(context()->supportsInteraction())
            ->withTimeout(null),
    );
}
