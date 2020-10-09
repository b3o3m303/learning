### Button 鎖定筆記
#### 輸入字串，同步更新label，並且設置清空字串按鈕，當字串為空時，鎖定清除按鈕
![image](https://github.com/nataliejian/learning/blob/master/angularNote/enableButton.gif)

宣告value為username
<br>

html
```
<label>目前字串是：{{username}}</label>

<input type="text" [(ngModel)]="username" />

<button [disabled]="username ===''"
(click)="onReset()">點擊清空字串(空白字串時所定按鈕)</button>
```
ts檔
```
 onReset(){
    this.username="";
  }
```
