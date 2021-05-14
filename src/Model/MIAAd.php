<?php

namespace Mia\Ad\Model;

/**
 * Description of Model
 * @property int $id ID of item
 * @property mixed $title Description for variable
 * @property mixed $photo Description for variable
 * @property mixed $url Description for variable
 * @property mixed $photo_alt Description for variable
 * @property mixed $views Description for variable
 * @property mixed $clicks Description for variable
 * @property mixed $created_at Description for variable
 * @property mixed $updated_at Description for variable
 * @property mixed $deleted Description for variable
 * @property mixed $photo_mobile Description for variable
 * @property mixed $photo_mobile_alt Description for variable
 * @property mixed $status Description for variable

 *
 * @OA\Schema()
 * @OA\Property(
 *  property="id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="title",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="photo",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="url",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="photo_alt",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="views",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="clicks",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="created_at",
 *  type="",
 *  description=""
 * )
 * @OA\Property(
 *  property="updated_at",
 *  type="",
 *  description=""
 * )
 * @OA\Property(
 *  property="deleted",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="photo_mobile",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="photo_mobile_alt",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="status",
 *  type="integer",
 *  description=""
 * )

 *
 * @author matiascamiletti
 */
class MIAAd extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'mia_ad';
    
    //protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;

    

    /**
    * Configurar un filtro a todas las querys
    * @return void
    */
    protected static function boot(): void
    {
        parent::boot();
        
        static::addGlobalScope('exclude', function (\Illuminate\Database\Eloquent\Builder $builder) {
            $builder->where('mia_ad.deleted', 0);
        });
    }
}