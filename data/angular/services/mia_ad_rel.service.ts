import { Injectable } from '@angular/core';
import { MiaAdRel } from '../entities/mia_ad_rel';
import { MiaBaseCrudHttpService } from '@agencycoda/mia-core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class MiaAdRelService extends MiaBaseCrudHttpService<MiaAdRel> {

  constructor(
    protected http: HttpClient
  ) {
    super(http);
    this.basePathUrl = environment.baseUrl + 'mia_ad_rel';
  }
 
}