I=im2double(imread('test.jpg'));
k=graythresh(I);              %�o����u�H��
J=im2bw(I,k);                  %�ഫ���G�ȹϡAk�������H��
subplot(121);imshow(I); 
subplot(122);imshow(J);   