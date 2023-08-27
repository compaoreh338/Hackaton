<?php

namespace App\Schemas;

/**
 * @OA\Schema(
 *    title="Product",
 *    description="Product schema",
 *
 *    @OA\Property(
 *     property="name",
 *     type="string"
 *   ),
 *   @OA\Property(
 *     property="reference_mmc",
 *     type="string",
 *     nullable=true
 *   ),
 *   @OA\Property(
 *     property="reference_supplier",
 *     type="string",
 *     nullable=true
 *   ),
 *   @OA\Property(
 *     property="description",
 *     type="string",
 *     nullable=true
 *   ),
 *   @OA\Property(
 *     property="allergies",
 *     type="string",
 *     nullable=true
 *   ),
 *   @OA\Property(
 *     property="origin",
 *     type="string",
 *     nullable=true
 *   ),
 *   @OA\Property(
 *     property="excluded_customers",
 *     type="array",
 *     nullable=true,
 *
 *     @OA\Items(type="integer")
 *   ),
 *
 *   @OA\Property(
 *     property="active",
 *     type="boolean",
 *     default=true
 *   ),
 *   @OA\Property(
 *     property="published_at",
 *     type="string",
 *     format="date-time"
 *   ),
 *   @OA\Property(
 *     property="image1",
 *     type="string",
 *     maxLength=255,
 *     pattern="\.(jpg|jpeg|png|gif)$",
 *     format="binary"
 *   )
 * )
 */
class ProductRequestSchema
{
}
