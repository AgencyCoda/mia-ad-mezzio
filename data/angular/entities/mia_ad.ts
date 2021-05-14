import { MiaModel } from "@agencycoda/mia-core";

export class MiaAd extends MiaModel {
    id: number = 0;
    title: string = '';
    photo: string = '';
    url: string = '';
    photo_alt: string = '';
    views: number = 0;
    clicks: number = 0;
    created_at: string = '';
    updated_at: string = '';
    deleted: number = 0;
    photo_mobile: string = '';
    photo_mobile_alt: string = '';
    status: number = 0;

}