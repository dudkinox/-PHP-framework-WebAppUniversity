import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController } from '@ionic/angular';


@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  user;password:String
  square:any
  constructor(
    public alertController: AlertController,
    private go: Router)
  {
  }
  
  async presentAlert() {
    const alert = await this.alertController.create({
      message: 'Success',
      buttons: ['OK']
    });

    await alert.present();
  }

  async pinAlertcheck(text) {
    const alert = await this.alertController.create({
      message: text,
      buttons: ['OK']
    });

    await alert.present();
  }




  async wrongAlert() {
    const alert = await this.alertController.create({
      message: '<img src="https://i.pinimg.com/originals/7b/04/78/7b04788e12ff9ce3fec624435b095d98.gif">',
      buttons: ['OK']
    });

    await alert.present();
  }

  async presentAlertPrompt() {
    const alert = await this.alertController.create({
      cssClass: 'my-custom-class',
      header: 'Register',
      inputs: [
        {
          name: 'user',
          type: 'text',
          placeholder: 'Username'
        },
        {
          name: 'password',
          type: 'password',
          placeholder: 'Password'
        },
        // multiline input.
        {
          name: 'name',
          type: 'textarea',
          placeholder: 'FirstName / LastName'
        },
        {
          name: 'name4',
          type: 'date'
        },
        {
          id:'pin1',
          name: 'pin',
          type: 'password',
          placeholder: 'Pin 4 Code',
          cssClass: 'specialClass',
          attributes: {
            maxlength: 4,
          }
        },
        {
          id:'pin2',
          name: 'pin',
          type: 'password',
          placeholder: 'Pin 4 Code',
          cssClass: 'specialClass',
          attributes: {
            maxlength: 4,
          }
        }
      ],
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel',
          cssClass: 'secondary',
          handler: () => {
            console.log('Confirm Cancel');
          }
        }, {
          text: 'Ok',
          handler: () => {        
              var pin1=document.getElementById('pin1').value;
              var pin2=document.getElementById('pin2').value;
              if(pin1==pin2){
                this.pinAlertcheck('ถูกละอีสัส');
              }
              else{
                this.pinAlertcheck('ผิดนะอีสัส');
              }
          }
        }
      ]
    });

    await alert.present();
  }

login(user,password){
  if(this.user=="admin"&& this.password=="1234"){
    this.presentAlert();
    this.go.navigate(['/user']);
  }
  else{
    this.pinAlertcheck('กรอกให้ถูกต้องอีสัส');
  }
}

regis(){
  this.presentAlertPrompt();
}



}

