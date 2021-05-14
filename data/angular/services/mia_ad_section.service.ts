import { Injectable } from '@angular/core';
import { MiaAdSection } from '../entities/mia_ad_section';
import { MiaBaseCrudHttpService } from '@agencycoda/mia-core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class MiaAdSectionService extends MiaBaseCrudHttpService<MiaAdSection> {

  constructor(
    protected http: HttpClient
  ) {
    super(http);
    this.basePathUrl = environment.baseUrl + 'mia_ad_section';
  }
 
}