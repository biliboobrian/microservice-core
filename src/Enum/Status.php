<?php
/**
 * @file
 * Contains \biliboobrian\MicroServiceCore\Enum\Status.
 */

namespace biliboobrian\MicroServiceCore\Enum;

/**
 * Enum class for possible response statuses.
 *
 * @package biliboobrian\MicroServiceCore\Enum
 */
final class Status extends BaseEnum
{
    /**
     * OK status.
     *
     * @var string
     */
    const OK = 'ok';

    /**
     * Something somewhere broken.
     *
     * @var string
     */
    const FAIL = 'fail';
}