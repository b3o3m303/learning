clc;
clear;
mypicture=imread('下載.jpg');
figure(),imshow(mypicture),title('weine');
grayImage=rgb2gray(mypicture);%Ū�J�m��ݭn����Ƕ�
dctgrayImage=dct2(grayImage);
figure(), imshow(log(abs(dctgrayImage)),[]),title('DCT'), colormap(gray(4)), colorbar;
%�f�ഫ
dctgrayImage(abs(dctgrayImage)<0.1)=0;
 I=idct2(dctgrayImage)/255;
 figure(), imshow(I), title('�g�LDCT�b�f�^�h'); 