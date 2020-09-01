I=im2double(imread('test.jpg'));
k=graythresh(I);              %得到最優閾值
J=im2bw(I,k);                  %轉換成二值圖，k為分割閾值
subplot(121);imshow(I); 
subplot(122);imshow(J);   