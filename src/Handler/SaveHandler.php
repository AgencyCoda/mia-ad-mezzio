<?php

namespace Mia\Ad\Handler;

use Mia\Ad\Model\MIAAd;

/**
 * Description of SaveHandler
 * 
 * @OA\Post(
 *     path="/mia-ad/save",
 *     summary="MiaAd Save",
 *     tags={"MiaAd"},
*      @OA\RequestBody(
 *         description="Object",
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/MiaAd")
 *         )
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/MiaAd")
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     },
 * )
 *
 * @author matiascamiletti
 */
class SaveHandler extends \Mia\Auth\Request\MiaAuthRequestHandler
{
    /**
     * 
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(\Psr\Http\Message\ServerRequestInterface $request): \Psr\Http\Message\ResponseInterface 
    {
        // Obtener item a procesar
        $item = $this->getForEdit($request);
        // Guardamos data
        $item->title = $this->getParam($request, 'title', '');
        $item->photo = $this->getParam($request, 'photo', '');
        $item->url = $this->getParam($request, 'url', '');
        $item->photo_alt = $this->getParam($request, 'photo_alt', '');
        $item->photo_mobile = $this->getParam($request, 'photo_mobile', '');
        $item->photo_mobile_alt = $this->getParam($request, 'photo_mobile_alt', '');
        $item->status = intval($this->getParam($request, 'status', ''));
                
        try {
            $item->save();
        } catch (\Exception $exc) {
            return new \Mia\Core\Diactoros\MiaJsonErrorResponse(-2, $exc->getMessage());
        }

        // Devolvemos respuesta
        return new \Mia\Core\Diactoros\MiaJsonResponse($item->toArray());
    }
    
    /**
     * 
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return MIAAd
     */
    protected function getForEdit(\Psr\Http\Message\ServerRequestInterface $request)
    {
        // Obtenemos ID si fue enviado
        $itemId = $this->getParam($request, 'id', '');
        // Buscar si existe el item en la DB
        $item = MIAAd::find($itemId);
        // verificar si existe
        if($item === null){
            return new MIAAd();
        }
        // Devolvemos item para editar
        return $item;
    }
}