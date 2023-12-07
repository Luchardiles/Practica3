import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ServiceService {

  private urlApi = 'http://127.0.0.1:8000/api/profile';

  constructor(private http: HttpClient){}

  public getData():Observable<any>{
    return this.http.get<any>(this.urlApi)
  }

  public updateUserData(id: number, userData: any): Observable<any> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http.put(`${this.urlApi}/user/${id}`, userData, { headers });
  }


}
