import { Injectable } from '@angular/core';
import { MiaAd } from '../entities/mia_ad';
import { MiaBaseCrudHttpService } from '@agencycoda/mia-core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class MiaAdService extends MiaBaseCrudHttpService<MiaAd> {

  constructor(
    protected http: HttpClient
  ) {
    super(http);
    this.basePathUrl = environment.baseUrl + 'mia_ad';
  }
 
}