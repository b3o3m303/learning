import { Component } from '@angular/core';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  constructor() { }// default value
  title = 'project';
  name = 'testName';
  url = 'http://www.google.com';
  str = 'pic title';
  inputText='';
  // function

  clickBtn($event) {//事件監聽
    if ($event.ctrlKey) {
      console.log("click ctrlKey"); // click altKey
    }
    console.log("event", $event);
  }
  inputTextReset() {
    this.inputText = ""; 
  }
}
