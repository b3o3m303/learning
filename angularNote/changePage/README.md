## 利用router切換頁面
![image](https://github.com/nataliejian/learning/blob/master/angularNote/changePage/changePage.gif)
#### 先建立routing ts檔案，可在創建專案時創立
![image](https://github.com/nataliejian/learning/blob/master/angularNote/changePage/pic1.png)
##### ""表示跟目錄，也就是localhost:4200 頁面會使用哪一個component
##### 接著建立頁面以及routes陣列，localhost:4200/SomePageName
##### 並且在html中寫入
![iamge](https://github.com/nataliejian/learning/blob/master/angularNote/changePage/pic0.png)
##### 把首頁換成router outlet tag(表示需要更新的部分)，因此menu不更新，只更新底下的部分
![image](https://github.com/nataliejian/learning/blob/master/angularNote/changePage/pic2.png)
