<?php
declare(strict_types = 1);

namespace LanguageServer;

use Sabre\Event\EmitterInterface;

/**
 * Must emit a "message" event with a Protocol\Message object as parameter
 * when a message comes in
 *
 * Must emit a "close" event when the stream closes
 */
interface ProtocolReader extends EmitterInterface
{

}
