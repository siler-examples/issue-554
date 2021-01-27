<?php declare(strict_types=1);

use Siler\Route;
use Siler\Http\{Request, Response};

require_once __DIR__ . '/vendor/autoload.php';

Route\post('/foo/bar', static fn () => Response\json(Request\get()));
