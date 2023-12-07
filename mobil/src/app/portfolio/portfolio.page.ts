import { Component, OnInit } from '@angular/core';
import { ServiceService } from '../services/service.service';


@Component({
  selector: 'app-portfolio',
  templateUrl: './portfolio.page.html',
  styleUrls: ['./portfolio.page.scss'],
})
export class PortfolioPage implements OnInit {
  users:any[]=[];
  frameworks:any[]=[];
  hobbies:any[]=[];
  
  constructor(private Service:ServiceService) { }
  isEditMode = false;

  ngOnInit(){
    this.fillData();
  }
  fillData(){
    this.Service.getData().subscribe((users: any[])=>{
      console.log(users);
      this.users = users;
      this.frameworks = users[0].frameworks;
      this.hobbies = users[0].hobbies;
    })
  }
  handleButtonClick() {
    this.isEditMode = !this.isEditMode;
  }
  
  handleKeydown(event: KeyboardEvent) {
    if (event.key === 'Enter') {
      this.actualizarDatos(); 
      this.isEditMode = false; 
    }
  }  
  actualizarDatos(): void {
    this.Service.updateUserData(this.users[0].id, this.users[0]).subscribe(
      (response) => {
        console.log('Datos del usuario actualizados con éxito', response);
        // Realiza acciones adicionales si es necesario
      },
      (error) => {
        console.error('Error al actualizar datos del usuario', error);
        // Maneja el error de acuerdo a tus necesidades
      }
    );
}

}
