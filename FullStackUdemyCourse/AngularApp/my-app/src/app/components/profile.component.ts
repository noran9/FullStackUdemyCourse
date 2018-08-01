import { Component } from '@angular/core';

@Component({
  moduleId: module.id,
  selector: 'profile',
  templateUrl: 'profile.component.html',
  styleUrls: ['../app.component.css']
})

export class ProfileComponent {
    title = 'My smth';
    showAddress = true;
    person = {
  	name: 'Noricka',
  	age: 19,
  	adress: {
  		street: 'Partizanska',
  		city: 'Skopje',
  		state: 'Macedonia'
  	},
  	avatar: "https://scontent.fskp3-1.fna.fbcdn.net/v/t1.0-9/35652784_2036934566341014_571163507144261632_n.jpg?_nc_cat=0&oh=52c895e562984dced9ba1076ef3a0ce6&oe=5BCF01CA",
  	friends: [
  		{name: 'Vanja', age: 20},
  		{name: 'Bobi', age: 22},
  		{name: 'Alekkk', age: 60},
  		{name: 'Mateaks', age: 6}
  	]
  }

  constructor(){
  	this.title = 'User Profile';
  }
}
