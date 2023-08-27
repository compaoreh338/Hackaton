<?php

namespace App\Schemas;

/**
 * @OA\Schema(
 *   title="Login",
 *   description="Login schema",
 *
 *   @OA\Property(
 *     property="email",
 *     type="string",
 *     format="email",
 *     example="user@example.com"
 *   ),
 *   @OA\Property(
 *     property="password",
 *     type="string",
 *     example="password123"
 *   )
 * )
 */
class LoginRequestSchema
{
}
