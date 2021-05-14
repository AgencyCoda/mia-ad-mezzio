<?php

namespace Mia\Ad\Model;

/**
 * Description of Model
 * @property int $id ID of item
 * @property mixed $ad_id Description for variable
 * @property mixed $section_id Description for variable

 *
 * @OA\Schema()
 * @OA\Property(
 *  property="id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="ad_id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="section_id",
 *  type="integer",
 *  description=""
 * )

 *
 * @author matiascamiletti
 */
class MIAAdRel extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'mia_ad_rel';
    
    //protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    

    
}